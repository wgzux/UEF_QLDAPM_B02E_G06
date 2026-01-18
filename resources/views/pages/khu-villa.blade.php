<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Khu Villa - Detail Page</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
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
                        "primary": "#137fec",
                        "background-light": "#f6f7f8", // Light gray background for body
                        "background-dark": "#101922",
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem", 
                        "lg": "0.5rem", 
                        "xl": "0.75rem", 
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
</head>
<body class="bg-background-light dark:bg-background-dark text-[#111418] dark:text-white font-display flex flex-col min-h-screen">
<!-- Top Navigation -->
<header class="bg-white dark:bg-[#1a2632] border-b border-[#f0f2f4] dark:border-gray-800 sticky top-0 z-50">
<div class="px-6 lg:px-10 h-20 flex items-center justify-between max-w-[1280px] mx-auto w-full">
<div class="flex items-center gap-4">
<div class="flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-4xl">travel_explore</span>
</div>
<h2 class="text-xl font-bold tracking-tight text-[#111418] dark:text-white">Khu Villa</h2>
</div>
<nav class="hidden md:flex items-center gap-8">
<a class="text-sm font-semibold hover:text-primary transition-colors" href="#">Home</a>
<a class="text-sm font-semibold hover:text-primary transition-colors" href="#">Villas</a>
<a class="text-sm font-semibold hover:text-primary transition-colors" href="#">Experiences</a>
<a class="text-sm font-semibold hover:text-primary transition-colors" href="#">About</a>
</nav>
<div class="flex items-center gap-4">
<button class="hidden md:flex h-10 px-4 items-center justify-center rounded-full border border-[#e5e7eb] hover:shadow-md transition-shadow dark:border-gray-700 bg-white dark:bg-gray-800 text-sm font-bold">
                    Start your search
                    <span class="material-symbols-outlined ml-2 text-primary text-xl bg-primary/10 rounded-full p-1">search</span>
</button>
<button class="flex items-center gap-2 p-2 rounded-full border border-[#e5e7eb] dark:border-gray-700 hover:shadow-md transition-shadow bg-white dark:bg-gray-800">
<span class="material-symbols-outlined text-[#111418] dark:text-white pl-1">menu</span>
<span class="material-symbols-outlined text-gray-500 text-3xl">account_circle</span>
</button>
</div>
</div>
</header>
<!-- Main Content -->
<main class="flex-grow w-full max-w-[1280px] mx-auto px-6 lg:px-10 py-8">
<!-- Breadcrumbs & Header -->
<div class="flex flex-col gap-4 mb-6">
<div class="flex items-center text-sm text-[#637588] dark:text-gray-400">
<a class="hover:underline" href="#">Home</a>
<span class="mx-2">/</span>
<a class="hover:underline" href="#">Indonesia</a>
<span class="mx-2">/</span>
<a class="hover:underline" href="#">Bali</a>
<span class="mx-2">/</span>
<span class="text-[#111418] dark:text-white font-medium">Khu Villa</span>
</div>
<div class="flex flex-wrap justify-between items-start gap-4">
<div>
<h1 class="text-3xl md:text-4xl font-extrabold tracking-tight text-[#111418] dark:text-white mb-2">
                        Khu Villa - Tropical Retreat in Ubud
                    </h1>
<div class="flex items-center gap-2 text-sm md:text-base font-medium text-[#111418] dark:text-gray-300">
<span class="flex items-center gap-1">
<span class="material-symbols-outlined text-primary fill-1 text-lg">star</span>
<span>4.98</span>
</span>
<span class="w-1 h-1 rounded-full bg-[#111418] dark:bg-gray-500"></span>
<span class="underline cursor-pointer">128 reviews</span>
<span class="w-1 h-1 rounded-full bg-[#111418] dark:bg-gray-500"></span>
<span>Superhost</span>
<span class="w-1 h-1 rounded-full bg-[#111418] dark:bg-gray-500"></span>
<span class="underline cursor-pointer text-[#637588] dark:text-gray-400">Ubud, Bali, Indonesia</span>
</div>
</div>
<div class="flex gap-3">
<button class="flex items-center gap-2 px-4 py-2 text-sm font-semibold rounded-lg hover:bg-[#f0f2f4] dark:hover:bg-gray-800 transition-colors">
<span class="material-symbols-outlined text-lg">share</span>
                        Share
                    </button>
<button class="flex items-center gap-2 px-4 py-2 text-sm font-semibold rounded-lg hover:bg-[#f0f2f4] dark:hover:bg-gray-800 transition-colors">
<span class="material-symbols-outlined text-lg">favorite</span>
                        Save
                    </button>
</div>
</div>
</div>
<!-- Image Gallery Grid -->
<div class="grid grid-cols-1 md:grid-cols-4 grid-rows-2 gap-3 h-[300px] md:h-[480px] rounded-xl overflow-hidden mb-12 relative group">
<div class="col-span-1 md:col-span-2 row-span-2 relative cursor-pointer hover:brightness-95 transition-all">
<div class="absolute inset-0 bg-cover bg-center" data-alt="Luxurious modern villa exterior with large swimming pool and tropical plants at sunset" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBh2Cl-p0mPRsoBbJNI0TSHVcO-ZBRJKqpNenkC_JclAS7qO9ZFYy4wDCOj0HCPyYI9YXOl69s8HsV41UpMaAJAJM0Cryab3GZYVfrT-ARQ34B8Qy1vwX7i62bsmg5Vt7cE1rUE8sL9pHSlrLqc7xjZh0TeMyHOEmlqCngVb2HAtQeyyl7eqQ683Wpx-GFigQ32NqXEQAFrwPGE6BSt2y0HzUtyF6Xvs6sqFuV4muXku8Lr34OQU0EdiEaxIHiv6c9NTUCDP3qodsM');"></div>
</div>
<div class="col-span-1 row-span-1 relative cursor-pointer hover:brightness-95 transition-all hidden md:block">
<div class="absolute inset-0 bg-cover bg-center" data-alt="Modern minimalist bedroom with white linens and wooden accents" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB6w55CnKVwPZ8-131RJbKsdPMr6GAKweC_BsQ_9Z3pwptUaZZc3s4vGAswIIEi29_QiwqE0-yfSUTRM2BatUpEru0Ln4WKXAFs4b0CbU8mDhVl97gpCRpr3qSBawDiJZbIIFOLjsCJY1VaydtKJTXim7GMLme8UQcH33WNfzSFJgGLtxsQEtVI5DqFHg-EFPF1sEWJ3V_Ww60FXGZBua22ZgbVUYxZkhm21T1_oPmcB2np0ecj767X6Tj_C4isMumrz3DtNZkTJWQ');"></div>
</div>
<div class="col-span-1 row-span-1 relative cursor-pointer hover:brightness-95 transition-all hidden md:block">
<div class="absolute inset-0 bg-cover bg-center" data-alt="Spacious living room area with open concept design and garden view" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCE3V3K-DAYSoPhQtQusEFM979OZn-MEZfVWaSuYycnqGmQ0EkC5OlcYHXTxT7fw_y_h67ouJMklEpEK6ixc88OK_-yqon5GFvrIU4t43nBhyKGK4vQSUC3QFF7F5qga9gQkzObZYnhzVOHWvendVE21_ee83Bm_je6i6k6DJEp7yp-rMjVbJAB57WXCOLU-QYyz_g1Nxg9CdugzeGl99RNewoRmrm22jBHXqYjMcw--7N_TC1-afIZX_VPJiW48QEzcH0ahL_RsMA');"></div>
</div>
<div class="col-span-1 row-span-1 relative cursor-pointer hover:brightness-95 transition-all hidden md:block">
<div class="absolute inset-0 bg-cover bg-center" data-alt="Detailed shot of bathroom amenities including a stone bathtub" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAHVhaAPk0rSFqK4HhiDIodu8fOsPF88MVp9-1eDR7LUiXORh_Jllu0ZbiYUbV6bJCj4d4nuZnPnTDIpnhYgdix7a_qcc2WAY4kkO2_TI8gaWtP1x1dhLl-Ci3Of7FMP-gwO_7e2z9GMiJVmaEwikYxmUDHZ6qANbxGk5zjxU77WGlEyspvm5iQp7ccbFTonFtAQfA1G_zaU8qkF5iKT2aovYoUA1XpRKcNJ7_o7sIPHvgRzgvtyjYixoUMvMwI-UtgjTvS8C0Y-iM');"></div>
</div>
<div class="col-span-1 row-span-1 relative cursor-pointer hover:brightness-95 transition-all hidden md:block">
<div class="absolute inset-0 bg-cover bg-center" data-alt="Outdoor patio area with lounge chairs and tropical greenery" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA8zKa62cTAZHZuC33Z7JeP2C2T_m5FIR1X8V6u7aYRY9eElXAgSDxxoweZgOdjq52aQ8gArYsa7gqHnn_vBXENu6fwNlUVvhrVArS7LGZFxgSxcNjqkHELpnNKL9Eazp3-OgyAlHH-3To28HhVk6RATPWwkIXU4BYPXH8WdStdLWeRb_y-LhSLz8Whl6MuyljCoxIny81uhupn4ipX_WRcZeFqhBWRuOc142xzFaFHW0MWWY7Q5Uc4T5bav0JRxLLvZ6TnLsXeU-I');"></div>
<button class="absolute bottom-4 right-4 bg-white dark:bg-gray-800 text-[#111418] dark:text-white px-4 py-2 rounded-lg text-sm font-bold shadow-md hover:scale-105 transition-transform flex items-center gap-2">
<span class="material-symbols-outlined text-base">grid_view</span>
                    Show all photos
                </button>
</div>
</div>
<!-- Content Layout: 2 Columns -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-16 relative">
<!-- Left Column: Details -->
<div class="lg:col-span-2 flex flex-col gap-10">
<!-- Host & Stats -->
<div class="flex justify-between items-center pb-8 border-b border-[#f0f2f4] dark:border-gray-800">
<div>
<h3 class="text-2xl font-bold text-[#111418] dark:text-white mb-1">Entire villa hosted by Sarah</h3>
<p class="text-[#637588] dark:text-gray-400 text-base">3 guests · 1 bedroom · 2 beds · 1 bath</p>
</div>
<div class="h-14 w-14 rounded-full bg-gray-200 overflow-hidden relative">
<img alt="Host Profile Picture" class="object-cover w-full h-full" data-alt="Portrait of Sarah the host smiling" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBmYA-WK8eL-ShtB9JoH0lyYg-RcY5eMyOqDdqnH2ZWIYwSjSkwgxJ38rY0tIa9WUN24o75h2cvGkv7kuwNpnzLhNqI52y9NmMyy6gkCg_77__WC93wExyi9g4wDqcIpwldU_ApGBM5HnJUq8wleJpd8NBY-sfx3YhFBFD0wr-StAVlxr-rp_easegb8ain0RK5X-FmfBaYltlgfhUA32KnYUPMLsOt1Sx8-V4pRU9WGW-rP5LlogLpr9PtbmNqcEJsvFe36dFF_8k"/>
<div class="absolute bottom-0 right-0 p-1 bg-white rounded-full">
<span class="material-symbols-outlined text-primary text-sm font-bold">verified_user</span>
</div>
</div>
</div>
<!-- Features Highlights -->
<div class="flex flex-col gap-6 pb-8 border-b border-[#f0f2f4] dark:border-gray-800">
<div class="flex items-start gap-4">
<span class="material-symbols-outlined text-[#111418] dark:text-white text-2xl mt-1">workspace_premium</span>
<div>
<h4 class="font-bold text-[#111418] dark:text-white text-base">Sarah is a Superhost</h4>
<p class="text-[#637588] dark:text-gray-400 text-sm">Superhosts are experienced, highly rated hosts who are committed to providing great stays for guests.</p>
</div>
</div>
<div class="flex items-start gap-4">
<span class="material-symbols-outlined text-[#111418] dark:text-white text-2xl mt-1">location_on</span>
<div>
<h4 class="font-bold text-[#111418] dark:text-white text-base">Great location</h4>
<p class="text-[#637588] dark:text-gray-400 text-sm">95% of recent guests gave the location a 5-star rating.</p>
</div>
</div>
<div class="flex items-start gap-4">
<span class="material-symbols-outlined text-[#111418] dark:text-white text-2xl mt-1">key</span>
<div>
<h4 class="font-bold text-[#111418] dark:text-white text-base">Great check-in experience</h4>
<p class="text-[#637588] dark:text-gray-400 text-sm">Recent guests gave the check-in process a 5-star rating.</p>
</div>
</div>
</div>
<!-- Description -->
<div class="pb-8 border-b border-[#f0f2f4] dark:border-gray-800">
<p class="text-[#111418] dark:text-gray-300 leading-relaxed mb-4">
                        Escape to the serene Khu Villa, where modern architecture meets tropical paradise. Nestled in the heart of Ubud's lush rice terraces, this private sanctuary offers a tranquil retreat from the bustling world. Designed with an open-air concept, the villa seamlessly blends indoor luxury with the natural beauty of Bali.
                    </p>
<p class="text-[#111418] dark:text-gray-300 leading-relaxed">
                        Enjoy your morning coffee by the infinity pool overlooking the jungle ravine, or unwind in the oversized stone bathtub after a day of exploring. The villa features high-speed fiber internet, making it perfect for remote work in paradise.
                    </p>
<button class="mt-4 flex items-center gap-1 font-bold underline text-[#111418] dark:text-white">
                        Show more
                        <span class="material-symbols-outlined text-lg">chevron_right</span>
</button>
</div>
<!-- Amenities -->
<div class="pb-8 border-b border-[#f0f2f4] dark:border-gray-800">
<h3 class="text-2xl font-bold text-[#111418] dark:text-white mb-6">What this place offers</h3>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div class="flex items-center gap-4 p-2">
<span class="material-symbols-outlined text-[#637588] text-2xl">wifi</span>
<span class="text-[#111418] dark:text-white">Fast Wifi (80 Mbps)</span>
</div>
<div class="flex items-center gap-4 p-2">
<span class="material-symbols-outlined text-[#637588] text-2xl">pool</span>
<span class="text-[#111418] dark:text-white">Private outdoor pool</span>
</div>
<div class="flex items-center gap-4 p-2">
<span class="material-symbols-outlined text-[#637588] text-2xl">countertops</span>
<span class="text-[#111418] dark:text-white">Kitchen</span>
</div>
<div class="flex items-center gap-4 p-2">
<span class="material-symbols-outlined text-[#637588] text-2xl">ac_unit</span>
<span class="text-[#111418] dark:text-white">Air conditioning</span>
</div>
<div class="flex items-center gap-4 p-2">
<span class="material-symbols-outlined text-[#637588] text-2xl">local_laundry_service</span>
<span class="text-[#111418] dark:text-white">Washer</span>
</div>
<div class="flex items-center gap-4 p-2">
<span class="material-symbols-outlined text-[#637588] text-2xl">monitor</span>
<span class="text-[#111418] dark:text-white">Dedicated workspace</span>
</div>
<div class="flex items-center gap-4 p-2">
<span class="material-symbols-outlined text-[#637588] text-2xl">hot_tub</span>
<span class="text-[#111418] dark:text-white">Jacuzzi</span>
</div>
<div class="flex items-center gap-4 p-2">
<span class="material-symbols-outlined text-[#637588] text-2xl">directions_car</span>
<span class="text-[#111418] dark:text-white">Free parking on premises</span>
</div>
</div>
<button class="mt-8 px-6 py-3 border border-[#111418] dark:border-white rounded-lg font-bold text-[#111418] dark:text-white hover:bg-[#f0f2f4] dark:hover:bg-gray-800 transition-colors">
                        Show all 32 amenities
                    </button>
</div>
<!-- Calendar Section (Static Placeholder) -->
<div class="pb-8 border-b border-[#f0f2f4] dark:border-gray-800">
<h3 class="text-2xl font-bold text-[#111418] dark:text-white mb-2">5 nights in Ubud</h3>
<p class="text-[#637588] dark:text-gray-400 text-sm mb-6">Oct 12, 2023 - Oct 17, 2023</p>
<div class="w-full h-80 bg-[#f6f7f8] dark:bg-gray-800 rounded-xl flex items-center justify-center border border-[#e5e7eb] dark:border-gray-700">
<div class="text-center">
<span class="material-symbols-outlined text-4xl text-gray-400 mb-2">calendar_month</span>
<p class="text-gray-500 font-medium">Interactive Calendar Component Placeholder</p>
</div>
</div>
</div>
</div>
<!-- Right Column: Sticky Booking Card -->
<div class="lg:col-span-1 relative">
<div class="sticky top-28 w-full">
<div class="bg-white dark:bg-[#1a2632] rounded-xl border border-[#e5e7eb] dark:border-gray-700 shadow-xl p-6">
<div class="flex justify-between items-baseline mb-6">
<div class="flex items-baseline gap-1">
<span class="text-2xl font-bold text-[#111418] dark:text-white">$250</span>
<span class="text-[#637588] dark:text-gray-400 text-base">night</span>
</div>
<div class="flex items-center gap-1 text-sm font-bold text-[#111418] dark:text-white">
<span class="material-symbols-outlined text-sm">star</span>
<span>4.98</span>
<span class="text-[#637588] dark:text-gray-400 font-medium underline ml-1">128 reviews</span>
</div>
</div>
<!-- Inputs -->
<div class="border border-[#b0b8c4] rounded-lg mb-4 overflow-hidden">
<div class="flex border-b border-[#b0b8c4]">
<div class="w-1/2 p-3 border-r border-[#b0b8c4] hover:bg-gray-50 cursor-pointer">
<div class="text-[10px] font-bold uppercase tracking-wider text-[#111418] dark:text-white">Check-in</div>
<div class="text-sm text-[#637588] dark:text-gray-400">Oct 12</div>
</div>
<div class="w-1/2 p-3 hover:bg-gray-50 cursor-pointer">
<div class="text-[10px] font-bold uppercase tracking-wider text-[#111418] dark:text-white">Check-out</div>
<div class="text-sm text-[#637588] dark:text-gray-400">Oct 17</div>
</div>
</div>
<div class="p-3 hover:bg-gray-50 cursor-pointer relative flex justify-between items-center">
<div>
<div class="text-[10px] font-bold uppercase tracking-wider text-[#111418] dark:text-white">Guests</div>
<div class="text-sm text-[#637588] dark:text-gray-400">3 guests</div>
</div>
<span class="material-symbols-outlined text-[#111418] dark:text-white">expand_more</span>
</div>
</div>
<button class="w-full bg-primary hover:bg-blue-600 text-white font-bold py-3.5 rounded-lg text-base mb-4 transition-colors">
                            Reserve
                        </button>
<p class="text-center text-sm text-[#637588] dark:text-gray-400 mb-6">You won't be charged yet</p>
<div class="flex flex-col gap-3 text-[#111418] dark:text-gray-300">
<div class="flex justify-between">
<span class="underline text-[#637588] dark:text-gray-400">$250 x 5 nights</span>
<span>$1,250</span>
</div>
<div class="flex justify-between">
<span class="underline text-[#637588] dark:text-gray-400">Cleaning fee</span>
<span>$75</span>
</div>
<div class="flex justify-between">
<span class="underline text-[#637588] dark:text-gray-400">Service fee</span>
<span>$180</span>
</div>
</div>
<div class="border-t border-[#e5e7eb] dark:border-gray-700 mt-6 pt-6 flex justify-between font-bold text-lg text-[#111418] dark:text-white">
<span>Total</span>
<span>$1,505</span>
</div>
</div>
<div class="mt-6 flex justify-center gap-2 text-[#637588] dark:text-gray-500 font-medium text-sm">
<span class="material-symbols-outlined filled text-lg">flag</span>
<span class="underline cursor-pointer">Report this listing</span>
</div>
</div>
</div>
</div>
<!-- Reviews Section -->
<div class="py-12 border-b border-[#f0f2f4] dark:border-gray-800">
<h3 class="flex items-center gap-2 text-2xl font-bold text-[#111418] dark:text-white mb-8">
<span class="material-symbols-outlined text-primary fill-1 text-2xl">star</span>
                4.98 · 128 reviews
            </h3>
<div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-16">
<!-- Review 1 -->
<div class="flex flex-col gap-4">
<div class="flex items-center gap-4">
<img alt="User Avatar" class="w-12 h-12 rounded-full object-cover bg-gray-200" data-alt="Avatar of review author James" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC4vbC1B67rhZ_Quo7_FUfEIo-AKDB4aldKtTR3ijGznR-b-9DGyeHD643y72ZxKBMUZ_GZDlRZ9NMzlmMn7LFKJTUJDsOQ2beUqZy7ISVizUvhUucndXkCFP21JkNTerAT_x90GwADxkXX6uLKqjCyLLbrkiFV2gBqAw1rNKNUmSgWSf4hKua4xk6ZxPFBemZt9s_BVK08yrq790BK_fTdVmfl4W2aeIqFSdTKUAO9zzCJtb9IQMziURZq0_9Sfgv6qG6wh8Em8PQ"/>
<div>
<h4 class="font-bold text-[#111418] dark:text-white">James</h4>
<p class="text-sm text-[#637588] dark:text-gray-400">September 2023</p>
</div>
</div>
<p class="text-[#111418] dark:text-gray-300 leading-relaxed">
                        "Absolutely stunning villa! The pictures don't do it justice. The pool was amazing, and the location was perfect—quiet but close enough to town. Sarah was a fantastic host."
                    </p>
</div>
<!-- Review 2 -->
<div class="flex flex-col gap-4">
<div class="flex items-center gap-4">
<img alt="User Avatar" class="w-12 h-12 rounded-full object-cover bg-gray-200" data-alt="Avatar of review author Emily" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD90lSuCsa284IMsz26ktqCMYR6cXYqm8M3BbXfokJmKltMP7pm68RNbQdIyY3Bkvfx8A93Fraa0Sm6iWkKZ6vlRK4YMiSEIgMsEpW7qth3A-NX0iHhUXAROdXnIAH4b3E1399X5sM6EX-r5Cdf9elOD3YbNNSacvcL5qNMYWxVElKHZC1BITBy6Jh69KQeLlB-_2JGA8wPggg3ezVNm-HSz-9rz8RkmMUETcaKBYCINA_s1cerciYthB52kv-l6zJIszQkLFzbrsI"/>
<div>
<h4 class="font-bold text-[#111418] dark:text-white">Emily</h4>
<p class="text-sm text-[#637588] dark:text-gray-400">August 2023</p>
</div>
</div>
<p class="text-[#111418] dark:text-gray-300 leading-relaxed">
                        "A perfect stay. The villa is designed beautifully and very clean. The wifi was fast enough for my zoom calls. Will definitely come back!"
                    </p>
</div>
</div>
<button class="mt-8 px-6 py-3 border border-[#111418] dark:border-white rounded-lg font-bold text-[#111418] dark:text-white hover:bg-[#f0f2f4] dark:hover:bg-gray-800 transition-colors">
                Show all 128 reviews
            </button>
</div>
<!-- Map Section -->
<div class="py-12">
<h3 class="text-2xl font-bold text-[#111418] dark:text-white mb-2">Where you'll be</h3>
<p class="text-[#637588] dark:text-gray-400 mb-6">Ubud, Bali, Indonesia</p>
<div class="w-full h-[480px] bg-[#e5e7eb] dark:bg-gray-800 rounded-xl overflow-hidden relative">
<div class="absolute inset-0 bg-cover bg-center opacity-80" data-alt="Map view showing the Ubud area with lush greenery" data-location="Ubud, Bali, Indonesia" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB5QLTTo57yoS4Sgmuq9XM_eHRPX0f_Tt-quepZOBLhHznwblNBYJZdotD4Q3unHEbLS1rtBOpp58K5AhQ-CwN2m0Qk0BqlA2BdHC7lc_eY933dF_H-BSa4r_jRldiyNbjIIPEKo0bkZB4Sg2DoaqDa6wabHKzhvMWl-4PohANg2fT5-mEh-0-28ay36VmPszRfaR4p2GUD7AK8PXbTXq7IWFrhRWOMZ-ZSNij7FM7p2Kcc_TEQchqGHB5XXkHGpIbdTxwFCqI2qxk');">
</div>
<div class="absolute inset-0 flex items-center justify-center">
<div class="bg-primary text-white p-3 rounded-full shadow-lg transform -translate-y-4 animate-bounce">
<span class="material-symbols-outlined text-3xl">home_pin</span>
</div>
</div>
</div>
<div class="mt-6">
<h4 class="font-bold text-[#111418] dark:text-white mb-2">Ubud is a cultural hub</h4>
<p class="text-[#111418] dark:text-gray-300 max-w-3xl leading-relaxed">
                    Known for its traditional crafts and dance, Ubud is surrounded by rainforest and terraced rice paddies, dotted with Hindu temples and shrines. It's the perfect blend of culture and nature.
                </p>
<button class="mt-4 font-bold underline text-[#111418] dark:text-white">Show more</button>
</div>
</div>
</main>
<!-- Footer -->
<footer class="bg-[#f7f7f7] dark:bg-[#0d131a] border-t border-[#e5e7eb] dark:border-gray-800 py-12 px-6 lg:px-10 mt-auto">
<div class="max-w-[1280px] mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
<div class="flex flex-col gap-4">
<h5 class="font-bold text-[#111418] dark:text-white">Support</h5>
<ul class="flex flex-col gap-3 text-sm text-[#637588] dark:text-gray-400">
<li><a class="hover:underline" href="#">Help Center</a></li>
<li><a class="hover:underline" href="#">AirCover</a></li>
<li><a class="hover:underline" href="#">Anti-discrimination</a></li>
<li><a class="hover:underline" href="#">Disability support</a></li>
</ul>
</div>
<div class="flex flex-col gap-4">
<h5 class="font-bold text-[#111418] dark:text-white">Hosting</h5>
<ul class="flex flex-col gap-3 text-sm text-[#637588] dark:text-gray-400">
<li><a class="hover:underline" href="#">Airbnb your home</a></li>
<li><a class="hover:underline" href="#">AirCover for Hosts</a></li>
<li><a class="hover:underline" href="#">Hosting resources</a></li>
<li><a class="hover:underline" href="#">Community forum</a></li>
</ul>
</div>
<div class="flex flex-col gap-4">
<h5 class="font-bold text-[#111418] dark:text-white">Khu Villa</h5>
<ul class="flex flex-col gap-3 text-sm text-[#637588] dark:text-gray-400">
<li><a class="hover:underline" href="#">Newsroom</a></li>
<li><a class="hover:underline" href="#">New features</a></li>
<li><a class="hover:underline" href="#">Careers</a></li>
<li><a class="hover:underline" href="#">Investors</a></li>
</ul>
</div>
<div class="flex flex-col gap-4">
<h5 class="font-bold text-[#111418] dark:text-white">Newsletter</h5>
<p class="text-sm text-[#637588] dark:text-gray-400">Subscribe for travel inspiration.</p>
<div class="flex gap-2">
<input class="w-full px-3 py-2 rounded-lg border border-[#b0b8c4] dark:bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Email address" type="email"/>
<button class="bg-primary text-white px-4 py-2 rounded-lg font-bold text-sm">Join</button>
</div>
</div>
</div>
<div class="max-w-[1280px] mx-auto pt-8 mt-8 border-t border-[#e5e7eb] dark:border-gray-800 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-[#637588] dark:text-gray-400">
<div class="flex gap-2">
<span>© 2023 Khu Villa, Inc.</span>
<span>·</span>
<a class="hover:underline" href="#">Privacy</a>
<span>·</span>
<a class="hover:underline" href="#">Terms</a>
<span>·</span>
<a class="hover:underline" href="#">Sitemap</a>
</div>
<div class="flex gap-4 font-bold text-[#111418] dark:text-white">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-lg">language</span> English (US)</span>
<span class="flex items-center gap-1">$ USD</span>
</div>
</div>
</footer>
</body></html>