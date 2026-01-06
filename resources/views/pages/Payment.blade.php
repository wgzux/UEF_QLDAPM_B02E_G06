<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Payment - The Wandering Rose Ba Vì</title>

  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&amp;family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&amp;display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />

  <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>

  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            primary: "#B0835D",
            "primary-hover": "#946C4A",
            "text-gold": "#C69C72",
            "background-light": "#FFFCF9",
            "background-dark": "#121212",
            "surface-light": "#FFFFFF",
            "surface-dark": "#1E1E1E",
            "border-light": "#E5E5E5",
            "border-dark": "#333333",
            "text-main-light": "#333333",
            "text-main-dark": "#E0E0E0",
            "text-muted-light": "#666666",
            "text-muted-dark": "#9CA3AF",
          },
          fontFamily: {
            display: ["Playfair Display", "serif"],
            sans: ["Inter", "sans-serif"],
          },
          borderRadius: {
            DEFAULT: "0.25rem",
            "lg": "0.5rem",
            "xl": "0.75rem",
          },
        },
      },
    };
  </script>

  <!-- ✅ CSS tách ra file riêng -->
  <link rel="stylesheet" href="payment.css" />
</head>

<body class="bg-background-light dark:bg-background-dark text-text-main-light dark:text-text-main-dark font-sans transition-colors duration-300">

  <header class="container mx-auto px-4 py-6">
    <div class="flex flex-col md:flex-row justify-between items-center relative">
      <a class="absolute left-0 top-1/2 -translate-y-1/2 md:relative md:translate-y-0 text-text-muted-light dark:text-text-muted-dark hover:text-primary transition-colors flex items-center text-sm uppercase tracking-wide" href="#">
        <span class="material-icons text-base mr-1">arrow_back</span>
        Trở về
      </a>

      <div class="text-center mb-4 md:mb-0">
        <div class="font-display text-2xl md:text-3xl text-primary font-bold tracking-widest uppercase">The Wandering Rose</div>
        <div class="font-display italic text-lg text-text-gold">Ba Vì</div>
        <div class="text-[10px] text-text-muted-light dark:text-text-muted-dark tracking-[0.3em] mt-1">EST. 2025</div>
      </div>

      <div class="absolute right-0 top-1/2 -translate-y-1/2 md:relative md:translate-y-0">
        <button class="border border-border-light dark:border-border-dark bg-surface-light dark:bg-surface-dark px-3 py-1.5 rounded flex items-center text-sm">
          <span class="mr-2">VND</span>
          <img alt="Vietnam Flag" class="w-5 h-auto rounded-sm" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAzHJ-tAq1YP1WfEAAXeELB9-oVk7psbOtJkRSQKiRouPGBAZHsEqS0kPP3eQv7LPFzy9DreUMFD877ivcChotyjrSgbAP5Ti8Utd5M5TGSlQiaP9icWLwqyBwyJ_Rsk68esobZh4dJrFgzAcn_EJTClNvQ3E5c6yia9YgMoTK01EKY7OJfZpjILFRP0rDzd0J39LLEc2SjZRN7Mc3YFm6EAEqoEoHFObTkjj7W_wcfVjYJinGPca1JFt5OlvAJwpIW8s3l8zsE" />
          <span class="material-icons text-sm ml-1">expand_more</span>
        </button>
      </div>
    </div>
  </header>

  <main class="container mx-auto px-4 pb-20 max-w-6xl">
<div class="text-center mb-10">
<h1 class="font-display text-4xl md:text-5xl text-text-gold mb-6">Thanh toán</h1>
<div class="flex items-center justify-center space-x-2 text-text-main-light dark:text-text-main-dark mb-2">
<span class="material-icons-outlined text-lg">schedule</span>
<span class="font-semibold">10:00</span>
<span>để tiến hành thanh toán trong</span>
</div>
<p class="text-sm text-text-muted-light dark:text-text-muted-dark">
                Cảnh báo: nếu bạn rời trang này, lựa chọn sẽ <span class="font-bold text-red-500">KHÔNG</span> được giữ lại !
            </p>
</div>
<div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16">
<section class="bg-surface-light dark:bg-surface-dark p-6 md:p-8 rounded-lg shadow-sm border border-transparent dark:border-border-dark">
<h2 class="font-display text-3xl text-text-gold text-center mb-8">Thông tin đặt phòng</h2>
<div class="mb-6 flex items-center space-x-4 text-lg font-bold tracking-wide">
<span>2 PHÒNG</span>
<span class="text-gray-300 dark:text-gray-600">|</span>
<span>10 ĐÊM</span>
</div>
<div class="mb-6 pb-6 border-b border-border-light dark:border-border-dark">
<p class="mb-4 font-medium">27/09/2025 - 06/10/2025</p>
<div class="flex justify-between items-center mb-2">
<span class="font-bold">Nhận phòng</span>
<span class="text-text-muted-light dark:text-text-muted-dark">27/09/2025</span>
</div>
<div class="flex justify-between items-center">
<span class="font-bold">Trả phòng</span>
<span class="text-text-muted-light dark:text-text-muted-dark">06/10/2025</span>
</div>
</div>
<div class="mb-4">
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-1">
<h3 class="font-bold text-primary text-lg">Duluxe room</h3>
<div class="flex items-center text-sm text-text-muted-light dark:text-text-muted-dark mt-1 sm:mt-0">
<span class="material-icons-outlined text-lg mr-1">people</span>
<span>00 người lớn</span>
<span class="mx-2">·</span>
<span>00 trẻ em</span>
<span class="mx-2">·</span>
<span>00 em bé</span>
</div>
</div>
</div>
<div class="mb-6">
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-1">
<h3 class="font-bold text-primary text-lg">Rose house</h3>
<div class="flex items-center text-sm text-text-muted-light dark:text-text-muted-dark mt-1 sm:mt-0">
<span class="material-icons-outlined text-lg mr-1">people</span>
<span>00 người lớn</span>
<span class="mx-2">·</span>
<span>00 trẻ em</span>
<span class="mx-2">·</span>
<span>00 em bé</span>
</div>
</div>
</div>
<div class="mb-8">
<label class="block text-sm text-text-muted-light dark:text-text-muted-dark mb-2">Yêu cầu bổ sung (nếu có)</label>
<input class="w-full bg-transparent border border-border-light dark:border-border-dark rounded p-3 text-sm focus:ring-1 focus:ring-primary focus:border-primary dark:focus:ring-primary dark:focus:border-primary transition-colors" placeholder="Không có" type="text"/>
</div>
<div class="border-t border-border-light dark:border-border-dark pt-6">
<div class="flex justify-between items-center mb-4">
<span class="font-bold text-lg">Mã đặt phòng</span>
<span class="font-bold text-lg text-text-muted-light dark:text-text-muted-dark">#OL29893265</span>
</div>
<div class="flex justify-between items-center">
<span class="font-bold text-xl">Tổng thanh toán</span>
<span class="font-bold text-xl text-primary">100.000.000 đ</span>
</div>
<p class="text-right text-xs text-text-muted-light dark:text-text-muted-dark mt-2">(Bao gồm thuế GTGT 10% và phí dịch vụ 5%)</p>
</div>
</section>
<section class="bg-surface-light dark:bg-surface-dark p-6 md:p-8 rounded-lg shadow-sm border border-transparent dark:border-border-dark">
<h2 class="font-display text-3xl text-text-gold text-center mb-8">Thông tin khách hàng</h2>
<form action="#" class="space-y-5">
<div>
<label class="block text-sm font-medium mb-1">Họ và tên <span class="text-red-500">*</span></label>
<input class="w-full bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark rounded p-3 focus:ring-1 focus:ring-primary focus:border-primary dark:focus:ring-primary dark:focus:border-primary transition-colors" placeholder="Nhập họ và tên" type="text"/>
</div>
<div>
<label class="block text-sm font-medium mb-1">Số điện thoại <span class="text-red-500">*</span></label>
<div class="relative flex">
<div class="flex items-center justify-center px-3 border border-r-0 border-border-light dark:border-border-dark rounded-l bg-gray-50 dark:bg-zinc-800">
<img alt="VN" class="w-5 h-auto" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCWsYDtpP4LfUHMzudOJvzKXc7QZ4vAQQipOtVBwCiGPjbRfERAsdk9dPRtyB2iPEF2ZHAMvUWuXUpwtWEr6_seIQCkCaTEQhFI8T7QSDqMaeVnW_5p8xJojOzL0mHAoi5_4fg5_R8N8x1ZUdOnAl1KOzsbPMn3Eh8_2HBcWrja3W2VHoJtQGy42m6mGHVfFqgibQt3TpOox6Y1Dour6oBtKQ4I5-BAZ90SV3fQR0C_F7Q42fi_T36xx-Pm7HYdvyf5TGsezi-B"/>
<span class="material-icons text-sm ml-1 text-text-muted-light dark:text-text-muted-dark">expand_more</span>
</div>
<input class="flex-1 bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark rounded-r p-3 focus:ring-1 focus:ring-primary focus:border-primary dark:focus:ring-primary dark:focus:border-primary transition-colors" placeholder="Nhập số điện thoại" type="tel"/>
</div>
</div>
<div>
<label class="block text-sm font-medium mb-1">Email <span class="text-red-500">*</span></label>
<input class="w-full bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark rounded p-3 focus:ring-1 focus:ring-primary focus:border-primary dark:focus:ring-primary dark:focus:border-primary transition-colors" placeholder="Nhập địa chỉ email" type="email"/>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
<div>
<label class="block text-sm font-medium mb-1">ID/Passport <span class="text-red-500">*</span></label>
<input class="w-full bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark rounded p-3 focus:ring-1 focus:ring-primary focus:border-primary dark:focus:ring-primary dark:focus:border-primary transition-colors" placeholder="Nhập số định danh cá nhân" type="text"/>
</div>
<div>
<label class="block text-sm font-medium mb-1">Giới tính theo ID/Passport <span class="text-red-500">*</span></label>
<div class="relative">
<select class="w-full bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark rounded p-3 appearance-none focus:ring-1 focus:ring-primary focus:border-primary dark:focus:ring-primary dark:focus:border-primary transition-colors">
<option>Nam</option>
<option>Nữ</option>
<option>Khác</option>
</select>
<span class="material-icons absolute right-3 top-1/2 -translate-y-1/2 text-text-muted-light dark:text-text-muted-dark pointer-events-none">expand_more</span>
</div>
</div>
</div>
<div>
<label class="block text-sm font-medium mb-1">Ngày sinh <span class="text-red-500">*</span></label>
<input class="w-full bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark rounded p-3 focus:ring-1 focus:ring-primary focus:border-primary dark:focus:ring-primary dark:focus:border-primary transition-colors" placeholder="Nhập số định danh cá nhân" type="text"/>
</div>
<div>
<label class="block text-sm font-medium mb-1">Quốc tịch <span class="text-red-500">*</span></label>
<div class="relative">
<select class="w-full bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark rounded p-3 appearance-none focus:ring-1 focus:ring-primary focus:border-primary dark:focus:ring-primary dark:focus:border-primary transition-colors">
<option>Việt Nam</option>
<option>Hoa Kỳ</option>
<option>Anh</option>
<option>Nhật Bản</option>
<option>Hàn Quốc</option>
</select>
<span class="material-icons absolute right-3 top-1/2 -translate-y-1/2 text-text-muted-light dark:text-text-muted-dark pointer-events-none">expand_more</span>
</div>
</div>
</form>
</section>
</div>
<section class="mt-12 bg-surface-light dark:bg-surface-dark p-8 md:p-12 rounded-lg shadow-sm border border-transparent dark:border-border-dark flex flex-col items-center text-center">
<div class="mb-6">
<div class="flex items-center text-2xl font-bold">
<span class="text-red-600">VIET</span>
<span class="text-blue-600">QR</span>
</div>
</div>
<div class="bg-white p-2 rounded-lg shadow-md mb-6 relative">
<div class="w-64 h-64 bg-white flex items-center justify-center relative overflow-hidden">
<svg class="w-full h-full text-black opacity-90" fill="currentColor" viewBox="0 0 100 100">
<rect fill="white" height="100" width="100" x="0" y="0"></rect>
<rect fill="none" height="20" rx="2" stroke="currentColor" stroke-width="8" width="20" x="10" y="10"></rect>
<rect fill="currentColor" height="8" width="8" x="16" y="16"></rect>
<rect fill="none" height="20" rx="2" stroke="currentColor" stroke-width="8" width="20" x="70" y="10"></rect>
<rect fill="currentColor" height="8" width="8" x="76" y="16"></rect>
<rect fill="none" height="20" rx="2" stroke="currentColor" stroke-width="8" width="20" x="10" y="70"></rect>
<rect fill="currentColor" height="8" width="8" x="16" y="76"></rect>
<path d="M40 10 h10 v10 h-10 z M55 10 h10 v10 h-10 z M40 25 h10 v10 h-10 z M60 25 h10 v10 h-10 z
                                  M40 40 h10 v10 h-10 z M55 40 h10 v10 h-10 z M70 40 h10 v10 h-10 z M85 40 h10 v10 h-10 z
                                  M10 40 h10 v10 h-10 z M25 40 h10 v10 h-10 z
                                  M40 55 h10 v10 h-10 z M60 55 h10 v10 h-10 z M80 55 h10 v10 h-10 z
                                  M40 70 h10 v10 h-10 z M55 70 h10 v10 h-10 z M70 70 h10 v10 h-10 z
                                  M40 85 h10 v10 h-10 z M55 85 h10 v10 h-10 z M70 85 h10 v10 h-10 z
                                  " fill="currentColor"></path>
</svg>
<div class="absolute inset-0 flex items-center justify-center pointer-events-none">
<div class="bg-white p-1 rounded-full shadow-sm">
<div class="text-red-500 font-bold text-xl">V</div>
</div>
</div>
</div>
</div>
<div class="flex items-center space-x-6 mb-8">
<div class="flex items-center text-blue-800 font-bold italic text-lg">
                    napas <span class="text-green-500 ml-0.5">247</span>
</div>
<div class="h-6 w-px bg-gray-300 dark:bg-gray-600"></div>
<div class="flex items-center text-red-600 font-bold text-lg">
                    TECHCOMBANK <span class="text-red-600 text-2xl ml-1">❖</span>
</div>
</div>
<div class="w-full max-w-md space-y-3 text-sm md:text-base">
<div class="flex justify-between items-center">
<span class="text-text-muted-light dark:text-text-muted-dark">Số tài khoản</span>
<div class="flex items-center font-bold">
<span>396366668888</span>
<button class="ml-2 text-text-muted-light dark:text-text-muted-dark hover:text-primary transition-colors">
<span class="material-icons-outlined text-base">content_copy</span>
</button>
</div>
</div>
<div class="flex justify-between items-center">
<span class="text-text-muted-light dark:text-text-muted-dark">Chủ tài khoản</span>
<span class="font-bold uppercase">Therose</span>
</div>
<div class="flex justify-between items-center">
<span class="text-text-muted-light dark:text-text-muted-dark">Tổng số tiền</span>
<span class="font-bold">3,450,000 VNĐ</span>
</div>
<div class="flex justify-between items-center">
<span class="text-text-muted-light dark:text-text-muted-dark">Nội dung</span>
<span class="font-bold">#OL29893265 0921234567</span>
</div>
</div>
</section>
<div class="mt-12 text-center">
<button class="w-full bg-primary hover:bg-primary-hover text-white font-semibold py-4 rounded shadow-lg transition-colors uppercase tracking-widest text-sm md:text-base">
                Xác nhận thanh toán
            </button>
</div>
  </main>

  <script>
    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
      document.documentElement.classList.add('dark')
    } else {
      document.documentElement.classList.remove('dark')
    }
  </script>

</body>
</html>
