<!DOCTYPE html>
<html class="light" lang="vi"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Trải nghiệm &amp; Tours - The Wandering Rose</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&amp;family=Montserrat:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
<script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#A67B5B",
                        "background-light": "#FFFBF7",
                        "background-dark": "#1A1A1A",
                    },
                    fontFamily: {
                        display: ["Cormorant Garamond", "serif"],
                        body: ["Montserrat", "sans-serif"],
                    },
                    borderRadius: {
                        DEFAULT: "4px",
                    },
                },
            },
        };
    </script>
<style>
        body { font-family: 'Montserrat', sans-serif; }
        h1, h2, h3, h4, .font-display { font-family: 'Cormorant Garamond', serif; }
        .hero-overlay { background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)); }
        .nav-link { position: relative; }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1px;
            bottom: -2px;
            left: 0;
            background-color: currentColor;
            transition: width 0.3s ease;
        }
        .nav-link:hover::after { width: 100%; }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-100 transition-colors duration-300">
<div class="bg-stone-900 text-white text-[10px] uppercase tracking-widest py-3 px-10 flex justify-between items-center">
<div>ĐẶT LỊCH VỚI GIÁ TỐT NHẤT</div>
<div class="flex gap-4 items-center">
<div class="flex flex-col">
<span class="text-[8px] opacity-60">CHECK-IN</span>
<input class="bg-transparent border-b border-white/30 text-[10px] focus:ring-0 focus:border-white p-0" type="date"/>
</div>
<div class="flex flex-col">
<span class="text-[8px] opacity-60">CHECK-OUT</span>
<input class="bg-transparent border-b border-white/30 text-[10px] focus:ring-0 focus:border-white p-0" type="date"/>
</div>
<button class="border border-white/50 px-4 py-2 hover:bg-white hover:text-black transition-colors">BUTTON TEXT</button>
</div>
</div>
<header class="bg-stone-900/95 dark:bg-stone-950 border-b border-white/10 sticky top-0 z-50">
<div class="container mx-auto px-6 py-6 text-white text-center">
<div class="flex justify-between items-center mb-6">
<div class="w-10"></div> 
<div class="flex flex-col items-center">
<span class="text-xs tracking-widest uppercase opacity-70">EST. 2023</span>
<h2 class="text-3xl font-display tracking-widest">THE WANDERING ROSE</h2>
<span class="text-sm italic font-display">Villa &amp; Resort</span>
</div>
<div class="text-xs flex items-center gap-2">
<span class="material-icons-outlined text-sm">phone</span>
                    092 981 6699
                </div>
</div>
<nav class="flex justify-center gap-10 text-xs tracking-widest uppercase">
<a class="nav-link" href="#">TRANG CHỦ</a>
<a class="nav-link" href="#">VỀ CHÚNG TÔI</a>
<a class="nav-link" href="#">HẠNG PHÒNG</a>
<a class="nav-link" href="#">DỊCH VỤ SỰ KIỆN</a>
<a class="nav-link text-primary font-semibold" href="#">TRẢI NGHIỆM &amp; TOUR</a>
<a class="nav-link" href="#">LIÊN HỆ</a>
</nav>
</div>
</header>
<section class="relative h-[600px] flex items-center justify-center text-white text-center">
<img alt="Hiking through lush green forest" class="absolute inset-0 w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBXD8BMSVMMSreqcZhji1fMYSR_0QcOnpgOWf_7pnwJTYBIGC5rV2kUgeOKo4OoaMmZ46kerh9i6M73MDP1UjTzq0RJCutJUEb8LgpxrkbXl5ZhdbHfQRuzZkLRt-NJDsyGF_yinry5Cq4Cy8q8SqaedPpOgH_tK794q58BdLZh6ifVAEjC_z8z_pQMfpGPh1nwTLkMrR2hTKtwYeKPZCUSPBKmi1r9ic531CV45Xp2bzvCqfoNeUuEhMEEk1yVYyveA7ffstrUjns_"/>
<div class="absolute inset-0 hero-overlay"></div>
<div class="relative z-10 space-y-8">
<h1 class="text-6xl md:text-8xl font-display italic">Trải nghiệm &amp; Tours</h1>
<div class="flex flex-wrap justify-center gap-8 text-xs tracking-widest uppercase border-t border-white/30 pt-8 mx-auto max-w-4xl">
<a class="hover:text-primary transition-colors" href="#tour1">TOUR VƯỜN QUỐC GIA BA VÌ</a>
<a class="hover:text-primary transition-colors" href="#tour2">TOUR AO VUA</a>
<a class="hover:text-primary transition-colors" href="#tour3">KHOANG XANH - SUỐI TIÊN</a>
<a class="hover:text-primary transition-colors" href="#tour4">TRẢI NGHIỆM BẢN ĐỊA</a>
</div>
</div>
</section>
<main class="py-24 container mx-auto px-6 max-w-6xl space-y-32">
<section class="flex flex-col md:flex-row items-center gap-16" id="tour1">
<div class="md:w-1/2 space-y-6">
<h2 class="text-5xl font-display text-primary leading-tight">Tour khám phá <br/> Vườn Quốc gia Ba Vì</h2>
<p class="text-gray-600 dark:text-gray-400 leading-relaxed font-light">
                    Trải nghiệm thiên nhiên hùng vĩ với thảm thực vật đa dạng tại Vườn Quốc Gia Ba Vì. Khám phá các phế tích thời Pháp cổ kính, rừng thông mộng mơ và những cung đường trekking tuyệt đẹp dẫn lối đến các đỉnh núi cao. Đây là hành trình lý tưởng cho những ai yêu thích không khí trong lành và vẻ đẹp hoang sơ.
                </p>
<div class="flex gap-4 pt-4">
<button class="bg-primary hover:bg-opacity-90 text-white px-8 py-3 text-xs tracking-widest uppercase transition-all">XEM CHI TIẾT</button>
<button class="border border-primary text-primary hover:bg-primary hover:text-white px-8 py-3 text-xs tracking-widest uppercase transition-all">ĐẶT LỊCH →</button>
</div>
</div>
<div class="md:w-1/2">
<img alt="Beautiful forest mountain landscape" class="w-full h-[450px] object-cover rounded-sm shadow-xl" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAZbaupxhenXK91qWh0Y7I_5JbLEsg0kFCuAyY2sCdHwnZEtGvi7QrV8HC_f1IezstWx2Rp0BHh5IkVwt0yPjWUzMledPWD8s3MEvYlnV6kFLmhJjjxdgHwxTzH1T8gtMuS0ayqydgPCVq8lbYWVHf2CW6RLfH0wUzYJn-921_OXAzacrRFT26jW4J_mr0zZr0o4fnXIiNyz730bmjGbYaFdqi9ArW1al-HKYkjk_p_XDWprYRAL6TD3TqDIc7u62y9AAJwiriTm97B"/>
</div>
</section>
<section class="flex flex-col md:flex-row-reverse items-center gap-16" id="tour2">
<div class="md:w-1/2 space-y-6">
<h2 class="text-5xl font-display text-primary leading-tight">Tour Ao Vua</h2>
<p class="text-gray-600 dark:text-gray-400 leading-relaxed font-light">
                    Khu du lịch Ao Vua nằm dưới chân núi Tản Viên huyền thoại, nơi gắn liền với truyền thuyết Sơn Tinh - Thủy Tinh. Tại đây, bạn có thể tham gia các trò chơi cảm giác mạnh, tắm thác suối tự nhiên và tận hưởng bầu không khí mát mẻ, trong lành của vùng núi Ba Vì. Một địa điểm tuyệt vời cho kỳ nghỉ gia đình.
                </p>
<div class="flex gap-4 pt-4">
<button class="bg-primary hover:bg-opacity-90 text-white px-8 py-3 text-xs tracking-widest uppercase transition-all">XEM CHI TIẾT</button>
<button class="border border-primary text-primary hover:bg-primary hover:text-white px-8 py-3 text-xs tracking-widest uppercase transition-all">ĐẶT LỊCH →</button>
</div>
</div>
<div class="md:w-1/2">
<img alt="Waterfall landscape" class="w-full h-[450px] object-cover rounded-sm shadow-xl" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAI8wZGUizkb6dj_Xq-5tH-DRt8zhj7inABxA3dv0tij8jo94DO4QlpOJXM-Zztf6vPydx_y6weZgOIgffb5GClXfP4PTKgpyyIRBqnttc3EMfWyGtgzzu_Ux2A5RUjnJd1XzhJXCXrjhqsDfLSVeKX26mrDiXQwcFzLaxvrdlbLU6BdcypCSzoqwmT06VieCHYzspaSTJOnulQG984Cgetw0fqH9QnN5xUsDMAkJ81ltWjwz7fYftkDJkq5QUYOQbaF-7IEVzpZxaA"/>
</div>
</section>
<section class="flex flex-col md:flex-row items-center gap-16" id="tour3">
<div class="md:w-1/2 space-y-6">
<h2 class="text-5xl font-display text-primary leading-tight">Khoang Xanh – <br/> Suối Tiên</h2>
<p class="text-gray-600 dark:text-gray-400 leading-relaxed font-light">
                    Được thiên nhiên ưu ái ban tặng những dòng suối xanh mát và thác nước hùng vĩ, Khoang Xanh - Suối Tiên là điểm đến không thể bỏ qua. Hãy đắm mình vào làn nước mát rượi, lắng nghe tiếng chim hót và cảm nhận sự thư thái tuyệt đối giữa núi rừng đại ngàn.
                </p>
<div class="flex gap-4 pt-4">
<button class="bg-primary hover:bg-opacity-90 text-white px-8 py-3 text-xs tracking-widest uppercase transition-all">XEM CHI TIẾT</button>
<button class="border border-primary text-primary hover:bg-primary hover:text-white px-8 py-3 text-xs tracking-widest uppercase transition-all">ĐẶT LỊCH →</button>
</div>
</div>
<div class="md:w-1/2">
<img alt="Rocky stream and forest" class="w-full h-[450px] object-cover rounded-sm shadow-xl" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBlR5L8ZCzYB51DZER3OFnxCvCUFenmPzY-0mlZ_vaHAas6cVIigTtg5HjXPENC7hESpdhpBQZL-2QNn-QELcxIoI48JJVxFpohvkpJ-bvcvm4MNggqozlMfRfJp-pNAxhDVREsjBM5N9qYxurcP_yx_LKa1S7B9D-91KapmeVFBOAfe7NL0lUNJ3lmTjIrWH8ylMJm9GBvHf0K2YdLWfM5TKdCiGq6Htgkq6MgG6Fd0L_rTmYE8v8f9xEd5q29DhSj42W2BQhsVcIi"/>
</div>
</section>
<section class="flex flex-col md:flex-row-reverse items-center gap-16" id="tour4">
<div class="md:w-1/2 space-y-6">
<h2 class="text-5xl font-display text-primary leading-tight">Các trải nghiệm <br/> bản địa</h2>
<p class="text-gray-600 dark:text-gray-400 leading-relaxed font-light">
                    Đi sâu vào đời sống địa phương với các hoạt động giao lưu văn hóa, thưởng thức ẩm thực đặc sản vùng miền và tìm hiểu về các làng nghề truyền thống. Một hành trình chạm đến linh hồn của vùng đất Ba Vì qua những nụ cười và câu chuyện của người dân bản xứ.
                </p>
<div class="flex gap-4 pt-4">
<button class="bg-primary hover:bg-opacity-90 text-white px-8 py-3 text-xs tracking-widest uppercase transition-all">XEM CHI TIẾT</button>
<button class="border border-primary text-primary hover:bg-primary hover:text-white px-8 py-3 text-xs tracking-widest uppercase transition-all">ĐẶT LỊCH →</button>
</div>
</div>
<div class="md:w-1/2">
<img alt="Hiker in the woods" class="w-full h-[450px] object-cover rounded-sm shadow-xl" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBz-jQJ-Gn5wQNe8zqdMi1c9pr1wLmfEMVD-ACNXobPFRaeOthlBuAtj0VNS-m-LFEAaaw5WjyouqlPXYLWVpWsdNNzZ3ikpDNXf3N2_swZOfNtN7wzNTBG2ZA6BSgeMMQEZDTZgGFe4ySTV_3PeNaErc_EV--2EFIQpmcs2i1uAp20AB8dMsr5Z8IxOswCm7hLTyI7Zn62T4vsRON95EgOwwDiBL6u_Ga4m2FkuxG5OxFE9_GRtZt6wpP6acwUrV1yrC2hxkBq6e8J"/>
</div>
</section>
</main>
<section class="bg-[#F8F3EE] dark:bg-stone-900 py-24">
<div class="container mx-auto px-6 max-w-6xl flex flex-col md:flex-row gap-20">
<div class="md:w-1/2">
<img alt="Resort landscape with pool" class="w-full aspect-[4/5] object-cover rounded-sm mb-8" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDYm9kMzRritq2aLQJet3EtKVjWTYJgljqarGCpF2_hBpyObg3ADovMZR4OcMj4C9E8o8iFqM_rgzsP4zHGzFlSQdm1YT0L0n7_EyYVjIyB4hm1DVVEPyFx1Xyxyq5vEYxcjCpH8KIcQ1LuWIklSFiiU6aEwIJhtryQpGBknb7WtrNvJHibInyMgGfpIz59edcBTnzGaZF1Ol9GZfNU7VMcCQMp9XHbV3kE5HSG7OkSP4cAlQFfqoPYxkRExDBq50kzSkMjMRG2R-x3"/>
<ul class="space-y-3 text-sm text-primary italic font-light">
<li>• Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
<li>• Donec lacinia sem eget justo bibendum malesuada.</li>
<li>• Etiam imperdiet odio eget nisl laoreet aliquam.</li>
<li>• Nunc pulvinar ante at lobortis gravida.</li>
<li>• Quisque hendrerit velit nec diam lacinia fermentum.</li>
<li>• Donec pretium augue sed tempus rhoncus.</li>
</ul>
</div>
<div class="md:w-1/2">
<h2 class="text-6xl font-display text-primary mb-12">Đặt tour</h2>
<form class="space-y-6">
<div class="space-y-1">
<label class="text-[10px] uppercase tracking-widest text-gray-500">Họ và tên *</label>
<input class="w-full border-gray-300 dark:border-stone-700 dark:bg-stone-800 focus:ring-primary focus:border-primary px-4 py-3 rounded-none" placeholder="Nhập họ và tên" type="text"/>
</div>
<div class="space-y-1">
<label class="text-[10px] uppercase tracking-widest text-gray-500">Email *</label>
<input class="w-full border-gray-300 dark:border-stone-700 dark:bg-stone-800 focus:ring-primary focus:border-primary px-4 py-3 rounded-none" placeholder="Nhập địa chỉ email" type="email"/>
</div>
<div class="space-y-1">
<label class="text-[10px] uppercase tracking-widest text-gray-500">Số điện thoại *</label>
<div class="flex border border-gray-300 dark:border-stone-700">
<div class="flex items-center px-4 bg-gray-50 dark:bg-stone-700 border-r border-gray-300 dark:border-stone-600 gap-2">
<span class="text-xs">🇻🇳</span>
<span class="material-icons-outlined text-xs">expand_more</span>
</div>
<input class="w-full border-none dark:bg-stone-800 focus:ring-0 px-4 py-3" placeholder="Nhập số điện thoại" type="tel"/>
</div>
</div>
<div class="space-y-1">
<label class="text-[10px] uppercase tracking-widest text-gray-500">Chọn dịch vụ *</label>
<select class="w-full border-gray-300 dark:border-stone-700 dark:bg-stone-800 focus:ring-primary focus:border-primary px-4 py-3 rounded-none appearance-none">
<option>Chọn</option>
<option>Tour Vườn Quốc Gia Ba Vì</option>
<option>Tour Ao Vua</option>
<option>Khoang Xanh - Suối Tiên</option>
</select>
</div>
<div class="space-y-1">
<label class="text-[10px] uppercase tracking-widest text-gray-500">Tin nhắn (nếu có)</label>
<textarea class="w-full border-gray-300 dark:border-stone-700 dark:bg-stone-800 focus:ring-primary focus:border-primary px-4 py-3 rounded-none" placeholder="Nhập tin nhắn" rows="4"></textarea>
</div>
<button class="w-full bg-primary hover:bg-opacity-90 text-white py-4 text-xs tracking-widest uppercase transition-all mt-4">GỬI TIN NHẮN ĐẶT LỊCH</button>
</form>
</div>
</div>
</section>
<section class="bg-primary py-24 text-white overflow-hidden">
<div class="container mx-auto px-6 max-w-6xl">
<h2 class="text-6xl font-display text-center mb-16">Tin tức và sự kiện</h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
<div class="group cursor-pointer">
<div class="relative overflow-hidden aspect-[3/4] mb-6">
<img alt="Concert Event" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDteO7av1J42Rogr-2ib8BlJqscwJ1IkmPlVFY4YFWLwECW0Atpm17_071dhZlH3x7Kgk4YV-kKCJX5iIefwWhoqQBEUT85kYHF3JsHfZCH_Ww0whY59ORviv1PGHk9tkQAW8kAA5B9sqvDVqJYaLshnBuxHrge8qqWal9v17jeGOu0MSK47-aGsJ1saukd2fydHsBlhYuiquGSmsE1g3t-EzNusZiD2GCKX7xdiAkIytXmoCdaVu4lrdgwgY0Wfy0Gue9ag294n8lE"/>
</div>
<span class="text-[10px] uppercase tracking-widest opacity-70">SỰ KIỆN ÂM NHẠC</span>
<h3 class="text-3xl font-display my-2">Tên tin tức</h3>
<button class="flex items-center gap-2 text-[10px] uppercase tracking-widest border border-white/30 px-4 py-2 hover:bg-white hover:text-primary transition-colors">TÌM HIỂU <span class="text-xs">→</span></button>
</div>
<div class="group cursor-pointer">
<div class="relative overflow-hidden aspect-[3/4] mb-6">
<img alt="Music Concert" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDUKxXWByCgeMVPx1_oNHnsINK6iv_1z0Aew4cdxJzWQu_Q1Z8t3hADJr2cwRakJNapvYpWK2pJPAHoSAvfxCMyfdpqRxJJs6ifDRk5eqOTsZseY0NvLWzgLjC7mhTDKzx01HY_YZHcr-TuXF04iF5b9ZUcJczxod5SdEU35HfC_0bD3H98BPqaVCjU_WiUQnP_97dFAq4bxbM88objSCxj6e1qDXnbiZy6zoo-LDkufLFW36PDFZhS2-PXXU0375T_Mwski6_Wk10s"/>
</div>
<span class="text-[10px] uppercase tracking-widest opacity-70">TÊN LOẠI TIN TỨC</span>
<h3 class="text-3xl font-display my-2">Tên tin tức</h3>
<button class="flex items-center gap-2 text-[10px] uppercase tracking-widest border border-white/30 px-4 py-2 hover:bg-white hover:text-primary transition-colors">TÌM HIỂU <span class="text-xs">→</span></button>
</div>
<div class="group cursor-pointer">
<div class="relative overflow-hidden aspect-[3/4] mb-6">
<img alt="Pop Music Event" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDqhbuBOaVdBhSz1Y5FEDt9Ugd4p45uvKF__z541FnpZgKPgrVee3kgQNEdFtGVX_BnYsleLrNofqGofZq9JpJcx3HIh44PK05IdHvQBcAq1KqNFmxUPJIH-FwIdS_Q5VtqovwTA62Er6bI0GEokP5Xfcawv4ifi47PUgGDtYrno2fQuj9XuSDzGQViYP948AGHVilm4le5enXBIDcwOXUyhSphDrDS_4jJKJEgJveeWrHWRa8jOF98WYLNklcUWB81xHvaMqrnvExx"/>
</div>
<span class="text-[10px] uppercase tracking-widest opacity-70">TÊN LOẠI TIN TỨC</span>
<h3 class="text-3xl font-display my-2">Tên tin tức</h3>
<button class="flex items-center gap-2 text-[10px] uppercase tracking-widest border border-white/30 px-4 py-2 hover:bg-white hover:text-primary transition-colors">TÌM HIỂU <span class="text-xs">→</span></button>
</div>
</div>
<div class="flex justify-center gap-4 mt-16">
<button class="w-12 h-12 rounded-full border border-white/30 flex items-center justify-center hover:bg-white hover:text-primary transition-all">
<span class="material-icons-outlined">west</span>
</button>
<button class="w-12 h-12 rounded-full border border-white/30 flex items-center justify-center hover:bg-white hover:text-primary transition-all">
<span class="material-icons-outlined">east</span>
</button>
</div>
</div>
</section>
<footer class="bg-stone-900 text-white pt-24 pb-12">
<div class="container mx-auto px-6 max-w-6xl">
<div class="text-center mb-20">
<div class="flex flex-col items-center">
<span class="text-[10px] tracking-widest uppercase opacity-60">EST. 2023</span>
<h2 class="text-4xl font-display tracking-widest">THE WANDERING ROSE</h2>
<span class="text-sm italic font-display">Villa &amp; Resort</span>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-20">
<div>
<h4 class="text-2xl font-display mb-6 uppercase tracking-widest">TRANG CHỦ</h4>
<ul class="space-y-3 text-xs opacity-70 tracking-wide uppercase font-light">
<li><a class="hover:text-primary transition-colors" href="#">VỀ CHÚNG TÔI</a></li>
<li><a class="hover:text-primary transition-colors" href="#">SỰ KIỆN ÂM NHẠC</a></li>
<li><a class="hover:text-primary transition-colors" href="#">GALLERY HÌNH ẢNH &amp; VIDEO</a></li>
<li><a class="hover:text-primary transition-colors" href="#">TIN TỨC</a></li>
<li><a class="hover:text-primary transition-colors" href="#">FAQ</a></li>
</ul>
</div>
<div class="md:col-span-1">
<h4 class="text-2xl font-display mb-6 uppercase tracking-widest">HẠNG PHÒNG</h4>
<div class="grid grid-cols-1 gap-3 text-xs opacity-70 tracking-wide uppercase font-light">
<a class="hover:text-primary" href="#">KHU WOODEN HOUSE</a>
<a class="hover:text-primary" href="#">FOREST ROOM</a>
<a class="hover:text-primary" href="#">DELUXE ROOM</a>
<a class="hover:text-primary" href="#">FAMILY ROOM</a>
<a class="hover:text-primary" href="#">KHU ROSE HOUSE</a>
<a class="hover:text-primary" href="#">PINK ROSE HOUSE</a>
<a class="hover:text-primary" href="#">WHITE ROSE HOUSE</a>
<a class="hover:text-primary" href="#">RED ROSE HOUSE</a>
<a class="hover:text-primary" href="#">THE WANDERING ROSE VILLA</a>
</div>
</div>
<div>
<h4 class="text-2xl font-display mb-6 uppercase tracking-widest">TRẢI NGHIỆM &amp; TOUR</h4>
<ul class="space-y-3 text-xs opacity-70 tracking-wide uppercase font-light">
<li><a class="hover:text-primary transition-colors" href="#">TOUR VƯỜN QUỐC GIA BA VÌ</a></li>
<li><a class="hover:text-primary transition-colors" href="#">TOUR AO VUA</a></li>
<li><a class="hover:text-primary transition-colors" href="#">KHOANG XANH - SUỐI TIÊN</a></li>
<li><a class="hover:text-primary transition-colors" href="#">CÁC TRẢI NGHIỆM BẢN ĐỊA</a></li>
</ul>
</div>
<div>
<h4 class="text-2xl font-display mb-6 uppercase tracking-widest">LIÊN HỆ</h4>
<ul class="space-y-4 text-xs opacity-70 tracking-wide font-light">
<li class="flex items-center gap-3">
<span class="material-icons-outlined text-sm">phone</span>
                            092 981 6699
                        </li>
<li class="flex items-center gap-3">
<span class="material-icons-outlined text-sm">mail</span>
                            booking@thewanderingrosebavi.com
                        </li>
<li class="flex items-center gap-3 leading-relaxed">
<span class="material-icons-outlined text-sm">location_on</span>
                            Thôn Mít Mái, Ba Vì, Hà Nội
                        </li>
<li class="pt-2">
<button class="border border-white/30 px-6 py-2 uppercase text-[10px] tracking-widest hover:bg-white hover:text-black transition-all">GỬI LIÊN HỆ →</button>
</li>
</ul>
</div>
</div>
<div class="border-t border-white/10 pt-10 flex flex-col md:flex-row justify-between items-center text-[10px] opacity-50 uppercase tracking-widest gap-6">
<p>© Copyright 2025 The Wandering Rose</p>
<div class="flex gap-6">
<a class="hover:text-white transition-colors" href="#">Facebook</a>
<a class="hover:text-white transition-colors" href="#">Youtube</a>
<a class="hover:text-white transition-colors" href="#">Instagram</a>
<a class="hover:text-white transition-colors" href="#">Pinterest</a>
</div>
</div>
</div>
</footer>

</body></html>