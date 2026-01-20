<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Đặt Phòng - The Wandering Rose Ba Vì</title>
    
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Lato:wght@300;400;700&display=swap" rel="stylesheet" />
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
    
    <style>
        .calendar-day { transition: all 0.3s; cursor: pointer; }
        .calendar-day:hover:not(.disabled):not(.empty) { transform: translateY(-2px); border-color: #8B6B4E; }
        .calendar-day.selected { background: #8B6B4E !important; color: white; border-color: #8B6B4E; }
        .calendar-day.in-range { background: #F3EBE3; color: black; }
        .calendar-day.disabled { opacity: 0.3; cursor: not-allowed; }
        /* Custom scrollbar for aesthetic */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #D4C5B0; borderRadius: 4px; }
    </style>
</head>

<body class="bg-[#FDFBF7] text-gray-700 font-body antialiased min-h-screen flex flex-col">

    {{-- HEADER --}}
    <header class="py-6 px-4 md:px-12 flex justify-between items-center bg-transparent">
        <a href="{{ route('home') }}" class="flex items-center text-xs tracking-widest text-[#8B6B4E] hover:opacity-80 transition-opacity uppercase font-medium">
            <span class="material-icons-outlined text-sm mr-2">west</span>
            Trở về
        </a>

        <div class="text-center">
            <h1 class="font-display text-3xl md:text-4xl text-[#8B6B4E] tracking-wide mb-1">THE WANDERING ROSE</h1>
            <div class="flex items-center justify-center gap-2">
                <span class="h-[1px] w-8 bg-[#C5A065]"></span>
                <span class="font-display italic text-lg text-[#C5A065]">Ba Vì</span>
                <span class="h-[1px] w-8 bg-[#C5A065]"></span>
            </div>
        </div>

        <div class="relative">
            <button class="flex items-center space-x-2 border border-gray-200 px-3 py-1.5 rounded bg-white text-xs text-gray-600 hover:border-[#8B6B4E] transition-colors">
                <span>VND</span>
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/21/Flag_of_Vietnam.svg" alt="VN" class="w-4 h-3 object-cover shadow-sm">
                <span class="material-icons-outlined text-sm text-gray-400">expand_more</span>
            </button>
        </div>
    </header>

    {{-- MAIN CONTENT --}}
    <main class="flex-grow w-full max-w-7xl mx-auto px-4 md:px-8 py-8">
        @include('pages.booking.partials.step-date')
    </main>

    {{-- SCRIPTS --}}
    <script>
        // Shared Booking Data logic if needed globally
        let bookingData = {
            checkIn: null,
            checkOut: null,
            nights: 0,
            adults: 2,
            children: 0,
            selectedRooms: {}, 
            totalPrice: 0
        };

        const roomTypesData = {!! json_encode($roomTypes->map(function($room) {
            return [
                'id' => $room->id,
                'name' => $room->name,
                'price_per_night' => (int) $room->base_price,
            ];
        })->values()) !!};

        // Helper to formatting currency
        function formatPrice(price) {
            return new Intl.NumberFormat('vi-VN').format(price) + ' ₫';
        }
    </script>
    
    @stack('scripts')
</body>
</html>
