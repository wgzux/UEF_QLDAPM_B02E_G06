@extends('layouts.admin')

@section('title', 'Quản lý Dịch vụ')
@section('page-title', 'Quản lý Dịch vụ')

@section('content')
<div class="mb-6">
    <p class="text-gray-600">Quản lý thông tin dịch vụ: Tiệc cưới, Tour, BBQ, v.v.</p>
</div>

<!-- Services Table -->
<div class="bg-white rounded-lg shadow-md">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Hình ảnh</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tên dịch vụ</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Danh mục</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Giá</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Trạng thái</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Hành động</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($services as $service)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            #{{ $service->id }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if($service->image)
                                <img src="{{ Str::startsWith($service->image, 'http') ? $service->image : asset('storage/' . $service->image) }}" 
                                     alt="{{ $service->name }}" 
                                     class="w-16 h-16 object-cover rounded">
                            @else
                                <div class="w-16 h-16 bg-gray-200 rounded flex items-center justify-center">
                                    <span class="material-icons-outlined text-gray-400">image</span>
                                </div>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm font-medium text-gray-900">{{ $service->name }}</div>
                            <div class="text-sm text-gray-500">{{ $service->slug }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">
                                {{ $service->category }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if($service->price)
                                <div class="text-sm font-semibold text-gray-900">{{ number_format($service->price) }} ₫</div>
                            @endif
                            @if($service->price_note)
                                <div class="text-xs text-gray-500">{{ $service->price_note }}</div>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <form method="POST" action="{{ route('admin.services.toggleStatus', $service->id) }}">
                                @csrf
                                @method('PATCH')
                                <button type="submit" 
                                        class="px-3 py-1 rounded-full text-xs font-semibold
                                        {{ $service->is_active 
                                            ? 'bg-green-100 text-green-800 hover:bg-green-200' 
                                            : 'bg-gray-100 text-gray-800 hover:bg-gray-200' }}">
                                    {{ $service->is_active ? 'Active' : 'Inactive' }}
                                </button>
                            </form>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="{{ route('admin.services.edit', $service->id) }}" 
                               class="text-blue-600 hover:text-blue-900 flex items-center">
                                <span class="material-icons-outlined text-sm mr-1">edit</span>
                                Sửa
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-6 py-8 text-center text-gray-500">
                            Chưa có dịch vụ nào
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
