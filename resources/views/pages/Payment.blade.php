@extends('layouts.app')

@section('title', 'Payment - The Wandering Rose')

@section('content')
<main class="container mx-auto px-4 pb-20 max-w-6xl">
  <div class="text-center mb-10">
    <h1 class="font-display text-4xl md:text-5xl text-primary mb-6">Thanh toán</h1>
    <div class="flex items-center justify-center space-x-2 text-text-main mb-2">
      <span class="material-icons-outlined text-lg">schedule</span>
      <span class="font-semibold">10:00</span>
      <span>để tiến hành thanh toán trong</span>
    </div>
    <p class="text-sm text-gray-500">
      Cảnh báo: nếu bạn rời trang này, lựa chọn sẽ <span class="font-bold text-red-500">KHÔNG</span> được giữ lại !
    </p>
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16">
    <section class="bg-white dark:bg-surface-dark p-6 md:p-8 rounded-lg shadow-sm border border-gray-100 dark:border-gray-700">
      <h2 class="font-display text-3xl text-primary text-center mb-8">Thông tin đặt phòng</h2>
      <div class="mb-6 flex items-center space-x-4 text-lg font-bold tracking-wide">
        <span>@if(isset($rooms)){{ $rooms }} Phòng @else 2 PHÒNG @endif</span>
        <span class="text-gray-300">|</span>
        <span>@if(isset($nights)){{ $nights }} ĐÊM @else 10 ĐÊM @endif</span>
      </div>
      <div class="mb-6 pb-6 border-b border-gray-100">
        <p class="mb-4 font-medium">@if(isset($check_in) && isset($check_out)){{ $check_in }} - {{ $check_out }}@else 27/09/2025 - 06/10/2025 @endif</p>
        <div class="flex justify-between items-center mb-2">
          <span class="font-bold">Nhận phòng</span>
          <span class="text-gray-500">27/09/2025</span>
        </div>
        <div class="flex justify-between items-center">
          <span class="font-bold">Trả phòng</span>
          <span class="text-gray-500">06/10/2025</span>
        </div>
      </div>
      <div class="mb-8">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-1">
          <h3 class="font-bold text-primary text-lg">Duluxe room</h3>
          <div class="flex items-center text-sm text-gray-500 mt-1 sm:mt-0">
            <span class="material-icons-outlined text-lg mr-1">people</span>
            <span>00 người lớn</span>
            <span class="mx-2">·</span>
            <span>00 trẻ em</span>
          </div>
        </div>
      </div>
      <div class="border-t border-gray-100 pt-6">
        <div class="flex justify-between items-center mb-4">
          <span class="font-bold text-lg">Mã đặt phòng</span>
          <span class="font-bold text-lg text-gray-500">#OL29893265</span>
        </div>
        <div class="flex justify-between items-center">
          <span class="font-bold text-xl">Tổng thanh toán</span>
          @php
            $displayTotal = null;
            if (isset($total)) {
                // remove any non-digit characters to ensure numeric value
                $digits = preg_replace('/[^0-9]/', '', (string)$total);
                if ($digits !== '') {
                    $displayTotal = (int) $digits;
                }
            }
          @endphp
          <span class="font-bold text-xl text-primary">@if($displayTotal){{ number_format($displayTotal,0,',','.') }} đ @else 100.000.000 đ @endif</span>
        </div>
        <p class="text-right text-xs text-gray-500 mt-2">(Bao gồm thuế GTGT 10% và phí dịch vụ 5%)</p>
      </div>
    </section>

    <section class="bg-white dark:bg-surface-dark p-6 md:p-8 rounded-lg shadow-sm border border-gray-100 dark:border-gray-700">
      <h2 class="font-display text-3xl text-primary text-center mb-8">Thông tin khách hàng</h2>
        <form id="payment-form" action="/payment" method="POST" class="space-y-5">
          @csrf
        <div>
          <label class="block text-sm font-medium mb-1">Họ và tên <span class="text-red-500">*</span></label>
            <input name="name" value="@if(isset($name)){{ $name }}@endif" class="w-full bg-white dark:bg-surface-dark border border-gray-200 dark:border-gray-700 rounded p-3 focus:ring-1 focus:ring-primary focus:border-primary transition-colors" placeholder="Nhập họ và tên" type="text" required/>
        </div>
        <div>
          <label class="block text-sm font-medium mb-1">Số điện thoại <span class="text-red-500">*</span></label>
          <div class="relative flex">
            <div class="flex items-center justify-center px-3 border border-r-0 border-gray-200 dark:border-gray-700 rounded-l bg-gray-50 dark:bg-gray-800">
              <img alt="VN" class="w-5 h-auto" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCWsYDtpP4LfUHMzudOJvzKXc7QZ4vAQQipOtVBwCiGPjbRfERAsdk9dPRtyB2iPEF2ZHAMvUWuXUpwtWEr6_seIQCkCaTEQhFI8T7QSDqMaeVnW_5p8xJojOzL0mHAoi5_4fg5_R8N8x1ZUdOnAl1KOzsbPMn3Eh8_2HBcWrja3W2VHoJtQGy42m6mGHVfFqgibQt3TpOox6Y1Dour6oBtKQ4I5-BAZ90SV3fQR0C_F7Q42fi_T36xx-Pm7HYdvyf5TGsezi-B"/>
              <span class="material-icons text-sm ml-1 text-gray-500">expand_more</span>
            </div>
            <input name="phone" value="@if(isset($phone)){{ $phone }}@endif" class="flex-1 bg-white dark:bg-surface-dark border border-gray-200 dark:border-gray-700 rounded-r p-3 focus:ring-1 focus:ring-primary focus:border-primary transition-colors" placeholder="Nhập số điện thoại" type="tel" required/>
          </div>
        </div>
        <div>
          <label class="block text-sm font-medium mb-1">Email <span class="text-red-500">*</span></label>
          <input name="email" value="@if(isset($email)){{ $email }}@endif" class="w-full bg-white dark:bg-surface-dark border border-gray-200 dark:border-gray-700 rounded p-3 focus:ring-1 focus:ring-primary focus:border-primary transition-colors" placeholder="Nhập địa chỉ email" type="email" required/>
          <input type="hidden" name="room_type_id" value="@if(isset($roomType)){{ $roomType->id }}@endif" />
          <input type="hidden" name="rooms" value="@if(isset($rooms)){{ $rooms }}@else 1 @endif" />
          <input type="hidden" name="nights" value="@if(isset($nights)){{ $nights }}@else 1 @endif" />
          <input type="hidden" name="total" value="@if(isset($total)){{ preg_replace('/[^0-9]/','',$total) }}@else 100000000 @endif" />
          <input type="hidden" name="adults" value="@if(isset($adults)){{ $adults }}@else 2 @endif" />
          <input type="hidden" name="children" value="@if(isset($children)){{ $children }}@else 0 @endif" />
        </div>
      </form>
    </section>
  </div>

  <section class="mt-12 bg-white dark:bg-surface-dark p-8 md:p-12 rounded-lg shadow-sm border border-transparent dark:border-gray-700 flex flex-col items-center text-center">
    <div class="mb-6">
      <div class="flex items-center text-2xl font-bold">
        <span class="text-red-600">VIET</span>
        <span class="text-blue-600">QR</span>
      </div>
    </div>
    <div class="bg-white p-2 rounded-lg shadow-md mb-6 relative">
      <div class="w-64 h-64 bg-white flex items-center justify-center relative overflow-hidden">
        <!-- QR placeholder -->
        <svg class="w-full h-full text-black opacity-90" fill="currentColor" viewBox="0 0 100 100">
          <rect fill="white" height="100" width="100" x="0" y="0"></rect>
        </svg>
      </div>
    </div>
    <div class="w-full max-w-md space-y-3 text-sm md:text-base">
      <div class="flex justify-between items-center">
        <span class="text-gray-500">Số tài khoản</span>
        <div class="flex items-center font-bold">
          <span>396366668888</span>
        </div>
      </div>
      <div class="flex justify-between items-center">
        <span class="text-gray-500">Chủ tài khoản</span>
        <span class="font-bold uppercase">Therose</span>
      </div>
      <div class="flex justify-between items-center">
        <span class="text-gray-500">Tổng số tiền</span>
        <span class="font-bold">3,450,000 VNĐ</span>
      </div>
      <div class="flex justify-between items-center">
        <span class="text-gray-500">Nội dung</span>
        <span class="font-bold">#OL29893265 0921234567</span>
      </div>
    </div>
  </section>

    @php
      $confirmParams = array_filter([
        'room_type_id' => request('room_type_id') ?? request('room_type') ?? (isset($roomType) ? $roomType->id : null),
        'rooms' => request('rooms') ?? (isset($rooms) ? $rooms : 1),
        'nights' => request('nights') ?? (isset($nights) ? $nights : 1),
        'total' => request('total') ?? (isset($total) ? preg_replace('/[^0-9]/','',$total) : 100000000),
        'check_in' => request('check_in') ?? (isset($check_in) ? $check_in : null),
        'check_out' => request('check_out') ?? (isset($check_out) ? $check_out : null),
        'name' => request('name') ?? (isset($name) ? $name : null),
        'phone' => request('phone') ?? (isset($phone) ? $phone : null),
        'email' => request('email') ?? (isset($email) ? $email : null),
      ]);
      $confirmUrl = url('/bookingconfirm') . (count($confirmParams) ? ('?' . http_build_query($confirmParams)) : '');
    @endphp
    <div class="mt-12 text-center">
      <a href="{{ $confirmUrl }}" class="w-full inline-block bg-primary hover:bg-primary-dark text-white font-semibold py-4 rounded shadow-lg transition-colors uppercase tracking-widest text-sm md:text-base text-center">
        Xác nhận thanh toán
      </a>
    </div>

</main>
@endsection
