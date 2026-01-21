<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\RoomType;
use App\Models\Room;
use App\Models\Service;
use App\Models\Setting;
use App\Models\BookingGuest;
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
        $adults = intval($request->adults);
        $children = intval($request->children ?? 0);
        $roomQty = $request->rooms ?? 1;

        // Fetch all rooms and calculate availability for this date range
        $allRooms = RoomType::all();
        $rooms = $allRooms->map(function ($room) use ($checkIn, $checkOut) {
            // Get overlapping bookings
            $bookedQty = DB::table('booking_room_types')
                ->join('bookings', 'bookings.id', '=', 'booking_room_types.booking_id')
                ->where('booking_room_types.room_type_id', $room->id)
                ->whereIn('bookings.status', ['confirmed', 'paid', 'pending'])
                ->where(function ($query) use ($checkIn, $checkOut) {
                    $query->where('bookings.check_in', '<', $checkOut)
                          ->where('bookings.check_out', '>', $checkIn);
                })
                ->sum('booking_room_types.quantity');

            $room->available_qty = max(0, $room->number_of_rooms - $bookedQty);
            return $room;
        })->filter(function ($room) {
            return $room->available_qty > 0;
        });

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

        // Calculate Weekend Surcharge (ONLY for weekend nights)
        $weekendNights = $this->countWeekendNights($checkIn, $checkOut);
        $hasWeekend = $weekendNights > 0;
        $surchargePercent = 0;
        $surcharge = 0;
        
        if ($hasWeekend) {
            $surchargePercent = floatval(Setting::get('weekend_surcharge_percent', 10));
            // Calculate price per night
            $pricePerNight = $grandTotal / $nights;
            // Apply surcharge ONLY to weekend nights
            $surcharge = ($pricePerNight * $weekendNights) * ($surchargePercent / 100);
        }
        
        $finalTotal = $grandTotal + $surcharge;

        return view('pages.BookingDetails', [
            'checkIn' => $checkIn,
            'checkOut' => $checkOut,
            'nights' => $nights,
            'adults' => $request->adults,
            'children' => $request->children,
            'selectedRooms' => $selectedRooms,
            'grandTotal' => $grandTotal,
            'totalRooms' => $totalRooms,
            'hasWeekend' => $hasWeekend,
            'weekendNights' => $weekendNights,
            'surchargePercent' => $surchargePercent,
            'surcharge' => $surcharge,
            'finalTotal' => $finalTotal,
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
        try {
            return DB::transaction(function () use ($request) {
                // Re-calculate dates
                $checkIn = Carbon::parse($request->check_in);
                $checkOut = Carbon::parse($request->check_out);
                $nights = $checkIn->diffInDays($checkOut);
                
                if ($nights <= 0) throw new \Exception("Ngày đặt không hợp lệ");
    
                $totalPrice = 0;
                $bookingRoomTypes = [];
                $requestedRooms = $request->rooms ?? [];
    
                // 1. Availability Double-Check & Price Calculation
                foreach ($requestedRooms as $roomId => $quantity) {
                     $quantity = intval($quantity);
                     if ($quantity > 0) {
                         $roomType = RoomType::find($roomId);
                         if (!$roomType) throw new \Exception("Loại phòng không tồn tại");
    
                         // Check Availability
                         $bookedQty = DB::table('booking_room_types')
                            ->join('bookings', 'bookings.id', '=', 'booking_room_types.booking_id')
                            ->where('booking_room_types.room_type_id', $roomId)
                            ->whereIn('bookings.status', ['confirmed', 'paid', 'pending'])
                            ->where(function ($query) use ($checkIn, $checkOut) {
                                $query->where('bookings.check_in', '<', $checkOut)
                                      ->where('bookings.check_out', '>', $checkIn);
                            })
                            ->sum('booking_room_types.quantity');
    
                         $available = $roomType->number_of_rooms - $bookedQty;
                         if ($quantity > $available) {
                             throw new \Exception("Phòng " . $roomType->name . " đã hết hoặc không đủ số lượng cho ngày " . $checkIn->format('d/m'));
                         }
    
                         // Calculate Price
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
    
                if ($totalPrice == 0 || empty($bookingRoomTypes)) throw new \Exception("Vui lòng chọn phòng");
                
                // Calculate Weekend Surcharge (ONLY for weekend nights)
                $weekendNights = $this->countWeekendNights($checkIn, $checkOut);
                $hasWeekend = $weekendNights > 0;
                $surcharge = 0;
                
                if ($hasWeekend) {
                    $surchargePercent = floatval(Setting::get('weekend_surcharge_percent', 10));
                    // Calculate price per night
                    $pricePerNight = $totalPrice / $nights;
                    // Apply surcharge ONLY to weekend nights
                    $surcharge = ($pricePerNight * $weekendNights) * ($surchargePercent / 100);
                }
                
                $finalTotal = $totalPrice + $surcharge;
                
                // 2. Create Booking
                $bookingCode = '#OL' . strtoupper(substr(uniqid(), -8));
                
                $booking = Booking::create([
                    'user_id' => auth()->check() ? auth()->id() : null, // Link to authenticated user
                    'customer_name' => $request->name,
                    'customer_email' => $request->email,
                    'customer_phone' => $request->phone,
                    'check_in' => $checkIn,
                    'check_out' => $checkOut,
                    'adults' => $request->adults,
                    'children' => $request->children ?? 0,
                    'special_requests' => $request->special_requests,
                    'room_price' => $totalPrice,
                    'service_price' => $surcharge, // Store weekend surcharge here
                    'total_price' => $finalTotal, // Include surcharge
                    'status' => 'pending',
                    'payment_status' => 'unpaid',
                    'code' => $bookingCode,
                    'room_id' => null
                ]);
                
                // 3. Save Room Types (Pivot)
                foreach ($bookingRoomTypes as $detail) {
                    DB::table('booking_room_types')->insert(array_merge($detail, [
                        'booking_id' => $booking->id,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]));
                }
                
                // 4. Save Guests (Compliance Data)
                // Primary Contact
                $booking->guests()->create([
                    'booking_id' => $booking->id,
                    'full_name' => $request->name,
                    'passport_id' => $request->id_passport ?? null,
                    'nationality' => $request->nationality ?? null,
                    'dob' => $request->dob ?? null,
                    'gender' => $request->gender ?? null,
                    'is_primary_contact' => true,
                ]);
    
                // Room Guests
                if ($request->guests) {
                    foreach ($request->guests as $roomId => $roomGuests) {
                        foreach ($roomGuests as $guestData) {
                            if (!empty($guestData['name'])) {
                                $booking->guests()->create([
                                    'booking_id' => $booking->id,
                                    'room_type_id' => $roomId,
                                    'full_name' => $guestData['name'],
                                    'is_primary_contact' => false,
                                ]);
                            }
                        }
                    }
                }
                
                return redirect()->route('booking.payment', $booking->id);
            });
                
        } catch (\Exception $e) {
            return back()
                ->withInput()
                ->with('error', 'Lỗi đặt phòng: ' . $e->getMessage());
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
    
    /**
     * Count the number of weekend nights (Saturday/Sunday) in a date range
     */
    private function countWeekendNights(Carbon $checkIn, Carbon $checkOut): int
    {
        $count = 0;
        $current = $checkIn->copy();
        
        while ($current->lt($checkOut)) {
            // Check if current night is Friday (5) or Saturday (6)
            // Friday night = Saturday, Saturday night = Sunday
            if ($current->dayOfWeek === Carbon::FRIDAY || $current->dayOfWeek === Carbon::SATURDAY) {
                $count++;
            }
            $current->addDay();
        }
        
        return $count;
    }
}
