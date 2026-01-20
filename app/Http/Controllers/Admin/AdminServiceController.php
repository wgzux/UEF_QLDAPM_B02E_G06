<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminServiceController extends Controller
{
    /**
     * Display list of all services
     */
    public function index()
    {
        $services = Service::orderBy('category')->orderBy('name')->get();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show edit form for a service
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update service information
     */
    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        // Validation
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'price' => 'nullable|numeric|min:0',
            'price_note' => 'nullable|string|max:255',
            'unit' => 'nullable|string|max:50',
            'description' => 'nullable|string',
            'content' => 'nullable|string',
            'features' => 'nullable|array',
            'features.*' => 'string',
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'is_active' => 'nullable|boolean',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($service->image && Storage::disk('public')->exists($service->image)) {
                Storage::disk('public')->delete($service->image);
            }

            // Store new image
            $imagePath = $request->file('image')->store('services', 'public');
            $validated['image'] = $imagePath;
        }

        // Update is_active status
        $validated['is_active'] = $request->has('is_active');

        // Update service
        $service->update($validated);

        return redirect()->route('admin.services.index')
            ->with('success', 'Cập nhật dịch vụ "' . $service->name . '" thành công!');
    }

    /**
     * Toggle service active status
     */
    public function toggleStatus($id)
    {
        $service = Service::findOrFail($id);
        $service->update(['is_active' => !$service->is_active]);

        return back()->with('success', 'Đã cập nhật trạng thái dịch vụ "' . $service->name . '"');
    }
}
