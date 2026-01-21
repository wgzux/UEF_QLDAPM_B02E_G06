<?php

namespace App\Http\Controllers;

use App\Models\RoomType;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display rooms overview page (Trang Tổng)
     */
    public function index()
    {
        // Get all room types for display
        $rooms = RoomType::with('rooms')->get();
        
        return view('pages.rooms.index', compact('rooms'));
    }
    
    /**
     * Display Wooden House zone page
     */
    public function wooden()
    {
        $woodenRooms = RoomType::where('name', 'LIKE', '%wooden%')
            ->orWhere('name', 'LIKE', '%forest%')
            ->with('rooms')
            ->get();
            
        return view('pages.KhuWoodenHouseDesktop', compact('woodenRooms'));
    }
    
    /**
     * Display Rose House zone page
     */
    public function rose()
    {
        $roseRooms = RoomType::where('name', 'LIKE', '%rose%')
            ->with('rooms')
            ->get();
            
        return view('pages.KhuRoseHouseDesktop', compact('roseRooms'));
    }
    
    /**
     * Display Villa zone page
     */
    public function villa()
    {
        $villaRooms = RoomType::where('name', 'LIKE', '%villa%')
            ->with('rooms')
            ->get();
            
        return view('pages.KhuVillaDesktop', compact('villaRooms'));
    }
    
    /**
     * Display individual room type detail
     */
    public function show($id)
    {
        $roomType = RoomType::with('rooms')->findOrFail($id);
        
        // Get related room types from same zone (3 random)
        $relatedRooms = RoomType::where('id', '!=', $id)
            ->inRandomOrder()
            ->take(3)
            ->get();
        
        // Use standard room template for Wooden & Rose rooms
        return view('pages.room-detail-standard', compact('roomType', 'relatedRooms'));
    }
}
