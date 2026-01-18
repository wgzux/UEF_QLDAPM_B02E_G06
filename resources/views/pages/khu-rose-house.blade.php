<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Khu Rose House Desktop Page</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet"/>
<script>
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              primary: "#3b82f6", // A nice energetic blue
              "background-light": "#f3f4f6", // Light gray background
              "background-dark": "#121212", // Deep dark background
              "sidebar-light": "#ffffff",
              "sidebar-dark": "#1e1e1e",
              "item-hover-light": "#f9fafb",
              "item-hover-dark": "#2d2d2d",
              "item-selected-light": "#eff6ff", // blue-50
              "item-selected-dark": "#37373d", // Dark gray highlight
            },
            fontFamily: {
              display: ["Inter", "sans-serif"],
              sans: ["Inter", "sans-serif"],
            },
            borderRadius: {
              DEFAULT: "0.375rem",
            },
          },
        },
      };
    </script>
</head>
<body class="bg-background-light dark:bg-background-dark font-sans h-screen flex overflow-hidden text-gray-900 dark:text-gray-200 transition-colors duration-200">
<aside class="w-80 bg-sidebar-light dark:bg-sidebar-dark border-r border-gray-200 dark:border-gray-700 flex flex-col shadow-xl z-20 relative">
<div class="h-16 flex items-center justify-between px-5 border-b border-gray-100 dark:border-gray-800 shrink-0">
<div class="flex items-center gap-2">
<div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center shadow-lg shadow-blue-500/30">
<span class="material-icons-outlined text-white text-lg">category</span>
</div>
<span class="text-sm font-bold tracking-tight text-gray-800 dark:text-white">Selection</span>
</div>
<div class="flex space-x-1">
<button class="p-1.5 rounded-md hover:bg-gray-50 dark:hover:bg-gray-800 text-gray-400 hover:text-primary transition-colors">
<span class="material-icons-outlined text-lg">search</span>
</button>
<button class="p-1.5 rounded-md hover:bg-gray-50 dark:hover:bg-gray-800 text-gray-400 hover:text-primary transition-colors">
<span class="material-icons-outlined text-lg">add</span>
</button>
</div>
</div>
<div class="flex-1 overflow-y-auto py-4 px-3 space-y-6 custom-scrollbar">
<div>
<div class="px-2 mb-2 text-[11px] font-bold text-gray-400 dark:text-gray-500 uppercase tracking-widest flex items-center gap-1">
<span class="material-icons-outlined text-xs">home_work</span> Accommodations
                </div>
<div class="space-y-2">
<button class="w-full flex items-center group p-2 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-800 border border-transparent hover:border-gray-100 dark:hover:border-gray-700 transition-all duration-200">
<div class="w-12 h-12 rounded-lg bg-gray-200 dark:bg-gray-700 mr-3 overflow-hidden shadow-sm relative group-hover:shadow-md transition-shadow">
<img alt="Villa" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDZiplsvGonxLFNU-UOpBE-GQmiIB59M05kbd1iT-lIrO6ZcGkOhS7tIV3jxq9a45tkV4CdffsHLqHvW03bUbWn2gGA_Bc16Dy39NKbGAQtFTc00BZAqaoaL5L0bCwcLXBPZq4-WV3b454Sjv5ZycMALRKejcC63vQCJI2phma4qSYNiJtjrjbuiE51GOGVcI_e5PQGigiuhvHHh3aYD1Iv-j6Z1hdlMxcQgVZLQWDoQPtNVp8aI5tMg8FxhnN25kO-GIFmYpdOh_k"/>
</div>
<div class="flex-1 text-left min-w-0">
<p class="text-sm font-semibold text-gray-700 dark:text-gray-200 group-hover:text-primary transition-colors truncate">Khu Villa desktop</p>
<p class="text-[10px] text-gray-400 dark:text-gray-500 truncate">Luxury &amp; Private Pool</p>
</div>
</button>
<button class="w-full flex items-center group p-2 rounded-xl bg-primary/5 dark:bg-primary/20 border border-primary/20 dark:border-primary/30 relative overflow-hidden transition-all duration-200 shadow-sm">
<div class="absolute inset-y-0 left-0 w-1 bg-primary rounded-l-md"></div>
<div class="w-12 h-12 rounded-lg bg-gray-200 dark:bg-gray-700 mr-3 overflow-hidden shadow-sm relative ring-2 ring-white dark:ring-gray-800">
<img alt="Rose House" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuByxpSUj9vFmc5NskxVso2Na2nZ55_4oCJcx6Qisva2J4ON8VP-RzZzlWssuPvX_kLmApO-Xwwsm4qAb03L9pYKlMZtt1D0DBFiLxusGVb1VLMcMtjQLIuQ1Y2BQy8PyaM1trr35580kF6J7BDmSLwB9yCjXHc8se5W-Q5EkDaJPKaJ61JGj8DqOnfeoh7qgOnuaw6HubgQVOXpVSmlJ-dHeOfRFug83gYPoIV3zzHbBYu52luuyI_BxZ3RhA9b8OFvDPDAyNELoZY"/>
</div>
<div class="flex-1 text-left min-w-0 z-10">
<p class="text-sm font-bold text-primary dark:text-white truncate">Khu Rose house</p>
<p class="text-[10px] text-primary/70 dark:text-gray-300 truncate font-medium">Currently Selected</p>
</div>
<div class="bg-white dark:bg-gray-800 p-1.5 rounded-full shadow-sm text-primary z-10">
<span class="material-icons-outlined text-sm block">edit</span>
</div>
</button>
<button class="w-full flex items-center group p-2 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-800 border border-transparent hover:border-gray-100 dark:hover:border-gray-700 transition-all duration-200">
<div class="w-12 h-12 rounded-lg bg-gray-200 dark:bg-gray-700 mr-3 overflow-hidden shadow-sm relative group-hover:shadow-md transition-shadow">
<img alt="Wooden House" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAvEz01d_FRWaOGKNhJmbM0Oqj81GRJWVxQNvopzH5ji-2QGPoQ50wPY9l2R3MFGzB5YXSKfUYyFPFpsQxiR9rRwX2Wo9gTciArAMPoTwMJgss-t0weXDsLQP8XS_LUw_xZa5vCG3_yL81_X8Pt-j9e2iOia4k9i5HSN-NMhmVTQoOKYcqebTjWTBRB0kzGhzqSreDB_2eQeX2GrZ86ks3Em-QXYE5TRbSiUA1_ChQ5omv6-Eupax_xRzBx2NKq9vyhs-6rd-I6bts"/>
</div>
<div class="flex-1 text-left min-w-0">
<p class="text-sm font-semibold text-gray-700 dark:text-gray-200 group-hover:text-primary transition-colors truncate">Khu wooden house</p>
<p class="text-[10px] text-gray-400 dark:text-gray-500 truncate">Forest Cabin</p>
</div>
</button>
</div>
</div>
<div>
<div class="px-2 mb-2 text-[11px] font-bold text-gray-400 dark:text-gray-500 uppercase tracking-widest flex items-center gap-1">
<span class="material-icons-outlined text-xs">event</span> Events
                </div>
<div class="space-y-2">
<button class="w-full flex items-center group p-2 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-800 border border-transparent hover:border-gray-100 dark:hover:border-gray-700 transition-all duration-200">
<div class="w-12 h-12 rounded-lg bg-gray-200 dark:bg-gray-700 mr-3 overflow-hidden shadow-sm relative group-hover:shadow-md transition-shadow">
<img alt="Wedding" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCciS9vIHjcYw6yW_56oMbOR_tI_qq7I_jCYMjqx4CJiSG5vljFVp08IsxI8untVk7eE4hfUWVSFQh-jq8hWkomzq_VkYQDs82m7XE41vlOq3n6K634dWZGB619nqTqlY9vfHlrxtljrn7xAvcdRjoJaZgEFmvB-2SYBmrOe2uGQMgDykTLwDqpk3tsnhmIe8MhdPMr7kWka1jq-OBiGK4-HjJ5jvluQn0v9WRnJHlvQBN2uXxpDId2GqGHFj8Zofn3kIW7TLj270A"/>
</div>
<div class="flex-1 text-left min-w-0">
<p class="text-sm font-semibold text-gray-700 dark:text-gray-200 group-hover:text-primary transition-colors truncate">Tiệc cưới nhỏ</p>
<p class="text-[10px] text-gray-400 dark:text-gray-500 truncate">Intimate</p>
</div>
</button>
<button class="w-full flex items-center group p-2 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-800 border border-transparent hover:border-gray-100 dark:hover:border-gray-700 transition-all duration-200">
<div class="w-12 h-12 rounded-lg bg-gray-200 dark:bg-gray-700 mr-3 overflow-hidden shadow-sm relative group-hover:shadow-md transition-shadow">
<img alt="Event" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC2mRQjZF2zaxA4SRxS6s6jXX-uDHq501dX-Zjcd8Tzph-hfSMri26e_GUmEqSoZ6dUav5rnL3RishSyBNOVFOZD12N4cgb-YY46xtaWEbHJLEQjYAPKYFwIqYKKvPzy4Jsmz_exruMcAizyb0I3439PwlHZkU9OlJZAh73y9lEraOb76C3nmNwCUfxnkPbS17JvKg0uAgSokJ_CfaLaSaI8BKEvt70dpBnrhee8giuOzINrzsn6cyFu01w6CVXLB8ul4Pjvq6MVaA"/>
</div>
<div class="flex-1 text-left min-w-0">
<p class="text-sm font-semibold text-gray-700 dark:text-gray-200 group-hover:text-primary transition-colors truncate">Tiệc sự kiện</p>
<p class="text-[10px] text-gray-400 dark:text-gray-500 truncate">Outdoor Setup</p>
</div>
</button>
</div>
</div>
<div>
<div class="px-2 mb-2 text-[11px] font-bold text-gray-400 dark:text-gray-500 uppercase tracking-widest flex items-center gap-1">
<span class="material-icons-outlined text-xs">bed</span> Rooms
                </div>
<div class="space-y-2">
<button class="w-full flex items-center group p-2 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-800 border border-transparent hover:border-gray-100 dark:hover:border-gray-700 transition-all duration-200">
<div class="w-12 h-12 rounded-lg bg-gray-200 dark:bg-gray-700 mr-3 overflow-hidden shadow-sm relative group-hover:shadow-md transition-shadow">
<img alt="Family Room" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCn75n859x6Vzo1r34Q8KeHVgRf2mj5VfvGBid5eb7TOPge5TOQe1MPTma4mxYong_HJ8Bsp-socnGK4EE3MEw4aEEj26OJ4uoXQCbBkDh88qi4bf0IueR63SuNFFRj8y2-G7DJusSJ_pEODLZdbKvnqZ6f0ZbzUog9ZEgSjWQJ4wn8DvlT_At7OwDB9YmKpfSg_L73VqGt31vEvv6AgI5LrSDcdcXjVsHDmOB4dNAnjs52Qi-mAmlxpzlKiMlXZwKR0yy7oNnsjr0"/>
</div>
<div class="flex-1 text-left min-w-0">
<p class="text-sm font-semibold text-gray-700 dark:text-gray-200 group-hover:text-primary transition-colors truncate">Family room desktop</p>
<p class="text-[10px] text-gray-400 dark:text-gray-500 truncate">2 Queen Beds</p>
</div>
</button>
<button class="w-full flex items-center group p-2 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-800 border border-transparent hover:border-gray-100 dark:hover:border-gray-700 transition-all duration-200">
<div class="w-12 h-12 rounded-lg bg-gray-200 dark:bg-gray-700 mr-3 overflow-hidden shadow-sm relative group-hover:shadow-md transition-shadow">
<img alt="Deluxe Room" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDf0XLnSwjTd13vQzy6BHKhZjaQDFb8W5TPqJ2eU7z1JxbWPzxV7ovEifdz5UJfmOIuadDn3TJlGhixamCbrLbxrEJMVsFAkkNErJ2SbAMdyZZ5z02TPRuHfsvq1n2RUrLpNnpxsG68pRrFMdvWrEVOuxzAP2CtrI0w9WVBsQsZilvcRKSEdYj5QiHdsP884fZso_7Xfvjyxn2CG19hZrZrEEj3tZafvsJkupFOIntwL5XNAfdMUYg1spS4S6VYV7mBJXf_hYdV4u4"/>
</div>
<div class="flex-1 text-left min-w-0">
<p class="text-sm font-semibold text-gray-700 dark:text-gray-200 group-hover:text-primary transition-colors truncate">Deluxe room desktop</p>
<p class="text-[10px] text-gray-400 dark:text-gray-500 truncate">Ocean View</p>
</div>
</button>
<button class="w-full flex items-center group p-2 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-800 border border-transparent hover:border-gray-100 dark:hover:border-gray-700 transition-all duration-200">
<div class="w-12 h-12 rounded-lg bg-gray-200 dark:bg-gray-700 mr-3 overflow-hidden shadow-sm relative group-hover:shadow-md transition-shadow">
<img alt="Red Rose" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB6t_S5CaihQ4ngnZYbknEWe-kmwT-MEIGN0IQYqstWOu2Kx0TqRKYul8TRA7nBxU6C6BLstH5ggjyx_U3oemy5wEu12GiTlCdksp30f0bg8LwrcILqkgTBP8PaeUfz-wi8gV4Xr1Vc0a_cYxJXCRhqlcf16jHu-cCBseq8s6siBFW1lnyjDyThnVgzgXJKTTWGqmREwxXa7fE44Ad7oEEfagQLHQN7chrSl0aEfl4vd8BhTMhbZIhgl1SoFTy0YBR4wba_ltknOZI"/>
</div>
<div class="flex-1 text-left min-w-0">
<p class="text-sm font-semibold text-gray-700 dark:text-gray-200 group-hover:text-primary transition-colors truncate">Red rose house desktop</p>
<p class="text-[10px] text-gray-400 dark:text-gray-500 truncate">Romantic Suite</p>
</div>
</button>
</div>
</div>
</div>
<div class="p-4 border-t border-gray-200 dark:border-gray-700 bg-gray-50/50 dark:bg-[#1a1a1a]">
<button class="w-full flex items-center p-2.5 rounded-xl hover:bg-white dark:hover:bg-gray-800 transition-all shadow-sm hover:shadow-md border border-gray-100 dark:border-gray-700 group">
<div class="w-9 h-9 rounded-full bg-gradient-to-tr from-primary to-blue-600 flex items-center justify-center text-white text-xs font-bold shadow-md group-hover:scale-105 transition-transform">
                    AD
                </div>
<div class="ml-3 text-left">
<p class="text-xs font-bold text-gray-700 dark:text-gray-200 group-hover:text-primary transition-colors">Admin User</p>
<p class="text-[10px] text-gray-500 dark:text-gray-400">View Settings</p>
</div>
<span class="material-icons-outlined text-gray-400 ml-auto text-lg group-hover:text-primary transition-colors">settings</span>
</button>
</div>
</aside>
<main class="flex-1 flex flex-col min-w-0 bg-background-light dark:bg-background-dark relative">
<header class="h-14 bg-white dark:bg-sidebar-dark border-b border-gray-200 dark:border-gray-700 flex items-center justify-between px-6 shadow-sm z-10 relative">
<div class="flex items-center space-x-2 text-sm">
<span class="text-gray-400 dark:text-gray-500 hover:text-gray-600 dark:hover:text-gray-300 cursor-pointer">Accommodations</span>
<span class="text-gray-300 dark:text-gray-600">/</span>
<span class="font-medium text-gray-800 dark:text-gray-100">Khu Rose House</span>
</div>
<div class="flex items-center space-x-4">
<button class="bg-primary hover:bg-blue-600 text-white px-4 py-1.5 rounded text-sm font-medium shadow-sm transition-colors flex items-center gap-2">
<span class="material-icons-outlined text-sm">save</span>
                    Save Changes
                </button>
<div class="flex items-center space-x-2 border-l border-gray-200 dark:border-gray-600 pl-4">
<button class="p-1.5 text-gray-400 hover:text-gray-600 dark:hover:text-gray-200 transition-colors">
<span class="material-icons-outlined">dark_mode</span>
</button>
</div>
</div>
</header>
<div class="flex-1 overflow-auto p-4 md:p-8 flex items-center justify-center">
<div class="w-full max-w-6xl bg-white dark:bg-[#252526] rounded-lg shadow-2xl border border-gray-200 dark:border-gray-700 flex flex-col h-[calc(100vh-8rem)] overflow-hidden ring-1 ring-gray-900/5">
<div class="h-9 bg-gray-100 dark:bg-[#333333] rounded-t-lg border-b border-gray-200 dark:border-gray-600 flex items-center px-4 space-x-2 shrink-0">
<div class="flex space-x-1.5">
<div class="w-2.5 h-2.5 rounded-full bg-red-400 hover:bg-red-500 transition-colors"></div>
<div class="w-2.5 h-2.5 rounded-full bg-yellow-400 hover:bg-yellow-500 transition-colors"></div>
<div class="w-2.5 h-2.5 rounded-full bg-green-400 hover:bg-green-500 transition-colors"></div>
</div>
<div class="flex-1 flex justify-center px-20">
<div class="h-6 w-full max-w-md bg-white dark:bg-[#1e1e1e] rounded text-[10px] flex items-center justify-center text-gray-400 font-mono shadow-sm border border-gray-200 dark:border-transparent">
<span class="material-icons-outlined text-[10px] mr-1 text-gray-300">lock</span>
                           localhost:3000/accommodations/rose-house
                        </div>
</div>
</div>
<div class="flex-1 overflow-y-auto bg-white dark:bg-[#121212] relative custom-scrollbar">
<div class="relative h-64 md:h-[400px] w-full group">
<img alt="Rose House Hero" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuByxpSUj9vFmc5NskxVso2Na2nZ55_4oCJcx6Qisva2J4ON8VP-RzZzlWssuPvX_kLmApO-Xwwsm4qAb03L9pYKlMZtt1D0DBFiLxusGVb1VLMcMtjQLIuQ1Y2BQy8PyaM1trr35580kF6J7BDmSLwB9yCjXHc8se5W-Q5EkDaJPKaJ61JGj8DqOnfeoh7qgOnuaw6HubgQVOXpVSmlJ-dHeOfRFug83gYPoIV3zzHbBYu52luuyI_BxZ3RhA9b8OFvDPDAyNELoZY"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent flex items-end">
<div class="p-6 md:p-10 w-full">
<div class="flex justify-between items-end">
<div>
<div class="inline-flex items-center px-2 py-1 rounded bg-white/20 backdrop-blur-md border border-white/30 text-white text-xs mb-3 font-medium">
<span class="material-icons-outlined text-xs mr-1">star</span> Featured Stay
                                        </div>
<h1 class="text-3xl md:text-5xl font-bold text-white mb-2 shadow-sm">Khu Rose House</h1>
<p class="text-white/90 flex items-center gap-1 text-sm md:text-base font-medium">
<span class="material-icons-outlined text-sm">location_on</span> Dalat, Vietnam
                                        </p>
</div>
<div class="hidden md:block">
<button class="bg-white text-gray-900 px-4 py-2 rounded-lg text-sm font-semibold hover:bg-gray-100 transition shadow-lg flex items-center gap-2">
<span class="material-icons-outlined text-lg">share</span> Share
                                        </button>
</div>
</div>
</div>
</div>
</div>
<div class="max-w-6xl mx-auto px-6 py-8 md:py-12">
<div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
<div class="lg:col-span-2 space-y-10">
<div class="flex justify-between items-center border-b border-gray-100 dark:border-gray-800 pb-6">
<div>
<h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100">Entire villa hosted by Khu Resorts</h2>
<p class="text-gray-500 dark:text-gray-400 mt-1">6 guests · 3 bedrooms · 3 beds · 2 baths</p>
</div>
<div class="w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center text-xl font-bold">K</div>
</div>
<div class="space-y-6">
<div class="flex gap-4">
<div class="shrink-0 mt-1">
<span class="material-icons-outlined text-2xl text-gray-600 dark:text-gray-300">yard</span>
</div>
<div>
<h3 class="font-semibold text-gray-900 dark:text-white">Garden Paradise</h3>
<p class="text-gray-500 dark:text-gray-400 text-sm">Immerse yourself in a blooming rose garden with private pathways.</p>
</div>
</div>
<div class="flex gap-4">
<div class="shrink-0 mt-1">
<span class="material-icons-outlined text-2xl text-gray-600 dark:text-gray-300">location_city</span>
</div>
<div>
<h3 class="font-semibold text-gray-900 dark:text-white">Great Location</h3>
<p class="text-gray-500 dark:text-gray-400 text-sm">95% of recent guests gave the location a 5-star rating.</p>
</div>
</div>
<div class="flex gap-4">
<div class="shrink-0 mt-1">
<span class="material-icons-outlined text-2xl text-gray-600 dark:text-gray-300">auto_awesome</span>
</div>
<div>
<h3 class="font-semibold text-gray-900 dark:text-white">Unique Design</h3>
<p class="text-gray-500 dark:text-gray-400 text-sm">Architecturally distinct wooden structure blending with nature.</p>
</div>
</div>
</div>
<div class="border-t border-gray-100 dark:border-gray-800"></div>
<section>
<h2 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-4">About this space</h2>
<div class="prose dark:prose-invert max-w-none text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
<p class="mb-4">
                                            Experience the charm of our Rose House, uniquely nestled within a private blooming garden. This accommodation offers a serene escape with vintage-inspired decor, large glass windows that bring the outdoors in, and a private patio perfect for morning coffee.
                                        </p>
<p>
                                            The house features a spacious living area with a fireplace, a fully equipped kitchen, and bedrooms designed for ultimate comfort. Whether you are a couple seeking a romantic getaway or a family looking for a peaceful retreat, the Rose House provides the perfect sanctuary.
                                        </p>
</div>
<button class="mt-4 flex items-center font-semibold underline text-gray-900 dark:text-white text-sm">
                                        Show more <span class="material-icons-outlined text-base ml-1">expand_more</span>
</button>
</section>
<div class="border-t border-gray-100 dark:border-gray-800"></div>
<section>
<h3 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-6">What this place offers</h3>
<div class="grid grid-cols-2 gap-y-4 gap-x-8">
<div class="flex items-center gap-3 text-gray-600 dark:text-gray-400">
<span class="material-icons-outlined text-gray-400 text-xl">local_florist</span>
<span class="text-sm">Garden view</span>
</div>
<div class="flex items-center gap-3 text-gray-600 dark:text-gray-400">
<span class="material-icons-outlined text-gray-400 text-xl">wifi</span>
<span class="text-sm">Fast Wifi (300 Mbps)</span>
</div>
<div class="flex items-center gap-3 text-gray-600 dark:text-gray-400">
<span class="material-icons-outlined text-gray-400 text-xl">work_outline</span>
<span class="text-sm">Dedicated workspace</span>
</div>
<div class="flex items-center gap-3 text-gray-600 dark:text-gray-400">
<span class="material-icons-outlined text-gray-400 text-xl">local_parking</span>
<span class="text-sm">Free parking on premises</span>
</div>
<div class="flex items-center gap-3 text-gray-600 dark:text-gray-400">
<span class="material-icons-outlined text-gray-400 text-xl">deck</span>
<span class="text-sm">Private patio or balcony</span>
</div>
<div class="flex items-center gap-3 text-gray-600 dark:text-gray-400">
<span class="material-icons-outlined text-gray-400 text-xl">soup_kitchen</span>
<span class="text-sm">Kitchen</span>
</div>
<div class="flex items-center gap-3 text-gray-600 dark:text-gray-400">
<span class="material-icons-outlined text-gray-400 text-xl">tv</span>
<span class="text-sm">HDTV with Netflix</span>
</div>
<div class="flex items-center gap-3 text-gray-600 dark:text-gray-400">
<span class="material-icons-outlined text-gray-400 text-xl">security</span>
<span class="text-sm">Security cameras</span>
</div>
</div>
<button class="mt-6 px-6 py-3 border border-gray-800 dark:border-gray-200 rounded-lg text-sm font-semibold hover:bg-gray-50 dark:hover:bg-gray-800 transition text-gray-900 dark:text-white">
                                        Show all 32 amenities
                                    </button>
</section>
</div>
<div class="lg:col-span-1 relative">
<div class="bg-white dark:bg-[#1e1e1e] border border-gray-200 dark:border-gray-700 rounded-xl p-6 shadow-xl sticky top-6">
<div class="flex justify-between items-end mb-6">
<div class="flex items-baseline gap-1">
<span class="text-2xl font-bold text-gray-900 dark:text-white">$120</span>
<span class="text-gray-500 text-sm font-medium">/ night</span>
</div>
<div class="flex items-center text-xs font-bold text-gray-800 dark:text-gray-200 underline cursor-pointer">
<span class="material-icons-outlined text-primary text-sm mr-1">star</span> 4.92 · 128 reviews
                                        </div>
</div>
<div class="border border-gray-300 dark:border-gray-600 rounded-lg overflow-hidden mb-4 bg-transparent">
<div class="grid grid-cols-2 border-b border-gray-300 dark:border-gray-600">
<div class="p-3 border-r border-gray-300 dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer transition">
<label class="text-[10px] uppercase font-bold text-gray-500 block">Check-in</label>
<span class="text-sm font-medium text-gray-700 dark:text-gray-300">Oct 14</span>
</div>
<div class="p-3 hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer transition">
<label class="text-[10px] uppercase font-bold text-gray-500 block">Check-out</label>
<span class="text-sm font-medium text-gray-700 dark:text-gray-300">Oct 21</span>
</div>
</div>
<div class="p-3 hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer transition flex justify-between items-center">
<div>
<label class="text-[10px] uppercase font-bold text-gray-500 block">Guests</label>
<span class="text-sm font-medium text-gray-700 dark:text-gray-300">2 guests</span>
</div>
<span class="material-icons-outlined text-gray-500">expand_more</span>
</div>
</div>
<button class="w-full py-3.5 bg-gradient-to-r from-primary to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-bold rounded-lg transition-all shadow-md transform active:scale-[0.98] mb-4">
                                        Reserve
                                    </button>
<p class="text-center text-xs text-gray-500 dark:text-gray-400 mb-6 font-medium">You won't be charged yet</p>
<div class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
<div class="flex justify-between">
<span class="underline decoration-gray-300 cursor-pointer hover:text-gray-900 dark:hover:text-white">$120 x 7 nights</span>
<span>$840</span>
</div>
<div class="flex justify-between">
<span class="underline decoration-gray-300 cursor-pointer hover:text-gray-900 dark:hover:text-white">Cleaning fee</span>
<span>$40</span>
</div>
<div class="flex justify-between">
<span class="underline decoration-gray-300 cursor-pointer hover:text-gray-900 dark:hover:text-white">Service fee</span>
<span>$125</span>
</div>
</div>
<div class="border-t border-gray-200 dark:border-gray-700 mt-6 pt-6 flex justify-between font-bold text-gray-800 dark:text-gray-100 text-base">
<span>Total</span>
<span>$1,005</span>
</div>
</div>
<div class="mt-4 flex items-center justify-center gap-2 text-gray-400 text-xs">
<span class="material-icons-outlined text-sm">flag</span> Report this listing
                                </div>
</div>
</div>
</div>
<div class="bg-gray-50 dark:bg-[#1a1a1a] border-t border-gray-200 dark:border-gray-800 mt-12 py-8 px-8">
<div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center text-xs text-gray-500 gap-4">
<div>© 2023 Khu Resorts, Inc.</div>
<div class="flex gap-4">
<span class="hover:underline cursor-pointer">Privacy</span>
<span class="hover:underline cursor-pointer">Terms</span>
<span class="hover:underline cursor-pointer">Sitemap</span>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
<script>
        // Simple script to toggle dark mode based on system preference or manual toggle (if implemented)
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.classList.add('dark');
        }
        // Manual toggle connector
        const toggleBtn = document.querySelector('button span.material-icons-outlined:contains("dark_mode")')?.parentNode || document.querySelector('header .material-icons-outlined').parentNode;
        // Helper to find button properly as contains selector is not standard in JS
        const btns = document.querySelectorAll('button');
        let darkModeBtn = null;
        btns.forEach(btn => {
            if(btn.innerHTML.includes('dark_mode')) darkModeBtn = btn;
        });
        if(darkModeBtn) {
            darkModeBtn.addEventListener('click', () => {
                document.documentElement.classList.toggle('dark');
            });
        }
    </script>

</body></html>