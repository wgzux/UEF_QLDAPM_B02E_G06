<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\RoomType;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::with('roomType')->orderBy('room_number')->get();
        return view('admin.rooms.index', compact('rooms'));
    }

    public function create()
    {
        $types = RoomType::orderBy('type_name')->get();
        return view('admin.rooms.create', compact('types'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'room_type_id' => 'required|exists:room_types,id',
            'room_number' => 'required|string|max:50',
            'status' => 'required|in:Active,Maintenance',
        ]);

        Room::create($data);
        return redirect('/admin/rooms')->with('success', 'Room created');
    }

    public function edit($id)
    {
        $room = Room::findOrFail($id);
        $types = RoomType::orderBy('type_name')->get();
        return view('admin.rooms.edit', compact('room','types'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'room_type_id' => 'required|exists:room_types,id',
            'room_number' => 'required|string|max:50',
            'status' => 'required|in:Active,Maintenance',
        ]);

        $room = Room::findOrFail($id);
        $room->update($data);
        return redirect('/admin/rooms')->with('success', 'Room updated');
    }

    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();
        return redirect('/admin/rooms')->with('success', 'Room deleted');
    }
}
