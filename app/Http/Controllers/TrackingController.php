<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    /**
     * Show booking lookup form
     */
    public function index()
    {
        return view('pages.tracking.index');
    }

    /**
     * Search for booking
     */
    public function search(Request $request)
    {
        $request->validate([
            'booking_code' => 'required|string',
            'contact_info' => 'required|string',
        ]);

        // Search by booking code and phone or email
        $booking = Booking::where('code', $request->booking_code)
            ->where(function($query) use ($request) {
                $query->where('customer_phone', $request->contact_info)
                      ->orWhere('customer_email', $request->contact_info);
            })
            ->with(['roomTypes', 'guests'])
            ->first();

        if (!$booking) {
            return back()
                ->withInput()
                ->withErrors(['booking_code' => 'Không tìm thấy đơn hàng với thông tin này. Vui lòng kiểm tra lại mã đặt phòng và số điện thoại/email.']);
        }

        // Calculate total rooms
        $totalRooms = 0;
        foreach ($booking->roomTypes as $rt) {
            $totalRooms += $rt->pivot->quantity;
        }

        // Get primary guest (but hide sensitive info)
        $primaryGuest = $booking->guests()->where('is_primary_contact', true)->first();
        
        // Get room guests count (don't show detailed passport info for security)
        $guestCount = $booking->guests()->where('is_primary_contact', false)->count();

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

        return view('pages.tracking.show', compact('booking', 'totalRooms', 'primaryGuest', 'guestCount', 'qrUrl'));
    }
}
