<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>The Wandering Rose - Hotel Booking</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&amp;family=Nunito+Sans:wght@300;400;600;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet"/>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#b0855b",
                        secondary: "#fbf8f5",
                        "background-light": "#fbf8f5",
                        "background-dark": "#1a1a1a",
                        "surface-light": "#ffffff",
                        "surface-dark": "#2d2d2d",
                        "text-main": "#4a4a4a",
                        "text-light": "#888888",
                    },
                    fontFamily: {
                        display: ["Playfair Display", "serif"],
                        body: ["Nunito Sans", "sans-serif"],
                    },
                    borderRadius: {
                        DEFAULT: "4px",
                    },
                    maxWidth: {
                        'calendar': '1200px',
                    }
                },
            },
        };
    </script>
    {{-- Load CSS đã tách (public) --}}
    <link rel="stylesheet" href="{{ asset('css/pages/đặtphòngcss.css') }}">
</head>
<body class="bg-background-light dark:bg-background-dark text-text-main dark:text-gray-200 font-body transition-colors duration-300 min-h-screen flex flex-col">
<header class="w-full px-6 py-6 md:px-12 flex justify-between items-start">
<a class="flex items-center text-primary hover:opacity-80 transition-opacity text-sm font-semibold tracking-wide uppercase mt-2" href="#">
<span class="material-icons-outlined text-base mr-1">west</span>
            Trở về
        </a>
<div class="flex flex-col items-center text-center">
<span class="material-icons-outlined text-primary text-2xl mb-1">spa</span>
<h1 class="font-display text-3xl md:text-4xl text-primary tracking-wide">THE WANDERING ROSE</h1>
<h2 class="font-display text-2xl text-primary italic font-light relative px-8 mt-1">
<span class="absolute left-0 top-1/2 w-6 h-[1px] bg-primary opacity-50"></span>
                Ba Vi
                <span class="absolute right-0 top-1/2 w-6 h-[1px] bg-primary opacity-50"></span>
</h2>
<span class="text-[10px] tracking-[0.2em] text-primary mt-1 uppercase">Est. 2025</span>
</div>
<div class="relative mt-2">
<button class="flex items-center space-x-2 border border-gray-300 dark:border-gray-600 rounded px-3 py-1.5 bg-surface-light dark:bg-surface-dark text-xs font-semibold hover:border-primary transition-colors">
<span>VNĐ</span>
<img alt="Vietnam Flag" class="w-5 h-3.5 object-cover rounded-[1px]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD_HLj3JX7HIwCbCKE5wCXlvNCwuoSL27EeosKvtqhQ0y4-XdEpoTf-Q4CIwfOub5Qym3k6szaPiQEWdR5bJS4KDD319fZvswDWW6y1x3vVSjZWAqehuT2CJQKODFMXf4bpTTm1mlUBdyCgFKmrvdyso50YS3Rgv4xG4lU6Yv653Cw8KT7n23Z63Eb_7jlZh4M_pMaQHKrAKGsCppC34QDwqQyUHFmdnGA0W8VKTdQ27pIVAEfghTjoQjFAmNbuZ7LZIxvQoQSzl0bj"/>
<span class="material-icons-outlined text-sm">expand_more</span>
</button>
</div>
</header>
<main class="flex-grow w-full max-w-calendar mx-auto px-4 md:px-8 pb-12">
<!-- (HTML content unchanged) -->
<div class="flex flex-col lg:flex-row items-center justify-between mb-12 gap-8 lg:gap-4">
<div class="flex items-center gap-8">
<div class="flex flex-col">
<div class="flex items-center gap-2 mb-1">
<span class="text-sm font-bold uppercase tracking-wider">Ngày</span>
<span class="bg-primary text-white text-[10px] font-bold px-2 py-0.5 rounded-full">0 Đêm</span>
</div>
<div class="flex items-end gap-6 text-primary font-display">
<div class="flex items-baseline">
<span class="text-5xl leading-none">27</span>
<div class="flex flex-col ml-2 text-sm font-body text-primary/80 leading-tight">
<span>Tháng 9</span>
<span>2025</span>
</div>
</div>
<div class="text-3xl font-light text-gray-300 dark:text-gray-600">/</div>
<div class="flex items-baseline">
<span class="text-5xl leading-none">27</span>
<div class="flex flex-col ml-2 text-sm font-body text-primary/80 leading-tight">
<span>Tháng 9</span>
<span>2025</span>
</div>
</div>
</div>
</div>
</div>
<div class="flex items-center gap-8 lg:gap-12">
<div class="flex flex-col items-center">
<span class="text-sm font-bold uppercase tracking-wider mb-2">Phòng</span>
<span class="font-display text-4xl text-text-main dark:text-white">1</span>
</div>
<div class="flex flex-col items-center">
<span class="text-sm font-bold uppercase tracking-wider mb-2">Người lớn</span>
<span class="font-display text-4xl text-text-main dark:text-white">2</span>
</div>
<div class="flex flex-col items-center">
<span class="text-sm font-bold uppercase tracking-wider mb-2">Trẻ em</span>
<span class="font-display text-4xl text-text-main dark:text-white">0</span>
</div>
<button class="text-gray-400 hover:text-primary transition-colors -ml-4 mt-6">
<span class="material-icons-outlined text-2xl">expand_more</span>
</button>
</div>
<div>
<button class="bg-primary hover:bg-opacity-90 text-white text-sm font-bold uppercase tracking-wider px-6 py-3 rounded flex items-center gap-2 transition-all shadow-md">
                    Tìm kiếm
                    <span class="material-icons-outlined text-lg">search</span>
</button>
</div>
</div>
<div class="flex justify-between items-center w-full mb-6 px-2">
<button class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center hover:bg-opacity-80 transition-colors shadow-sm">
<span class="material-icons-outlined">arrow_back</span>
</button>
<button class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center hover:bg-opacity-80 transition-colors shadow-sm">
<span class="material-icons-outlined">arrow_forward</span>
</button>
</div>
<div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">
<div>
<h3 class="font-display text-2xl font-bold text-primary text-center mb-6">Tháng 9 2025</h3>
<div class="grid grid-cols-7 mb-4">
<div class="text-center font-bold text-sm uppercase">T2</div>
<div class="text-center font-bold text-sm uppercase">T3</div>
<div class="text-center font-bold text-sm uppercase">T4</div>
<div class="text-center font-bold text-sm uppercase">T5</div>
<div class="text-center font-bold text-sm uppercase">T6</div>
<div class="text-center font-bold text-sm uppercase">T7</div>
<div class="text-center font-bold text-sm uppercase text-primary">CN</div>
</div>
<div class="grid grid-cols-7 gap-2">
<div class="aspect-square flex items-center justify-center text-gray-300 dark:text-gray-600 font-light text-xl border border-gray-100 dark:border-gray-800 rounded">1</div>
<div class="aspect-square flex items-center justify-center text-gray-300 dark:text-gray-600 font-light text-xl border border-gray-100 dark:border-gray-800 rounded">2</div>
<div class="aspect-square flex items-center justify-center text-gray-300 dark:text-gray-600 font-light text-xl border border-gray-100 dark:border-gray-800 rounded">3</div>
<div class="aspect-square flex items-center justify-center text-gray-300 dark:text-gray-600 font-light text-xl border border-gray-100 dark:border-gray-800 rounded">4</div>
<div class="aspect-square flex items-center justify-center text-gray-300 dark:text-gray-600 font-light text-xl border border-gray-100 dark:border-gray-800 rounded">5</div>
<div class="aspect-square flex items-center justify-center text-gray-300 dark:text-gray-600 font-light text-xl border border-gray-100 dark:border-gray-800 rounded">6</div>
<div class="aspect-square flex items-center justify-center text-gray-300 dark:text-gray-600 font-light text-xl border border-gray-100 dark:border-gray-800 rounded">7</div>
<!-- ...rest of HTML unchanged... -->
</div>
</div>
</div>
</main>
<div class="fixed bottom-4 right-4 z-50">
<button class="p-3 bg-primary text-white rounded-full shadow-lg hover:bg-opacity-80 transition-all transform hover:scale-105" onclick="document.documentElement.classList.toggle('dark')">
<span class="material-icons-outlined block dark:hidden">dark_mode</span>
<span class="material-icons-outlined hidden dark:block">light_mode</span>
</button>
</div>

</body>
</html>