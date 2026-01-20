@extends('layouts.app')

@section('title', 'Đơn hàng của tôi')

@section('content')
<div class="min-h-screen bg-gray-50 py-12 px-4">
    <div class="max-w-6xl mx-auto">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Đơn hàng của tôi</h1>
            <p class="text-gray-600">Quản lý và theo dõi các đơn đặt phòng của bạn</p>
        </div>

        @if($bookings->isEmpty())
            <!-- Empty State -->
            <div class="bg-white rounded-lg shadow-md p-12 text-center">
                <span class="material-icons-outlined text-gray-300 text-6xl mb-4">event_busy</span>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Chưa có đơn hàng nào</h3>
                <p class="text-gray-600 mb-6">Bạn chưa có đơn đặt phòng nào trong hệ thống</p>
                <a href="{{ route('booking.create') }}" 
                   class="inline-flex items-center bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg transition">
                    <span class="material-icons-outlined mr-2">add</span>
                    Đặt phòng ngay
                </a>
            </div>
        @else
            <!-- Bookings List -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mã đơn</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ngày đặt</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Check-in/out</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phòng</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tổng tiền</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Trạng thái</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Hành động</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($bookings as $booking)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="font-semibold text-gray-900">{{ $booking->code }}</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $booking->created_at->format('d/m/Y') }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <div>{{ $booking->check_in->format('d/m/Y') }}</div>
                                        <div class="text-gray-500">{{ $booking->check_out->format('d/m/Y') }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        @php
                                            $totalRooms = 0;
                                            foreach ($booking->roomTypes as $rt) {
                                                $totalRooms += $rt->pivot->quantity;
                                            }
                                        @endphp
                                        {{ $totalRooms }} phòng
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="font-semibold text-gray-900">{{ number_format($booking->total_price) }} ₫</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="space-y-1">
                                            <span class="block px-2 py-1 rounded-full text-xs font-semibold text-center
                                                @if($booking->payment_status === 'paid') bg-green-100 text-green-800
                                                @else bg-yellow-100 text-yellow-800
                                                @endif">
                                                {{ $booking->payment_status === 'paid' ? 'Đã TT' : 'Chưa TT' }}
                                            </span>
                                            <span class="block px-2 py-1 rounded-full text-xs font-semibold text-center
                                                @if($booking->status === 'confirmed') bg-green-100 text-green-800
                                                @elseif($booking->status === 'pending') bg-yellow-100 text-yellow-800
                                                @elseif($booking->status === 'checked_in') bg-blue-100 text-blue-800
                                                @elseif($booking->status === 'checked_out') bg-gray-100 text-gray-800
                                                @elseif($booking->status === 'cancelled') bg-red-100 text-red-800
                                                @endif">
                                                @if($booking->status === 'confirmed') Đã xác nhận
                                                @elseif($booking->status === 'pending') Chờ xác nhận
                                                @elseif($booking->status === 'checked_in') Đang ở
                                                @elseif($booking->status === 'checked_out') Hoàn thành
                                                @elseif($booking->status === 'cancelled') Đã hủy
                                                @else {{ ucfirst($booking->status) }}
                                                @endif
                                            </span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <a href="{{ route('customer.booking.show', $booking->id) }}" 
                                           class="text-blue-600 hover:text-blue-900 font-medium flex items-center">
                                            <span class="material-icons-outlined text-sm mr-1">visibility</span>
                                            Chi tiết
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                @if($bookings->hasPages())
                    <div class="px-6 py-4 border-t border-gray-200">
                        {{ $bookings->links() }}
                    </div>
                @endif
            </div>
        @endif
    </div>
</div>
@endsection
