<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{


    /**
     * Display list of user's bookings
     */
    public function myBookings()
    {
        $user = Auth::user();

        // Get all bookings for this user (match by email or phone)
        $bookings = Booking::where(function($query) use ($user) {
            $query->where('customer_email', $user->email);
            
            // If user has phone in profile, also match by phone
            if ($user->phone) {
                $query->orWhere('customer_phone', $user->phone);
            }
        })
        ->with('roomTypes')
        ->orderBy('created_at', 'desc')
        ->paginate(10);

        return view('pages.customer.my-bookings', compact('bookings'));
    }

    /**
     * Show booking detail for authenticated user
     */
    public function showBooking($id)
    {
        $user = Auth::user();

        // Find booking and verify it belongs to this user
        $booking = Booking::where('id', $id)
            ->where(function($query) use ($user) {
                $query->where('customer_email', $user->email);
                
                if ($user->phone) {
                    $query->orWhere('customer_phone', $user->phone);
                }
            })
            ->with(['roomTypes', 'guests'])
            ->firstOrFail();

        // Calculate total rooms
        $totalRooms = 0;
        foreach ($booking->roomTypes as $rt) {
            $totalRooms += $rt->pivot->quantity;
        }

        // Get primary guest
        $primaryGuest = $booking->guests()->where('is_primary_contact', true)->first();
        
        // Get room guests count
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
