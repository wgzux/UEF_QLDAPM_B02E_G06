<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\BookingGuest;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display list of all bookings
     */
    public function index(Request $request)
    {
        $query = Booking::with('roomTypes');

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Search by booking code or phone
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('code', 'like', "%{$search}%")
                  ->orWhere('customer_phone', 'like', "%{$search}%")
                  ->orWhere('customer_name', 'like', "%{$search}%");
            });
        }

        $bookings = $query->orderBy('created_at', 'desc')->paginate(20);

        return view('admin.bookings.index', compact('bookings'));
    }

    /**
     * Show booking details with guest list
     */
    public function show($id)
    {
        $booking = Booking::with(['roomTypes', 'guests'])->findOrFail($id);
        
        // Calculate total rooms
        $totalRooms = 0;
        foreach ($booking->roomTypes as $rt) {
            $totalRooms += $rt->pivot->quantity;
        }

        // Get primary contact from guests
        $primaryGuest = $booking->guests()->where('is_primary_contact', true)->first();
        
        // Get room guests
        $roomGuests = $booking->guests()->where('is_primary_contact', false)->get();

        // Generate QR Code URL for payment
        $qrUrl = null;
        if ($booking->payment_status !== 'paid') {
            $bankId = 'MB';
            $accountNo = '0944085920';
            $accountName = 'PHAM QUANG VU';
            $amount = intval($booking->total_price);
            $content = $booking->code . ' ' . $booking->customer_phone;
            
            $qrUrl = "https://img.vietqr.io/image/{$bankId}-{$accountNo}-compact.png?amount={$amount}&addInfo={$content}&accountName=" . urlencode($accountName);
        }

        return view('admin.bookings.show', compact('booking', 'totalRooms', 'primaryGuest', 'roomGuests', 'qrUrl'));
    }

    /**
     * Update booking status
     */
    public function updateStatus(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);

        $request->validate([
            'action' => 'required|in:confirm_deposit,check_in,check_out,cancel'
        ]);

        switch ($request->action) {
            case 'confirm_deposit':
                $booking->update([
                    'payment_status' => 'paid',
                    'status' => 'confirmed'
                ]);
                $message = 'Đã xác nhận thanh toán cọc';
                break;

            case 'check_in':
                $booking->update([
                    'status' => 'checked_in'
                ]);
                $message = 'Khách đã check-in';
                break;

            case 'check_out':
                $booking->update([
                    'status' => 'checked_out'
                ]);
                $message = 'Khách đã check-out';
                break;

            case 'cancel':
                $booking->update([
                    'status' => 'cancelled'
                ]);
                $message = 'Đã hủy đơn hàng';
                break;
        }

        return back()->with('success', $message);
    }
}
