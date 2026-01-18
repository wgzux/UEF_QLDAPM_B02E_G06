<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Deluxe Room - LuxStay</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Tailwind Config -->
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#ec6d13",
                        "background-light": "#f8f7f6",
                        "background-dark": "#221811", // Matching the provided component bg
                        "card-dark": "#2a1f18",
                        "border-dark": "#483323",
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.5rem", "lg": "1rem", "xl": "1.5rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        /* Custom scrollbar for dark theme */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #221811; 
        }
        ::-webkit-scrollbar-thumb {
            background: #483323; 
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #ec6d13; 
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white font-display antialiased overflow-x-hidden selection:bg-primary selection:text-white">
<!-- TopNavBar -->
<header class="sticky top-0 z-50 bg-[#221811]/90 backdrop-blur-md border-b border-[#483323] transition-all">
<div class="max-w-[1440px] mx-auto px-4 sm:px-10 py-3 flex items-center justify-between whitespace-nowrap">
<div class="flex items-center gap-4 text-white">
<div class="size-8 text-primary">
<span class="material-symbols-outlined text-3xl">diamond</span>
</div>
<h2 class="text-white text-xl font-bold leading-tight tracking-[-0.015em]">LuxStay</h2>
</div>
<div class="hidden lg:flex flex-1 justify-end gap-8 items-center">
<div class="flex items-center gap-9">
<a class="text-white hover:text-primary transition-colors text-sm font-medium leading-normal" href="#">Home</a>
<a class="text-primary text-sm font-medium leading-normal" href="#">Rooms</a>
<a class="text-white hover:text-primary transition-colors text-sm font-medium leading-normal" href="#">Dining</a>
<a class="text-white hover:text-primary transition-colors text-sm font-medium leading-normal" href="#">Offers</a>
</div>
<button class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-6 bg-primary hover:bg-orange-600 transition-colors text-white text-sm font-bold leading-normal tracking-[0.015em]">
<span class="truncate">Book Now</span>
</button>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 ring-2 ring-primary/20" data-alt="User profile avatar placeholder" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDK9493CQPHGxcOakweFPJuai1z4me_YIroc2DUDY3_5KvZ1MHDVnf37g0_Fk0LQnJ92ztBrL5s5dRFZQ0kmssX1eyCtTjVimvSWPDCxXMseMgKd27-sfn3ZU98G1uoUlhyZOxo8pWyJDoh2PXVOpMvsMtP4lLv216VzBKaMf-OTK1buU4DjWVB2LrdO8kOvtpddnEyDyQYxavtsxwLB3BeVh3iGpT__HiNfNFN_y5eciPYHKeDyVY_QK41e_jlC09LISh-RwOJ4v4");'></div>
</div>
<button class="lg:hidden text-white">
<span class="material-symbols-outlined">menu</span>
</button>
</div>
</header>
<!-- Main Content Layout -->
<main class="w-full max-w-[1440px] mx-auto pb-20">
<!-- Hero Section -->
<div class="w-full px-4 sm:px-10 mt-6">
<div class="relative w-full rounded-2xl overflow-hidden min-h-[560px] flex items-end p-8 sm:p-12 bg-cover bg-center group" data-alt="Panoramic view of a deluxe oceanfront room with warm lighting and large windows" style='background-image: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0) 50%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuC_tFlBQVfZ1S_PJAL4qQuaiDNI1K3XurOCnJCZcMYIWNsZIj-lyjJk1OzR5-FSEnHiPifFPMyaj70DNI-YNUv3ZvUBV39uhyyPRWmJPyPkdpISOyVpvSd7h-IEbFwsBlJ_LjN_9IrtKfFp20vw3kPIpJMTic6Li081epzYUIhxJPeb0uOG6y8sLC0YyEbIZDGIkw4MM6Z5gDaZ7eqQTg6p9-XFpWQacIyYbH-zTYwqc4OQ3yq9fGAmNW6U9baVk75pMENA340USSs");'>
<div class="relative z-10 w-full max-w-4xl flex flex-col gap-4">
<div class="flex items-center gap-2 text-primary">
<span class="material-symbols-outlined fill-1">star</span>
<span class="material-symbols-outlined fill-1">star</span>
<span class="material-symbols-outlined fill-1">star</span>
<span class="material-symbols-outlined fill-1">star</span>
<span class="material-symbols-outlined fill-1">star</span>
<span class="text-white font-medium ml-2">5.0 (128 Reviews)</span>
</div>
<h1 class="text-white text-4xl sm:text-6xl font-black leading-tight tracking-[-0.033em]">
                        Deluxe Oceanfront Suite
                    </h1>
<p class="text-gray-200 text-lg sm:text-xl max-w-2xl font-light leading-relaxed">
                        Experience the pinnacle of luxury with panoramic ocean views, a private terrace, and bespoke amenities designed for your ultimate comfort.
                    </p>
</div>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 px-4 sm:px-10 mt-12">
<!-- Left Column: Details -->
<div class="lg:col-span-8 flex flex-col gap-12">
<!-- Description & Overview -->
<section>
<div class="flex justify-between items-baseline border-b border-[#483323] pb-6 mb-6">
<h2 class="text-white text-3xl font-bold">Room Overview</h2>
<div class="flex gap-4">
<button class="size-10 rounded-full bg-[#332419] flex items-center justify-center text-white hover:bg-primary transition-colors">
<span class="material-symbols-outlined">share</span>
</button>
<button class="size-10 rounded-full bg-[#332419] flex items-center justify-center text-white hover:bg-primary transition-colors">
<span class="material-symbols-outlined">favorite</span>
</button>
</div>
</div>
<p class="text-[#c9a992] text-lg leading-relaxed">
                        Step into a world of refined elegance. The Deluxe Oceanfront Suite offers 850 square feet of sophisticated living space, featuring floor-to-ceiling windows that frame the endless horizon. The interior blends modern design with natural textures, creating a serene sanctuary.
                    </p>
<div class="mt-8 grid grid-cols-2 md:grid-cols-4 gap-4">
<div class="bg-[#2a1f18] p-4 rounded-xl flex flex-col gap-3 items-start border border-[#483323]">
<span class="material-symbols-outlined text-primary text-3xl">king_bed</span>
<span class="text-white font-medium">King Size Bed</span>
</div>
<div class="bg-[#2a1f18] p-4 rounded-xl flex flex-col gap-3 items-start border border-[#483323]">
<span class="material-symbols-outlined text-primary text-3xl">square_foot</span>
<span class="text-white font-medium">850 sq ft</span>
</div>
<div class="bg-[#2a1f18] p-4 rounded-xl flex flex-col gap-3 items-start border border-[#483323]">
<span class="material-symbols-outlined text-primary text-3xl">groups</span>
<span class="text-white font-medium">Up to 3 Guests</span>
</div>
<div class="bg-[#2a1f18] p-4 rounded-xl flex flex-col gap-3 items-start border border-[#483323]">
<span class="material-symbols-outlined text-primary text-3xl">wifi</span>
<span class="text-white font-medium">Ultra Wi-Fi</span>
</div>
</div>
</section>
<!-- Image Gallery Grid -->
<section class="grid grid-cols-2 gap-4 h-[500px]">
<div class="col-span-1 h-full rounded-2xl bg-cover bg-center" data-alt="Close up of luxury bathroom marble textures and bathtub" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCuPoEbHENvBUyUAGtU94lplhXLl239IBRadxMHMlRHvlPqyuycrBSj719BMepN_vJJY-tm_rsMLttTYpKS1JOzaJNvB7vV22IbvZ4KTYKJ76soGCXKpWXgn5Wp58SaL3oIr9817I_z0TrrFmMsk7Dlah031em7MnDGLaFgSvpy5exS7vDRtBNLXea2akUp4FDSldlkcnzH3etHKZJ74aa0LJK7UHTpS3w6_jPHAlZKIWHPVuRBtPXaVmoEK0vq3eOk-HCbPy6xpfc");'></div>
<div class="col-span-1 grid grid-rows-2 gap-4 h-full">
<div class="rounded-2xl bg-cover bg-center" data-alt="Cozy reading nook with armchair and ocean view" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCQ6lzYt-aevw08Ncyi0pvoXuI3PNSZyFiTghJbkClV2aqF6gU0cpwDJMXLqfL5Xj8dpA2xpOR2E5hdcyqZ81wjpBG2dRP6blOxkwgRdyggHkLXIX1yeqov6JSnNlqWegb9mkCmhdi47WFE2CppXr0jWBU-aKFS1gvlw4ffEOu5PpoCWZvGFa5vR3uczgDpQ0mW4aRV2PgsQA5U3d9kltNoLmJ5OnVGy8FX3IhjyRkVxEGyLNXn6NrjuytiyD_-X2rTGDnGlIZp3UA");'></div>
<div class="rounded-2xl bg-cover bg-center relative" data-alt="Private balcony with lounge chairs at sunset" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC3JVuaRNqdrAlL5oaiaPBE1g8oploYKHITThjgD40tkE7d1ARs_V14Fn7ju-rqTlx00t1gopGNf22TbC6hwrzVszzJuYFXhXPspZM8I7cle_bl2FdHrylsBzRnBPosUBh8sW4t35F-5QWdH5_qhf_CCkWes07pw0vGDtVcakuUcPxqWWD5vGCuZdRwGZFZtk93Rbo5mkl3eUoE35p9QPsZjNm6zW2cgimjTllSoAcm7QIuRikn3u7-O0Lpsn5ERaxgcUvYT2Ao_ao");'>
<button class="absolute bottom-4 right-4 bg-black/50 hover:bg-black/70 backdrop-blur text-white px-4 py-2 rounded-lg text-sm font-bold flex items-center gap-2 transition-colors">
<span class="material-symbols-outlined text-base">grid_view</span> Show all photos
                            </button>
</div>
</div>
</section>
<!-- Amenities List -->
<section>
<h3 class="text-white text-2xl font-bold mb-6">Premium Amenities</h3>
<div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 gap-x-8">
<div class="flex items-center gap-4 py-2 border-b border-[#483323]/50">
<span class="material-symbols-outlined text-[#c9a992]">ac_unit</span>
<span class="text-white">Smart Climate Control</span>
</div>
<div class="flex items-center gap-4 py-2 border-b border-[#483323]/50">
<span class="material-symbols-outlined text-[#c9a992]">coffee_maker</span>
<span class="text-white">Nespresso Machine &amp; Mini Bar</span>
</div>
<div class="flex items-center gap-4 py-2 border-b border-[#483323]/50">
<span class="material-symbols-outlined text-[#c9a992]">hot_tub</span>
<span class="text-white">Jacuzzi &amp; Rain Shower</span>
</div>
<div class="flex items-center gap-4 py-2 border-b border-[#483323]/50">
<span class="material-symbols-outlined text-[#c9a992]">tv</span>
<span class="text-white">65" 4K Smart TV</span>
</div>
<div class="flex items-center gap-4 py-2 border-b border-[#483323]/50">
<span class="material-symbols-outlined text-[#c9a992]">dry_cleaning</span>
<span class="text-white">Daily Housekeeping &amp; Turndown</span>
</div>
<div class="flex items-center gap-4 py-2 border-b border-[#483323]/50">
<span class="material-symbols-outlined text-[#c9a992]">lock</span>
<span class="text-white">In-room Safe</span>
</div>
</div>
</section>
<!-- Availability Calendar (Provided Component styled) -->
<section id="availability">
<h3 class="text-white text-2xl font-bold mb-6">Availability</h3>
<div class="bg-[#2a1f18] rounded-2xl p-6 border border-[#483323] overflow-x-auto">
<div class="flex flex-wrap items-center justify-center gap-8 min-w-[600px]">
<!-- Month 1 -->
<div class="flex min-w-72 max-w-[336px] flex-1 flex-col gap-0.5">
<div class="flex items-center p-1 justify-between mb-4">
<button class="hover:bg-[#483323] rounded-full p-1 transition-colors">
<div class="text-white flex size-8 items-center justify-center">
<span class="material-symbols-outlined">chevron_left</span>
</div>
</button>
<p class="text-white text-base font-bold leading-tight flex-1 text-center">October 2023</p>
</div>
<div class="grid grid-cols-7 gap-1">
<p class="text-[#c9a992] text-xs font-bold flex h-8 w-full items-center justify-center">S</p>
<p class="text-[#c9a992] text-xs font-bold flex h-8 w-full items-center justify-center">M</p>
<p class="text-[#c9a992] text-xs font-bold flex h-8 w-full items-center justify-center">T</p>
<p class="text-[#c9a992] text-xs font-bold flex h-8 w-full items-center justify-center">W</p>
<p class="text-[#c9a992] text-xs font-bold flex h-8 w-full items-center justify-center">T</p>
<p class="text-[#c9a992] text-xs font-bold flex h-8 w-full items-center justify-center">F</p>
<p class="text-[#c9a992] text-xs font-bold flex h-8 w-full items-center justify-center">S</p>
<!-- Days -->
<button class="h-10 w-full text-white/30 col-start-4 text-sm font-medium"><div class="flex size-full items-center justify-center rounded-full">1</div></button>
<button class="h-10 w-full text-white/30 text-sm font-medium"><div class="flex size-full items-center justify-center rounded-full">2</div></button>
<button class="h-10 w-full text-white/30 text-sm font-medium"><div class="flex size-full items-center justify-center rounded-full">3</div></button>
<button class="h-10 w-full text-white/30 text-sm font-medium"><div class="flex size-full items-center justify-center rounded-full">4</div></button>
<!-- Active Range Start -->
<button class="h-10 w-full text-white rounded-l-full bg-[#ec6d13]/20 text-sm font-medium">
<div class="flex size-full items-center justify-center rounded-full bg-[#ec6d13]">5</div>
</button>
<!-- Active Range Middle -->
<button class="h-10 w-full bg-[#ec6d13]/20 text-white text-sm font-medium">
<div class="flex size-full items-center justify-center rounded-full">6</div>
</button>
<!-- Active Range End -->
<button class="h-10 w-full rounded-r-full bg-[#ec6d13]/20 text-white text-sm font-medium">
<div class="flex size-full items-center justify-center rounded-full bg-[#ec6d13]">7</div>
</button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">8</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">9</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">10</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">11</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">12</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">13</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">14</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">15</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">16</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">17</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">18</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">19</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">20</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">21</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">22</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">23</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">24</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">25</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">26</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">27</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">28</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">29</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">30</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">31</div></button>
</div>
</div>
<!-- Month 2 -->
<div class="flex min-w-72 max-w-[336px] flex-1 flex-col gap-0.5">
<div class="flex items-center p-1 justify-between mb-4">
<p class="text-white text-base font-bold leading-tight flex-1 text-center">November 2023</p>
<button class="hover:bg-[#483323] rounded-full p-1 transition-colors">
<div class="text-white flex size-8 items-center justify-center">
<span class="material-symbols-outlined">chevron_right</span>
</div>
</button>
</div>
<div class="grid grid-cols-7 gap-1">
<p class="text-[#c9a992] text-xs font-bold flex h-8 w-full items-center justify-center">S</p>
<p class="text-[#c9a992] text-xs font-bold flex h-8 w-full items-center justify-center">M</p>
<p class="text-[#c9a992] text-xs font-bold flex h-8 w-full items-center justify-center">T</p>
<p class="text-[#c9a992] text-xs font-bold flex h-8 w-full items-center justify-center">W</p>
<p class="text-[#c9a992] text-xs font-bold flex h-8 w-full items-center justify-center">T</p>
<p class="text-[#c9a992] text-xs font-bold flex h-8 w-full items-center justify-center">F</p>
<p class="text-[#c9a992] text-xs font-bold flex h-8 w-full items-center justify-center">S</p>
<button class="h-10 w-full text-white/30 col-start-4 text-sm font-medium"><div class="flex size-full items-center justify-center rounded-full">1</div></button>
<button class="h-10 w-full text-white/30 text-sm font-medium"><div class="flex size-full items-center justify-center rounded-full">2</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">3</div></button>
<!-- Add more mock days as needed to fill the visual grid, reusing simple logic -->
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">4</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">5</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">6</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">7</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">8</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">9</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">10</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">11</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">12</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">13</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">14</div></button>
<button class="h-10 w-full text-white text-sm font-medium hover:bg-[#483323] rounded-full"><div class="flex size-full items-center justify-center">15</div></button>
</div>
</div>
</div>
</div>
</section>
<!-- Reviews / Testimonial -->
<section>
<h3 class="text-white text-2xl font-bold mb-6">Guest Experience</h3>
<div class="relative bg-[#2a1f18] p-10 rounded-2xl border border-[#483323]">
<span class="material-symbols-outlined absolute top-6 left-6 text-6xl text-[#483323]/50 select-none">format_quote</span>
<blockquote class="relative z-10">
<p class="text-white text-xl italic leading-relaxed mb-6">
                                "The attention to detail was immaculate. From the personalized welcome note to the stunning sunset views from the balcony, everything about this stay was perfection. Highly recommend for a romantic getaway."
                            </p>
<footer class="flex items-center gap-4">
<div class="size-12 rounded-full bg-cover bg-center" data-alt="Guest avatar" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAXNoEY-j6nci0cEg_pH96WVHeFVaVO8GxsW-k4AfBvy1hTforfFu8PcUI2MuwLHqnaXhyx8LDSFkLcQUe4JWalkzdZ7DksYrnb6FqddhE0DFmGUf0Rzm36VAz1K6hCR-QWwpx6JhsE_ZUDolyC69UlRsNj-oaWzgzjQInCdlXMUkLV-bX_XclnX_6TK4huZ8OXYZ8_bn31ViK5fCz6jhPCfz65v__Tt8poDw5U8CgYwxlt49ZJSEk4_DCKUoFLhKGYi5ln1t_3iDk");'></div>
<div>
<div class="text-white font-bold">Sarah Jenkins</div>
<div class="text-[#c9a992] text-sm">Stayed October 2023</div>
</div>
</footer>
</blockquote>
</div>
</section>
</div>
<!-- Right Column: Sticky Booking Card -->
<div class="lg:col-span-4">
<div class="sticky top-24">
<div class="bg-[#2a1f18] rounded-2xl p-6 border border-[#483323] shadow-2xl shadow-black/40">
<div class="flex items-end justify-between mb-6 pb-6 border-b border-[#483323]">
<div>
<span class="text-[#c9a992] line-through text-sm">$600</span>
<div class="flex items-baseline gap-1">
<span class="text-white text-3xl font-bold">$450</span>
<span class="text-gray-400 text-sm">/ night</span>
</div>
</div>
<div class="flex items-center gap-1 bg-[#483323] px-2 py-1 rounded-md">
<span class="material-symbols-outlined text-primary text-sm">star</span>
<span class="text-white text-sm font-bold">5.0</span>
</div>
</div>
<!-- Form Fields -->
<div class="flex flex-col gap-4">
<div class="grid grid-cols-2 gap-2">
<label class="flex flex-col gap-2">
<span class="text-white text-xs font-bold uppercase tracking-wider">Check-in</span>
<div class="relative">
<input class="w-full bg-[#332419] border border-[#674832] text-white rounded-xl py-3 px-4 focus:ring-1 focus:ring-primary focus:border-primary focus:outline-none cursor-pointer text-sm font-medium" readonly="" type="text" value="Oct 5, 2023"/>
<span class="material-symbols-outlined absolute right-3 top-3 text-[#c9a992] pointer-events-none text-lg">calendar_today</span>
</div>
</label>
<label class="flex flex-col gap-2">
<span class="text-white text-xs font-bold uppercase tracking-wider">Check-out</span>
<div class="relative">
<input class="w-full bg-[#332419] border border-[#674832] text-white rounded-xl py-3 px-4 focus:ring-1 focus:ring-primary focus:border-primary focus:outline-none cursor-pointer text-sm font-medium" readonly="" type="text" value="Oct 7, 2023"/>
<span class="material-symbols-outlined absolute right-3 top-3 text-[#c9a992] pointer-events-none text-lg">calendar_today</span>
</div>
</label>
</div>
<!-- Guests Selector (Reused styling from TextField component) -->
<label class="flex flex-col gap-2">
<span class="text-white text-xs font-bold uppercase tracking-wider">Guests</span>
<div class="relative">
<select class="w-full appearance-none bg-[#332419] border border-[#674832] text-white rounded-xl py-3 px-4 focus:ring-1 focus:ring-primary focus:border-primary focus:outline-none cursor-pointer text-sm font-medium">
<option value="1">1 Guest</option>
<option selected="" value="2">2 Guests</option>
<option value="3">3 Guests</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-3 text-[#c9a992] pointer-events-none text-lg">expand_more</span>
</div>
</label>
<!-- Breakdown -->
<div class="mt-4 flex flex-col gap-2 text-sm text-[#c9a992]">
<div class="flex justify-between">
<span>$450 x 2 nights</span>
<span class="text-white">$900</span>
</div>
<div class="flex justify-between">
<span>Cleaning fee</span>
<span class="text-white">$50</span>
</div>
<div class="flex justify-between">
<span>Service fee</span>
<span class="text-white">$35</span>
</div>
<div class="h-px bg-[#483323] my-2"></div>
<div class="flex justify-between text-base font-bold text-white">
<span>Total</span>
<span>$985</span>
</div>
</div>
<!-- CTA Button -->
<button class="w-full mt-4 bg-primary hover:bg-orange-600 text-white font-bold py-4 rounded-xl shadow-lg shadow-orange-500/20 transition-all transform active:scale-[0.98]">
                                Reserve Your Stay
                            </button>
<p class="text-center text-xs text-[#674832] mt-2">You won't be charged yet</p>
</div>
</div>
</div>
</div>
</div>
<!-- Related Options Section -->
<div class="px-4 sm:px-10 mt-24">
<h3 class="text-white text-2xl font-bold mb-8">You might also like</h3>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<!-- Card 1 -->
<a class="group block bg-[#2a1f18] rounded-2xl overflow-hidden border border-[#483323] hover:border-primary transition-colors" href="#">
<div class="aspect-[4/3] bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="Modern garden villa exterior with private pool" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDA_4K5_lWX684f1GjH-U-x_e5pW8V4ihrLD7QZGrY-A1QWCyM99Zdi3anNG8nKnbDg33Ebpk11GxFIOxdhpJk9FOgRH3V6_O3BdwmyeOtQSgv1HqV4vzWBFklJpZLJjq0wCv8GvDxV3H8YvYdNaQSBbw4wBex2QOQDeU-jO_xBslwSnPEvwtrgCMr8jbr9DT0QSvzZHhdbfw2mtE4TL1xBL_n0KjtV51OxyWUNtZanRjU7jeyN6PjBcBX_B2iucZoiMquYpSPBIj8");'></div>
<div class="p-6">
<div class="flex justify-between items-start mb-2">
<h4 class="text-white font-bold text-lg">Garden Villa</h4>
<span class="text-primary font-bold">$650</span>
</div>
<p class="text-[#c9a992] text-sm mb-4">Private pool, garden view, 2 bedrooms.</p>
<div class="flex items-center gap-2 text-white text-sm font-medium">
<span>View Details</span>
<span class="material-symbols-outlined text-base">arrow_forward</span>
</div>
</div>
</a>
<!-- Card 2 -->
<a class="group block bg-[#2a1f18] rounded-2xl overflow-hidden border border-[#483323] hover:border-primary transition-colors" href="#">
<div class="aspect-[4/3] bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="Penthouse suite living room with city skyline view" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAWeJKPoZd8oZxsXCSZxwfNfXixY_SdS43jG44GtbEB1k2sJdR0QojImhX4OerhXpjXh84HWTp79--ud08CmQYjV-VsWomIhSW1uUjvIgduXd4MvqW3zg4tgWeDhbEN1seVM3NCzFqRa04Zjb3BebFjIY0iH4rehRt1Lvw4Q4f5Ws7wSPz0SlsIqu5LxzVRuaZLn-qRkCYj_jIG414NkpKF9NdctzXAPgqd3nU6OpYSoP7eBdRTcXZDYMu6Qn5QiWH6Kl0Y9sKOKQ0");'></div>
<div class="p-6">
<div class="flex justify-between items-start mb-2">
<h4 class="text-white font-bold text-lg">Executive Penthouse</h4>
<span class="text-primary font-bold">$1,200</span>
</div>
<p class="text-[#c9a992] text-sm mb-4">Top floor, panoramic city views, butler service.</p>
<div class="flex items-center gap-2 text-white text-sm font-medium">
<span>View Details</span>
<span class="material-symbols-outlined text-base">arrow_forward</span>
</div>
</div>
</a>
<!-- Card 3 -->
<a class="group block bg-[#2a1f18] rounded-2xl overflow-hidden border border-[#483323] hover:border-primary transition-colors" href="#">
<div class="aspect-[4/3] bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="Cozy standard room interior with warm lighting" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDEBnOMiyIT8nJEFSAOH6GOACsyvqvahvAvD3lwR7DZAUNR4eeljJzVCrVUeRQGdCPp59iHWFu3-jpnk56YBOuMiVz8inlUBGQC-RPmPEMggeKq_qB_oSvXK01RE6txTAhcKZgrS_Sia5QGXig5qrSo3dXftN8clSteukIPB9ykQq6wzt6Pzf6Sqos75Ks4ZPjvi6W9rgjgMRICK1qlsvFTbPpIJzCDjz8wlReDNJTIyvIsf-m8BAViH8mOxwk-T-jlT7zf4nqiePM");'></div>
<div class="p-6">
<div class="flex justify-between items-start mb-2">
<h4 class="text-white font-bold text-lg">Standard King</h4>
<span class="text-primary font-bold">$300</span>
</div>
<p class="text-[#c9a992] text-sm mb-4">Comfortable, elegant design, courtyard view.</p>
<div class="flex items-center gap-2 text-white text-sm font-medium">
<span>View Details</span>
<span class="material-symbols-outlined text-base">arrow_forward</span>
</div>
</div>
</a>
</div>
</div>
</main>
<!-- Footer -->
<footer class="bg-[#1a120b] border-t border-[#483323] pt-16 pb-8">
<div class="max-w-[1440px] mx-auto px-4 sm:px-10">
<div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
<div class="col-span-1 md:col-span-2">
<div class="flex items-center gap-4 text-white mb-6">
<div class="size-8 text-primary">
<span class="material-symbols-outlined text-3xl">diamond</span>
</div>
<h2 class="text-white text-xl font-bold">LuxStay</h2>
</div>
<p class="text-[#c9a992] max-w-sm mb-6">
                        Experience the art of hospitality. We provide curated luxury accommodations for travelers seeking comfort, style, and exclusivity.
                    </p>
<div class="flex gap-4">
<a class="size-10 rounded-full bg-[#332419] flex items-center justify-center text-white hover:bg-primary transition-colors" href="#">
<span class="font-bold text-sm">fb</span>
</a>
<a class="size-10 rounded-full bg-[#332419] flex items-center justify-center text-white hover:bg-primary transition-colors" href="#">
<span class="font-bold text-sm">in</span>
</a>
<a class="size-10 rounded-full bg-[#332419] flex items-center justify-center text-white hover:bg-primary transition-colors" href="#">
<span class="font-bold text-sm">tw</span>
</a>
</div>
</div>
<div>
<h4 class="text-white font-bold mb-6">Explore</h4>
<ul class="flex flex-col gap-3 text-[#c9a992]">
<li><a class="hover:text-primary transition-colors" href="#">All Rooms</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Dining &amp; Bar</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Spa &amp; Wellness</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Experiences</a></li>
</ul>
</div>
<div>
<h4 class="text-white font-bold mb-6">Contact</h4>
<ul class="flex flex-col gap-3 text-[#c9a992]">
<li class="flex items-center gap-2">
<span class="material-symbols-outlined text-sm">location_on</span>
                            123 Ocean Drive, Malibu, CA
                        </li>
<li class="flex items-center gap-2">
<span class="material-symbols-outlined text-sm">call</span>
                            +1 (555) 123-4567
                        </li>
<li class="flex items-center gap-2">
<span class="material-symbols-outlined text-sm">mail</span>
                            concierge@luxstay.com
                        </li>
</ul>
</div>
</div>
<div class="border-t border-[#483323] pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-[#674832]">
<p>© 2023 LuxStay Inc. All rights reserved.</p>
<div class="flex gap-6">
<a class="hover:text-white" href="#">Privacy Policy</a>
<a class="hover:text-white" href="#">Terms of Service</a>
</div>
</div>
</div>
</footer>
</body></html>