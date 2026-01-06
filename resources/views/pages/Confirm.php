<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Xác nhận thông tin - The Wandering Rose</title>

  <link href="https://fonts.googleapis.com" rel="preconnect"/>
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&amp;family=Montserrat:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>

  <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            primary: "#C18C5D",
            secondary: "#B08968",
            accent: "#E6DCCA",
            textPrimary: "#4A4A4A",
            textHeading: "#A67C52",
            "background-light": "#FDFBF7",
            "background-dark": "#1a1a1a",
            "surface-light": "#FFFFFF",
            "surface-dark": "#262626",
            "border-light": "#E5E7EB",
            "border-dark": "#404040",
          },
          fontFamily: {
            display: ["'Playfair Display'", "serif"],
            sans: ["'Montserrat'", "sans-serif"],
          },
          borderRadius: {
            DEFAULT: "4px",
            md: "6px",
            lg: "8px",
          },
        },
      },
    };
  </script>

  <!-- ✅ CSS tách riêng -->
  <link rel="stylesheet" href="/css/pages/Confirm.css">
</head>

<body class="bg-background-light dark:bg-background-dark text-textPrimary dark:text-gray-300 min-h-screen flex flex-col items-center">
<header class="w-full max-w-7xl px-6 py-6 flex justify-between items-center relative z-10">
  <a class="text-sm uppercase tracking-widest text-gray-500 dark:text-gray-400 hover:text-primary transition-colors flex items-center gap-2" href="#">
    <span class="material-icons text-base">arrow_back</span> Trở về
  </a>

  <div class="text-center">
    <div class="flex flex-col items-center">
      <span class="material-icons text-textHeading dark:text-primary mb-1">spa</span>
      <h1 class="text-2xl lg:text-3xl font-display text-textHeading dark:text-primary tracking-wide uppercase">The Wandering Rose</h1>
      <span class="font-display italic text-lg text-textHeading dark:text-primary mt-1">Ba Vì</span>
    </div>
  </div>

  <div class="relative">
    <button class="flex items-center gap-2 border border-gray-300 dark:border-gray-600 rounded px-3 py-1.5 text-sm hover:border-primary transition-colors">
      <span>VND</span>
      <img alt="Vietnam Flag" class="w-5 h-auto rounded-sm" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDBNOrdcaS3pcH4n6f10yaqwlFhv3gSGbtps5Q05NMN9EMlVIJ3aHIhjYKkfE38PJ0dnuY-i97V6SuOeHG37ep_XcsujG-JGwleA_9bE859vOIINiPykmYlEHu7wLW9pVJ6lXxi2aKb-Z8UgdQPNC26uxG_1LhLRTO1L2RTTnTX-C4MplAdX1yvahS7eK2uA9wF-OEAtYeoTR2RJ_0I065OtaMlREpwLaFj9gtKBveLgKR8CobgcFXyJeegoLYECK9Y88AxeOiG"/>
      <span class="material-icons text-base">expand_more</span>
    </button>
  </div>
</header>

<main class="w-full max-w-6xl px-4 pb-20">
<div class="text-center mb-8 mt-4">
<h2 class="text-4xl lg:text-5xl font-display text-textHeading dark:text-primary mb-4">Xác nhận thông tin</h2>
<div class="flex flex-col items-center gap-2 text-sm text-gray-600 dark:text-gray-400">
<div class="flex items-center gap-2">
<span class="material-icons text-base">schedule</span>
<span class="font-bold text-black dark:text-white">10:00</span>
<span>để tiến hành thanh toán trong</span>
</div>
<p>Cảnh báo: nếu bạn rời trang này, lựa chọn sẽ <span class="font-bold text-black dark:text-white">KHÔNG</span> được giữ lại!</p>
</div>
</div>
<div class="bg-surface-light dark:bg-surface-dark p-6 lg:p-8 shadow-sm border border-gray-100 dark:border-gray-700 mb-10">
<div class="flex flex-wrap gap-x-6 gap-y-2 text-sm uppercase tracking-wide text-gray-500 dark:text-gray-400 font-bold mb-4 border-b border-gray-100 dark:border-gray-700 pb-4">
<span>Thông tin đặt phòng</span>
<span class="text-black dark:text-white">2 Phòng</span>
<span class="text-black dark:text-white">10 Đêm</span>
<span class="text-black dark:text-white">2 Người lớn</span>
<span class="text-black dark:text-white">1 Trẻ em</span>
</div>
<div class="mb-4">
<span class="text-lg font-medium">27/09/2025 - 06/10/2025</span>
</div>
<div class="flex justify-between items-center text-primary dark:text-primary mb-2">
<span>Nhận phòng</span>
<span>27/09/2025</span>
</div>
<div class="flex justify-between items-center text-primary dark:text-primary mb-6">
<span>Trả phòng</span>
<span>06/10/2025</span>
</div>
<button class="border border-textHeading dark:border-primary text-textHeading dark:text-primary px-4 py-2 text-xs uppercase tracking-wider hover:bg-textHeading hover:text-white dark:hover:bg-primary transition-colors">
                Thay đổi kế hoạch
            </button>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
<div class="lg:col-span-7 space-y-12">
<div>
<h3 class="text-3xl font-display text-textHeading dark:text-primary text-center mb-8">Phòng đã chọn</h3>
<div class="mb-10 border-b border-gray-100 dark:border-gray-700 pb-8 last:border-0 last:pb-0">
<div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-4">
<h4 class="text-xl font-bold text-textHeading dark:text-primary font-display">Deluxe room</h4>
<div class="flex items-center gap-2 text-sm text-textHeading dark:text-primary mt-2 sm:mt-0">
<span class="material-icons text-lg">people</span>
<span>00 người lớn</span>
<span>00 trẻ em (&lt; 6 tuổi)</span>
</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
<div class="sm:col-span-2">
<label class="block text-xs text-gray-500 dark:text-gray-400 mb-1">Họ và tên *</label>
<input class="w-full border-gray-300 dark:border-gray-600 dark:bg-surface-dark focus:ring-primary focus:border-primary text-sm px-3 py-2" placeholder="Nhập họ và tên" type="text"/>
</div>
</div>
<div class="grid grid-cols-3 gap-4">
<div>
<label class="block text-xs text-gray-500 dark:text-gray-400 mb-1 text-center">Người lớn</label>
<div class="flex items-center justify-between border border-gray-300 dark:border-gray-600 px-2 py-1.5 dark:bg-surface-dark">
<button class="text-gray-400 hover:text-primary">-</button>
<span class="text-sm">02</span>
<button class="text-gray-400 hover:text-primary">+</button>
</div>
</div>
<div>
<label class="block text-xs text-gray-500 dark:text-gray-400 mb-1 text-center">Trẻ em</label>
<div class="flex items-center justify-between border border-gray-300 dark:border-gray-600 px-2 py-1.5 dark:bg-surface-dark">
<button class="text-gray-400 hover:text-primary">-</button>
<span class="text-sm">00</span>
<button class="text-gray-400 hover:text-primary">+</button>
</div>
</div>
<div>
<label class="block text-xs text-gray-500 dark:text-gray-400 mb-1 text-center">Em bé</label>
<div class="flex items-center justify-between border border-gray-300 dark:border-gray-600 px-2 py-1.5 dark:bg-surface-dark">
<button class="text-gray-400 hover:text-primary">-</button>
<span class="text-sm">00</span>
<button class="text-gray-400 hover:text-primary">+</button>
</div>
</div>
</div>
</div>
<div class="mb-10">
<div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-4">
<h4 class="text-xl font-bold text-textHeading dark:text-primary font-display">Rose house</h4>
<div class="flex items-center gap-2 text-sm text-textHeading dark:text-primary mt-2 sm:mt-0">
<span class="material-icons text-lg">people</span>
<span>00 người lớn</span>
<span>00 trẻ em (&lt; 6 tuổi)</span>
</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
<div class="sm:col-span-2">
<label class="block text-xs text-gray-500 dark:text-gray-400 mb-1">Họ và tên *</label>
<input class="w-full border-gray-300 dark:border-gray-600 dark:bg-surface-dark focus:ring-primary focus:border-primary text-sm px-3 py-2" placeholder="Nhập họ và tên" type="text"/>
</div>
</div>
<div class="grid grid-cols-3 gap-4 mb-6">
<div>
<label class="block text-xs text-gray-500 dark:text-gray-400 mb-1 text-center">Người lớn</label>
<div class="flex items-center justify-between border border-gray-300 dark:border-gray-600 px-2 py-1.5 dark:bg-surface-dark">
<button class="text-gray-400 hover:text-primary">-</button>
<span class="text-sm">02</span>
<button class="text-gray-400 hover:text-primary">+</button>
</div>
</div>
<div>
<label class="block text-xs text-gray-500 dark:text-gray-400 mb-1 text-center">Trẻ em</label>
<div class="flex items-center justify-between border border-gray-300 dark:border-gray-600 px-2 py-1.5 dark:bg-surface-dark">
<button class="text-gray-400 hover:text-primary">-</button>
<span class="text-sm">00</span>
<button class="text-gray-400 hover:text-primary">+</button>
</div>
</div>
<div>
<label class="block text-xs text-gray-500 dark:text-gray-400 mb-1 text-center">Em bé</label>
<div class="flex items-center justify-between border border-gray-300 dark:border-gray-600 px-2 py-1.5 dark:bg-surface-dark">
<button class="text-gray-400 hover:text-primary">-</button>
<span class="text-sm">00</span>
<button class="text-gray-400 hover:text-primary">+</button>
</div>
</div>
</div>
<div>
<label class="block text-xs text-gray-500 dark:text-gray-400 mb-1">Yêu cầu bổ sung (nếu có)</label>
<textarea class="w-full border-gray-300 dark:border-gray-600 dark:bg-surface-dark focus:ring-primary focus:border-primary text-sm px-3 py-2" placeholder="Nhập tin nhắn" rows="4"></textarea>
</div>
</div>
</div>
<div class="pt-8 border-t border-gray-100 dark:border-gray-700">
<h3 class="text-4xl font-display text-textHeading dark:text-primary text-center mb-8">Chính sách villa</h3>
<div class="space-y-6 text-sm text-textPrimary dark:text-gray-300 leading-relaxed">
<div>
<h4 class="text-xl font-display text-textHeading dark:text-primary mb-2">Thanh toán &amp; huỷ đặt phòng</h4>
<ul class="list-disc pl-5 space-y-1 marker:text-textHeading dark:marker:text-primary">
<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
<li>Suspendisse iaculis urna nec odio tincidunt, sed aliquet libero imperdiet.</li>
<li>Fusce quis massa ac velit cursus dictum.</li>
<li>Ut placerat ipsum eu efficitur aliquam.</li>
</ul>
</div>
<div>
<h4 class="text-xl font-display text-textHeading dark:text-primary mb-2">Thời gian nhận và trả phòng</h4>
<ul class="list-disc pl-5 space-y-1 marker:text-textHeading dark:marker:text-primary">
<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
<li>Suspendisse iaculis urna nec odio tincidunt, sed aliquet libero imperdiet.</li>
<li>Fusce quis massa ac velit cursus dictum.</li>
<li>Ut placerat ipsum eu efficitur aliquam.</li>
</ul>
</div>
<div>
<h4 class="text-xl font-display text-textHeading dark:text-primary mb-2">Chính sách trẻ em</h4>
<ul class="list-disc pl-5 space-y-1 marker:text-textHeading dark:marker:text-primary">
<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
<li>Suspendisse iaculis urna nec odio tincidunt, sed aliquet libero imperdiet.</li>
<li>Fusce quis massa ac velit cursus dictum.</li>
<li>Ut placerat ipsum eu efficitur aliquam.</li>
</ul>
</div>
</div>
</div>
</div>
<div class="lg:col-span-5 space-y-10">
<div class="bg-surface-light dark:bg-surface-dark border border-gray-100 dark:border-gray-700 p-6 lg:p-8">
<h3 class="text-3xl font-display text-textHeading dark:text-primary text-center mb-6">Thông tin khách hàng</h3>
<div class="space-y-4">
<div>
<label class="block text-xs text-gray-500 dark:text-gray-400 mb-1">Họ và tên *</label>
<input class="w-full border-gray-300 dark:border-gray-600 dark:bg-surface-dark focus:ring-primary focus:border-primary text-sm px-3 py-2" placeholder="Nhập họ và tên" type="text"/>
</div>
<div>
<label class="block text-xs text-gray-500 dark:text-gray-400 mb-1">Số điện thoại *</label>
<div class="flex">
<div class="flex items-center justify-center px-3 border border-r-0 border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-800">
<img alt="VN" class="w-5 h-auto" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCOoszPtczCMd3xpCmzWy2JOE8nvcYBK-SmAkG26s8PKCdI3mzL3hTdK9jjbAGWtTtwvTP-0IcpcMnKvCs7OaRl1TyDlogYHe69goND6btveZF9TduMInozAYJqo3IZJJD-_riR8WUq-T8EWKwtiUkT42WCXnh4-ylP7HDrjbnWOccsBwynrRQxFFLnI0TlLRiGGCy6jtTwpZ_i5Lr_MN4IRG-kv-At_SMhymbHsx0Wgqjb6hc0hH_9KdlIM5l6L0UuD0Yi0hvB"/>
<span class="material-icons text-sm ml-1 text-gray-500">expand_more</span>
</div>
<input class="flex-1 border-gray-300 dark:border-gray-600 dark:bg-surface-dark focus:ring-primary focus:border-primary text-sm px-3 py-2" placeholder="Nhập số điện thoại" type="tel"/>
</div>
</div>
<div>
<label class="block text-xs text-gray-500 dark:text-gray-400 mb-1">Email *</label>
<input class="w-full border-gray-300 dark:border-gray-600 dark:bg-surface-dark focus:ring-primary focus:border-primary text-sm px-3 py-2" placeholder="Nhập địa chỉ email" type="email"/>
</div>
<div class="grid grid-cols-2 gap-4">
<div>
<label class="block text-xs text-gray-500 dark:text-gray-400 mb-1">ID/Passport *</label>
<input class="w-full border-gray-300 dark:border-gray-600 dark:bg-surface-dark focus:ring-primary focus:border-primary text-sm px-3 py-2" placeholder="Nhập số định danh cá nhân" type="text"/>
</div>
<div>
<label class="block text-xs text-gray-500 dark:text-gray-400 mb-1">Giới tính theo ID/Passport *</label>
<select class="w-full border-gray-300 dark:border-gray-600 dark:bg-surface-dark focus:ring-primary focus:border-primary text-sm px-3 py-2">
<option>Nam</option>
<option>Nữ</option>
</select>
</div>
</div>
<div>
<label class="block text-xs text-gray-500 dark:text-gray-400 mb-1">Ngày sinh *</label>
<input class="w-full border-gray-300 dark:border-gray-600 dark:bg-surface-dark focus:ring-primary focus:border-primary text-sm px-3 py-2" placeholder="Nhập số định danh cá nhân" type="text"/>
</div>
<div>
<label class="block text-xs text-gray-500 dark:text-gray-400 mb-1">Quốc tịch *</label>
<select class="w-full border-gray-300 dark:border-gray-600 dark:bg-surface-dark focus:ring-primary focus:border-primary text-sm px-3 py-2">
<option>Việt Nam</option>
</select>
</div>
</div>
</div>
<div class="bg-surface-light dark:bg-surface-dark border border-gray-100 dark:border-gray-700 p-6 lg:p-8">
<h3 class="text-3xl font-display text-textHeading dark:text-primary text-center mb-6">Thông tin thanh toán</h3>
<div class="flex justify-between font-bold mb-4 border-b border-gray-100 dark:border-gray-700 pb-2">
<span>Chi tiết</span>
<span>Giá (VNĐ)</span>
</div>
<div class="space-y-4 mb-6">
<div class="flex justify-between items-center text-sm font-medium text-textHeading dark:text-primary">
<span>Duluxe room</span>
<span>50.000.000 đ</span>
</div>
<div class="flex justify-between items-center text-sm font-medium text-textHeading dark:text-primary pb-4 border-b border-gray-100 dark:border-gray-700">
<span>Red rose house</span>
<span>50.000.000 đ</span>
</div>
</div>
<div class="relative mb-6">
<input class="w-full border-gray-300 dark:border-gray-600 dark:bg-surface-dark focus:ring-primary focus:border-primary text-sm px-3 py-2 pr-24" placeholder="Nhập mã giảm giá" type="text"/>
<button class="absolute right-2 top-1/2 transform -translate-y-1/2 text-xs text-gray-400 underline hover:text-primary">Chọn mã giảm giá</button>
</div>
<div class="space-y-3 text-sm mb-6 border-b border-gray-100 dark:border-gray-700 pb-6">
<div class="flex justify-between font-bold">
<span>Tiền phòng</span>
<span>100.000.000 đ</span>
</div>
<div class="flex justify-between font-bold">
<span>Phụ phí</span>
<span>0 đ</span>
</div>
<div class="flex justify-between font-bold">
<span>Dịch vụ</span>
<span>0 đ</span>
</div>
<div class="flex justify-between font-bold">
<span>Khuyến mãi</span>
<span>0 đ</span>
</div>
</div>
<div class="flex justify-between items-center font-bold text-lg mb-2">
<span>Tổng thanh toán</span>
<span>100.000.000 đ</span>
</div>
<p class="text-xs text-right text-gray-500 dark:text-gray-400 mb-6">(Bao gồm thuế GTGT 10% và phí dịch vụ 5%)</p>
<div class="border border-gray-300 dark:border-gray-600 rounded p-3 flex items-center gap-3 mb-4 cursor-pointer hover:border-primary dark:hover:border-primary transition-colors">
<div class="w-4 h-4 rounded-sm border border-primary bg-primary flex items-center justify-center">
<span class="w-2 h-2 bg-white dark:bg-black rounded-full"></span>
</div>
<span class="text-sm text-gray-600 dark:text-gray-300">Thanh toán chuyển khoản</span>
</div>
<div class="flex items-start gap-2 mb-6">
<input class="mt-1 border-gray-300 text-primary focus:ring-primary rounded" type="checkbox"/>
<label class="text-xs text-gray-500 dark:text-gray-400">Tôi đã đọc và đồng ý với chính sách của villa</label>
</div>
<button class="w-full bg-primary hover:bg-[#a6764d] text-white font-medium py-3 uppercase tracking-wider text-sm transition-colors shadow-sm">
                        Xác nhận đến bước thanh toán
                    </button>
</div>
</div>
</div>
</main>
</body>
</html>
