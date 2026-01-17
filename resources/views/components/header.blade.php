{{-- Header Component - The Wandering Rose --}}
<header class="bg-header-bg text-white border-b border-gray-800 relative z-50 shadow-xl font-headerUI">
    
    {{-- Booking Bar --}}
    <div class="border-b border-gray-700/50 bg-[#151313]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-2">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="hidden md:block">
                    <h3 class="text-[10px] font-light tracking-widest text-gray-400 uppercase">
                        Đặt lịch với giá tốt nhất
                    </h3>
                </div>
                <div class="flex flex-row items-center gap-2 w-full md:w-auto justify-center md:justify-end">
                    <div class="relative group">
                        <input class="header-date-input w-32 bg-gray-800 text-gray-200 border-none rounded-sm px-3 py-1 text-[10px] focus:ring-1 focus:ring-primary focus:bg-gray-700 transition-colors" placeholder="Check-in" type="date"/>
                    </div>
                    <div class="relative group">
                        <input class="header-date-input w-32 bg-gray-800 text-gray-200 border-none rounded-sm px-3 py-1 text-[10px] focus:ring-1 focus:ring-primary focus:bg-gray-700 transition-colors" placeholder="Check-out" type="date"/>
                    </div>
                    <button class="bg-transparent border border-white hover:bg-white hover:text-black text-white px-4 py-1 rounded-sm text-[10px] font-bold uppercase tracking-wider transition-all duration-300 h-[32px] flex items-center gap-1">
                        <span>Book</span>
                        <span class="material-icons text-[12px]">arrow_forward</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Logo & Language Switcher --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">
        <div class="flex flex-col md:flex-row items-center justify-between relative">
            {{-- Language Switcher --}}
            <div class="md:absolute md:left-0 md:top-1/2 md:-translate-y-1/2 mb-4 md:mb-0 order-2 md:order-1 hidden md:block">
                <button class="text-gray-400 hover:text-primary transition-colors text-xs font-medium tracking-wide">
                    VN <span class="mx-1">|</span> <span class="text-white">EN</span>
                </button>
            </div>

            {{-- Logo --}}
            <div class="flex flex-col items-center justify-center w-full order-1 md:order-2 mb-4 md:mb-0">
                <div class="mb-1">
                    <span class="material-icons text-2xl text-primary opacity-90 logo-icon">spa</span>
                </div>
                <div class="text-center logo-group cursor-pointer">
                    <h1 class="font-headerTitle text-3xl md:text-4xl uppercase tracking-[0.15em] text-white mb-1 group-hover:text-primary transition-colors duration-500">
                        The Wandering Rose
                    </h1>
                    <div class="font-headerTitle italic text-xl md:text-2xl text-gray-400 relative inline-block px-8">
                        <span class="absolute left-0 top-1/2 -translate-y-1/2 text-[9px] not-italic text-gray-600 uppercase tracking-widest font-headerUI">Est</span>
                        Ba Vì
                        <span class="absolute right-0 top-1/2 -translate-y-1/2 text-[9px] not-italic text-gray-600 uppercase tracking-widest font-headerUI">2023</span>
                    </div>
                </div>
            </div>

            {{-- Phone Number --}}
            <div class="md:absolute md:right-0 md:top-1/2 md:-translate-y-1/2 order-3 flex items-center gap-2 text-primary hover:text-white transition-colors phone-link">
                <span class="material-icons text-sm phone-icon">phone</span>
                <a class="tracking-wider text-sm font-medium" href="tel:0929816699">092 981 6699</a>
            </div>
        </div>
    </div>

    {{-- Navigation Menu --}}
    <div class="border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav>
                <ul class="flex flex-wrap justify-center gap-x-8 gap-y-2 text-center py-3">
                    <li>
                        <a class="nav-link text-[11px] uppercase tracking-widest text-gray-400 hover:text-primary transition-colors relative group" href="#">
                            Trang Chủ
                            <span class="nav-link-underline"></span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link text-[11px] uppercase tracking-widest text-gray-400 hover:text-primary transition-colors relative group" href="#">
                            Về Chúng Tôi
                            <span class="nav-link-underline"></span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link text-[11px] uppercase tracking-widest text-gray-400 hover:text-primary transition-colors relative group" href="#">
                            Hạng Phòng
                            <span class="nav-link-underline"></span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link text-[11px] uppercase tracking-widest text-gray-400 hover:text-primary transition-colors relative group" href="#">
                            Dịch Vụ
                            <span class="nav-link-underline"></span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link text-[11px] uppercase tracking-widest text-gray-400 hover:text-primary transition-colors relative group" href="#">
                            Tour
                            <span class="nav-link-underline"></span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link text-[11px] uppercase tracking-widest text-gray-400 hover:text-primary transition-colors relative group" href="#">
                            Liên Hệ
                            <span class="nav-link-underline"></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
