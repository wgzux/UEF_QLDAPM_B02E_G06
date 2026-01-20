<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Xác Nhận & Thanh Toán - The Wandering Rose</title>
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
              "background-light": "#EAE7E2",
              "background-dark": "#1F1C18", 
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
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Lato:wght@300;400;700&display=swap');
        
        .custom-radio:checked + div {
            border-color: #8B6B4E;
            background-color: #FDFBF7;
        }
        .custom-radio:checked + div .check-icon {
            opacity: 1;
        }
    </style>
</head>

<body class="bg-white text-gray-700 font-body antialiased">

<form action="{{ route('booking.store') }}" method="POST" id="confirmForm">
    @csrf
    <input type="hidden" name="check_in" value="{{ $checkIn->format('Y-m-d') }}">
    <input type="hidden" name="check_out" value="{{ $checkOut->format('Y-m-d') }}">
    <input type="hidden" name="adults" value="{{ $adults }}">
    <input type="hidden" name="children" value="{{ $children }}">
    
    @foreach($selectedRooms as $item)
        <input type="hidden" name="rooms[{{ $item['room']->id }}]" value="{{ $item['quantity'] }}">
    @endforeach

    {{-- Header --}}
    <header class="py-6 border-b border-gray-100 sticky top-0 bg-white z-40">
        <div class="max-w-7xl mx-auto px-4 md:px-8 flex justify-between items-center">
            <a href="{{ route('booking.select-rooms', ['check_in' => $checkIn->format('Y-m-d'), 'check_out' => $checkOut->format('Y-m-d'), 'adults' => $adults, 'children' => $children]) }}" class="text-xs uppercase tracking-widest text-[#8B6B4E] hover:text-[#6d543e] flex items-center">
                <span class="material-icons-outlined text-sm mr-1">west</span> TRỞ VỀ
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

    <div class="max-w-7xl mx-auto px-4 md:px-8 py-10">
        {{-- Title & Timer --}}
        <div class="text-center mb-10">
            <h2 class="font-display text-4xl text-[#8B6B4E] mb-4">Xác nhận thông tin</h2>
            
            <div class="flex items-center justify-center gap-2 text-sm text-gray-600 mb-2">
                <span class="material-icons-outlined text-base">schedule</span>
                <span class="font-bold" id="countdown-timer">10:00</span>
                <span>để tiến hành thanh toán trong</span>
            </div>
            <p class="text-xs text-gray-500">Cảnh báo: nếu bạn rời trang này, lựa chọn sẽ <span class="font-bold text-gray-800">KHÔNG</span> được giữ lại!</p>
        </div>

        {{-- Booking Info Bar --}}
        <div class="bg-[#FDFBF7] p-6 rounded-lg mb-10 border border-[#F3EBE3]">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="flex items-center gap-6 text-sm">
                    <span class="text-gray-500 text-xs uppercase tracking-wider font-bold">THÔNG TIN ĐẶT PHÒNG</span>
                    <span class="font-bold">{{ $totalRooms }} PHÒNG</span>
                    <span class="font-bold">{{ $nights }} ĐÊM</span>
                    <span class="font-bold">{{ $adults }} NGƯỜI LỚN</span>
                    <span class="font-bold">{{ $children }} TRẺ EM</span>
                </div>
                <div class="flex items-center gap-4 text-sm font-medium text-[#8B6B4E]">
                    <span>{{ $checkIn->format('d/m/Y') }} - {{ $checkOut->format('d/m/Y') }}</span>
                    <a href="{{ route('booking.create') }}" class="border border-[#8B6B4E] px-3 py-1 rounded text-xs hover:bg-[#8B6B4E] hover:text-white transition-colors uppercase">Thay đổi kế hoạch</a>
                </div>
            </div>
            
            <div class="flex justify-between mt-4 text-sm border-t border-[#F3EBE3] pt-4">
                <div class="flex justify-between w-full md:w-1/2 pr-0 md:pr-12">
                    <div>
                        <span class="block text-gray-500 text-xs mb-1 text-[#C19D60]">Nhận phòng</span>
                        {{-- <span class="font-bold">{{ $checkIn->format('d/m/Y') }}</span> --}}
                        {{-- Using static dates from image as placeholder or dynamic? using dynamic --}}
                        <span class="font-medium text-gray-700">{{ $checkIn->format('d/m/Y') }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-xs mb-1 text-[#C19D60] text-right">Trả phòng</span>
                        <span class="font-medium text-gray-700">{{ $checkOut->format('d/m/Y') }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            
            {{-- COLUMN LEFT --}}
            <div class="space-y-12">
                {{-- Room Details --}}
                <section>
                    <h3 class="font-display text-2xl text-[#8B6B4E] mb-6 text-center lg:text-left">Phòng đã chọn</h3>
                    
                    <div class="space-y-6">
                        @foreach($selectedRooms as $index => $item)
                        @for($i = 0; $i < $item['quantity']; $i++)
                        <div class="border border-gray-100 rounded-lg p-6 shadow-sm">
                            <div class="flex justify-between items-start mb-4">
                                <h4 class="font-display text-lg text-[#8B6B4E]">{{ $item['room']->name }} {{ $item['quantity'] > 1 ? '#' . ($i + 1) : '' }}</h4>
                                <div class="flex items-center gap-3 text-xs text-gray-500">
                                    <span class="material-icons-outlined text-sm">people</span>
                                    <span>02 người lớn</span>
                                    <span>00 trẻ em (< 6 tuổi)</span>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label class="block text-xs text-gray-500 mb-1">Họ và tên *</label>
                                    <input type="text" name="guests[{{ $item['room']->id }}][{{ $i }}][name]" class="w-full text-sm border-gray-200 rounded focus:ring-[#8B6B4E] focus:border-[#8B6B4E]" placeholder="Nhập họ và tên">
                                </div>
                                <div class="grid grid-cols-3 gap-2">
                                    <div>
                                        <label class="block text-xs text-center text-gray-500 mb-1">Người lớn</label>
                                        <div class="flex items-center justify-between border border-gray-200 rounded px-2 py-1">
                                            <button type="button" class="text-gray-400 text-xs hover:text-[#8B6B4E]">-</button>
                                            <span class="text-xs font-bold">02</span>
                                            <button type="button" class="text-gray-400 text-xs hover:text-[#8B6B4E]">+</button>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block text-xs text-center text-gray-500 mb-1">Trẻ em</label>
                                        <div class="flex items-center justify-between border border-gray-200 rounded px-2 py-1">
                                            <button type="button" class="text-gray-400 text-xs hover:text-[#8B6B4E]">-</button>
                                            <span class="text-xs font-bold">00</span>
                                            <button type="button" class="text-gray-400 text-xs hover:text-[#8B6B4E]">+</button>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block text-xs text-center text-gray-500 mb-1">Em bé</label>
                                        <div class="flex items-center justify-between border border-gray-200 rounded px-2 py-1">
                                            <button type="button" class="text-gray-400 text-xs hover:text-[#8B6B4E]">-</button>
                                            <span class="text-xs font-bold">00</span>
                                            <button type="button" class="text-gray-400 text-xs hover:text-[#8B6B4E]">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                        @endforeach
                    </div>
                    
                    <div class="mt-6">
                        <label class="block text-xs text-gray-500 mb-2">Yêu cầu bổ sung (nếu có)</label>
                        <textarea name="special_requests" rows="3" class="w-full text-sm border-gray-200 rounded focus:ring-[#8B6B4E] focus:border-[#8B6B4E]" placeholder="Nhập tin nhắn"></textarea>
                    </div>
                </section>
                
                {{-- Policy --}}
                <section>
                    <h3 class="font-display text-4xl text-[#D4C5B0] text-center mb-6">Chính sách villa</h3>
                    
                    <div class="space-y-6 text-sm text-gray-600 font-light">
                        <div>
                            <h4 class="font-display text-xl text-[#8B6B4E] mb-2">Thanh toán & huỷ đặt phòng</h4>
                            <ul class="list-disc pl-5 space-y-1">
                                <li>Đặt cọc 50% tổng giá trị booking để xác nhận giữ phòng.</li>
                                <li>Thanh toán 50% còn lại trước khi check-in.</li>
                                <li>Huỷ phòng trước 7 ngày: Miễn phí huỷ phòng.</li>
                                <li>Huỷ phòng trong vòng 7 ngày: Phí phạt 100% tiền cọc.</li>
                            </ul>
                        </div>
                        
                        <div>
                            <h4 class="font-display text-xl text-[#8B6B4E] mb-2">Thời gian nhận và trả phòng</h4>
                            <ul class="list-disc pl-5 space-y-1">
                                <li>Giờ nhận phòng: 14:00</li>
                                <li>Giờ trả phòng: 12:00</li>
                                <li>Nhận phòng sớm hoặc trả phòng muộn tuỳ thuộc vào tình trạng phòng trống và có thể tính phí phụ thu.</li>
                            </ul>
                        </div>
                        
                        <div>
                            <h4 class="font-display text-xl text-[#8B6B4E] mb-2">Chính sách trẻ em</h4>
                            <ul class="list-disc pl-5 space-y-1">
                                <li>Trẻ em dưới 6 tuổi: Miễn phí (ngủ chung giường với bố mẹ).</li>
                                <li>Trẻ em từ 6-11 tuổi: Phụ thu ăn sáng.</li>
                                <li>Trẻ em từ 12 tuổi trở lên: Tính như người lớn.</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>

            {{-- COLUMN RIGHT --}}
            <div class="space-y-12">
                {{-- Customer Info --}}
                <section>
                    <h3 class="font-display text-2xl text-[#8B6B4E] mb-6 text-center lg:text-left">Thông tin khách hàng</h3>
                    
                    <div class="space-y-4">
                        <div class="space-y-1">
                            <label class="text-xs text-gray-500">Họ và tên *</label>
                            <input type="text" name="name" required class="w-full border-gray-200 rounded text-sm focus:ring-[#8B6B4E] focus:border-[#8B6B4E]" placeholder="Nhập họ và tên">
                        </div>
                        
                        <div class="space-y-1">
                            <label class="text-xs text-gray-500">Số điện thoại *</label>
                            <div class="flex items-center">
                                <div class="flex items-center border border-r-0 border-gray-200 rounded-l px-3 py-2 bg-gray-50">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/2/21/Flag_of_Vietnam.svg" class="w-4 h-3 mr-2" alt="VN">
                                    <span class="text-xs text-gray-500">▼</span>
                                </div>
                                <input type="tel" name="phone" required class="w-full border-gray-200 rounded-r text-sm focus:ring-[#8B6B4E] focus:border-[#8B6B4E]" placeholder="Nhập số điện thoại">
                            </div>
                        </div>
                        
                        <div class="space-y-1">
                            <label class="text-xs text-gray-500">Email *</label>
                            <input type="email" name="email" required class="w-full border-gray-200 rounded text-sm focus:ring-[#8B6B4E] focus:border-[#8B6B4E]" placeholder="Nhập địa chỉ email">
                        </div>
                        
                        <div class="grid grid-cols-2 gap-4">
                            <div class="space-y-1">
                                <label class="text-xs text-gray-500">ID/Passport *</label>
                                <input type="text" name="id_passport" class="w-full border-gray-200 rounded text-sm focus:ring-[#8B6B4E] focus:border-[#8B6B4E]" placeholder="Nhập số định danh">
                            </div>
                            <div class="space-y-1">
                                <label class="text-xs text-gray-500">Giới tính theo ID/Passport *</label>
                                <select name="gender" class="w-full border-gray-200 rounded text-sm focus:ring-[#8B6B4E] focus:border-[#8B6B4E]">
                                    <option value="male">Nam</option>
                                    <option value="female">Nữ</option>
                                    <option value="other">Khác</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="space-y-1">
                            <label class="text-xs text-gray-500">Ngày sinh *</label>
                            <input type="date" name="dob" class="w-full border-gray-200 rounded text-sm focus:ring-[#8B6B4E] focus:border-[#8B6B4E]">
                        </div>
                        
                        <div class="space-y-1">
                            <label class="text-xs text-gray-500">Quốc tịch *</label>
                            <select name="nationality" class="w-full border-gray-200 rounded text-sm focus:ring-[#8B6B4E] focus:border-[#8B6B4E]">
                                <option value="vn">Việt Nam</option>
                                <option value="us">United States</option>
                                <option value="other">Khác</option>
                            </select>
                        </div>
                    </div>
                </section>
                
                {{-- Payment Summary --}}
                <section>
                    <h3 class="font-display text-2xl text-[#8B6B4E] mb-6 text-center lg:text-left">Thông tin thanh toán</h3>
                    
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <div class="flex justify-between items-center mb-4 font-bold text-sm text-gray-800">
                            <span>Chi tiết</span>
                            <span>Giá (VNĐ)</span>
                        </div>
                        
                        <div class="space-y-3 mb-6 pb-6 border-b border-gray-200 text-sm">
                            @foreach($selectedRooms as $item)
                            <div class="flex justify-between text-[#8B6B4E]">
                                <span>{{ $item['room']->name }}</span>
                                <span>{{ number_format($item['subtotal']) }} đ</span>
                            </div>
                            @endforeach
                        </div>
                        
                        {{-- Coupon --}}
                        <div class="flex gap-2 mb-6">
                            <input type="text" placeholder="Nhập mã giảm giá" class="w-full text-sm border-gray-200 rounded focus:ring-[#8B6B4E] focus:border-[#8B6B4E]">
                            <button type="button" class="text-xs whitespace-nowrap text-gray-400 hover:text-[#8B6B4E] underline">Chọn mã ưu đãi</button>
                        </div>
                        
                        <div class="space-y-3 text-sm text-gray-600 font-bold mb-6 pb-6 border-b border-gray-200">
                            <div class="flex justify-between">
                                <span>Tiền phòng</span>
                                <span>{{ number_format($grandTotal) }} đ</span>
                            </div>
                            @if($hasWeekend && $surcharge > 0)
                            <div class="flex justify-between text-orange-600">
                                <span>Phụ thu cuối tuần ({{ $weekendNights }} đêm × {{ $surchargePercent }}%)</span>
                                <span>{{ number_format($surcharge) }} đ</span>
                            </div>
                            @endif
                            <div class="flex justify-between">
                                <span>Dịch vụ</span>
                                <span>0 đ</span>
                            </div>
                            <div class="flex justify-between text-[#8B6B4E]">
                                <span>Khuyến mãi</span>
                                <span>0 đ</span>
                            </div>
                        </div>
                        
                        <div class="flex justify-between items-center mb-2 font-bold text-gray-800">
                            <span>Tổng thanh toán</span>
                            <span>{{ number_format($finalTotal) }} đ</span>
                        </div>
                        @if($hasWeekend)
                        <p class="text-[10px] text-red-500 text-right mb-2">* Giá này áp dụng tăng {{ $surchargePercent }}% khi quý khách đặt Thứ 7 - Chủ nhật</p>
                        @endif
                        <p class="text-[10px] text-gray-400 text-right mb-6">(Bao gồm thuế GTGT 10% và phí dịch vụ 5%)</p>
                        
                        {{-- Payment Method --}}
                        <div class="mb-6">
                            <label class="flex items-center gap-3 p-3 border border-gray-200 rounded cursor-pointer bg-white">
                                <input type="radio" name="payment_method" value="bank_transfer" class="custom-radio text-[#8B6B4E] focus:ring-[#8B6B4E]" checked>
                                <span class="material-icons-outlined text-gray-500">account_balance</span>
                                <span class="text-sm font-medium">Thanh toán chuyển khoản</span>
                            </label>
                        </div>
                        
                        <div class="mb-6 flex items-start gap-2">
                            <input type="checkbox" required class="mt-1 text-[#8B6B4E] rounded border-gray-300 focus:ring-[#8B6B4E]">
                            <span class="text-xs text-gray-500">Tôi đã đọc và đồng ý với chính sách của villa</span>
                        </div>
                        
                        <button type="submit" class="w-full bg-[#afab95] hover:bg-[#9e9a85] text-white py-4 text-xs font-bold uppercase tracking-widest rounded shadow transition-colors">
                            XÁC NHẬN ĐẾN BƯỚC THANH TOÁN
                        </button>
                    </div>
                </section>
            </div>
        </div>
    </div>
</form>

<script>
    // Countdown Timer logic
    let duration = 600; // 10 minutes in seconds
    const timerDisplay = document.getElementById('countdown-timer');
    
    const timer = setInterval(() => {
        const minutes = Math.floor(duration / 60);
        const seconds = duration % 60;
        
        timerDisplay.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
        
        if (--duration < 0) {
            clearInterval(timer);
            alert("Hết thời gian giữ phòng. Vui lòng thực hiện lại.");
            window.location.href = "{{ route('booking.create') }}";
        }
    }, 1000);
    
    // Warn before unload
    window.onbeforeunload = function() {
        return "Dữ liệu sẽ không được lưu nếu bạn rời đi?";
    };
    
    // Disable warning on form submit
    document.getElementById('confirmForm').onsubmit = function() {
        window.onbeforeunload = null;
    };
</script>

</body>
</html>
