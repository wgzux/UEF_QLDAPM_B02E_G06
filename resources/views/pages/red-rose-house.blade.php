<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Red Rose House</title>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700;900&amp;family=Noto+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#ec1313",
                        "background-light": "#f8f6f6",
                        "background-dark": "#221111",
                        "surface-dark": "#331a1a",
                        "border-dark": "#482323",
                        "accent-dark": "#673232",
                    },
                    fontFamily: {
                        "display": ["Noto Serif", "serif"],
                        "body": ["Noto Sans", "sans-serif"],
                    },
                    borderRadius: {"DEFAULT": "0.5rem", "lg": "1rem", "xl": "1.5rem", "full": "9999px"},
                },
            },
        }
    </script>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white font-display antialiased overflow-x-hidden selection:bg-primary selection:text-white">
<!-- TopNavBar -->
<header class="sticky top-0 z-50 w-full border-b border-solid border-border-dark bg-background-dark/95 backdrop-blur-sm px-4 lg:px-10 py-3">
<div class="flex items-center justify-between whitespace-nowrap max-w-[1440px] mx-auto">
<div class="flex items-center gap-4 text-white">
<div class="size-8 text-primary flex items-center justify-center">
<span class="material-symbols-outlined text-3xl">local_florist</span>
</div>
<h2 class="text-white text-lg font-bold leading-tight tracking-[-0.015em]">Red Rose House</h2>
</div>
<div class="hidden md:flex flex-1 justify-end gap-8 items-center">
<nav class="flex items-center gap-9">
<a class="text-white text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">Home</a>
<a class="text-white text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">Stays</a>
<a class="text-white text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">Events</a>
</nav>
<div class="flex gap-2">
<button class="flex h-10 items-center justify-center overflow-hidden rounded-xl bg-surface-dark border border-border-dark text-white gap-2 text-sm font-bold px-4 hover:bg-border-dark transition-colors">
<span class="material-symbols-outlined text-[20px]">search</span>
<span class="hidden lg:inline">Search</span>
</button>
<button class="flex h-10 w-10 cursor-pointer items-center justify-center overflow-hidden rounded-xl bg-primary text-white hover:bg-red-600 transition-colors">
<span class="material-symbols-outlined text-[20px]">person</span>
</button>
</div>
</div>
<!-- Mobile Menu Icon -->
<button class="md:hidden text-white">
<span class="material-symbols-outlined">menu</span>
</button>
</div>
</header>
<main class="flex flex-col items-center">
<!-- HeroSection -->
<div class="w-full relative">
<div class="relative h-[60vh] min-h-[500px] w-full bg-cover bg-center bg-no-repeat" data-alt="Interior of a luxury bedroom with red rose petals on the bed and soft lighting" style='background-image: linear-gradient(to bottom, rgba(34, 17, 17, 0.2) 0%, rgba(34, 17, 17, 0.9) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuCx85Hca1hD-YkvZf3JoxLUYrKSP4qptcpiarTu5kemP5xyEVI94EGI1Yry8leuVdsQm6kKURXoM_tFDo9mT3w7wjR1c7Vq746Me3y18SeQx_n55EOH4ZU4EGMPUiWkYutDynEEG3Kis5GVbP_aCWeQXDsL1kfw2ImrGdqQ589dTNxvXv7ig8iDWivd0rpbZrudhHoxV0kK6pH6z9vjz4hlfjruZ4Ptr_ftqoTyxaFap8MA7ItFQ_PJtP0rBLBRE5oTlYluj0G6z_k");'>
<div class="absolute inset-0 flex flex-col items-center justify-center text-center p-6">
<div class="max-w-3xl animate-fade-in">
<span class="inline-block py-1 px-3 rounded-full bg-primary/20 border border-primary/40 text-primary text-xs font-bold uppercase tracking-wider mb-4 backdrop-blur-sm">
                            Exclusive Collection
                        </span>
<h1 class="text-white text-5xl md:text-7xl font-black leading-tight tracking-[-0.033em] mb-4 drop-shadow-lg">
                            Red Rose House
                        </h1>
<p class="text-gray-200 text-lg md:text-xl font-normal leading-relaxed max-w-2xl mx-auto drop-shadow-md font-body">
                            Experience the romance of Napa Valley in our exclusive rose-themed sanctuary. Where luxury meets passion.
                        </p>
</div>
</div>
<div class="absolute bottom-0 w-full h-24 bg-gradient-to-t from-background-dark to-transparent"></div>
</div>
</div>
<!-- Content Grid -->
<div class="w-full max-w-[1280px] px-4 md:px-8 py-8 grid grid-cols-1 lg:grid-cols-[2fr_1fr] gap-12">
<!-- LEFT COLUMN: Main Details -->
<div class="flex flex-col gap-10">
<!-- Quick Info Bar -->
<div class="flex flex-wrap items-center justify-between border-b border-border-dark pb-6 gap-4">
<div class="flex flex-col">
<h2 class="text-2xl font-bold text-white">Entire villa in Napa, California</h2>
<span class="text-gray-400 text-sm font-body">4 guests · 2 bedrooms · 2 beds · 2 baths</span>
</div>
<div class="flex items-center gap-2 bg-surface-dark px-3 py-1.5 rounded-lg border border-border-dark">
<span class="material-symbols-outlined text-primary fill-1">star</span>
<span class="text-white font-bold">4.96</span>
<span class="text-gray-400 text-sm underline cursor-pointer hover:text-white">124 reviews</span>
</div>
</div>
<!-- Host Profile Snippet -->
<div class="flex items-center gap-4">
<div class="size-14 rounded-full bg-gray-700 bg-cover bg-center border-2 border-primary" data-alt="Portrait of a smiling woman host" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBRFyLAh1io8pl3jyRNEUH6s_bUYNYLEd0r3w28_U7Xdg-wxQAMukT8XRtZyZRLUnKgACQ6SV3v4D0gLkEKdQprxfnLBFOPCE1WtAMVmjJerIEh0IzohT-6fp19FTwHuuC9xDPUO_4ytcUwX47qmlRUSIRVuGlAThONRWxOK2CqxwXL5EZLmpmNPP6_oiz0DJjRFQkSVZomv355bIq8llN5ii1pSAoTSit1u6-XJYQIEzNUI2eq5ajXS0S2N0y7KBAw6ofFG5Gy6cw");'></div>
<div>
<p class="text-white font-bold text-lg">Hosted by Eleanor Rose</p>
<p class="text-gray-400 text-sm font-body">Superhost · 5 years hosting</p>
</div>
</div>
<!-- Description -->
<div>
<p class="text-gray-300 text-lg font-normal leading-relaxed font-body">
                        Escape to a world of romance. The Red Rose House offers an intimate setting featuring lush gardens, bespoke red decor, and luxurious amenities designed for couples looking for a perfect getaway. Every corner is curated with deep reds, velvets, and fresh floral arrangements that change daily.
                    </p>
<button class="mt-4 flex items-center gap-1 text-white font-bold underline decoration-primary decoration-2 underline-offset-4 hover:text-primary transition-colors">
                        Show more <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</button>
</div>
<!-- Amenities Section -->
<div class="border-y border-border-dark py-10">
<h3 class="text-white text-2xl font-bold mb-6">What this place offers</h3>
<div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 gap-x-8">
<div class="flex items-center gap-4 text-gray-200">
<span class="material-symbols-outlined text-gray-400">spa</span>
<span class="font-body">Private hot tub</span>
</div>
<div class="flex items-center gap-4 text-gray-200">
<span class="material-symbols-outlined text-gray-400">wifi</span>
<span class="font-body">Fast Wifi</span>
</div>
<div class="flex items-center gap-4 text-gray-200">
<span class="material-symbols-outlined text-gray-400">fireplace</span>
<span class="font-body">Indoor fireplace</span>
</div>
<div class="flex items-center gap-4 text-gray-200">
<span class="material-symbols-outlined text-gray-400">local_florist</span>
<span class="font-body">Private rose garden access</span>
</div>
<div class="flex items-center gap-4 text-gray-200">
<span class="material-symbols-outlined text-gray-400">king_bed</span>
<span class="font-body">King-sized velvet bed</span>
</div>
<div class="flex items-center gap-4 text-gray-200">
<span class="material-symbols-outlined text-gray-400">local_parking</span>
<span class="font-body">Free parking on premises</span>
</div>
</div>
<button class="mt-8 px-6 py-3 rounded-xl border border-white/20 hover:border-white text-white font-semibold transition-colors w-full md:w-auto">
                        Show all 32 amenities
                    </button>
</div>
<!-- Image Grid Gallery -->
<div class="flex flex-col gap-6">
<h3 class="text-white text-2xl font-bold">A peek inside</h3>
<div class="grid grid-cols-2 md:grid-cols-4 gap-3 h-96 md:h-[400px]">
<!-- Main Large Image -->
<div class="col-span-2 row-span-2 w-full h-full bg-center bg-no-repeat bg-cover rounded-xl relative group overflow-hidden cursor-pointer" data-alt="Luxurious living room with red velvet sofa and fireplace" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCtL2EXMSy6XGrL5exvgBYd951ihISznyr_A2aTgBz1KLXXkHfZltbJ_qkxvU0L356H0wRZ2Xkz4_QGlbtSKLTDu3cckKImFOskQ-KoduYobJ_DBQcPUqaplTemymU9sRQ4IesdkRJTj44au3Wi0wDTMlC1xmPbYs-357VV8WshymN57caDBksgSPAHDL__ezOdv7qc8SqJ_c1T-NJ6QrPHlY1kjlV_mWdHKaXpbkMsCo7o4yBzq4WekRwyloiX-cwuQqRel6yRGek");'>
<div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300"></div>
</div>
<!-- Side Images -->
<div class="col-span-1 w-full h-full bg-center bg-no-repeat bg-cover rounded-xl relative group overflow-hidden cursor-pointer" data-alt="Detail of red roses in a vase" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBZfQd0h6lSm1tgoeFEblMZMmC0FHK09XI1jSnn9556FdUGeaQnAZyQ7jN9JWs12RLt4LhL1Xu-lnERY-kYvRl2xIhq4M6_j-_YXuRnUDFR90pI7Z68wjrKYiwDZdKOfPqOTzg_2uicRo27BklKa2CUrr09enEVZCzQehZtP0bZhTMAw-9SJzIlFd1O3JZd5GTAlUntHb5l_snEHkseYhkxQWpSkvJhptq_6XVbCo_G8noY2Y8r0fWdzmJNeI39Ddh-E8uIDHNPxnM");'>
<div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300"></div>
</div>
<div class="col-span-1 w-full h-full bg-center bg-no-repeat bg-cover rounded-xl relative group overflow-hidden cursor-pointer" data-alt="Vintage bathtub with candles" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCRPZGr0gtohR5OuvrxpIA-1XW57nVfQ1qTfGc7WOqZJVfY1w2yYGd81YMKBX7eP5GkQXoWbpEg4Fi8EEVSx6plRr7VqJS5C-QNmKM_mErS5QoN-ewzADJeVEBm15B_FBZ66mFlyTFVg3ki0OGQ5eRu-R1Mc8iz-bu9UhbY9BbJL4n4iIFiBdWzfp0KkaMjS0H3YD9cSXdiiuHKmdzC2d_eBo0aP5P2Z5-1keusULiGv7ydfa3iFlqmY0bqcQDb7gyLA1JJ1xEOuRk");'>
<div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300"></div>
</div>
<div class="col-span-1 w-full h-full bg-center bg-no-repeat bg-cover rounded-xl relative group overflow-hidden cursor-pointer" data-alt="Outdoor patio with garden view" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB1l56c-iilgTNxt4bHDqhlh3337KDUIUrJZzO-K0R0VLTiudv5_SJu5PPzYRk-rrje26Jd_jxIFnNT6WPlTzgQdNT3QRxRENXWy8OI3_PQTL9oxaQQcB3rFrn1iSHT9nCm4XQQyor7_HXANh5RsVVCJx_AhP8mnpf-y_COb9Z80X_ZqNPJ8pYavV3Dc-K3EkvxO07PZCkxLK3Yk0OmXJdOr8hQr-z2nMEqO0ggWNKOCUPMu0zc3yLTtz1MuqQNYYh4MqXgoy-Bfvo");'>
<div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300"></div>
</div>
<div class="col-span-1 w-full h-full bg-center bg-no-repeat bg-cover rounded-xl relative group overflow-hidden cursor-pointer" data-alt="Modern kitchen with red accents" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAk43U_bcipV4n90HY9xan4oHhR4xRJigtqjTQMiQfFbDa0pIZuq8vx2sqH-jvkrEmGrQvGMJB6innMaCkutCYTf8nGPjnU-0KnShnartEUgfKX-oz5qdGGwc6v9YI4LnuUqOeq7q4hfHWi8-6h3h5Fku_8tsuWgSFlW2R8cJcW2kgWFDYl2KbKGLGnw3YAgEsy_S7d0AA-c-SeymKF7WvaPK3uD6YHekqu41iPBMXWH8uUh-bu5N7tk-PQOCctrdxeHtRGp0zyMh0");'>
<div class="absolute inset-0 bg-black/20 flex items-center justify-center group-hover:bg-black/40 transition-all duration-300">
<span class="text-white font-bold flex items-center gap-1">+12 <span class="hidden md:inline">Photos</span></span>
</div>
</div>
</div>
</div>
<!-- Rating Summary -->
<div class="border-t border-border-dark pt-10">
<h3 class="text-white text-2xl font-bold mb-6">Guest Reviews</h3>
<div class="flex flex-wrap gap-x-12 gap-y-6">
<div class="flex flex-col gap-2">
<div class="flex items-baseline gap-3">
<span class="text-white text-6xl font-black leading-tight tracking-[-0.033em]">4.9</span>
<div class="flex flex-col">
<div class="flex gap-1 mb-1">
<span class="material-symbols-outlined text-primary text-[20px] fill-1">star</span>
<span class="material-symbols-outlined text-primary text-[20px] fill-1">star</span>
<span class="material-symbols-outlined text-primary text-[20px] fill-1">star</span>
<span class="material-symbols-outlined text-primary text-[20px] fill-1">star</span>
<span class="material-symbols-outlined text-primary text-[20px] fill-1">star_half</span>
</div>
<p class="text-gray-400 text-sm font-normal">124 verified reviews</p>
</div>
</div>
</div>
<div class="grid min-w-[280px] flex-1 grid-cols-[20px_1fr_40px] items-center gap-y-2 font-body">
<span class="text-white text-xs font-bold">5</span>
<div class="flex h-1.5 flex-1 overflow-hidden rounded-full bg-surface-dark"><div class="rounded-full bg-primary" style="width: 87%;"></div></div>
<span class="text-gray-400 text-xs text-right">87%</span>
<span class="text-white text-xs font-bold">4</span>
<div class="flex h-1.5 flex-1 overflow-hidden rounded-full bg-surface-dark"><div class="rounded-full bg-primary" style="width: 10%;"></div></div>
<span class="text-gray-400 text-xs text-right">10%</span>
<span class="text-white text-xs font-bold">3</span>
<div class="flex h-1.5 flex-1 overflow-hidden rounded-full bg-surface-dark"><div class="rounded-full bg-primary" style="width: 2%;"></div></div>
<span class="text-gray-400 text-xs text-right">2%</span>
<span class="text-white text-xs font-bold">2</span>
<div class="flex h-1.5 flex-1 overflow-hidden rounded-full bg-surface-dark"><div class="rounded-full bg-primary" style="width: 1%;"></div></div>
<span class="text-gray-400 text-xs text-right">1%</span>
<span class="text-white text-xs font-bold">1</span>
<div class="flex h-1.5 flex-1 overflow-hidden rounded-full bg-surface-dark"><div class="rounded-full bg-primary" style="width: 0%;"></div></div>
<span class="text-gray-400 text-xs text-right">0%</span>
</div>
</div>
</div>
<!-- Location Map Placeholder -->
<div class="py-6">
<h3 class="text-white text-2xl font-bold mb-4">Where you'll be</h3>
<div class="w-full h-64 bg-surface-dark rounded-xl flex items-center justify-center relative overflow-hidden" data-location="Napa Valley, California" style="https://lh3.googleusercontent.com/aida-public/AB6AXuDT9Y5Qmh1EO_dUM9OLPcpFlOjeQyJ3bsCQpguiKupRaVYV76nYxK4hk9HtIH7ySymCB5iyp9HsUIhF7b9uXhtIeVauM6bq1XrgACIdcZQC210va-a7-Jsgs1YirnOi125OZgLjQXWB-zxx_ZzO2z0tW26nwcq8-ehG4ZeOuWwCPqWiLO1uxMDBmLrjbzLLWoNd30OVVQuZ9KYWRQQ-AwWn1n8UDeeztyeaueAIcdxrdwagWvkEUmlc56EekiaFJaCLoix--utKoOo">
<div class="absolute inset-0 opacity-50 bg-cover bg-center" data-alt="Map view of Napa Valley vineyards" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA77IupV5c43dVDDQeRZ-8v-VhAOdxZnBf6vUaIiBRLRKIerMOHFmxoTIrpY7CnrZxzzTNhdPL4hYy8KWGQJYDbnl9Yg4tqj1Zz2P9ePqrZSzzIgQDngu5uIoEDIByEiVQ3SHENBXLhLzPhMuLzOrxRZOjVXLw-GzimoVyfLlSxPPUIglD8BwhliOSGdsJBHMNC5TxYtJxFIrxQIzohwZ4cJJLQJfdvA3xlSh1tKSBJLik64abrcQwxNt9KNlYr1Z_O-eeCnM1KIfM");'></div>
<button class="relative z-10 bg-white text-black font-bold py-2 px-4 rounded-lg shadow-lg hover:scale-105 transition-transform">
                            Show on map
                        </button>
</div>
<p class="text-gray-400 mt-4 font-body text-sm">Napa Valley, California, United States</p>
<p class="text-gray-300 mt-1 font-body text-sm">Located in the heart of wine country, just 10 minutes from downtown Napa.</p>
</div>
</div>
<!-- RIGHT COLUMN: Sticky Booking Card -->
<div class="relative hidden lg:block">
<div class="sticky top-28 w-full">
<div class="bg-surface-dark border border-border-dark rounded-2xl p-6 shadow-2xl shadow-black/50">
<div class="flex items-end justify-between mb-6">
<div class="flex items-baseline gap-1">
<span class="text-3xl font-bold text-white">$350</span>
<span class="text-gray-400 text-base font-normal">/ night</span>
</div>
<div class="flex items-center gap-1 text-xs text-gray-400">
<span class="line-through decoration-red-500">$450</span>
<span class="text-primary font-bold">Save 22%</span>
</div>
</div>
<!-- Date Picker Fakes -->
<div class="rounded-xl border border-gray-600 mb-4 overflow-hidden">
<div class="flex border-b border-gray-600">
<div class="flex-1 p-3 border-r border-gray-600 hover:bg-white/5 cursor-pointer transition-colors">
<label class="block text-[10px] uppercase font-bold text-white mb-0.5">Check-in</label>
<div class="text-gray-300 text-sm font-body">Add date</div>
</div>
<div class="flex-1 p-3 hover:bg-white/5 cursor-pointer transition-colors">
<label class="block text-[10px] uppercase font-bold text-white mb-0.5">Checkout</label>
<div class="text-gray-300 text-sm font-body">Add date</div>
</div>
</div>
<div class="p-3 hover:bg-white/5 cursor-pointer transition-colors flex justify-between items-center">
<div>
<label class="block text-[10px] uppercase font-bold text-white mb-0.5">Guests</label>
<div class="text-gray-300 text-sm font-body">2 guests</div>
</div>
<span class="material-symbols-outlined text-white">expand_more</span>
</div>
</div>
<button class="w-full bg-primary hover:bg-red-600 text-white font-bold py-3.5 rounded-xl transition-all shadow-lg hover:shadow-red-900/50 mb-4">
                            Reserve
                        </button>
<p class="text-center text-gray-500 text-sm mb-6 font-body">You won't be charged yet</p>
<div class="flex flex-col gap-3 text-gray-300 text-sm font-body">
<div class="flex justify-between">
<span class="underline decoration-gray-600">1 night</span>
<span>$350</span>
</div>
<div class="flex justify-between">
<span class="underline decoration-gray-600">Cleaning fee</span>
<span>$85</span>
</div>
<div class="flex justify-between">
<span class="underline decoration-gray-600">Service fee</span>
<span>$60</span>
</div>
</div>
<div class="mt-6 pt-6 border-t border-border-dark flex justify-between text-white font-bold text-lg">
<span>Total</span>
<span>$495</span>
</div>
</div>
<div class="mt-4 flex items-center justify-center gap-2 text-gray-500 text-sm">
<span class="material-symbols-outlined text-[16px]">flag</span>
<span class="underline hover:text-gray-300 cursor-pointer">Report this listing</span>
</div>
</div>
</div>
</div>
<!-- Mobile Bottom Bar (Sticky) -->
<div class="fixed bottom-0 left-0 right-0 bg-surface-dark border-t border-border-dark p-4 lg:hidden z-40 flex items-center justify-between safe-area-bottom">
<div>
<div class="flex items-baseline gap-1">
<span class="text-xl font-bold text-white">$350</span>
<span class="text-gray-400 text-sm font-normal">/ night</span>
</div>
<div class="text-xs text-gray-400 underline">Oct 24 - 29</div>
</div>
<button class="bg-primary hover:bg-red-600 text-white font-bold py-2.5 px-6 rounded-lg shadow-lg">
                Reserve
            </button>
</div>
</main>
<!-- Footer -->
<footer class="w-full bg-black text-gray-400 py-12 px-6 border-t border-border-dark mt-12 pb-24 lg:pb-12">
<div class="max-w-[1280px] mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
<div class="col-span-1">
<h4 class="text-white font-bold mb-4">Support</h4>
<ul class="space-y-3 text-sm font-body">
<li><a class="hover:underline" href="#">Help Center</a></li>
<li><a class="hover:underline" href="#">AirCover</a></li>
<li><a class="hover:underline" href="#">Anti-discrimination</a></li>
<li><a class="hover:underline" href="#">Disability support</a></li>
</ul>
</div>
<div class="col-span-1">
<h4 class="text-white font-bold mb-4">Hosting</h4>
<ul class="space-y-3 text-sm font-body">
<li><a class="hover:underline" href="#">Airbnb your home</a></li>
<li><a class="hover:underline" href="#">AirCover for Hosts</a></li>
<li><a class="hover:underline" href="#">Hosting resources</a></li>
<li><a class="hover:underline" href="#">Community forum</a></li>
</ul>
</div>
<div class="col-span-1">
<h4 class="text-white font-bold mb-4">Red Rose House</h4>
<ul class="space-y-3 text-sm font-body">
<li><a class="hover:underline" href="#">Newsroom</a></li>
<li><a class="hover:underline" href="#">New features</a></li>
<li><a class="hover:underline" href="#">Careers</a></li>
<li><a class="hover:underline" href="#">Investors</a></li>
</ul>
</div>
<div class="col-span-1">
<h4 class="text-white font-bold mb-4">Newsletter</h4>
<p class="text-sm mb-4">Get the latest updates on romantic getaways.</p>
<div class="flex gap-2">
<input class="w-full bg-surface-dark border border-gray-700 rounded-lg px-3 py-2 text-white focus:outline-none focus:border-primary" placeholder="Email address" type="email"/>
<button class="bg-primary hover:bg-red-600 text-white p-2 rounded-lg">
<span class="material-symbols-outlined text-[20px]">arrow_forward</span>
</button>
</div>
</div>
</div>
<div class="max-w-[1280px] mx-auto mt-12 pt-8 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center gap-4 text-sm font-body">
<p>© 2023 Red Rose House, Inc. All rights reserved.</p>
<div class="flex gap-6">
<a class="hover:text-white transition-colors" href="#">Privacy</a>
<a class="hover:text-white transition-colors" href="#">Terms</a>
<a class="hover:text-white transition-colors" href="#">Sitemap</a>
</div>
</div>
</footer>
</body></html>