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
                {{-- Guest Display & Popover --}}
                <div class="relative group z-50">
                    {{-- Trigger --}}
                    <div class="flex items-center gap-8 cursor-pointer py-4">
                        <div class="text-center">
                            <div class="text-xs uppercase tracking-wider text-gray-600 mb-1">PHÒNG</div>
                            <div class="text-4xl font-display text-gray-800" id="display-rooms">1</div>
                        </div>
                        
                        <div class="text-center">
                            <div class="text-xs uppercase tracking-wider text-gray-600 mb-1">NGƯỜI LỚN</div>
                            <div class="text-4xl font-display text-gray-800" id="display-adults">2</div>
                        </div>
                        
                        <div class="text-center">
                            <div class="text-xs uppercase tracking-wider text-gray-600 mb-1">TRẺ EM</div>
                            <div class="text-4xl font-display text-gray-800" id="display-children">0</div>
                        </div>
                        
                        <div class="text-gray-400">
                            <svg class="w-6 h-6 transform group-hover:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                    </div>

                    {{-- Popover --}}
                    <div class="absolute top-full right-0 mt-2 bg-white shadow-xl rounded-lg border border-gray-100 p-6 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 min-w-[320px]">
                        {{-- Room Counter --}}
                        <div class="mb-4">
                            <label class="block text-sm text-gray-600 mb-2">Phòng</label>
                            <div class="flex items-center justify-between border border-gray-300 rounded">
                                <button type="button" onclick="changeRooms(-1)" class="px-4 py-2 text-gray-500 hover:bg-gray-50 hover:text-[#C19D60] transition">-</button>
                                <span class="font-medium text-gray-800 w-12 text-center" id="input-rooms">01</span>
                                <button type="button" onclick="changeRooms(1)" class="px-4 py-2 text-gray-500 hover:bg-gray-50 hover:text-[#C19D60] transition">+</button>
                            </div>
                        </div>

                        {{-- Adult Counter --}}
                        <div class="mb-4">
                            <label class="block text-sm text-gray-600 mb-2">Người lớn</label>
                            <div class="flex items-center justify-between border border-gray-300 rounded">
                                <button type="button" onclick="changeAdults(-1)" class="px-4 py-2 text-gray-500 hover:bg-gray-50 hover:text-[#C19D60] transition">-</button>
                                <span class="font-medium text-gray-800 w-12 text-center" id="input-adults">02</span>
                                <button type="button" onclick="changeAdults(1)" class="px-4 py-2 text-gray-500 hover:bg-gray-50 hover:text-[#C19D60] transition">+</button>
                            </div>
                        </div>

                        {{-- Children Counter --}}
                        <div class="mb-2">
                            <label class="block text-sm text-gray-600 mb-2">Trẻ em *</label>
                            <div class="flex items-center justify-between border border-gray-300 rounded">
                                <button type="button" onclick="changeChildren(-1)" class="px-4 py-2 text-gray-500 hover:bg-gray-50 hover:text-[#C19D60] transition">-</button>
                                <span class="font-medium text-gray-800 w-12 text-center" id="input-children">00</span>
                                <button type="button" onclick="changeChildren(1)" class="px-4 py-2 text-gray-500 hover:bg-gray-50 hover:text-[#C19D60] transition">+</button>
                            </div>
                        </div>
                        
                        <div class="text-xs text-[#C19D60] italic mt-3">* Trẻ em dưới 6 tuổi</div>
                    </div>
                </div>
                
                {{-- Dropdown & Search Button --}}
                <div class="flex flex-col gap-3">
                    <button type="button" class="text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    
                    <form action="{{ route('booking.select-rooms') }}" method="POST" id="dateSearchForm">
                        @csrf
                        <input type="hidden" name="check_in" id="form-check-in">
                        <input type="hidden" name="check_out" id="form-check-out">
                        <input type="hidden" name="rooms" id="form-rooms" value="1">
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
        const MAX_ROOMS_PER_BOOKING = 10; // Reasonable default limit

        function submitDateSearch() {
            const checkIn = document.getElementById('check-in-input').value; 
            const checkOut = document.getElementById('check-out-input').value;
            
            if(!checkIn || !checkOut) {
                alert('Vui lòng chọn ngày check-in và check-out');
                return;
            }
            
            document.getElementById('form-check-in').value = checkIn;
            document.getElementById('form-check-out').value = checkOut;
            document.getElementById('form-rooms').value = bookingData.rooms;
            document.getElementById('form-adults').value = bookingData.adults; 
            document.getElementById('form-children').value = bookingData.children;
            
            document.getElementById('dateSearchForm').submit();
        }

        // Updated JS logic for Room Counter with limits
        function changeRooms(delta) {
             // Use defined limit
            bookingData.rooms = Math.max(1, Math.min(MAX_ROOMS_PER_BOOKING, bookingData.rooms + delta));
            // Update Display
            document.getElementById('display-rooms').textContent = bookingData.rooms;
            // Update Input in Popover
            document.getElementById('input-rooms').textContent = String(bookingData.rooms).padStart(2, '0');
        }

        function changeAdults(delta) {
            bookingData.adults = Math.max(1, Math.min(20, bookingData.adults + delta));
            document.getElementById('display-adults').textContent = bookingData.adults;
            document.getElementById('input-adults').textContent = String(bookingData.adults).padStart(2, '0');
            // updateSummary() call removed as it might be undefined/unused or handled here
        }

        function changeChildren(delta) {
            bookingData.children = Math.max(0, Math.min(10, bookingData.children + delta));
            document.getElementById('display-children').textContent = bookingData.children;
            document.getElementById('input-children').textContent = String(bookingData.children).padStart(2, '0');
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

// End of Booking Step 1 Logic
</script>
@endpush
