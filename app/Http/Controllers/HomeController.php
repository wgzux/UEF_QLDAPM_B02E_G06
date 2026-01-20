<?php

namespace App\Http\Controllers;

use App\Models\RoomType;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Get featured room types (first 4)
        $roomTypes = RoomType::with('rooms')
            ->orderBy('name')
            ->take(4)
            ->get();
        
        // Get featured services (first 4)
        $services = Service::where('is_active', true)
            ->orderBy('name')
            ->take(4)
            ->get();
        
        return view('pages.home', compact('roomTypes', 'services'));
    }
}
