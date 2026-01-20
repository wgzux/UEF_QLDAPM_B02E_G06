<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Xác Nhận & Thanh Toán - The Wandering Rose</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet"/>
  <!-- Fonts/Config omitted, same as consistent theme -->
  <link rel="stylesheet" href="/css/pages/BookingDetails.css">
  <script>
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              primary: "#a67c52",
              "brand-brown": "#9e7b5b",
            },
            fontFamily: {
              display: ["'Playfair Display'", "serif"],
              body: ["'Work Sans'", "sans-serif"],
            },
          },
        },
      };
    </script>
</head>

<body class="bg-gray-50 text-gray-700 font-body">

<header class="pt-6 pb-4 px-4 md:px-12 flex justify-between items-center bg-white shadow-sm relative z-10">
  <a class="flex items-center text-xs tracking-widest text-primary hover:opacity-80 transition-opacity uppercase" href="javascript:history.back()">
    <span class="material-icons-outlined text-sm mr-1">arrow_back</span>
    Quay lại chọn phòng
  </a>

  <div class="text-center">
    <h1 class="font-display text-2xl md:text-3xl text-primary tracking-wide">THE WANDERING ROSE</h1>
    <p class="font-display text-lg italic text-primary opacity-80">Booking Confirmation</p>
  </div>
  
  <div class="w-20"></div> {{-- Spacer --}}
</header>

<div class="px-4 md:px-12 py-8 max-w-6xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
        
        {{-- LEFT: Customer Info Form --}}
        <div class="lg:col-span-8">
            <h2 class="font-display text-2xl text-primary mb-6">Thông tin khách hàng</h2>
            
            <form action="{{ route('booking.store') }}" method="POST" class="bg-white p-8 rounded-lg shadow-sm">
                @csrf
                <input type="hidden" name="check_in" value="{{ $checkIn->format('Y-m-d') }}">
                <input type="hidden" name="check_out" value="{{ $checkOut->format('Y-m-d') }}">
                <input type="hidden" name="adults" value="{{ $adults }}">
                <input type="hidden" name="children" value="{{ $children }}">
                
                {{-- Passing selected rooms again to final store --}}
                @foreach($selectedRooms as $item)
                    <input type="hidden" name="rooms[{{ $item['room']->id }}]" value="{{ $item['quantity'] }}">
                @endforeach

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div class="space-y-1">
                        <label class="text-xs uppercase font-bold text-gray-500">Họ và tên *</label>
                        <input type="text" name="name" required class="w-full border-gray-300 rounded focus:ring-primary focus:border-primary" placeholder="Nguyen Van A">
                    </div>
                    <div class="space-y-1">
                        <label class="text-xs uppercase font-bold text-gray-500">Số điện thoại *</label>
                        <input type="tel" name="phone" required class="w-full border-gray-300 rounded focus:ring-primary focus:border-primary" placeholder="0901234567">
                    </div>
                </div>
                
                <div class="mb-6 space-y-1">
                    <label class="text-xs uppercase font-bold text-gray-500">Email *</label>
                    <input type="email" name="email" required class="w-full border-gray-300 rounded focus:ring-primary focus:border-primary" placeholder="email@example.com">
                </div>
                
                <div class="mb-6 space-y-1">
                    <label class="text-xs uppercase font-bold text-gray-500">Yêu cầu đặc biệt</label>
                    <textarea name="special_requests" rows="3" class="w-full border-gray-300 rounded focus:ring-primary focus:border-primary" placeholder="Ghi chú thêm..."></textarea>
                </div>
                
                <div class="border-t pt-6 mt-6">
                    <button type="submit" class="w-full bg-[#9e7b5b] hover:bg-[#8c6d51] text-white py-4 text-sm font-bold uppercase tracking-widest rounded shadow-lg transition-all">
                        HOÀN TẤT ĐẶT PHÒNG
                    </button>
                    <p class="text-xs text-center text-gray-500 mt-4 italic">Nhân viên sẽ liên hệ lại để xác nhận trong vòng 24h.</p>
                </div>
            </form>
        </div>
        
        {{-- RIGHT: Summary --}}
        <div class="lg:col-span-4">
            <div class="bg-white p-6 rounded-lg shadow-lg sticky top-8 border-t-4 border-[#9e7b5b]">
                <h3 class="font-display text-xl text-primary mb-6 text-center">Tóm tắt đơn hàng</h3>
                
                <div class="flex justify-between items-center mb-4 pb-4 border-b border-dashed">
                    <div>
                        <p class="text-xs uppercase text-gray-500">Ngày nhận</p>
                        <p class="font-bold text-lg">{{ $checkIn->format('d/m/Y') }}</p>
                    </div>
                    <div class="text-right">
                        <p class="text-xs uppercase text-gray-500">Ngày trả</p>
                        <p class="font-bold text-lg">{{ $checkOut->format('d/m/Y') }}</p>
                    </div>
                </div>
                
                <p class="text-center text-sm font-bold bg-gray-100 py-2 rounded mb-6 text-gray-600">
                    {{ $nights }} Đêm  •  {{ $adults }} Người lớn  •  {{ $children }} Trẻ em
                </p>
                
                <div class="space-y-4 mb-6">
                    @foreach($selectedRooms as $item)
                    <div class="flex justify-between items-start text-sm">
                        <div>
                            <span class="font-bold block text-gray-800">{{ $item['room']->name }}</span>
                            <span class="text-xs text-gray-500">Số lượng: {{ $item['quantity'] }}</span>
                        </div>
                        <span class="font-medium">{{ number_format($item['subtotal']) }} ₫</span>
                    </div>
                    @endforeach
                </div>
                
                <div class="flex justify-between items-center pt-6 border-t font-bold text-xl text-primary">
                    <span>Tổng cộng</span>
                    <span>{{ number_format($grandTotal) }} ₫</span>
                </div>
            </div>
        </div>
        
    </div>
</div>

</body>
</html>
