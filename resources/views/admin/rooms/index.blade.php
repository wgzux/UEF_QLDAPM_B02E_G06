@extends('layouts.admin')

@section('title', 'Quản lý Phòng')
@section('page-title', 'Quản lý Phòng')

@section('content')
<div class="mb-6">
    <p class="text-gray-600">Quản lý thông tin phòng: giá, tiện ích, hình ảnh</p>
</div>

<!-- Rooms Table -->
<div class="bg-white rounded-lg shadow-md">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Hình ảnh</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tên phòng</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Giá cơ bản</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sức chứa</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Số lượng</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Trạng thái</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Hành động</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($rooms as $room)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            #{{ $room->id }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if($room->image)
                                <img src="{{ Str::startsWith($room->image, 'http') ? $room->image : asset('storage/' . $room->image) }}" 
                                     alt="{{ $room->name }}" 
                                     class="w-16 h-16 object-cover rounded">
                            @else
                                <div class="w-16 h-16 bg-gray-200 rounded flex items-center justify-center">
                                    <span class="material-icons-outlined text-gray-400">image</span>
                                </div>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">{{ $room->name }}</div>
                            <div class="text-sm text-gray-500">{{ $room->slug }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                            {{ number_format($room->base_price) }} ₫
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $room->capacity_adults ?? $room->max_capacity ?? 'N/A' }} người
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $room->number_of_rooms ?? 'N/A' }} phòng
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <form method="POST" action="{{ route('admin.rooms.toggleStatus', $room->id) }}">
                                @csrf
                                @method('PATCH')
                                <button type="submit" 
                                        class="px-3 py-1 rounded-full text-xs font-semibold
                                        {{ $room->is_active 
                                            ? 'bg-green-100 text-green-800 hover:bg-green-200' 
                                            : 'bg-gray-100 text-gray-800 hover:bg-gray-200' }}">
                                    {{ $room->is_active ? 'Active' : 'Inactive' }}
                                </button>
                            </form>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="{{ route('admin.rooms.edit', $room->id) }}" 
                               class="text-blue-600 hover:text-blue-900 flex items-center">
                                <span class="material-icons-outlined text-sm mr-1">edit</span>
                                Sửa
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="px-6 py-8 text-center text-gray-500">
                            Chưa có phòng nào
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
