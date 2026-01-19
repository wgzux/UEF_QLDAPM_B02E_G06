<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\RoomType;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    // show payment page; accepts query params or session data
    public function index(Request $request)
    {
        $check_in = $request->query('check_in');
        $check_out = $request->query('check_out');
        $nights = $request->query('nights');
        $rooms = $request->query('rooms');
        $total = $request->query('total');
        $room_type = $request->query('room_type');
        $name = $request->query('name');
        $phone = $request->query('phone');
        $email = $request->query('email');
        $adults = $request->query('adults');
        $children = $request->query('children');

        $roomType = $room_type ? RoomType::find($room_type, ['*']) : null;

        return view('pages.Payment', compact('check_in','check_out','nights','rooms','total','roomType','name','phone','email','adults','children'));
    }

    // process payment (basic implementation)
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'room_type_id' => 'required|integer|exists:room_types,id',
            'rooms' => 'required|integer|min:1',
            'nights' => 'required|integer|min:1',
            'total' => 'required|numeric|min:0',
        ]);

        // create order
        $order = Order::create([
            'user_id' => Auth::id(),
            'total_amount' => intval($data['total']),
            'order_status' => 'Confirmed',
            'booking_date' => now(),
        ]);

        $roomType = RoomType::find($data['room_type_id'], ['*']);
        $pricePerUnit = $roomType ? $roomType->base_price : 0;

        $item = OrderItem::create([
            'order_id' => $order->id,
            'room_type_id' => $data['room_type_id'],
            'quantity' => $data['rooms'],
            'price_per_unit' => $pricePerUnit,
            'total_line_price' => intval($data['total']),
        ]);

        $payment = Payment::create([
            'order_id' => $order->id,
            'amount' => intval($data['total']),
            'payment_method' => 'manual',
            'transaction_ref' => null,
            'payment_status' => 'Completed',
        ]);

        return redirect('/bookingconfirm')->with('order_id', $order->id)->with('success','Payment recorded');
    }
}
