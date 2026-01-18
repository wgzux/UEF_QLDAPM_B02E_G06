<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomBooking;
use App\Models\Room;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    /**
     * Store a new booking (simple server-side handler).
     * Expects: room_id, check_in_date, check_out_date, guest_count, name, email, phone
     */
    public function store(Request $request)
    {
        $data = $request->only(['room_id','check_in_date','check_out_date','guest_count','name','email','phone']);

        $validator = Validator::make($data, [
            'room_id' => 'required|integer|exists:rooms,id',
            'check_in_date' => 'required|date',
            'check_out_date' => 'required|date|after:check_in_date',
            'guest_count' => 'nullable|integer|min:1',
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:50',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $roomId = $data['room_id'];
        $start = $data['check_in_date'];
        $end = $data['check_out_date'];

        // Check availability using the model helper
        if (!RoomBooking::isRoomAvailable($roomId, $start, $end)) {
            return redirect()->back()->withErrors(['room_unavailable' => 'The selected room is not available for the chosen dates.'])->withInput();
        }

        // Create booking record
        $booking = RoomBooking::create([
            'order_item_id' => null,
            'room_id' => $roomId,
            'check_in_date' => $start,
            'check_out_date' => $end,
        ]);

        // For now redirect to confirm page with booking id in session
        return redirect('/confirm')->with('booking_id', $booking->id)->with('success', 'Booking created successfully');
    }
}
