<h2 class="font-display text-3xl text-primary mb-6">Thông tin khách hàng</h2>

<form action="{{ route('booking.store') }}" method="POST" id="booking-form" class="bg-white shadow-lg rounded-lg p-6">
    @csrf
    
    {{-- Hidden fields for booking data --}}
    <input type="hidden" name="check_in_date" id="form-check-in">
    <input type="hidden" name="check_out_date" id="form-check-out">
    <input type="hidden" name="number_of_adults" id="form-adults">
    <input type="hidden" name="number_of_children" id="form-children">
    
    {{-- Multiple rooms hidden fields container --}}
    <div id="selected-rooms-container"></div>
    
    @if($errors->any())
    <div class="mb-6 p-4 bg-red-100 text-red-700 rounded">
        <strong class="font-bold">Có lỗi xảy ra!</strong>
        <ul class="mt-2 list-disc list-inside">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        
        <div class="md:col-span-2">
            <label class="block text-sm font-medium text-gray-700 mb-2">Họ và tên *</label>
            <input 
                type="text" 
                name="customer_name" 
                value="{{ old('customer_name') }}"
                class="w-full border border-gray-300 rounded px-4 py-3 focus:border-primary focus:ring-1 focus:ring-primary outline-none"
                placeholder="Nhập họ và tên"
                required
            >
        </div>
        
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Số điện thoại *</label>
            <input 
                type="tel" 
                name="customer_phone" 
                value="{{ old('customer_phone') }}"
                class="w-full border border-gray-300 rounded px-4 py-3 focus:border-primary focus:ring-1 focus:ring-primary outline-none"
                placeholder="0123456789"
                required
            >
        </div>
        
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
            <input 
                type="email" 
                name="customer_email" 
                value="{{ old('customer_email') }}"
                class="w-full border border-gray-300 rounded px-4 py-3 focus:border-primary focus:ring-1 focus:ring-primary outline-none"
                placeholder="email@example.com"
                required
            >
        </div>
        
        <div class="md:col-span-2">
            <label class="block text-sm font-medium text-gray-700 mb-2">Địa chỉ</label>
            <input 
                type="text" 
                name="customer_address" 
                value="{{ old('customer_address') }}"
                class="w-full border border-gray-300 rounded px-4 py-3 focus:border-primary focus:ring-1 focus:ring-primary outline-none"
                placeholder="Nhập địa chỉ"
            >
        </div>
        
        <div class="md:col-span-2">
            <label class="block text-sm font-medium text-gray-700 mb-2">Yêu cầu đặc biệt</label>
            <textarea 
                name="special_requests"
                rows="3"
                class="w-full border border-gray-300 rounded px-4 py-3 focus:border-primary focus:ring-1 focus:ring-primary outline-none"
                placeholder="Ghi chú về yêu cầu đặc biệt (nếu có)"
            >{{ old('special_requests') }}</textarea>
        </div>
        
    </div>
    
    <div class="mt-8 flex justify-between">
        <button 
            type="button"
            onclick="goToStep(2)" 
            class="px-6 py-3 border border-primary text-primary rounded hover:bg-primary hover:text-white transition"
        >
            Quay lại
        </button>
        <button 
            type="submit"
            class="px-8 py-3 bg-primary text-white rounded hover:bg-primary-dark transition font-medium"
        >
            Xác nhận đặt phòng
        </button>
    </div>
</form>

@push('scripts')
<script>
// Populate form before submission
document.getElementById('booking-form').addEventListener('submit', function(e) {
    document.getElementById('form-check-in').value = bookingData.checkIn;
    document.getElementById('form-check-out').value = bookingData.checkOut;
    document.getElementById('form-adults').value = bookingData.adults;
    document.getElementById('form-children').value = bookingData.children;
    
    // Build selected_rooms array
    const container = document.getElementById('selected-rooms-container');
    container.innerHTML = '';
    
    let hasRooms = false;
    let index = 0;
    
    Object.keys(bookingData.selectedRooms).forEach(roomId => {
        const qty = bookingData.selectedRooms[roomId];
        if(qty > 0) {
            hasRooms = true;
            container.innerHTML += `
                <input type="hidden" name="selected_rooms[${index}][room_type_id]" value="${roomId}">
                <input type="hidden" name="selected_rooms[${index}][quantity]" value="${qty}">
            `;
            index++;
        }
    });
    
    if(!hasRooms) {
        e.preventDefault();
        alert('Vui lòng chọn ít nhất 1 phòng');
        return false;
    }
});
</script>
@endpush
