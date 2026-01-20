@extends('layouts.app')

@section('title', 'Chi tiết đơn hàng')

@section('content')
<div class="min-h-screen bg-gray-50 py-12 px-4">
    <div class="max-w-6xl mx-auto">
        <!-- Header -->
        <div class="mb-8">
            <a href="{{ route('tracking.index') }}" class="inline-flex items-center text-blue-600 hover:text-blue-800 mb-4">
                <span class="material-icons-outlined mr-1">arrow_back</span>
                Tra cứu đơn khác
            </a>
            <h1 class="text-3xl font-bold text-gray-900">Thông tin đơn đặt phòng</h1>
        </div>

        <!-- Success Message -->
        <div class="bg-green-50 border border-green-200 rounded-lg p-4 mb-6">
            <div class="flex items-center">
                <span class="material-icons-outlined text-green-600 mr-3">check_circle</span>
                <div>
                    <p class="font-semibold text-green-800">Đã tìm thấy đơn hàng của bạn!</p>
                    <p class="text-sm text-green-700">Mã đặt phòng: <strong>{{ $booking->code }}</strong></p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Customer Info -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                        <span class="material-icons-outlined mr-2 text-blue-600">person</span>
                        Thông tin người đặt
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
                        <div>
                            <p class="text-gray-600">Số khách:</p>
                            <p class="font-semibold text-gray-900">{{ $guestCount + 1 }} người ({{ $booking->adults }} người lớn, {{ $booking->children }} trẻ em)</p>
                        </div>
                    </div>
                </div>

                <!-- Booking Details -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                        <span class="material-icons-outlined mr-2 text-blue-600">event</span>
                        Chi tiết lưu trú
                    </h3>
                    
                    <div class="grid grid-cols-2 gap-4 text-sm mb-4">
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
                            <p class="text-gray-600">Tổng số phòng:</p>
                            <p class="font-semibold text-gray-900">{{ $totalRooms }} phòng</p>
                        </div>
                    </div>

                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <p class="text-gray-600 text-sm font-semibold mb-3">Phòng đã đặt:</p>
                        @foreach($booking->roomTypes as $roomType)
                            <div class="flex justify-between items-center py-3 border-b border-gray-100 last:border-0">
                                <div>
                                    <p class="font-medium text-gray-900">{{ $roomType->name }}</p>
                                    <p class="text-sm text-gray-500">Số lượng: {{ $roomType->pivot->quantity }} phòng</p>
                                </div>
                                <span class="text-gray-900 font-semibold">{{ number_format($roomType->pivot->subtotal) }} ₫</span>
                            </div>
                        @endforeach
                    </div>

                    @if($booking->special_requests)
                        <div class="mt-4 pt-4 border-t border-gray-200">
                            <p class="text-gray-600 text-sm font-semibold">Yêu cầu đặc biệt:</p>
                            <p class="text-gray-900 bg-gray-50 p-3 rounded mt-2 text-sm">{{ $booking->special_requests }}</p>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Sidebar - Payment & Status -->
            <div class="space-y-6">
                <!-- Status Card -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Trạng thái</h3>
                    
                    <div class="space-y-3">
                        <div>
                            <p class="text-sm text-gray-600 mb-1">Thanh toán:</p>
                            <span class="px-3 py-1 rounded-full text-sm font-semibold
                                @if($booking->payment_status === 'paid') bg-green-100 text-green-800
                                @else bg-yellow-100 text-yellow-800
                                @endif">
                                {{ $booking->payment_status === 'paid' ? 'Đã thanh toán' : 'Chưa thanh toán' }}
                            </span>
                        </div>

                        <div>
                            <p class="text-sm text-gray-600 mb-1">Đơn hàng:</p>
                            <span class="px-3 py-1 rounded-full text-sm font-semibold
                                @if($booking->status === 'confirmed') bg-green-100 text-green-800
                                @elseif($booking->status === 'pending') bg-yellow-100 text-yellow-800
                                @elseif($booking->status === 'checked_in') bg-blue-100 text-blue-800
                                @elseif($booking->status === 'checked_out') bg-gray-100 text-gray-800
                                @elseif($booking->status === 'cancelled') bg-red-100 text-red-800
                                @endif">
                                @if($booking->status === 'confirmed') Đã xác nhận
                                @elseif($booking->status === 'pending') Chờ xác nhận
                                @elseif($booking->status === 'checked_in') Đang lưu trú
                                @elseif($booking->status === 'checked_out') Đã hoàn thành
                                @elseif($booking->status === 'cancelled') Đã hủy
                                @else {{ ucfirst($booking->status) }}
                                @endif
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Payment Info -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Thanh toán</h3>
                    
                    <div class="space-y-3 text-sm mb-4">
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
                        <div class="mt-6 pt-6 border-t border-gray-200">
                            <p class="text-sm font-semibold text-gray-800 mb-3">Quét mã QR để thanh toán:</p>
                            <img src="{{ $qrUrl }}" alt="QR Code" class="w-full border rounded-lg shadow-sm">
                            <div class="mt-3 bg-blue-50 border border-blue-200 rounded-lg p-3">
                                <p class="text-xs text-blue-800 font-semibold mb-1">Nội dung chuyển khoản:</p>
                                <p class="text-sm text-blue-900 font-mono">{{ $booking->code }} {{ $booking->customer_phone }}</p>
                            </div>
                        </div>
                    @else
                        <div class="mt-6 pt-6 border-t border-gray-200">
                            <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                <span class="material-icons-outlined text-green-600">check_circle</span>
                                <p class="text-sm text-green-800 mt-2">Đơn hàng đã được thanh toán</p>
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Help -->
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                    <p class="text-sm text-blue-800 font-semibold mb-2">Cần hỗ trợ?</p>
                    <p class="text-xs text-blue-700 mb-3">Liên hệ với chúng tôi nếu bạn có thắc mắc về đơn hàng</p>
                    <a href="tel:0944085920" class="inline-flex items-center text-blue-600 hover:text-blue-800 text-sm font-semibold">
                        <span class="material-icons-outlined mr-1 text-sm">phone</span>
                        0944 085 920
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
