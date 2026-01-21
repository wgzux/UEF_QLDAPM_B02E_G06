<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display admin dashboard
     */
    public function index()
    {
        $today = Carbon::today();
        $thisMonth = Carbon::now()->startOfMonth();

        // Today's new bookings
        $todaysBookings = Booking::whereDate('created_at', $today)->count();

        // This month's revenue (confirmed bookings only)
        $monthlyRevenue = Booking::where('created_at', '>=', $thisMonth)
            ->whereIn('status', ['confirmed', 'checked_in', 'checked_out'])
            ->sum('total_price');

        // Current guests (checked in)
        $currentGuests = Booking::where('check_in', '<=', $today)
            ->where('check_out', '>=', $today)
            ->whereIn('status', ['confirmed', 'checked_in'])
            ->count();

        // Recent bookings
        $recentBookings = Booking::with('roomTypes')
            ->orderBy('created_at', 'desc')
            ->limit(10)
            ->get();

        return view('admin.dashboard', compact(
            'todaysBookings',
            'monthlyRevenue',
            'currentGuests',
            'recentBookings'
        ));
    }
}
