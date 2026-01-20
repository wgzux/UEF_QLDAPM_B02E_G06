@extends('layouts.admin')

@section('title', 'Cấu hình hệ thống')
@section('page-title', 'Cấu hình hệ thống')

@section('content')
<div class="mb-6">
    <p class="text-gray-600">Cấu hình các thông số vận hành của hệ thống</p>
</div>

@if(session('success'))
    <div class="mb-6 bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded">
        {{ session('success') }}
    </div>
@endif

<form method="POST" action="{{ route('admin.settings.update') }}">
    @csrf
    @method('PUT')

    <!-- Pricing Settings -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
            <span class="material-icons-outlined mr-2">payments</span>
            Cấu hình Giá
        </h3>
        
        <div class="space-y-6">
            <div class="max-w-md">
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Phụ thu cuối tuần (%)
                    <span class="text-red-500">*</span>
                </label>
                <div class="relative">
                    <input type="number" 
                           name="weekend_surcharge_percent" 
                           value="{{ old('weekend_surcharge_percent', $weekendSurcharge) }}" 
                           required
                           min="0"
                           max="100"
                           step="0.1"
                           class="w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 pr-8">
                    <span class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-500">%</span>
                </div>
                @error('weekend_surcharge_percent')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
                <p class="mt-2 text-xs text-gray-500">
                    <span class="material-icons-outlined text-xs align-middle">info</span>
                    Phụ thu này sẽ tự động được áp dụng khi khách đặt phòng vào Thứ 7 hoặc Chủ nhật.
                </p>
                
                <!-- Preview -->
                <div class="mt-4 p-4 bg-blue-50 border border-blue-200 rounded-md">
                    <p class="text-sm font-medium text-blue-900 mb-2">Ví dụ:</p>
                    <p class="text-xs text-blue-800">
                        Nếu giá phòng là 2,000,000 VNĐ/đêm và khách đặt 7 đêm (trong đó có 2 đêm cuối tuần):
                    </p>
                    <p class="text-xs text-blue-800 mt-1">
                        • Tiền phòng: 14,000,000 VNĐ (7 đêm × 2,000,000)<br>
                        • Phụ thu cuối tuần: (2 đêm × 2,000,000) × {{ $weekendSurcharge }}% = {{ number_format((2 * 2000000) * $weekendSurcharge / 100) }} VNĐ<br>
                        • <strong>Tổng: {{ number_format(14000000 + ((2 * 2000000) * $weekendSurcharge / 100)) }} VNĐ</strong>
                    </p>
                    <p class="text-xs text-orange-600 mt-2">
                        ⚠️ Lưu ý: Phụ thu chỉ áp dụng cho các đêm Thứ 7 và Chủ nhật, không tính trên tổng tiền.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Actions -->
    <div class="flex justify-end">
        <button type="submit" 
                class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-md flex items-center">
            <span class="material-icons-outlined text-sm mr-1">save</span>
            Lưu cấu hình
        </button>
    </div>
</form>
@endsection
