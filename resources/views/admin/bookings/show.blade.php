@extends('layouts.admin')

@section('title', 'Chi tiết Đơn hàng')
@section('page-title', 'Chi tiết Đơn hàng #' . $booking->code)

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.bookings.index') }}" class="text-blue-600 hover:text-blue-900 flex items-center">
        <span class="material-icons-outlined mr-1">arrow_back</span>
        Quay lại danh sách
    </a>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <!-- Main Content (2/3 width) -->
    <div class="lg:col-span-2 space-y-6">
        <!-- Main Contact Info -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                <span class="material-icons-outlined mr-2">person</span>
                Thông tin người đặt (Main Contact)
            </h3>
            
            <div class="grid grid-cols-2 gap-4 text-sm">
                <div>
                    <p class="text-gray-600">Họ và tên:</p>
                    <p class="font-semibold text-gray-900">{{ $booking->customer_name }}</p>
                </div>
                <div>
                    <p class="text-gray-600">Email:</p>
                    <p class="font-semibold text-gray-900">{{ $booking->customer_email }}</p>
                </div>
                <div>
                    <p class="text-gray-600">Số điện thoại:</p>
                    <p class="font-semibold text-gray-900">{{ $booking->customer_phone }}</p>
                </div>
                
                @if($primaryGuest)
                    <div>
                        <p class="text-gray-600">Passport/CCCD:</p>
                        <p class="font-semibold text-gray-900">{{ $primaryGuest->passport_id ?? 'N/A' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Ngày sinh:</p>
                        <p class="font-semibold text-gray-900">{{ $primaryGuest->dob ? $primaryGuest->dob->format('d/m/Y') : 'N/A' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Giới tính:</p>
                        <p class="font-semibold text-gray-900">{{ ucfirst($primaryGuest->gender ?? 'N/A') }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Quốc tịch:</p>
                        <p class="font-semibold text-gray-900">{{ strtoupper($primaryGuest->nationality ?? 'N/A') }}</p>
                    </div>
                @endif
            </div>
        </div>

        <!-- Guest List (CRITICAL DATA) -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                <span class="material-icons-outlined mr-2">people</span>
                Danh sách khách (Guest List) - Dữ liệu khai báo lưu trú
            </h3>
            
            @if($roomGuests->count() > 0)
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">STT</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Họ và tên</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Passport/ID</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Ngày sinh</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Quốc tịch</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Phòng</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($roomGuests as $index => $guest)
                                <tr>
                                    <td class="px-4 py-3 text-sm text-gray-900">{{ $index + 1 }}</td>
                                    <td class="px-4 py-3 text-sm font-medium text-gray-900">{{ $guest->full_name }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-600">{{ $guest->passport_id ?? 'N/A' }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-600">{{ $guest->dob ? $guest->dob->format('d/m/Y') : 'N/A' }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-600">{{ strtoupper($guest->nationality ?? 'N/A') }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-600">
                                        @if($guest->room_type_id)
                                            {{ $booking->roomTypes->firstWhere('id', $guest->room_type_id)->name ?? 'N/A' }}
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="text-gray-500 text-sm">Chưa có thông tin khách đi cùng</p>
            @endif
        </div>

        <!-- Booking Details -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                <span class="material-icons-outlined mr-2">event</span>
                Chi tiết đặt phòng
            </h3>
            
            <div class="grid grid-cols-2 gap-4 text-sm">
                <div>
                    <p class="text-gray-600">Check-in:</p>
                    <p class="font-semibold text-gray-900">{{ $booking->check_in->format('d/m/Y H:i') }}</p>
                </div>
                <div>
                    <p class="text-gray-600">Check-out:</p>
                    <p class="font-semibold text-gray-900">{{ $booking->check_out->format('d/m/Y H:i') }}</p>
                </div>
                <div>
                    <p class="text-gray-600">Số đêm:</p>
                    <p class="font-semibold text-gray-900">{{ $booking->check_in->diffInDays($booking->check_out) }} đêm</p>
                </div>
                <div>
                    <p class="text-gray-600">Số khách:</p>
                    <p class="font-semibold text-gray-900">{{ $booking->adults }} người lớn, {{ $booking->children }} trẻ em</p>
                </div>
            </div>

            <div class="mt-6">
                <p class="text-gray-600 text-sm mb-2">Phòng đã đặt:</p>
                @foreach($booking->roomTypes as $roomType)
                    <div class="flex justify-between items-center py-2 border-b border-gray-100">
                        <span class="font-medium">{{ $roomType->name }} (x{{ $roomType->pivot->quantity }})</span>
                        <span class="text-gray-900">{{ number_format($roomType->pivot->subtotal) }} ₫</span>
                    </div>
                @endforeach
            </div>

            @if($booking->special_requests)
                <div class="mt-4">
                    <p class="text-gray-600 text-sm">Yêu cầu đặc biệt:</p>
                    <p class="text-gray-900 bg-gray-50 p-3 rounded mt-2">{{ $booking->special_requests }}</p>
                </div>
            @endif
        </div>
    </div>

    <!-- Sidebar (1/3 width) -->
    <div class="space-y-6">
        <!-- Status & Actions -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Trạng thái & Hành động</h3>
            
            <div class="mb-4">
                <p class="text-sm text-gray-600 mb-2">Trạng thái thanh toán:</p>
                <span class="px-3 py-1 rounded-full text-sm font-semibold
                    @if($booking->payment_status === 'paid') bg-green-100 text-green-800
                    @else bg-yellow-100 text-yellow-800
                    @endif">
                    {{ ucfirst($booking->payment_status) }}
                </span>
            </div>

            <div class="mb-6">
                <p class="text-sm text-gray-600 mb-2">Trạng thái đơn hàng:</p>
                <span class="px-3 py-1 rounded-full text-sm font-semibold
                    @if($booking->status === 'confirmed') bg-green-100 text-green-800
                    @elseif($booking->status === 'pending') bg-yellow-100 text-yellow-800
                    @elseif($booking->status === 'checked_in') bg-blue-100 text-blue-800
                    @elseif($booking->status === 'checked_out') bg-gray-100 text-gray-800
                    @elseif($booking->status === 'cancelled') bg-red-100 text-red-800
                    @endif">
                    {{ ucfirst($booking->status) }}
                </span>
            </div>

            <!-- Action Buttons -->
            <div class="space-y-2">
                @if($booking->status === 'pending' && $booking->payment_status === 'unpaid')
                    <form method="POST" action="{{ route('admin.bookings.updateStatus', $booking->id) }}">
                        @csrf
                        <input type="hidden" name="action" value="confirm_deposit">
                        <button type="submit" 
                                class="w-full bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md text-sm transition">
                            ✓ Xác nhận thanh toán cọc
                        </button>
                    </form>
                @endif

                @if($booking->status === 'confirmed')
                    <form method="POST" action="{{ route('admin.bookings.updateStatus', $booking->id) }}">
                        @csrf
                        <input type="hidden" name="action" value="check_in">
                        <button type="submit" 
                                class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm transition">
                            → Check-in
                        </button>
                    </form>
                @endif

                @if($booking->status === 'checked_in')
                    <form method="POST" action="{{ route('admin.bookings.updateStatus', $booking->id) }}">
                        @csrf
                        <input type="hidden" name="action" value="check_out">
                        <button type="submit" 
                                class="w-full bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-md text-sm transition">
                            ← Check-out
                        </button>
                    </form>
                @endif

                @if(!in_array($booking->status, ['cancelled', 'checked_out']))
                    <form method="POST" 
                          action="{{ route('admin.bookings.updateStatus', $booking->id) }}"
                          onsubmit="return confirm('Bạn có chắc muốn hủy đơn hàng này?')">
                        @csrf
                        <input type="hidden" name="action" value="cancel">
                        <button type="submit" 
                                class="w-full bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md text-sm transition">
                            ✗ Hủy đơn hàng
                        </button>
                    </form>
                @endif
            </div>
        </div>

        <!-- Payment Info -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Thông tin thanh toán</h3>
            
            <div class="space-y-3 text-sm">
                <div class="flex justify-between">
                    <span class="text-gray-600">Tiền phòng:</span>
                    <span class="font-semibold">{{ number_format($booking->room_price) }} ₫</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-600">Dịch vụ:</span>
                    <span class="font-semibold">{{ number_format($booking->service_price) }} ₫</span>
                </div>
                <div class="flex justify-between pt-3 border-t border-gray-200">
                    <span class="font-bold text-gray-900">Tổng cộng:</span>
                    <span class="font-bold text-gray-900 text-lg">{{ number_format($booking->total_price) }} ₫</span>
                </div>
            </div>

            @if($qrUrl)
                <div class="mt-6">
                    <p class="text-sm text-gray-600 mb-2">Mã QR thanh toán:</p>
                    <img src="{{ $qrUrl }}" alt="QR Code" class="w-full border rounded">
                    <div class="mt-2 text-xs text-gray-500">
                        <p>Nội dung: {{ $booking->code }} {{ $booking->customer_phone }}</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
