<div class="bg-white shadow-lg rounded-lg p-6">
    <h3 class="font-display text-2xl text-primary mb-6 text-center">Tóm tắt đặt phòng</h3>
    
    {{-- Booking Summary --}}
    <div class="border-b pb-4 mb-4">
        <div class="flex justify-between text-sm mb-2">
            <span class="text-gray-600">Thời gian:</span>
            <span class="font-semibold" id="summary-nights">0 đêm</span>
        </div>
        <div class="text-xs text-gray-500" id="summary-dates">-- / --</div>
    </div>
    
    <div class="border-b pb-4 mb-4">
        <div class="flex justify-between text-sm mb-2">
            <span class="text-gray-600">Số khách:</span>
            <span class="font-semibold" id="summary-guests">0 người lớn, 0 trẻ em</span>
        </div>
    </div>
    
    {{-- Selected Rooms --}}
    <div class="border-b pb-4 mb-4">
        <h4 class="text-sm font-semibold text-gray-700 mb-3">Phòng đã chọn:</h4>
        <div id="summary-rooms-list" class="space-y-2">
            <p class="text-xs text-gray-400 text-center py-4">Chưa chọn phòng</p>
        </div>
    </div>
    
    {{-- Price Breakdown --}}
    <div class="space-y-2 mb-6">
        <div class="flex justify-between text-sm">
            <span class="text-gray-600">Tổng tiền phòng:</span>
            <span class="font-semibold" id="summary-subtotal">0 ₫</span>
        </div>
        <div class="flex justify-between text-sm">
            <span class="text-gray-600">Phụ phí & dịch vụ:</span>
            <span class="font-semibold">0 ₫</span>
        </div>
    </div>
    
    {{-- Total --}}
    <div class="bg-primary bg-opacity-10 rounded p-4">
        <div class="flex justify-between items-center">
            <span class="font-display text-lg text-primary">Tổng thanh toán:</span>
            <span class="font-display text-2xl text-primary font-bold" id="summary-total">0 ₫</span>
        </div>
        <p class="text-xs text-gray-600 mt-2 text-center">
            (Bao gồm thuế GTGT 10% và phí dịch vụ 5%)
        </p>
    </div>
    
    {{-- Policies --}}
    <div class="mt-6 pt-6 border-t">
        <h4 class="text-sm font-semibold text-gray-700 mb-3">Chính sách đặt phòng</h4>
        <ul class="text-xs text-gray-600 space-y-2">
            <li class="flex items-start">
                <span class="material-icons text-xs text-primary mr-2">check_circle</span>
                <span>Giữ phòng: Đặt cọc 30% tổng hoá đơn</span>
            </li>
            <li class="flex items-start">
                <span class="material-icons text-xs text-primary mr-2">check_circle</span>
                <span>Miễn phí huỷ trước 7 ngày</span>
            </li>
            <li class="flex items-start">
                <span class="material-icons text-xs text-primary mr-2">check_circle</span>
                <span>Check-in: 14:00 | Check-out: 12:00</span>
            </li>
        </ul>
    </div>
    
    {{-- Contact Info --}}
    <div class="mt-6 pt-6 border-t text-center">
        <p class="text-xs text-gray-600 mb-2">Cần hỗ trợ?</p>
        <p class="text-sm font-semibold text-primary">📞 092 981 6699</p>
        <p class="text-xs text-gray-500">booking@thewanderingrosebavi.com</p>
    </div>
</div>

@push('scripts')
<script>
// Update subtotal to match total (since we don't have separate fees yet)
document.addEventListener('DOMContentLoaded', () => {
    const observer = new MutationObserver(() => {
        const total = document.getElementById('summary-total').textContent;
        document.getElementById('summary-subtotal').textContent = total;
    });
    
    observer.observe(document.getElementById('summary-total'), {
        childList: true,
        characterData: true,
        subtree: true
    });
});
</script>
@endpush
