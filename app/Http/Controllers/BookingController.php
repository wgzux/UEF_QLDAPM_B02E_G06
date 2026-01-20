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

        // Fetch all rooms (In a real app, check availability here)
        $rooms = RoomType::all();

        return view('pages.Addcart', compact('checkIn', 'checkOut', 'nights', 'adults', 'children', 'rooms'));
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

        return view('pages.BookingDetails', [
            'checkIn' => $checkIn,
            'checkOut' => $checkOut,
            'nights' => $nights,
            'adults' => $request->adults,
            'children' => $request->children,
            'selectedRooms' => $selectedRooms,
            'grandTotal' => $grandTotal
        ]);
    }

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
            if ($nights <= 0) throw new \Exception("Invalid dates");

            $totalPrice = 0;
            $bookingRoomTypes = [];

            // Interpret the 'rooms' array from BookingDetails form
            // Assuming form sends rooms[id] = quantity
            if ($request->rooms) {
                foreach ($request->rooms as $roomId => $quantity) {
                    if ($quantity > 0) {
                        $roomType = RoomType::find($roomId);
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

            if ($totalPrice == 0) throw new \Exception("No rooms selected");
            
            // Create booking
            $booking = Booking::create([
                'customer_name' => $request->name,
                'customer_email' => $request->email,
                'customer_phone' => $request->phone,
                // 'customer_address' => $request->address, // Add if field exists in form
                'check_in_date' => $checkIn,
                'check_out_date' => $checkOut,
                'number_of_adults' => $request->adults,
                'number_of_children' => $request->children ?? 0,
                'total_price' => $totalPrice,
                'status' => 'pending',
                'booking_code' => 'BK' . strtoupper(uniqid()),
            ]);
            
            // Save room details
            foreach ($bookingRoomTypes as $detail) {
                DB::table('booking_room_types')->insert(array_merge($detail, [
                    'booking_id' => $booking->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]));
            }
            
            DB::commit();
            
            // Redirect to success/confirm page
            return redirect()
                ->route('booking.confirm', $booking->id)
                ->with('success', 'Đặt phòng thành công!');
                
        } catch (\Exception $e) {
            DB::rollBack();
            return back()
                ->withInput()
                ->with('error', 'Có lỗi xảy ra: ' . $e->getMessage());
        }
    }
    
    /**
     * Show success page
     */
    public function confirm($id)
    {
        $booking = Booking::findOrFail($id);
        return view('pages.bookingconfirm', compact('booking'));
    }

    public function checkout($id)
    {
        // Legacy or unused?
        $booking = Booking::findOrFail($id);
        return view('pages.CheckOut', compact('booking'));
    }

    public function payment(Request $request, $id)
    {
         // Keep existing payment logic or placeholder
         return redirect()->route('home'); 
    }
}
