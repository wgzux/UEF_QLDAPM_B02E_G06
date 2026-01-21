<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminRoomController extends Controller
{
    /**
     * Display list of all rooms
     */
    public function index()
    {
        $rooms = RoomType::orderBy('name')->get();
        return view('admin.rooms.index', compact('rooms'));
    }

    /**
     * Show edit form for a room
     */
    public function edit($id)
    {
        $room = RoomType::findOrFail($id);
        return view('admin.rooms.edit', compact('room'));
    }

    /**
     * Update room information
     */
    public function update(Request $request, $id)
    {
        $room = RoomType::findOrFail($id);

        // Validation
        $validated = $request->validate([
            'base_price' => 'required|numeric|min:0',
            'size' => 'nullable|integer|min:0',
            'bed_info' => 'nullable|string|max:255',
            'max_capacity' => 'nullable|integer|min:1',
            'capacity_adults' => 'nullable|integer|min:1',
            'max_children' => 'nullable|integer|min:0',
            'number_of_rooms' => 'nullable|integer|min:1',
            'view_direction' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'amenities' => 'nullable|array',
            'amenities.*' => 'string',
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'is_active' => 'nullable|boolean',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($room->image && Storage::disk('public')->exists($room->image)) {
                Storage::disk('public')->delete($room->image);
            }

            // Store new image
            $imagePath = $request->file('image')->store('rooms', 'public');
            $validated['image'] = $imagePath;
        }

        // Update is_active status
        $validated['is_active'] = $request->has('is_active');

        // Update room
        $room->update($validated);

        return redirect()->route('admin.rooms.index')
            ->with('success', 'Cập nhật phòng "' . $room->name . '" thành công!');
    }

    /**
     * Toggle room active status
     */
    public function toggleStatus($id)
    {
        $room = RoomType::findOrFail($id);
        $room->update(['is_active' => !$room->is_active]);

        return back()->with('success', 'Đã cập nhật trạng thái phòng "' . $room->name . '"');
    }
}
