<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\RoomType;
use App\Models\Room;
use App\Models\Service;
use App\Http\Requests\StoreBookingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BookingController extends Controller
{
    /**
     * Display booking form (Multi-step)
     */
    public function create()
    {
        // Get available room types
        $roomTypes = RoomType::with('rooms')->get();
        
        // Get available services
        $services = Service::where('is_active', true)->get();
        
        return view('pages.booking.index', compact('roomTypes', 'services'));
    }
    
    /**
     * Store booking with multiple rooms
     */
    /**
     * Step 2: Select Rooms (Cart)
     * Receives dates from Step 1, calculates nights, and shows available rooms
     */
    public function selectRooms(Request $request)
    {
        $request->validate([
            'check_in' => 'required|date|after_or_equal:today',
            'check_out' => 'required|date|after:check_in',
            'adults' => 'required|integer|min:1',
            'children' => 'nullable|integer|min:0',
        ]);

        $checkIn = Carbon::parse($request->check_in);
        $checkOut = Carbon::parse($request->check_out);
        $nights = $checkIn->diffInDays($checkOut);
        $adults = $request->adults;
        $children = $request->children ?? 0;
        $roomQty = $request->rooms ?? 1;

        // Fetch all rooms (In a real app, check availability here)
        $rooms = RoomType::all();

        return view('pages.Addcart', compact('checkIn', 'checkOut', 'nights', 'adults', 'children', 'roomQty', 'rooms'));
    }

    /**
     * Step 3: Confirm Details
     * Receives selected rooms, calculates total, shows final review
     */
    public function confirmDetails(Request $request)
    {
        // Validation would go here
        
        $checkIn = Carbon::parse($request->check_in);
        $checkOut = Carbon::parse($request->check_out);
        $nights = $request->nights; // Passed from hidden input
        
        $selectedRooms = [];
        $grandTotal = 0;
        
        if ($request->rooms) {
            foreach ($request->rooms as $roomId => $quantity) {
                if ($quantity > 0) {
                    $room = RoomType::find($roomId);
                    if ($room) {
                        $subtotal = $room->base_price * $nights * $quantity;
                        $grandTotal += $subtotal;
                        $selectedRooms[] = [
                            'room' => $room,
                            'quantity' => $quantity,
                            'subtotal' => $subtotal
                        ];
                    }
                }
            }
        }

        // Return to cart if no room selected
        if (empty($selectedRooms)) {
            return back()->with('error', 'Vui lòng chọn ít nhất 1 phòng.');
        }

        $totalRooms = 0;
        foreach ($selectedRooms as $item) {
            $totalRooms += $item['quantity'];
        }

        return view('pages.BookingDetails', [
            'checkIn' => $checkIn,
            'checkOut' => $checkOut,
            'nights' => $nights,
            'adults' => $request->adults,
            'children' => $request->children,
            'selectedRooms' => $selectedRooms,
            'grandTotal' => $grandTotal,
            'totalRooms' => $totalRooms
        ]);
    }

    /**
     * Final Step: Store Booking
     */
    /**
     * Final Step: Store Booking
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        
        try {
            // Re-calculate to prevent tampering
            $checkIn = Carbon::parse($request->check_in);
            $checkOut = Carbon::parse($request->check_out);
            $nights = $checkIn->diffInDays($checkOut);
            
            // Validation
            if ($nights <= 0) throw new \Exception("Ngày đặt không hợp lệ");

            $totalPrice = 0;
            $bookingRoomTypes = [];

            // Interpret the 'rooms' array from BookingDetails form
            // rooms[id] = quantity
            if ($request->rooms) {
                foreach ($request->rooms as $roomId => $quantity) {
                    if ($quantity > 0) {
                        $roomType = RoomType::find($roomId);
                        if ($roomType) {
                            $subtotal = $roomType->base_price * $nights * $quantity;
                            $totalPrice += $subtotal;
                            
                            $bookingRoomTypes[] = [
                                'room_type_id' => $roomType->id,
                                'quantity' => $quantity,
                                'price_per_night' => $roomType->base_price,
                                'subtotal' => $subtotal,
                            ];
                        }
                    }
                }
            }

            if ($totalPrice == 0) throw new \Exception("Vui lòng chọn phòng");
            
            // Generate Booking Code
            $bookingCode = '#OL' . strtoupper(substr(uniqid(), -8));

            // Create booking
            // Note: room_id is nullable now, so we skip it or set null
            $booking = Booking::create([
                'customer_name' => $request->name,
                'customer_email' => $request->email,
                'customer_phone' => $request->phone,
                'check_in' => $checkIn,
                'check_out' => $checkOut,
                'adults' => $request->adults,
                'children' => $request->children ?? 0,
                'special_requests' => $request->special_requests,
                'room_price' => $totalPrice,
                'service_price' => 0,
                'total_price' => $totalPrice, // Add Taxes if needed
                'status' => 'pending',
                'payment_status' => 'unpaid',
                'code' => $bookingCode,
                'room_id' => null
            ]);
            
            // Save room details
            foreach ($bookingRoomTypes as $detail) {
                DB::table('booking_room_types')->insert(array_merge($detail, [
                    'booking_id' => $booking->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]));
            }
            
            // Save specific guest details if needed (from request->guests)
            // Implementation skipped as per user scope focusing on Payment Page for now
            
            DB::commit();
            
            // Redirect to Payment Page
            return redirect()->route('booking.payment', $booking->id);
                
        } catch (\Exception $e) {
            DB::rollBack();
            return back()
                ->withInput()
                ->with('error', 'Có lỗi xảy ra: ' . $e->getMessage());
        }
    }

    public function payment($id)
    {
        $booking = Booking::with('roomTypes')->findOrFail($id);
        
        // Count total rooms
        $totalRooms = 0;
        foreach ($booking->roomTypes as $rt) {
             // Access pivot quantity
             $totalRooms += $rt->pivot->quantity;
        }
        
        // Generate QR Code URL
        $bankId = 'MB';
        $accountNo = '0944085920';
        $accountName = 'PHAM QUANG VU';
        $amount = intval($booking->total_price);
        $content = $booking->code . ' ' . $booking->customer_phone;
        
        $qrUrl = "https://img.vietqr.io/image/{$bankId}-{$accountNo}-compact.png?amount={$amount}&addInfo={$content}&accountName=" . urlencode($accountName);

        return view('pages.payment', compact('booking', 'qrUrl', 'totalRooms'));
    }

    public function processPayment($id)
    {
        $booking = Booking::findOrFail($id);
        // Update status to indicate payment confirmation is requested
        $booking->update([
            'payment_status' => 'paid', // Or 'verification_pending'
            'status' => 'confirmed'
        ]);
        
        return redirect()->route('booking.confirm', $booking->id);
    }
    
    public function confirm($id)
    {
        $booking = Booking::with('roomTypes')->findOrFail($id);
        $totalRooms = 0;
        foreach ($booking->roomTypes as $rt) {
             $totalRooms += $rt->pivot->quantity;
        }
        
        return view('pages.bookingconfirm', compact('booking', 'totalRooms'));
    }
}
