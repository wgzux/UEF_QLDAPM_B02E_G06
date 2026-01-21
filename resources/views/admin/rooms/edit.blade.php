@extends('layouts.admin')

@section('title', 'Chỉnh sửa Phòng')
@section('page-title', 'Chỉnh sửa Phòng: ' . $room->name)

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.rooms.index') }}" class="text-blue-600 hover:text-blue-900 flex items-center">
        <span class="material-icons-outlined mr-1">arrow_back</span>
        Quay lại danh sách
    </a>
</div>

<form method="POST" action="{{ route('admin.rooms.update', $room->id) }}" enctype="multipart/form-data" class="space-y-6">
    @csrf
    @method('PUT')

    <!-- Basic Info -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Thông tin cơ bản</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Tên phòng (Read-only)</label>
                <input type="text" 
                       value="{{ $room->name }}" 
                       disabled
                       class="w-full border-gray-300 rounded-md bg-gray-50 text-gray-600">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Slug (Read-only)</label>
                <input type="text" 
                       value="{{ $room->slug }}" 
                       disabled
                       class="w-full border-gray-300 rounded-md bg-gray-50 text-gray-600">
            </div>
        </div>
    </div>

    <!-- Pricing -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Giá & Số lượng</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Giá cơ bản (₫) <span class="text-red-500">*</span>
                </label>
                <input type="number" 
                       name="base_price" 
                       value="{{ old('base_price', $room->base_price) }}" 
                       required
                       min="0"
                       step="1000"
                       class="w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                @error('base_price')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Số lượng phòng</label>
                <input type="number" 
                       name="number_of_rooms" 
                       value="{{ old('number_of_rooms', $room->number_of_rooms) }}" 
                       min="1"
                       class="w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                @error('number_of_rooms')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

    <!-- Room Specs -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Thông số phòng</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Diện tích (m²)</label>
                <input type="number" 
                       name="size" 
                       value="{{ old('size', $room->size) }}" 
                       min="0"
                       class="w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                @error('size')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Số người lớn tối đa</label>
                <input type="number" 
                       name="capacity_adults" 
                       value="{{ old('capacity_adults', $room->capacity_adults) }}" 
                       min="1"
                       class="w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                @error('capacity_adults')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Số trẻ em tối đa</label>
                <input type="number" 
                       name="max_children" 
                       value="{{ old('max_children', $room->max_children) }}" 
                       min="0"
                       class="w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                @error('max_children')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Thông tin giường</label>
                <input type="text" 
                       name="bed_info" 
                       value="{{ old('bed_info', $room->bed_info) }}" 
                       placeholder="VD: 1 King bed, 2 Single beds"
                       class="w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                @error('bed_info')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Hướng view</label>
                <input type="text" 
                       name="view_direction" 
                       value="{{ old('view_direction', $room->view_direction) }}" 
                       placeholder="VD: Hướng vườn, Hướng hồ"
                       class="w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                @error('view_direction')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

    <!-- Description -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Mô tả</h3>
        
        <div>
            <textarea name="description" 
                      rows="6" 
                      class="w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                      placeholder="Nhập mô tả chi tiết về phòng...">{{ old('description', $room->description) }}</textarea>
            @error('description')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <!-- Amenities -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Tiện ích (Amenities)</h3>
        
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            @php
                $commonAmenities = [
                    'WiFi miễn phí',
                    'Điều hòa',
                    'Tivi',
                    'Tủ lạnh',
                    'Ban công',
                    'Bồn tắm',
                    'Vòi sen',
                    'Máy sấy tóc',
                    'Két sắt',
                    'Minibar',
                    'Bàn làm việc',
                    'Sofa',
                ];
                $currentAmenities = old('amenities', $room->amenities ?? []);
                // Ensure array for array_diff
                if (!is_array($currentAmenities)) {
                    $currentAmenities = [];
                }
            @endphp

            @foreach($commonAmenities as $amenity)
                <label class="flex items-center">
                    <input type="checkbox" 
                           name="amenities[]" 
                           value="{{ $amenity }}"
                           {{ in_array($amenity, $currentAmenities) ? 'checked' : '' }}
                           class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                    <span class="ml-2 text-sm text-gray-700">{{ $amenity }}</span>
                </label>
            @endforeach
        </div>

        <div class="mt-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Tiện ích khác (mỗi dòng 1 tiện ích)</label>
            <textarea name="custom_amenities" 
                      rows="3" 
                      class="w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                      placeholder="VD: Máy pha cà phê Nespresso">{{ old('custom_amenities', implode("\n", array_diff($currentAmenities, $commonAmenities))) }}</textarea>
            <p class="mt-1 text-xs text-gray-500">Nhập các tiện ích bổ sung, mỗi tiện ích một dòng</p>
        </div>
    </div>

    <!-- Image Upload -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Hình ảnh</h3>
        
        <div class="space-y-4">
            @if($room->image)
                <div>
                    <p class="text-sm text-gray-700 mb-2">Hình ảnh hiện tại:</p>
                    <img src="{{ Str::startsWith($room->image, 'http') ? $room->image : asset('storage/' . $room->image) }}" 
                         alt="{{ $room->name }}" 
                         class="w-64 h-48 object-cover rounded-lg shadow">
                </div>
            @endif

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Tải lên hình ảnh mới (để thay thế)
                </label>
                <input type="file" 
                       name="image" 
                       accept="image/jpeg,image/jpg,image/png"
                       class="w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                <p class="mt-1 text-xs text-gray-500">Định dạng: JPG, PNG. Kích thước tối đa: 2MB</p>
                @error('image')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

    <!-- Status -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Trạng thái</h3>
        
        <label class="flex items-center">
            <input type="checkbox" 
                   name="is_active" 
                   value="1"
                   {{ old('is_active', $room->is_active) ? 'checked' : '' }}
                   class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
            <span class="ml-2 text-sm text-gray-700">Phòng đang hoạt động (hiển thị cho khách)</span>
        </label>
    </div>

    <!-- Actions -->
    <div class="flex justify-end space-x-4">
        <a href="{{ route('admin.rooms.index') }}" 
           class="px-6 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50">
            Hủy
        </a>
        <button type="submit" 
                class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-md">
            <span class="material-icons-outlined text-sm align-middle mr-1">save</span>
            Lưu thay đổi
        </button>
    </div>
</form>

<script>
// Handle custom amenities merge
document.querySelector('form').addEventListener('submit', function(e) {
    const customAmenitiesText = document.querySelector('[name="custom_amenities"]').value;
    const customAmenities = customAmenitiesText.split('\n').filter(line => line.trim() !== '');
    
    customAmenities.forEach(amenity => {
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'amenities[]';
        input.value = amenity.trim();
        this.appendChild(input);
    });
});
</script>
@endsection
