@extends('layouts.app')

@section('title', 'Đặt Phòng - The Wandering Rose')

@section('content')

{{-- Display Validation Errors --}}
@if($errors->any())
<div class="max-w-4xl mx-auto px-4 mt-8">
	<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
		<strong class="font-bold">Có lỗi xảy ra!</strong>
		<ul class="mt-2 list-disc list-inside">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
</div>
@endif

{{-- Display Success Message --}}
@if(session('success'))
<div class="max-w-4xl mx-auto px-4 mt-8">
	<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
		<strong class="font-bold">Thành công!</strong>
		<span class="block sm:inline">{{ session('success') }}</span>
	</div>
</div>
@endif

{{-- Booking Form --}}
<section class="max-w-4xl mx-auto px-4 md:px-8 py-12">
	<h1 class="font-display text-4xl md:text-5xl text-center text-primary mb-8">Đặt Phòng</h1>
	<p class="text-center text-gray-600 mb-12">Điền thông tin để đặt phòng tại The Wandering Rose Villa</p>

	<form action="{{ route('booking.store') }}" method="POST" class="bg-white shadow-lg rounded-lg p-6 md:p-8 space-y-6">
		@csrf

		{{-- Customer Information --}}
		<div class="border-b pb-6">
			<h2 class="text-2xl font-display text-primary mb-4">Thông tin khách hàng</h2>
			
			<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
				<div>
					<label class="block text-sm font-medium text-gray-700 mb-2">Họ và tên *</label>
					<input 
						type="text" 
						name="customer_name" 
						value="{{ old('customer_name') }}"
						class="w-full border border-gray-300 rounded px-4 py-2 focus:border-primary focus:ring-1 focus:ring-primary outline-none"
						placeholder="Nguyễn Văn A"
						required
					>
				</div>

				<div>
					<label class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
					<input 
						type="email" 
						name="customer_email" 
						value="{{ old('customer_email') }}"
						class="w-full border border-gray-300 rounded px-4 py-2 focus:border-primary focus:ring-1 focus:ring-primary outline-none"
						placeholder="email@example.com"
						required
					>
				</div>

				<div>
					<label class="block text-sm font-medium text-gray-700 mb-2">Số điện thoại *</label>
					<input 
						type="tel" 
						name="customer_phone" 
						value="{{ old('customer_phone') }}"
						class="w-full border border-gray-300 rounded px-4 py-2 focus:border-primary focus:ring-1 focus:ring-primary outline-none"
						placeholder="0123456789"
						required
					>
				</div>

				<div>
					<label class="block text-sm font-medium text-gray-700 mb-2">Địa chỉ</label>
					<input 
						type="text" 
						name="customer_address" 
						value="{{ old('customer_address') }}"
						class="w-full border border-gray-300 rounded px-4 py-2 focus:border-primary focus:ring-1 focus:ring-primary outline-none"
						placeholder="Hà Nội"
					>
				</div>
			</div>
		</div>

		{{-- Booking Details --}}
		<div class="border-b pb-6">
			<h2 class="text-2xl font-display text-primary mb-4">Chi tiết đặt phòng</h2>
			
			<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
				<div>
					<label class="block text-sm font-medium text-gray-700 mb-2">Ngày check-in *</label>
					<input 
						type="date" 
						name="check_in_date" 
						value="{{ old('check_in_date') }}"
						min="{{ date('Y-m-d') }}"
						class="w-full border border-gray-300 rounded px-4 py-2 focus:border-primary focus:ring-1 focus:ring-primary outline-none"
						required
					>
				</div>

				<div>
					<label class="block text-sm font-medium text-gray-700 mb-2">Ngày check-out *</label>
					<input 
						type="date" 
						name="check_out_date" 
						value="{{ old('check_out_date') }}"
						min="{{ date('Y-m-d', strtotime('+1 day')) }}"
						class="w-full border border-gray-300 rounded px-4 py-2 focus:border-primary focus:ring-1 focus:ring-primary outline-none"
						required
					>
				</div>

				<div>
					<label class="block text-sm font-medium text-gray-700 mb-2">Số người lớn *</label>
					<input 
						type="number" 
						name="number_of_adults" 
						value="{{ old('number_of_adults', 2) }}"
						min="1"
						max="20"
						class="w-full border border-gray-300 rounded px-4 py-2 focus:border-primary focus:ring-1 focus:ring-primary outline-none"
						required
					>
				</div>

				<div>
					<label class="block text-sm font-medium text-gray-700 mb-2">Số trẻ em</label>
					<input 
						type="number" 
						name="number_of_children" 
						value="{{ old('number_of_children', 0) }}"
						min="0"
						max="10"
						class="w-full border border-gray-300 rounded px-4 py-2 focus:border-primary focus:ring-1 focus:ring-primary outline-none"
					>
				</div>

				<div class="md:col-span-2">
					<label class="block text-sm font-medium text-gray-700 mb-2">Loại phòng *</label>
					<select 
						name="room_type_id" 
						class="w-full border border-gray-300 rounded px-4 py-2 focus:border-primary focus:ring-1 focus:ring-primary outline-none"
						required
					>
						<option value="">-- Chọn loại phòng --</option>
						@forelse($roomTypes ?? [] as $roomType)
							<option value="{{ $roomType->id }}" {{ old('room_type_id') == $roomType->id ? 'selected' : '' }}>
								{{ $roomType->name }} 
								@if($roomType->price_per_night)
									- {{ number_format($roomType->price_per_night, 0, ',', '.') }}đ/đêm
								@endif
								(Tối đa {{ $roomType->max_capacity }} người)
							</option>
						@empty
							<option value="">Chưa có phòng trống</option>
						@endforelse
					</select>
				</div>
			</div>
		</div>

		{{-- Services (Optional) --}}
		@if(!empty($services) && count($services) > 0)
		<div class="border-b pb-6">
			<h2 class="text-2xl font-display text-primary mb-4">Dịch vụ thêm (tùy chọn)</h2>
			<div class="space-y-2">
				@foreach($services as $service)
					<label class="flex items-center space-x-3 cursor-pointer">
						<input 
							type="checkbox" 
							name="services[]" 
							value="{{ $service->id }}"
							{{ in_array($service->id, old('services', [])) ? 'checked' : '' }}
							class="w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary"
						>
						<span class="text-gray-700">
							{{ $service->name }}
							@if($service->price)
								- {{ number_format($service->price, 0, ',', '.') }}đ
							@endif
						</span>
					</label>
				@endforeach
			</div>
		</div>
		@endif

		{{-- Special Requests --}}
		<div class="pb-6">
			<h2 class="text-2xl font-display text-primary mb-4">Yêu cầu đặc biệt</h2>
			<textarea 
				name="special_requests"
				rows="4"
				class="w-full border border-gray-300 rounded px-4 py-2 focus:border-primary focus:ring-1 focus:ring-primary outline-none"
				placeholder="Nhập yêu cầu đặc biệt của bạn (nếu có)"
			>{{ old('special_requests') }}</textarea>
		</div>

		{{-- Submit Button --}}
		<div class="flex justify-end space-x-4">
			<a href="{{ route('rooms.index') }}" class="bg-gray-200 text-gray-700 px-8 py-3 rounded hover:bg-gray-300 transition">
				Hủy
			</a>
			<button 
				type="submit"
				class="bg-primary text-white px-8 py-3 rounded hover:bg-primary-dark transition font-medium"
			>
				Đặt Phòng Ngay
			</button>
		</div>
	</form>
</section>

{{-- Booking Information --}}
<section class="bg-gray-50 py-12">
	<div class="max-w-4xl mx-auto px-4 md:px-8">
		<h3 class="text-2xl font-display text-primary mb-6 text-center">Chính sách đặt phòng</h3>
		<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
			<div class="bg-white p-6 rounded shadow">
				<h4 class="font-semibold text-lg mb-2">⏰ Giờ nhận/trả phòng</h4>
				<p class="text-gray-600 text-sm">Check-in: 14:00</p>
				<p class="text-gray-600 text-sm">Check-out: 12:00</p>
			</div>

			<div class="bg-white p-6 rounded shadow">
				<h4 class="font-semibold text-lg mb-2">💳 Thanh toán</h4>
				<p class="text-gray-600 text-sm">Đặt cọc 30% khi đặt phòng</p>
				<p class="text-gray-600 text-sm">Thanh toán phần còn lại khi check-in</p>
			</div>

			<div class="bg-white p-6 rounded shadow">
				<h4 class="font-semibold text-lg mb-2">🔄 Hủy phòng</h4>
				<p class="text-gray-600 text-sm">Miễn phí hủy trước 7 ngày</p>
				<p class="text-gray-600 text-sm">Phí hủy 50% trong vòng 7 ngày</p>
			</div>

			<div class="bg-white p-6 rounded shadow">
				<h4 class="font-semibold text-lg mb-2">📞 Liên hệ</h4>
				<p class="text-gray-600 text-sm">Hotline: 092 981 6699</p>
				<p class="text-gray-600 text-sm">Email: booking@thewanderingrosebavi.com</p>
			</div>
		</div>
	</div>
</section>

@endsection
