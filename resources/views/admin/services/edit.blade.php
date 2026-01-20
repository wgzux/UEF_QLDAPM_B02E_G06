@extends('layouts.admin')

@section('title', 'Chỉnh sửa Dịch vụ')
@section('page-title', 'Chỉnh sửa Dịch vụ: ' . $service->name)

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.services.index') }}" class="text-blue-600 hover:text-blue-900 flex items-center">
        <span class="material-icons-outlined mr-1">arrow_back</span>
        Quay lại danh sách
    </a>
</div>

<form method="POST" action="{{ route('admin.services.update', $service->id) }}" enctype="multipart/form-data" class="space-y-6">
    @csrf
    @method('PUT')

    <!-- Basic Info -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Thông tin cơ bản</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Tên dịch vụ <span class="text-red-500">*</span>
                </label>
                <input type="text" 
                       name="name" 
                       value="{{ old('name', $service->name) }}" 
                       required
                       class="w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Danh mục <span class="text-red-500">*</span>
                </label>
                <select name="category" 
                        required
                        class="w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                    <option value="event" {{ old('category', $service->category) === 'event' ? 'selected' : '' }}>Sự kiện (Event)</option>
                    <option value="tour" {{ old('category', $service->category) === 'tour' ? 'selected' : '' }}>Tour & Trải nghiệm</option>
                    <option value="f&b" {{ old('category', $service->category) === 'f&b' ? 'selected' : '' }}>Ẩm thực (F&B)</option>
                    <option value="other" {{ old('category', $service->category) === 'other' ? 'selected' : '' }}>Khác</option>
                </select>
                @error('category')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Slug (Read-only)</label>
                <input type="text" 
                       value="{{ $service->slug }}" 
                       disabled
                       class="w-full border-gray-300 rounded-md bg-gray-50 text-gray-600">
            </div>
        </div>
    </div>

    <!-- Pricing -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Giá & Đơn vị</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Giá (₫)</label>
                <input type="number" 
                       name="price" 
                       value="{{ old('price', $service->price) }}" 
                       min="0"
                       step="1000"
                       placeholder="Để trống nếu liên hệ"
                       class="w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                @error('price')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Ghi chú giá</label>
                <input type="text" 
                       name="price_note" 
                       value="{{ old('price_note', $service->price_note) }}" 
                       placeholder="VD: /người, /bàn, Liên hệ"
                       class="w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                @error('price_note')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Đơn vị</label>
                <input type="text" 
                       name="unit" 
                       value="{{ old('unit', $service->unit) }}" 
                       placeholder="VD: người, bàn, set"
                       class="w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                @error('unit')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

    <!-- Description (Short) -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Mô tả ngắn</h3>
        
        <div>
            <textarea name="description" 
                      rows="3" 
                      class="w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                      placeholder="Mô tả ngắn gọn cho dịch vụ (hiển thị trong danh sách)...">{{ old('description', $service->description) }}</textarea>
            @error('description')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <!-- Content (Detailed) -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Nội dung chi tiết (HTML)</h3>
        
        <div>
            <textarea name="content" 
                      rows="12" 
                      class="w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 font-mono text-sm"
                      placeholder="Nhập nội dung chi tiết (có thể dùng HTML)...">{{ old('content', $service->content) }}</textarea>
            <p class="mt-1 text-xs text-gray-500">
                Bạn có thể sử dụng HTML tags: &lt;p&gt;, &lt;h3&gt;, &lt;ul&gt;, &lt;li&gt;, &lt;strong&gt;, &lt;br&gt;, v.v.
            </p>
            @error('content')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <!-- Features -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Đặc điểm nổi bật (Features)</h3>
        
        <div class="space-y-3">
            @php
                $currentFeatures = old('features', $service->features ?? []);
            @endphp

            @for($i = 0; $i < 10; $i++)
                <div class="flex items-center gap-3">
                    <span class="text-sm text-gray-500 w-8">{{ $i + 1 }}.</span>
                    <input type="text" 
                           name="features[]" 
                           value="{{ $currentFeatures[$i] ?? '' }}" 
                           placeholder="Nhập đặc điểm {{ $i + 1 }}"
                           class="flex-1 border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                </div>
            @endfor
        </div>
        <p class="mt-2 text-xs text-gray-500">Để trống các mục không sử dụng. Danh sách này sẽ hiển thị dạng bullet points.</p>
    </div>

    <!-- Image Upload -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Hình ảnh</h3>
        
        <div class="space-y-4">
            @if($service->image)
                <div>
                    <p class="text-sm text-gray-700 mb-2">Hình ảnh hiện tại:</p>
                    <img src="{{ Str::startsWith($service->image, 'http') ? $service->image : asset('storage/' . $service->image) }}" 
                         alt="{{ $service->name }}" 
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
                   {{ old('is_active', $service->is_active) ? 'checked' : '' }}
                   class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
            <span class="ml-2 text-sm text-gray-700">Dịch vụ đang hoạt động (hiển thị cho khách)</span>
        </label>
    </div>

    <!-- Actions -->
    <div class="flex justify-end space-x-4">
        <a href="{{ route('admin.services.index') }}" 
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
// Filter out empty features before submit
document.querySelector('form').addEventListener('submit', function(e) {
    const featureInputs = document.querySelectorAll('[name="features[]"]');
    featureInputs.forEach(input => {
        if (!input.value.trim()) {
            input.disabled = true; // Don't submit empty inputs
        }
    });
});
</script>
@endsection
