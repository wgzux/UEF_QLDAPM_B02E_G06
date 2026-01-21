@extends('layouts.app')

@section('title', 'Tra cứu đơn hàng')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 py-16 px-4">
    <div class="max-w-2xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Tra cứu đơn hàng</h1>
            <p class="text-lg text-gray-600">Nhập thông tin để tìm kiếm đơn đặt phòng của bạn</p>
        </div>

        <!-- Search Form -->
        <div class="bg-white rounded-2xl shadow-xl p-8">
            @if ($errors->any())
                <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-6">
                    <div class="flex items-center">
                        <span class="material-icons-outlined mr-2">error_outline</span>
                        <div>
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif

            <form method="POST" action="{{ route('tracking.search') }}" class="space-y-6">
                @csrf

                <!-- Booking Code -->
                <div>
                    <label for="booking_code" class="block text-sm font-semibold text-gray-700 mb-2">
                        <span class="flex items-center">
                            <span class="material-icons-outlined mr-2 text-blue-600">confirmation_number</span>
                            Mã đặt phòng
                        </span>
                    </label>
                    <input type="text" 
                           id="booking_code"
                           name="booking_code" 
                           value="{{ old('booking_code') }}"
                           placeholder="VD: WR123456"
                           required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg">
                    <p class="mt-2 text-xs text-gray-500">Mã đặt phòng được gửi qua email sau khi đặt phòng thành công</p>
                </div>

                <!-- Contact Info -->
                <div>
                    <label for="contact_info" class="block text-sm font-semibold text-gray-700 mb-2">
                        <span class="flex items-center">
                            <span class="material-icons-outlined mr-2 text-blue-600">contact_phone</span>
                            Số điện thoại hoặc Email
                        </span>
                    </label>
                    <input type="text" 
                           id="contact_info"
                           name="contact_info" 
                           value="{{ old('contact_info') }}"
                           placeholder="VD: 0123456789 hoặc email@example.com"
                           required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg">
                    <p class="mt-2 text-xs text-gray-500">Nhập số điện thoại hoặc email đã sử dụng khi đặt phòng</p>
                </div>

                <!-- Submit Button -->
                <button type="submit" 
                        class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-bold py-4 px-6 rounded-lg transition duration-200 flex items-center justify-center text-lg shadow-lg">
                    <span class="material-icons-outlined mr-2">search</span>
                    Tìm kiếm đơn hàng
                </button>
            </form>
        </div>

        <!-- Help Info -->
        <div class="mt-8 bg-white rounded-lg shadow-md p-6">
            <h3 class="font-semibold text-gray-800 mb-3 flex items-center">
                <span class="material-icons-outlined mr-2 text-blue-600">help_outline</span>
                Cần hỗ trợ?
            </h3>
            <ul class="space-y-2 text-sm text-gray-600">
                <li class="flex items-start">
                    <span class="material-icons-outlined text-green-600 mr-2 text-sm mt-0.5">check_circle</span>
                    <span>Mã đặt phòng có định dạng <strong>WR + 6 số</strong>, được gửi qua email sau khi đặt phòng</span>
                </li>
                <li class="flex items-start">
                    <span class="material-icons-outlined text-green-600 mr-2 text-sm mt-0.5">check_circle</span>
                    <span>Vui lòng nhập chính xác số điện thoại hoặc email đã dùng khi đặt</span>
                </li>
                <li class="flex items-start">
                    <span class="material-icons-outlined text-green-600 mr-2 text-sm mt-0.5">check_circle</span>
                    <span>Nếu không tìm thấy email xác nhận, vui lòng kiểm tra hộp thư spam</span>
                </li>
            </ul>
            <div class="mt-4 pt-4 border-t border-gray-200">
                <p class="text-sm text-gray-600">
                    Cần hỗ trợ thêm? Liên hệ: 
                    <a href="tel:0944085920" class="text-blue-600 hover:text-blue-800 font-semibold">0944 085 920</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
