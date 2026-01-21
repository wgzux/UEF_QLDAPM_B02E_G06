<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Thanh Toán - The Wandering Rose</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet"/>
    <script>
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              primary: "#8B6B4E", 
              secondary: "#D4C5B0", 
            },
            fontFamily: {
              display: ["'Playfair Display'", "serif"],
              body: ["'Lato'", "sans-serif"],
            }
          },
        },
      };
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Lato:wght@300;400;700&display=swap');
    </style>
</head>
<body class="bg-white text-gray-700 font-body antialiased">
    
    {{-- Header --}}
    <header class="py-6 border-b border-gray-100 sticky top-0 bg-white z-40">
        <div class="max-w-7xl mx-auto px-4 md:px-8 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-xs uppercase tracking-widest text-[#8B6B4E] hover:text-[#6d543e] flex items-center">
                <span class="material-icons-outlined text-sm mr-1">west</span> TRỞ VỀ TRANG CHỦ
            </a>
            
            <div class="text-center">
                <h1 class="font-display text-2xl text-[#8B6B4E]">THE WANDERING ROSE</h1>
                <span class="font-display italic text-[#C5A065] text-sm">... Ba Vì ...</span>
            </div>
            
            <div class="flex items-center gap-2 border px-2 py-1 rounded border-gray-200">
                <span class="text-xs text-gray-500">VND</span>
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/21/Flag_of_Vietnam.svg" class="w-4 h-3 rounded-sm shadow-sm" alt="VN">
            </div>
        </div>
    </header>

    <div class="max-w-5xl mx-auto px-4 md:px-8 py-10">
        
        <div class="text-center mb-10">
            <h2 class="font-display text-4xl text-[#8B6B4E] mb-4">Thanh toán</h2>
            
            <div class="flex items-center justify-center gap-2 text-sm text-gray-600 mb-2">
                <span class="material-icons-outlined text-base">schedule</span>
                <span class="font-bold">10:00</span>
                <span>để tiến hành thanh toán trong</span>
            </div>
            <p class="text-xs text-gray-500">Cảnh báo: nếu bạn rời trang này, lựa chọn sẽ <span class="font-bold text-gray-800">KHÔNG</span> được giữ lại!</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            
            {{-- Left: Info --}}
            <div class="space-y-8">
                {{-- Booking Info --}}
                <div class="bg-[#FDFBF7] p-6 rounded-lg border border-[#F3EBE3]">
                    <h3 class="font-display text-2xl text-[#8B6B4E] mb-6 text-center">Thông tin đặt phòng</h3>
                    
                    <div class="flex justify-between font-bold text-gray-800 mb-2">
                        <span>{{ $totalRooms }} PHÒNG</span>
                        <span>{{ $booking->total_nights }} ĐÊM</span>
                    </div>
                    <div class="text-sm text-gray-500 mb-4 pb-4 border-b border-gray-200">
                        {{ $booking->check_in->format('d/m/Y') }} - {{ $booking->check_out->format('d/m/Y') }}
                    </div>
                    
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-600 font-bold">Nhận phòng</span>
                        <span>{{ $booking->check_in->format('d/m/Y') }}</span>
                    </div>
                    <div class="flex justify-between text-sm mb-6 pb-6 border-b border-gray-200">
                        <span class="text-gray-600 font-bold">Trả phòng</span>
                        <span>{{ $booking->check_out->format('d/m/Y') }}</span>
                    </div>
                    
                    <div class="space-y-3 mb-6">
                        @foreach($booking->roomTypes as $room)
                        <div class="flex justify-between text-sm">
                            <span class="font-bold text-[#8B6B4E]">{{ $room->name }}</span>
                            <div class="text-xs text-gray-500 flex gap-2">
                                <span class="flex items-center"><i class="material-icons-outlined text-[10px] mr-1">people</i> 02</span>
                                <span class="flex items-center"><i class="material-icons-outlined text-[10px] mr-1">child_care</i> 00</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                    <div class="pt-4 border-t border-gray-200">
                        <div class="flex justify-between items-center mb-2 text-sm text-gray-600">
                            <span>Yêu cầu bổ sung:</span>
                            <span class="italic text-gray-500">{{ $booking->special_requests ?? 'Không có' }}</span>
                        </div>
                        <div class="flex justify-between items-center font-bold text-gray-800 text-sm">
                            <span>Mã đặt phòng</span>
                            <span>{{ $booking->code }}</span>
                        </div>
                        <div class="flex justify-between items-center font-bold text-xl text-[#8B6B4E] mt-4">
                            <span>Tổng thanh toán</span>
                            <span>{{ number_format($booking->total_price) }} đ</span>
                        </div>
                        <p class="text-[10px] text-gray-400 text-right mt-1">(Bao gồm thuế GTGT 10% và phí dịch vụ 5%)</p>
                    </div>
                </div>
                
                {{-- Customer Info (Readonly) --}}
                <div>
                     <h3 class="font-display text-2xl text-[#8B6B4E] mb-6 text-center">Thông tin khách hàng</h3>
                     <div class="space-y-4 text-sm">
                         <div class="bg-gray-50 p-3 rounded border border-gray-200">
                             <span class="block text-xs text-gray-500 uppercase">Họ và tên</span>
                             <span class="font-medium">{{ $booking->customer_name }}</span>
                         </div>
                         <div class="bg-gray-50 p-3 rounded border border-gray-200">
                             <span class="block text-xs text-gray-500 uppercase">Số điện thoại</span>
                             <span class="font-medium">{{ $booking->customer_phone }}</span>
                         </div>
                         <div class="bg-gray-50 p-3 rounded border border-gray-200">
                             <span class="block text-xs text-gray-500 uppercase">Email</span>
                             <span class="font-medium">{{ $booking->customer_email }}</span>
                         </div>
                     </div>
                </div>
            </div>
            
            {{-- Right: QR Code --}}
            <div class="flex flex-col items-center justify-center bg-white p-8 border border-gra-100 shadow-md rounded-xl">
                <div class="mb-6">
                    <img src="https://img.vietqr.io/image/MB-0944085920-compact.png?amount=0&addInfo=DEMO&accountName=Therose" alt="VietQR Logo" class="h-8 mx-auto mb-4 object-contain"> 
                    {{-- Note: Using generic VietQR logo placeholder for header, actual QR below --}}
                    <div class="flex justify-center items-center gap-2 mb-4">
                         <img src="https://upload.wikimedia.org/wikipedia/commons/2/25/Img_logo_mbbank.jpg" class="h-8" alt="MB Bank">
                         <span class="font-bold text-[#1400c6] text-xl">MB Bank</span>
                    </div>
                </div>
                
                <div class="relative group">
                    <img src="{{ $qrUrl }}" alt="QR Code Thanh Toán" class="w-64 h-64 object-contain border-4 border-[#8B6B4E] rounded-lg shadow-lg">
                    <div class="absolute inset-0 flex items-center justify-center bg-white bg-opacity-90 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="text-[#8B6B4E] font-bold">Quét để thanh toán</span>
                    </div>
                </div>
                
                <div class="mt-8 text-center space-y-2 text-sm w-full">
                    <div class="flex justify-between border-b border-gray-100 pb-2">
                        <span class="text-gray-500">Người thụ hưởng</span>
                        <span class="font-bold text-gray-800 uppercase">PHAM QUANG VU</span>
                    </div>
                    <div class="flex justify-between border-b border-gray-100 pb-2">
                        <span class="text-gray-500">Số tài khoản</span>
                        <div class="flex items-center gap-2">
                            <span class="font-bold text-gray-800 tracking-wider">0944085920</span>
                            <button class="text-[#8B6B4E] hover:text-[#6d543e]"><span class="material-icons-outlined text-sm">content_copy</span></button>
                        </div>
                    </div>
                    <div class="flex justify-between border-b border-gray-100 pb-2">
                        <span class="text-gray-500">Số tiền</span>
                        <span class="font-bold text-[#8B6B4E]">{{ number_format($booking->total_price) }} VND</span>
                    </div>
                    <div class="flex justify-between pt-2">
                        <span class="text-gray-500">Nội dung</span>
                        <span class="font-bold text-gray-800">{{ $booking->code }} {{ $booking->customer_phone }}</span>
                    </div>
                </div>
                
                <form action="{{ route('booking.process-payment', $booking->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full mt-8 bg-[#8B6B4E] hover:bg-[#72563d] text-white py-3 font-bold uppercase tracking-widest rounded shadow transition-all">
                        XÁC NHẬN ĐÃ THANH TOÁN
                    </button>
                </form>
            </div>
            
        </div>
    </div>
    {{-- Removed JS script --}}
</body>
</html>
