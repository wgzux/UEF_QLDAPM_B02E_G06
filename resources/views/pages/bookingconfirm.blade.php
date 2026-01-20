<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Xác Nhận Thành Công - The Wandering Rose</title>
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
<body class="bg-[#FDFBF7] text-gray-700 font-body antialiased">
    
    {{-- Header --}}
    <header class="py-6 border-b border-gray-100 bg-[#FDFBF7]">
        <div class="max-w-7xl mx-auto px-4 md:px-8 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-xs uppercase tracking-widest text-[#8B6B4E] hover:text-[#6d543e] flex items-center">
                <span class="material-icons-outlined text-sm mr-1">west</span> TRỞ VỀ
            </a>
            
            <div class="text-center">
                <h1 class="font-display text-2xl text-[#8B6B4E]">THE WANDERING ROSE</h1>
                <span class="font-display italic text-[#C5A065] text-sm">... Ba Vì ...</span>
            </div>
            
            <div class="flex items-center gap-2 border px-2 py-1 rounded border-gray-200 bg-white">
                <span class="text-xs text-gray-500">VND</span>
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/21/Flag_of_Vietnam.svg" class="w-4 h-3 rounded-sm shadow-sm" alt="VN">
            </div>
        </div>
    </header>

    <div class="max-w-7xl mx-auto px-4 md:px-8 py-10">
        
        <div class="text-center mb-12">
            <h2 class="font-display text-5xl text-[#8B6B4E] mb-6">Xác nhận</h2>
            
            <div class="text-gray-600">
                <p>Đang tiến hành kiểm tra thông tin bạn sẽ nhận được thông báo qua mail và tin nhắn trong <span class="font-bold flex-inline items-center gap-1"><span class="material-icons-outlined text-sm align-text-bottom">schedule</span> 24:00:00</span></p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 bg-white p-8 rounded-xl shadow-sm">
            
            {{-- Left: Customer Info --}}
            <div>
                <h3 class="font-display text-3xl text-[#D4C5B0] text-center mb-8">Thông tin khách hàng</h3>
                
                <div class="space-y-4">
                    <div class="space-y-1">
                        <label class="text-xs text-gray-500">Họ và tên *</label>
                        <input type="text" value="{{ $booking->customer_name }}" readonly class="w-full border-gray-200 rounded text-sm bg-gray-50 text-gray-600 cursor-not-allowed">
                    </div>
                    
                    <div class="space-y-1">
                        <label class="text-xs text-gray-500">Số điện thoại *</label>
                        <div class="flex items-center">
                             <div class="flex items-center border border-r-0 border-gray-200 rounded-l px-3 py-2 bg-gray-100">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/2/21/Flag_of_Vietnam.svg" class="w-4 h-3 mr-2" alt="VN">
                                <span class="text-xs text-gray-500">▼</span>
                            </div>
                            <input type="text" value="{{ $booking->customer_phone }}" readonly class="w-full border-gray-200 rounded-r text-sm bg-gray-50 text-gray-600 cursor-not-allowed">
                        </div>
                    </div>
                    
                    <div class="space-y-1">
                        <label class="text-xs text-gray-500">Email *</label>
                        <input type="text" value="{{ $booking->customer_email }}" readonly class="w-full border-gray-200 rounded text-sm bg-gray-50 text-gray-600 cursor-not-allowed">
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4">
                         <div class="space-y-1">
                            <label class="text-xs text-gray-500">ID/Passport *</label>
                            <input type="text" readonly class="w-full border-gray-200 rounded text-sm bg-gray-50 cursor-not-allowed" placeholder="Nhập số định danh cá nhân">
                        </div>
                        <div class="space-y-1">
                            <label class="text-xs text-gray-500">Giới tính theo ID/Passport *</label>
                            <div class="w-full border border-gray-200 rounded text-sm bg-gray-50 px-3 py-2 text-gray-600">Nam</div>
                        </div>
                    </div>
                    
                     <div class="space-y-1">
                        <label class="text-xs text-gray-500">Ngày sinh *</label>
                        <input type="text" readonly class="w-full border-gray-200 rounded text-sm bg-gray-50 cursor-not-allowed" placeholder="Nhập số định danh cá nhân">
                    </div>
                    
                    <div class="space-y-1">
                        <label class="text-xs text-gray-500">Quốc tịch *</label>
                        <div class="w-full border border-gray-200 rounded text-sm bg-gray-50 px-3 py-2 text-gray-600">Việt Nam</div>
                    </div>
                </div>
            </div>

            {{-- Right: Booking Info --}}
            <div>
                 <h3 class="font-display text-3xl text-[#D4C5B0] text-center mb-8">Thông tin đặt phòng</h3>
                 
                 <div class="flex items-baseline gap-4 mb-2 text-gray-600 font-bold">
                     <span class="text-xl">{{ $totalRooms }} PHÒNG</span>
                     <span class="text-xl">{{ $booking->total_nights }} ĐÊM</span>
                 </div>
                 <div class="text-sm text-gray-500 mb-6 font-medium">
                     {{ $booking->check_in->format('d/m/Y') }} - {{ $booking->check_out->format('d/m/Y') }}
                 </div>
                 
                 <div class="flex justify-between text-sm mb-2">
                     <span class="font-bold">Nhận phòng</span>
                     <span>{{ $booking->check_in->format('d/m/Y') }}</span>
                 </div>
                 <div class="flex justify-between text-sm mb-6 pb-6 border-b border-gray-200">
                     <span class="font-bold">Trả phòng</span>
                     <span>{{ $booking->check_out->format('d/m/Y') }}</span>
                 </div>
                 
                 <div class="space-y-4 mb-6">
                     @foreach($booking->roomTypes as $room)
                    <div class="flex justify-between text-sm items-start">
                        <span class="font-bold text-[#8B6B4E] text-base">{{ $room->name }}</span>
                        <div class="text-xs text-gray-500 flex gap-2">
                            <span class="flex items-center"><i class="material-icons-outlined text-sm mr-1">people_outline</i> 00 người lớn</span>
                            <span class="flex items-center">00 trẻ em</span>
                            <span class="flex items-center">00 em bé</span>
                        </div>
                    </div>
                    @endforeach
                 </div>
                 
                 <div class="mb-6">
                     <label class="text-xs text-gray-500 block mb-1">Yêu cầu bổ sung (nếu có)</label>
                     <div class="w-full border border-gray-200 rounded p-3 text-sm bg-gray-50 text-gray-500 italic">
                         {{ $booking->special_requests ?? 'Không có' }}
                     </div>
                 </div>
                 
                 <div class="pt-6 border-t border-gray-200 space-y-4">
                     <div class="flex justify-between items-center font-bold text-gray-800">
                         <span>Mã đặt phòng</span>
                         <span class="text-gray-500">{{ $booking->code }}</span>
                     </div>
                     <div class="flex justify-between items-center text-xl font-bold">
                         <span>Tổng thanh toán</span>
                         <span class="text-[#8B6B4E]">{{ number_format($booking->total_price) }} đ</span>
                     </div>
                     <p class="text-[10px] text-gray-400 text-right">(Bao gồm thuế GTGT 10% và phí dịch vụ 5%)</p>
                 </div>
            </div>
            
        </div>
    </div>

</body>
</html>
