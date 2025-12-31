{{-- Footer Component - The Wandering Rose --}}
<div class="footer-section py-20 px-4 md:px-12 text-white">
    <div class="max-w-7xl mx-auto">
        
        {{-- Newsletter Section --}}
        <h2 class="text-center font-display text-3xl md:text-4xl mb-12">Tin tức & Ưu đãi</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
            {{-- Event Card 1 --}}
            <div class="bg-transparent event-card">
                <div class="mb-4 overflow-hidden rounded-lg relative aspect-[4/5] bg-black">
                    <img alt="Event Poster 1" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition duration-500 event-card-overlay" src="https://images.unsplash.com/photo-1470229722913-7c0e2dbbafd3?q=80&w=2070&auto=format&fit=crop"/>
                    <div class="absolute top-4 left-4 bg-white text-primary text-[10px] font-bold px-2 py-1 rounded">HOT</div>
                </div>
                <span class="text-[10px] uppercase tracking-widest text-gray-200 block mb-1">Sự kiện</span>
                <h3 class="font-display text-xl mb-3">Live music mỗi cuối tuần</h3>
                <button class="footer-btn border border-white/40 text-[10px] px-4 py-1.5 rounded uppercase">
                    Tìm hiểu <i class="fas fa-arrow-right ml-1"></i>
                </button>
            </div>
            
            {{-- Event Card 2 --}}
            <div class="bg-transparent event-card">
                <div class="mb-4 overflow-hidden rounded-lg relative aspect-[4/5] bg-black">
                    <img alt="Event Poster 2" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition duration-500 event-card-overlay" src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?q=80&w=2070&auto=format&fit=crop"/>
                    <div class="absolute top-4 left-4 bg-primary text-white text-[10px] font-bold px-2 py-1 rounded">-30%</div>
                </div>
                <span class="text-[10px] uppercase tracking-widest text-gray-200 block mb-1">Ưu đãi</span>
                <h3 class="font-display text-xl mb-3">Mùa hè rực rỡ</h3>
                <button class="footer-btn border border-white/40 text-[10px] px-4 py-1.5 rounded uppercase">
                    Tìm hiểu <i class="fas fa-arrow-right ml-1"></i>
                </button>
            </div>
            
            {{-- Event Card 3 --}}
            <div class="bg-transparent event-card">
                <div class="mb-4 overflow-hidden rounded-lg relative aspect-[4/5] bg-black">
                    <img alt="Event Poster 3" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition duration-500 event-card-overlay" src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?q=80&w=2070&auto=format&fit=crop"/>
                    <div class="absolute bottom-4 right-4 bg-red-500 text-white text-[10px] font-bold px-2 py-1 rounded">MỚI</div>
                </div>
                <span class="text-[10px] uppercase tracking-widest text-gray-200 block mb-1">Tin tức</span>
                <h3 class="font-display text-xl mb-3">Khai trương khu Villa mới</h3>
                <button class="footer-btn border border-white/40 text-[10px] px-4 py-1.5 rounded uppercase">
                    Tìm hiểu <i class="fas fa-arrow-right ml-1"></i>
                </button>
            </div>
        </div>
        
        {{-- Navigation Arrows --}}
        <div class="flex justify-center mt-12 space-x-4 mb-12">
            <button class="w-10 h-10 rounded-full bg-white text-primary flex items-center justify-center hover:bg-gray-100 transition shadow">
                <span class="material-icons-outlined">arrow_back</span>
            </button>
            <button class="w-10 h-10 rounded-full bg-white text-primary flex items-center justify-center hover:bg-gray-100 transition shadow">
                <span class="material-icons-outlined">arrow_forward</span>
            </button>
        </div>

        <hr class="footer-divider mb-12"/>

        {{-- Footer Links --}}
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-10 text-sm font-light leading-relaxed">
            
            {{-- Logo Footer --}}
            <div class="col-span-1 md:col-span-4 flex justify-center mb-8">
                <div class="text-3xl font-display italic text-white tracking-widest text-center">
                    <span class="block text-xs font-sans tracking-[0.3em] uppercase mb-1 text-white/70">The Wandering Rose</span>
                    <span class="text-2xl font-normal">~ Ba Vì ~</span>
                </div>
            </div>
            
            {{-- Trang Chủ Links --}}
            <div>
                <h4 class="font-display text-lg mb-6 uppercase tracking-widest">Trang Chủ</h4>
                <ul class="space-y-3 opacity-80 text-xs uppercase tracking-wider">
                    <li><a class="footer-link" href="#">Về chúng tôi</a></li>
                    <li><a class="footer-link" href="#">Sự kiện âm nhạc</a></li>
                    <li><a class="footer-link" href="#">Gallery hình ảnh & Video</a></li>
                    <li><a class="footer-link" href="#">Tin tức</a></li>
                    <li><a class="footer-link" href="#">FAQ</a></li>
                </ul>
            </div>
            
            {{-- Hạng Phòng Links Column 1 --}}
            <div>
                <h4 class="font-display text-lg mb-6 uppercase tracking-widest">Hạng Phòng</h4>
                <ul class="space-y-3 opacity-80 text-xs uppercase tracking-wider">
                    <li><a class="footer-link" href="#">Khu Wooden House</a></li>
                    <li><a class="footer-link" href="#">Forest Room</a></li>
                    <li><a class="footer-link" href="#">Deluxe Room</a></li>
                    <li><a class="footer-link" href="#">Family Room</a></li>
                </ul>
            </div>
            
            {{-- Hạng Phòng Links Column 2 --}}
            <div class="md:mt-12">
                <ul class="space-y-3 opacity-80 text-xs uppercase tracking-wider">
                    <li><a class="footer-link" href="#">Khu Rose House</a></li>
                    <li><a class="footer-link" href="#">Pink Rose House</a></li>
                    <li><a class="footer-link" href="#">White Rose House</a></li>
                    <li><a class="footer-link" href="#">Red Rose House</a></li>
                    <li><a class="footer-link" href="#">The Wandering Rose Villa</a></li>
                </ul>
            </div>
            
            {{-- Liên Hệ --}}
            <div>
                <h4 class="font-display text-lg mb-6 uppercase tracking-widest">Liên Hệ</h4>
                <div class="space-y-4 opacity-80 text-xs">
                    <p>092 981 6699</p>
                    <p>booking@thewanderingrosebavi.com</p>
                    <p>Thôn Mít Mái, Ba Vì, Hà Nội</p>
                    <button class="footer-btn border border-white/50 px-4 py-2 rounded uppercase tracking-wider mt-2">
                        Gửi liên hệ <i class="fas fa-arrow-right ml-1"></i>
                    </button>
                </div>
            </div>
            
            {{-- Copyright & Social --}}
            <div class="col-span-1 md:col-span-4 flex flex-col md:flex-row justify-between items-center pt-8 border-t border-white/10 mt-8">
                <p class="text-xs opacity-60 mb-4 md:mb-0">© Copyright 2023 The Wandering Rose</p>
                <div class="flex space-x-6">
                    <a class="social-icon opacity-60" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="social-icon opacity-60" href="#"><i class="fab fa-youtube"></i></a>
                    <a class="social-icon opacity-60" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="social-icon opacity-60" href="#"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
