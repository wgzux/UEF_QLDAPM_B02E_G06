{{-- Step 1: Date & Guest Selection with Beautiful Calendar --}}
<div id="step-1-container" class="max-w-7xl mx-auto px-6 py-8">
    
    {{-- Top Bar: Date Summary + Guest Counter + Search Button --}}
    <div class="bg-white shadow-lg rounded-lg p-8 mb-8">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-6">
            
            {{-- Left: Date Display --}}
            <div class="flex items-center gap-8">
                <div class="flex items-center gap-3">
                    <span class="text-sm uppercase tracking-wider text-gray-600">NGÀY</span>
                    <span class="bg-[#C19D60] text-white px-4 py-1 rounded text-sm font-medium" id="nights-badge">0 Đêm</span>
                </div>
                
                <div class="flex items-center gap-6">
                    <div class="text-center">
                        <div class="text-5xl font-display text-gray-800" id="checkin-day">27</div>
                        <div class="text-sm text-gray-500">
                            <span id="checkin-month">Tháng 9</span>
                            <span id="checkin-year">2025</span>
                        </div>
                    </div>
                    
                    <div class="text-3xl text-gray-400">—</div>
                    
                    <div class="text-center">
                        <div class="text-5xl font-display text-gray-800" id="checkout-day">6</div>
                        <div class="text-sm text-gray-500">
                            <span id="checkout-month">Tháng 10</span>
                            <span id="checkout-year">2025</span>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Right: Guest Counter + Search --}}
            <div class="flex items-center gap-6">
                {{-- Guest Display --}}
                <div class="flex items-center gap-8">
                    {{-- Rooms Selector (Optional, logic usually depends on room selection later, but providing filter) --}}
                    {{-- <div class="text-center group cursor-pointer relative">
                        <div class="text-xs uppercase tracking-wider text-gray-600 mb-1">PHÒNG</div>
                        <div class="text-4xl font-display text-gray-800" id="rooms-display">1</div>
                        <!-- Simple visual cue that it can be changed if we wanted to impl logic -->
                    </div> --}} 
                    
                    {{-- Adults with +/- --}}
                    <div class="text-center">
                        <div class="text-xs uppercase tracking-wider text-gray-600 mb-1">NGƯỜI LỚN</div>
                        <div class="flex items-center gap-2 select-none">
                            <button onclick="changeAdults(-1)" class="text-gray-400 hover:text-[#C19D60] text-xl px-1 hover:bg-gray-100 rounded">-</button>
                            <span class="text-4xl font-display text-gray-800 w-8 text-center" id="adults-display">2</span>
                            <button onclick="changeAdults(1)" class="text-gray-400 hover:text-[#C19D60] text-xl px-1 hover:bg-gray-100 rounded">+</button>
                        </div>
                    </div>
                    
                    {{-- Children with +/- --}}
                    <div class="text-center">
                        <div class="text-xs uppercase tracking-wider text-gray-600 mb-1">TRẺ EM</div>
                        <div class="flex items-center gap-2 select-none">
                            <button onclick="changeChildren(-1)" class="text-gray-400 hover:text-[#C19D60] text-xl px-1 hover:bg-gray-100 rounded">-</button>
                            <span class="text-4xl font-display text-gray-800 w-8 text-center" id="children-display">0</span>
                            <button onclick="changeChildren(1)" class="text-gray-400 hover:text-[#C19D60] text-xl px-1 hover:bg-gray-100 rounded">+</button>
                        </div>
                    </div>
                </div>
                
                {{-- Dropdown & Search Button --}}
                <div class="flex flex-col gap-3">
                    <button class="text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    
                    <form action="{{ route('booking.select-rooms') }}" method="POST" id="dateSearchForm">
                        @csrf
                        <input type="hidden" name="check_in" id="form-check-in">
                        <input type="hidden" name="check_out" id="form-check-out">
                        <input type="hidden" name="adults" id="form-adults" value="2">
                        <input type="hidden" name="children" id="form-children" value="0">
                        
                        <button 
                            type="button"
                            onclick="submitDateSearch()" 
                            class="bg-[#C19D60] text-white px-8 py-3 rounded text-xs uppercase tracking-widest hover:bg-[#a88b68] transition flex items-center gap-2">
                            TÌM KIẾM
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        function submitDateSearch() {
            const checkIn = document.getElementById('check-in-input').value; // from JS updating hidden input in partial
            const checkOut = document.getElementById('check-out-input').value;
            
            if(!checkIn || !checkOut) {
                alert('Vui lòng chọn ngày check-in và check-out');
                return;
            }
            
            document.getElementById('form-check-in').value = checkIn;
            document.getElementById('form-check-out').value = checkOut;
            document.getElementById('form-adults').value = bookingData.adults; // Ensure bookingData is accessible or sync variable
            document.getElementById('form-children').value = bookingData.children;
            
            document.getElementById('dateSearchForm').submit();
        }
    </script>
        </div>
    </div>
    
    {{-- Calendar Section --}}
    <div class="bg-white shadow-lg rounded-lg p-8">
        <div class="flex items-center justify-between mb-8">
            <button onclick="previousMonth()" class="w-12 h-12 rounded-full bg-[#C19D60] text-white flex items-center justify-center hover:bg-[#a88b68] transition">
                ←
            </button>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 flex-1 mx-8">
                {{-- Month 1 --}}
                <div>
                    <h3 class="font-display text-3xl text-[#C19D60] text-center mb-6" id="month1-title">Tháng 9 2025</h3>
                    
                    <div class="grid grid-cols-7 gap-2 mb-4">
                        <div class="text-center text-sm font-bold text-gray-700">T2</div>
                        <div class="text-center text-sm font-bold text-gray-700">T3</div>
                        <div class="text-center text-sm font-bold text-gray-700">T4</div>
                        <div class="text-center text-sm font-bold text-gray-700">T5</div>
                        <div class="text-center text-sm font-bold text-gray-700">T6</div>
                        <div class="text-center text-sm font-bold text-gray-700">T7</div>
                        <div class="text-center text-sm font-bold text-gray-700">CN</div>
                    </div>
                    
                    <div id="calendar-month1" class="grid grid-cols-7 gap-2">
                        {{-- Generated by JS --}}
                    </div>
                </div>
                
                {{-- Month 2 --}}
                <div>
                    <h3 class="font-display text-3xl text-[#C19D60] text-center mb-6" id="month2-title">Tháng 10 2025</h3>
                    
                    <div class="grid grid-cols-7 gap-2 mb-4">
                        <div class="text-center text-sm font-bold text-gray-700">T2</div>
                        <div class="text-center text-sm font-bold text-gray-700">T3</div>
                        <div class="text-center text-sm font-bold text-gray-700">T4</div>
                        <div class="text-center text-sm font-bold text-gray-700">T5</div>
                        <div class="text-center text-sm font-bold text-gray-700">T6</div>
                        <div class="text-center text-sm font-bold text-gray-700">T7</div>
                        <div class="text-center text-sm font-bold text-gray-700">CN</div>
                    </div>
                    
                    <div id="calendar-month2" class="grid grid-cols-7 gap-2">
                        {{-- Generated by JS --}}
                    </div>
                </div>
            </div>
            
            <button onclick="nextMonth()" class="w-12 h-12 rounded-full bg-[#C19D60] text-white flex items-center justify-center hover:bg-[#a88b68] transition">
                →
            </button>
        </div>
    </div>
    
    {{-- Hidden inputs for form submission --}}
    <input type="hidden" id="check-in-input">
    <input type="hidden" id="check-out-input">
</div>

<style>
.calendar-day {
    aspect-ratio: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border: 1px solid #e5e7eb;
    border-radius: 4px;
    cursor: pointer;
    transition: all 0.2s;
    padding: 8px 4px;
}

.calendar-day:hover:not(.disabled):not(.empty) {
    border-color: #C19D60;
    transform: translateY(-2px);
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

.calendar-day.disabled {
    opacity: 0.3;
    cursor: not-allowed;
    background-color: #f9fafb;
}

.calendar-day.empty {
    border: none;
    cursor: default;
}

.calendar-day.selected {
    background-color: #C19D60;
    color: white;
    border-color: #C19D60;
}

.calendar-day.in-range {
    background-color: #fef3c7;
    border-color: #fbbf24;
}

.calendar-day .day-number {
    font-size: 1.125rem;
    font-weight: 500;
    margin-bottom: 4px;
}

.calendar-day .day-price {
    font-size: 0.7rem;
    color: #C19D60;
}

.calendar-day.selected .day-price {
    color: white;
}
</style>

@push('scripts')
<script>
// Booking state
let currentMonth1 = new Date();
let currentMonth2 = new Date(currentMonth1.getFullYear(), currentMonth1.getMonth() + 1, 1);
let selectedCheckIn = null;
let selectedCheckOut = null;
const basePrice = 5000000; // Base room price

// Initialize
document.addEventListener('DOMContentLoaded', () => {
    // Set default dates
    const today = new Date();
    selectedCheckIn = new Date(today);
    selectedCheckOut = new Date(today);
    selectedCheckOut.setDate(selectedCheckOut.getDate() + 1);
    
    renderCalendars();
    updateDateDisplay();
});

function renderCalendars() {
    renderMonth('calendar-month1', currentMonth1, 'month1-title');
    renderMonth('calendar-month2', currentMonth2, 'month2-title');
}

function renderMonth(containerId, month, titleId) {
    const container = document.getElementById(containerId);
    const title = document.getElementById(titleId);
    
    const monthNames = ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6',
                        'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'];
    
    title.textContent = `${monthNames[month.getMonth()]} ${month.getFullYear()}`;
    
    const firstDay = new Date(month.getFullYear(), month.getMonth(), 1);
    const lastDay = new Date(month.getFullYear(), month.getMonth() + 1, 0);
    
    // Adjust for Monday start (1 = Monday, 0 = Sunday)
    let startDayOfWeek = firstDay.getDay();
    startDayOfWeek = startDayOfWeek === 0 ? 6 : startDayOfWeek - 1;
    
    let html = '';
    
    // Empty cells before first day
    for (let i = 0; i < startDayOfWeek; i++) {
        html += '<div class="calendar-day empty"></div>';
    }
    
    // Days of month
    const today = new Date();
    today.setHours(0, 0, 0, 0);
    
    for (let day = 1; day <= lastDay.getDate(); day++) {
        const currentDate = new Date(month.getFullYear(), month.getMonth(), day);
        const isPast = currentDate < today;
        
        let classes = 'calendar-day';
        if (isPast) classes += ' disabled';
        
        // Check if selected
        if (selectedCheckIn && currentDate.getTime() === selectedCheckIn.getTime()) {
            classes += ' selected';
        }
        if (selectedCheckOut && currentDate.getTime() === selectedCheckOut.getTime()) {
            classes += ' selected';
        }
        
        // Check if in range
        if (selectedCheckIn && selectedCheckOut) {
            if (currentDate > selectedCheckIn && currentDate < selectedCheckOut) {
                classes += ' in-range';
            }
        }
        
        const dateStr = `${month.getFullYear()}-${String(month.getMonth() + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
        
        html += `
            <div class="${classes}" onclick="selectDate('${dateStr}')" data-date="${dateStr}">
                <div class="day-number">${day}</div>
                <div class="day-price">${formatPrice(basePrice)}</div>
            </div>
        `;
    }
    
    container.innerHTML = html;
}

function selectDate(dateStr) {
    const clickedDate = new Date(dateStr);
    const today = new Date();
    today.setHours(0, 0, 0, 0);
    
    if (clickedDate < today) return;
    
    // Logic: if no check-in selected, or both selected, start new selection
    if (!selectedCheckIn || (selectedCheckIn && selectedCheckOut)) {
        selectedCheckIn = clickedDate;
        selectedCheckOut = null;
    } else if (selectedCheckIn && !selectedCheckOut) {
        // Selecting check-out
        if (clickedDate <= selectedCheckIn) {
            selectedCheckIn = clickedDate;
            selectedCheckOut = null;
        } else {
            selectedCheckOut = clickedDate;
        }
    }
    
    renderCalendars();
    updateDateDisplay();
}

function updateDateDisplay() {
    if (selectedCheckIn) {
        document.getElementById('checkin-day').textContent = selectedCheckIn.getDate();
        document.getElementById('checkin-month').textContent = `Tháng ${selectedCheckIn.getMonth() + 1}`;
        document.getElementById('checkin-year').textContent = selectedCheckIn.getFullYear();
        
        document.getElementById('check-in-input').value = selectedCheckIn.toISOString().split('T')[0];
    }
    
    if (selectedCheckOut) {
        document.getElementById('checkout-day').textContent = selectedCheckOut.getDate();
        document.getElementById('checkout-month').textContent = `Tháng ${selectedCheckOut.getMonth() + 1}`;
        document.getElementById('checkout-year').textContent = selectedCheckOut.getFullYear();
        
        document.getElementById('check-out-input').value = selectedCheckOut.toISOString().split('T')[0];
    }
    
    // Calculate nights
    if (selectedCheckIn && selectedCheckOut) {
        const nights = Math.round((selectedCheckOut - selectedCheckIn) / (1000 * 60 * 60 * 24));
        document.getElementById('nights-badge').textContent = `${nights} Đêm`;
    } else {
        document.getElementById('nights-badge').textContent = '0 Đêm';
    }
}

function previousMonth() {
    currentMonth1.setMonth(currentMonth1.getMonth() - 1);
    currentMonth2.setMonth(currentMonth2.getMonth() - 1);
    renderCalendars();
}

function nextMonth() {
    currentMonth1.setMonth(currentMonth1.getMonth() + 1);
    currentMonth2.setMonth(currentMonth2.getMonth() + 1);
    renderCalendars();
}

function formatPrice(price) {
    return price.toLocaleString('vi-VN') + ' ₫';
}

function changeAdults(delta) {
    bookingData.adults = Math.max(1, Math.min(20, bookingData.adults + delta));
    document.getElementById('adults-display').textContent = bookingData.adults;
    updateSummary();
}

function changeChildren(delta) {
    bookingData.children = Math.max(0, Math.min(10, bookingData.children + delta));
    document.getElementById('children-display').textContent = bookingData.children;
    updateSummary();
}

function searchAvailableRooms() {
    if (!selectedCheckIn || !selectedCheckOut) {
        alert('Vui lòng chọn ngày nhận và trả phòng');
        return;
    }
    
    const nights = Math.round((selectedCheckOut - selectedCheckIn) / (1000 * 60 * 60 * 24));
    
    bookingData.checkIn = selectedCheckIn.toISOString().split('T')[0];
    bookingData.checkOut = selectedCheckOut.toISOString().split('T')[0];
    bookingData.nights = nights;
    
    // Populate available rooms (existing logic from original file)
    const roomsList = document.getElementById('available-rooms-list');
    roomsList.innerHTML = '';
    
    roomTypesData.forEach(room => {
        const roomHtml = `
            <div class="room-card-booking bg-white rounded-lg shadow-md p-6" id="room-card-${room.id}">
                <div class="flex gap-6">
                    <img src="${room.image_url || 'https://images.unsplash.com/photo-1590490360182-c33d57733427?w=400'}" 
                         alt="${room.name}" 
                         class="w-48 h-32 object-cover rounded">
                    <div class="flex-1">
                        <h3 class="font-display text-xl text-primary mb-2">${room.name}</h3>
                        <p class="text-sm text-gray-600 mb-2">${room.description || 'Phòng sang trọng, tiện nghi hiện đại'}</p>
                        <div class="flex items-center space-x-4 text-sm text-gray-600 mb-4">
                            <span><i class="material-icons text-xs">people</i> ${room.max_capacity} người</span>
                            <span><i class="material-icons text-xs">bed</i> King bed</span>
                            <span><i class="material-icons text-xs">window</i> ${room.size || 30}m²</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-2xl font-bold text-primary">${formatPrice(room.price_per_night)}</span>
                                <span class="text-sm text-gray-600">/đêm</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <button onclick="changeRoomQty(${room.id}, -1)" class="w-8 h-8 border rounded flex items-center justify-center hover:bg-gray-100">
                                    <span class="material-icons text-sm">remove</span>
                                </button>
                                <span id="room-qty-${room.id}" class="w-8 text-center font-semibold">0</span>
                                <button onclick="changeRoomQty(${room.id}, 1)" class="w-8 h-8 border rounded flex items-center justify-center hover:bg-gray-100">
                                    <span class="material-icons text-sm">add</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;
        roomsList.innerHTML += roomHtml;
    });
    
    // Auto-select room if coming from room detail page
    const preSelectedRoomId = sessionStorage.getItem('preSelectedRoomId');
    if(preSelectedRoomId) {
        setTimeout(() => {
            changeRoomQty(parseInt(preSelectedRoomId), 1);
            sessionStorage.removeItem('preSelectedRoomId');
        }, 300);
    }
    
    updateSummary();
    goToStep(2);
}

function changeRoomQty(roomId, delta) {
    if(!bookingData.selectedRooms[roomId]) {
        bookingData.selectedRooms[roomId] = 0;
    }
    
    bookingData.selectedRooms[roomId] = Math.max(0, Math.min(5, bookingData.selectedRooms[roomId] + delta));
    
    document.getElementById(`room-qty-${roomId}`).textContent = bookingData.selectedRooms[roomId];
    
    const card = document.getElementById(`room-card-${roomId}`);
    if(bookingData.selectedRooms[roomId] > 0) {
        card.classList.add('selected');
    } else {
        card.classList.remove('selected');
    }
    
    updateSummary();
}
</script>
@endpush
