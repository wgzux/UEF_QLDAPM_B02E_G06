<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Chọn Phòng - The Wandering Rose Ba Vì</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
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
  </head>

  <body class="bg-background-light dark:bg-background-dark text-gray-700 dark:text-gray-300 font-body antialiased transition-colors duration-300">
    <form action="{{ route('booking.confirm-details') }}" method="POST" id="bookingForm">
        @csrf
        <input type="hidden" name="check_in" value="{{ $checkIn->format('Y-m-d') }}">
        <input type="hidden" name="check_out" value="{{ $checkOut->format('Y-m-d') }}">
        <input type="hidden" name="nights" value="{{ $nights }}">
        <input type="hidden" name="adults" value="{{ $adults }}">
        <input type="hidden" name="children" value="{{ $children }}">

        <header class="sticky top-0 z-40 bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-md shadow-sm border-b border-[#D4C5B0] dark:border-gray-800">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <a href="{{ route('booking.create') }}" class="flex items-center text-sm uppercase tracking-widest text-[#8B6B4E] hover:text-[#5D4037] dark:text-[#D4C5B0] dark:hover:text-white transition-colors">
              <span class="material-icons-outlined mr-1 text-lg">west</span>
              CHỌN LẠI NGÀY
            </a>

            <div class="flex flex-col items-center">
              <h1 class="font-display text-2xl lg:text-3xl text-[#8B6B4E] dark:text-[#D4C5B0] tracking-wide">
                THE WANDERING ROSE
              </h1>
              <span class="font-display italic text-lg text-[#C5A065]">Ba Vì</span>
            </div>

            <div class="relative">
                <button type="button" class="flex items-center space-x-2 border border-gray-300 dark:border-gray-600 px-3 py-1 rounded text-sm bg-transparent">
                    <span>VND</span>
                </button>
            </div>
          </div>

          <div class="bg-background-light dark:bg-background-dark border-t border-[#D4C5B0]/30 dark:border-gray-700 py-4">
            <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0 text-[#5D4037] dark:text-[#D4C5B0]">
              <div class="flex items-center space-x-8">
                <div class="text-center">
                  <p class="text-xs uppercase tracking-widest text-gray-500 dark:text-gray-400 mb-1">
                    KỲ NGHỈ
                    <span class="bg-[#8B6B4E] text-white px-2 py-0.5 rounded text-[10px] ml-1">{{ $nights }} Đêm</span>
                  </p>
                  <div class="flex items-baseline space-x-4">
                    <div>
                      <span class="font-display text-4xl">{{ $checkIn->day }}</span>
                      <span class="text-xs text-gray-500 dark:text-gray-400 block -mt-1">Tháng {{ $checkIn->month }} {{ $checkIn->year }}</span>
                    </div>
                    <div class="h-8 w-[1px] bg-gray-300 dark:bg-gray-600"></div>
                    <div>
                      <span class="font-display text-4xl">{{ $checkOut->day }}</span>
                      <span class="text-xs text-gray-500 dark:text-gray-400 block -mt-1">Tháng {{ $checkOut->month }} {{ $checkOut->year }}</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="flex items-center space-x-10 md:border-l md:border-r border-gray-300 dark:border-gray-600 px-8">
                <div class="text-center">
                  <p class="text-xs uppercase font-bold tracking-widest mb-1">PHÒNG</p>
                  <span class="font-display text-3xl">{{ $roomQty }}</span>
                </div>
                <div class="text-center">
                  <p class="text-xs uppercase font-bold tracking-widest mb-1">NGƯỜI LỚN</p>
                  <span class="font-display text-3xl">{{ $adults }}</span>
                </div>
                <!-- Optional: Children -->
                <div class="text-center">
                  <p class="text-xs uppercase font-bold tracking-widest mb-1">TRẺ EM</p>
                  <span class="font-display text-3xl">{{ $children }}</span>
                </div>
              </div>
              
              <button type="submit" class="bg-[#8B6B4E] hover:bg-[#72563d] text-white px-8 py-2 text-xs uppercase tracking-widest rounded shadow-md transition-all">
                TIẾP TỤC <span class="material-icons-outlined text-sm align-middle ml-1">arrow_forward</span>
              </button>
            </div>
          </div>
        </header>

        <!-- Sticky Summary Bar (Initially Hidden) -->
        <div id="sticky-summary" class="bg-[#8B6B4E] dark:bg-[#5D4037] text-white py-3 sticky top-[138px] z-30 shadow-md transform translate-y-full opacity-0 transition-all duration-300 fixed bottom-0 left-0 right-0 hidden">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row justify-between items-center">
            <div class="text-sm font-light tracking-wide mb-2 sm:mb-0">
              <span class="opacity-80 uppercase">BẠN ĐÃ LỰA CHỌN:</span>
              <span class="font-bold ml-2" id="total-rooms-count">0 PHÒNG</span>
              <span class="mx-2 opacity-50">|</span>
              <span class="font-bold">{{ $nights }} ĐÊM</span>
            </div>
            <div class="flex items-center space-x-4">
              <span class="font-display text-xl font-bold" id="grand-total-display">0 ₫</span>
              <button type="button" onclick="openConfirmationModal()" class="bg-[#D4C5B0] text-[#5D4037] hover:bg-white text-xs font-bold px-4 py-2 rounded uppercase tracking-widest transition-colors">
                XÁC NHẬN
              </button>
            </div>
          </div>
        </div>

        {{-- Confirmation Modal --}}
        <div id="confirmation-modal" class="fixed inset-0 z-50 flex items-center justify-center invisible opacity-0 transition-all duration-300">
            <div class="absolute inset-0 bg-black/50 backdrop-blur-sm" onclick="closeConfirmationModal()"></div>
            <div class="relative bg-white dark:bg-[#1F1C18] w-full max-w-2xl rounded-lg shadow-2xl p-6 m-4 transform scale-95 transition-all duration-300" id="modal-content">
                <div class="flex justify-between items-center mb-6 border-b border-gray-100 dark:border-gray-800 pb-4">
                    <div>
                        <h3 class="text-lg font-display text-[#8B6B4E]">BẠN ĐÃ LỰA CHỌN: <span id="modal-total-rooms" class="font-bold text-gray-800 dark:text-gray-200">0 PHÒNG</span> <span class="text-gray-400 mx-2">|</span> {{ $nights }} ĐÊM</h3>
                        <p class="text-sm text-gray-500 mt-1">{{ $checkIn->format('d/m/Y') }} - {{ $checkOut->format('d/m/Y') }}</p>
                    </div>
                    <button type="button" onclick="closeConfirmationModal()" class="text-gray-400 hover:text-gray-600">
                        <span class="material-icons-outlined">close</span>
                    </button>
                </div>
                
                <div id="modal-items-list" class="space-y-4 max-h-[60vh] overflow-y-auto mb-6 custom-scrollbar">
                    {{-- Items injected by JS --}}
                </div>
                
                <div class="flex items-center justify-between border-t border-gray-100 dark:border-gray-800 pt-6">
                    <div>
                        <p class="text-xs text-gray-500 uppercase tracking-widest mb-1">TẠM TÍNH</p>
                        <p class="font-display text-2xl font-bold text-[#8B6B4E]" id="modal-grand-total">0 ₫</p>
                    </div>
                    <button type="submit" class="bg-[#C19D60] hover:bg-[#a88b68] text-white px-8 py-3 rounded text-sm font-bold uppercase tracking-widest shadow-lg transform hover:-translate-y-0.5 transition-all flex items-center">
                        ĐẶT NGAY <span class="material-icons-outlined ml-2">check_circle</span>
                    </button>
                </div>
            </div>
        </div>

        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 relative">
            <div class="grid grid-cols-1 gap-16 lg:pr-[50px]">
                
                @foreach($rooms as $room)
                <div class="group border-b pb-8 border-gray-200">
                  <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-start">
                    <div class="md:col-span-7 relative overflow-hidden rounded-lg shadow-md aspect-[4/3]">
                      <img
                        alt="{{ $room->name }}"
                        class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700"
                        src="{{ $room->image }}" 
                      />
                    </div>

                    <div class="md:col-span-5 flex flex-col h-full justify-center pl-4">
                      <h2 class="font-display text-3xl text-[#8B6B4E] dark:text-[#D4C5B0] mb-4">
                        {{ $room->name }}
                      </h2>

                      <div class="space-y-2 mb-6 text-sm text-gray-600 dark:text-gray-400 font-light">
                        <div class="flex items-center space-x-3">
                          <span class="material-icons-outlined text-lg w-5">person_outline</span>
                          <span>Tối đa {{ $room->max_capacity }} người</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <span class="material-icons-outlined text-lg w-5">child_care</span>
                            <span>Tối đa {{ $room->max_children }} trẻ em</span>
                        </div>
                        @if($room->size)
                        <div class="flex items-center space-x-3">
                          <span class="material-icons-outlined text-lg w-5">square_foot</span>
                          <span>{{ $room->size }} m²</span>
                        </div>
                        @endif
                        @if($room->bed_info)
                        <div class="flex items-center space-x-3">
                          <span class="material-icons-outlined text-lg w-5">bed</span>
                          <span>{{ $room->bed_info }}</span>
                        </div>
                        @endif
                        @if($room->view_direction)
                        <div class="flex items-center space-x-3">
                            <span class="material-icons-outlined text-lg w-5">landscape</span>
                            <span>Hướng {{ $room->view_direction }}</span>
                        </div>
                        @endif
                      </div>

                      <div class="border-t border-[#D4C5B0]/30 dark:border-gray-700 pt-6">
                        <div class="flex items-baseline mb-1">
                          <span class="font-display text-2xl text-[#8B6B4E] dark:text-[#D4C5B0]">
                            {{ number_format($room->base_price * $nights) }} ₫
                          </span>
                          <span class="text-xs text-gray-500 ml-2">({{ $nights }} đêm)</span>
                        </div>
                        <p class="text-xs text-gray-500 mb-3 italic">Giá gốc: {{ number_format($room->base_price) }}₫ / đêm</p>

                        <div class="flex items-center justify-between">
                            <!-- Quantity Selector -->
                          <div class="flex items-center border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-800">
                            <button type="button" onclick="updateQty({{ $room->id }}, -1, {{ $room->base_price * $nights }}, '{{ addslashes($room->name) }}')" class="px-3 py-1.5 text-gray-500 hover:text-[#8B6B4E] transition-colors">-</button>
                            <input
                              class="w-10 text-center text-sm bg-transparent border-none p-0 text-gray-700 dark:text-gray-300 focus:ring-0"
                              type="text"
                              name="rooms[{{ $room->id }}]"
                              id="room-qty-{{ $room->id }}"
                              value="0"
                              readonly
                            />
                            <button type="button" onclick="updateQty({{ $room->id }}, 1, {{ $room->base_price * $nights }}, '{{ addslashes($room->name) }}')" class="px-3 py-1.5 text-gray-500 hover:text-[#8B6B4E] transition-colors">+</button>
                          </div>

                          <div class="flex space-x-2">
                             <span class="text-xs text-gray-400 self-center" id="room-subtotal-{{ $room->id }}">0 ₫</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach

            </div>
        </main>
    </form>

    <script>
        let totalCount = 0;
        let totalPrice = 0;
        const cart = {}; // {id: {qty, price, name}}

        // Format Currency
        const fmtMoney = (amount) => new Intl.NumberFormat('vi-VN').format(amount) + ' ₫';

        function updateQty(id, delta, priceTotal, name) {
            const input = document.getElementById('room-qty-' + id);
            const subtotalEl = document.getElementById('room-subtotal-' + id);
            
            // Init cart item if needed
            if (!cart[id]) cart[id] = { qty: 0, price: priceTotal, name: name };
            
            let currentVal = parseInt(input.value) || 0;
            let newVal = currentVal + delta;
            
            if (newVal < 0) newVal = 0;
            if (newVal > 5) newVal = 5; // Max limit
            
            let diff = newVal - currentVal;
            
            if (diff !== 0) {
                // Update State
                cart[id].qty = newVal;
                totalCount += diff;
                totalPrice += (diff * priceTotal);
                
                // Update DOM
                input.value = newVal;
                
                // Update Subtotal on Card
                subtotalEl.innerText = fmtMoney(newVal * priceTotal);
                if (newVal > 0) {
                    subtotalEl.classList.add('text-[#8B6B4E]', 'font-bold');
                    subtotalEl.classList.remove('text-gray-400');
                } else {
                    subtotalEl.classList.remove('text-[#8B6B4E]', 'font-bold');
                    subtotalEl.classList.add('text-gray-400');
                }
                
                // Update Sticky Bar
                updateStickyBar();
                
                // If Modal is open, refresh it
                if (!document.getElementById('confirmation-modal').classList.contains('invisible')) {
                    renderModalItems();
                }
            }
        }

        function updateStickyBar() {
            const bar = document.getElementById('sticky-summary');
            document.getElementById('total-rooms-count').innerText = totalCount + " PHÒNG";
            document.getElementById('grand-total-display').innerText = fmtMoney(totalPrice);
            
            if (totalCount > 0) {
                bar.classList.remove('hidden', 'translate-y-full', 'opacity-0');
            } else {
                bar.classList.add('translate-y-full', 'opacity-0');
                setTimeout(() => {
                     if (totalCount === 0) bar.classList.add('hidden'); // Delay for transition
                }, 300);
            }
        }

        function openConfirmationModal() {
            if (totalCount === 0) return;
            
            renderModalItems();
            
            const modal = document.getElementById('confirmation-modal');
            const content = document.getElementById('modal-content');
            
            modal.classList.remove('invisible', 'opacity-0');
            content.classList.remove('scale-95');
            content.classList.add('scale-100');
            
            document.getElementById('modal-total-rooms').innerText = totalCount + " PHÒNG";
            document.getElementById('modal-grand-total').innerText = fmtMoney(totalPrice);
        }

        function closeConfirmationModal() {
            const modal = document.getElementById('confirmation-modal');
            const content = document.getElementById('modal-content');
            
            content.classList.remove('scale-100');
            content.classList.add('scale-95');
            modal.classList.add('opacity-0');
            
            setTimeout(() => {
                modal.classList.add('invisible');
            }, 300);
        }
        
        function renderModalItems() {
            const list = document.getElementById('modal-items-list');
            list.innerHTML = '';
            
            Object.keys(cart).forEach(id => {
                const item = cart[id];
                if (item.qty > 0) {
                    const html = `
                        <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded border border-gray-100 dark:border-gray-700 flex justify-between items-center">
                            <div>
                                <p class="font-display text-[#8B6B4E] dark:text-[#D4C5B0] text-lg">${item.name}</p>
                                <div class="flex items-center mt-2 border border-gray-300 rounded bg-white w-fit">
                                    <button type="button" onclick="updateQty(${id}, -1, ${item.price}, '${item.name}')" class="px-2 py-1 text-gray-500 hover:text-[#8B6B4E]">-</button>
                                    <span class="w-8 text-center text-sm font-bold">${item.qty}</span>
                                    <button type="button" onclick="updateQty(${id}, 1, ${item.price}, '${item.name}')" class="px-2 py-1 text-gray-500 hover:text-[#8B6B4E]">+</button>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="font-bold text-gray-700 dark:text-gray-300 text-lg">${fmtMoney(item.qty * item.price)}</p>
                                <button type="button" onclick="removeItem(${id}, ${item.price}, '${item.name}')" class="text-gray-400 hover:text-red-500 mt-1" title="Xóa">
                                    <span class="material-icons-outlined">delete_outline</span>
                                </button>
                            </div>
                        </div>
                    `;
                    list.innerHTML += html;
                }
            });
            
            // Sync totals in modal
            document.getElementById('modal-total-rooms').innerText = totalCount + " PHÒNG";
            document.getElementById('modal-grand-total').innerText = fmtMoney(totalPrice);
        }
        
        function removeItem(id, price, name) {
            const item = cart[id];
            if (item && item.qty > 0) {
                updateQty(id, -item.qty, price, name);
            }
        }
    </script>
  </body>
</html>
