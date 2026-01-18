<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>The Wandering Rose Ba Vì - Booking Details</title>

  <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>

  <link href="https://fonts.googleapis.com" rel="preconnect"/>
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&amp;family=Work+Sans:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet"/>

  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            primary: "#a67c52",
            "primary-dark": "#8c6642",
            "brand-brown": "#9e7b5b",
            "brand-brown-dark": "#7a5e45",
            "background-light": "#f4f1ed",
            "background-dark": "#18181b",
            "surface-light": "#ffffff",
            "surface-dark": "#27272a",
            "border-light": "#e5e0d8",
            "border-dark": "#3f3f46",
            "divider-light": "#d1c4b6",
            "divider-dark": "#52525b",
          },
          fontFamily: {
            display: ["'Playfair Display'", "serif"],
            body: ["'Work Sans'", "sans-serif"],
          },
          borderRadius: {
            DEFAULT: "4px",
          },
        },
      },
    };
  </script>

  <!-- ✅ CSS tách riêng -->
  <link rel="stylesheet" href="/css/pages/BookingDetails.css">
</head>

<body class="bg-background-light dark:bg-background-dark text-gray-700 dark:text-gray-300 font-body transition-colors duration-300">

<header class="pt-6 pb-4 px-4 md:px-12 flex justify-between items-center bg-transparent relative z-10">
  <a class="flex items-center text-xs tracking-widest text-primary hover:opacity-80 transition-opacity uppercase" href="#">
    <span class="material-icons-outlined text-sm mr-1">arrow_back</span>
    Trở về
  </a>

  <div class="text-center">
    <div class="text-primary mx-auto mb-1">
      <svg class="w-6 h-6 mx-auto mb-1 fill-current" viewBox="0 0 24 24">
        <path d="M12 2C9 2 7 3.5 7 5.5C7 7.5 9 8 12 8C15 8 17 7.5 17 5.5C17 3.5 15 2 12 2ZM12 22C14.5 22 18 18 18 14C18 11 15 9.5 12 9.5C9 9.5 6 11 6 14C6 18 9.5 22 12 22Z" opacity="0.5"></path>
      </svg>
    </div>
    <h1 class="font-display text-2xl md:text-3xl text-primary tracking-wide">THE WANDERING ROSE</h1>
    <p class="font-display text-lg italic text-primary opacity-80">Ba Vì</p>
  </div>

  <div class="relative">
    <button class="flex items-center space-x-2 border border-border-light dark:border-border-dark px-3 py-1 rounded bg-white dark:bg-surface-dark text-xs">
      <span>VND</span>
      <span class="w-4 h-3 bg-red-600 relative overflow-hidden inline-block shadow-sm">
        <span class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-yellow-400 text-[8px]">★</span>
      </span>
      <span class="material-icons-outlined text-sm">expand_more</span>
    </button>
  </div>
</header>
<div class="px-4 md:px-12 py-8 max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-12 gap-6 items-end relative z-0">
<div class="md:col-span-4 flex items-center space-x-6">
<div>
<span class="block text-xs font-bold uppercase tracking-wider mb-1">Ngày</span>
<div class="flex items-baseline">
<span class="font-display text-4xl text-gray-800 dark:text-gray-100">27</span>
<div class="ml-2 text-xs leading-tight text-gray-500 dark:text-gray-400">
                        Tháng 9<br/>2025
                    </div>
</div>
</div>
<div class="bg-brand-brown text-white text-[10px] px-2 py-1 rounded-sm transform -translate-y-2">10 Đêm</div>
<div>
<span class="block text-xs font-bold uppercase tracking-wider mb-1 invisible">End</span>
<div class="flex items-baseline">
<span class="font-display text-4xl text-gray-800 dark:text-gray-100">6</span>
<div class="ml-2 text-xs leading-tight text-gray-500 dark:text-gray-400">
                        Tháng 10<br/>2025
                    </div>
</div>
</div>
</div>
<div class="md:col-span-6 flex justify-center space-x-12">
<div class="text-center">
<span class="block text-xs font-bold uppercase tracking-wider mb-1">Phòng</span>
<span class="font-display text-4xl text-gray-800 dark:text-gray-100">1</span>
</div>
<div class="text-center">
<span class="block text-xs font-bold uppercase tracking-wider mb-1">Người lớn</span>
<span class="font-display text-4xl text-gray-800 dark:text-gray-100">2</span>
</div>
<div class="text-center group cursor-pointer relative">
<span class="block text-xs font-bold uppercase tracking-wider mb-1">Trẻ em</span>
<div class="flex items-center justify-center">
<span class="font-display text-4xl text-gray-800 dark:text-gray-100">0</span>
<span class="material-icons-outlined ml-2 text-gray-400 group-hover:text-primary transition-colors">expand_more</span>
</div>
</div>
</div>
<div class="md:col-span-2 text-right">
<button class="bg-brand-brown hover:bg-brand-brown-dark text-white text-xs font-bold uppercase px-6 py-3 rounded shadow transition-colors w-full md:w-auto">
                Tìm kiếm <span class="material-icons-outlined text-xs align-middle ml-1">search</span>
</button>
</div>
</div>
<div class="bg-brand-brown dark:bg-[#5e4b35] text-white px-4 md:px-12 py-3 sticky top-0 z-40 shadow-md">
<div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center">
<div class="text-xs font-bold tracking-widest uppercase mb-2 md:mb-0">
<span class="opacity-70 mr-2">Bạn đã lựa chọn:</span>
<span class="mr-4">2 Phòng</span>
<span>10 Đêm</span>
</div>
<div class="flex items-center space-x-6">
<div class="font-display text-xl font-bold">100.000.000 <span class="text-sm font-sans font-normal align-top">đ</span></div>
<button class="bg-[#dcd0c2] text-brand-brown dark:bg-gray-200 dark:text-gray-800 hover:bg-white text-xs font-bold uppercase px-4 py-2 rounded transition-colors">
                    Đặt ngay
                </button>
</div>
</div>
</div>
<main class="relative px-4 md:px-12 py-12 max-w-7xl mx-auto">

<!-- BOOKING MODAL -->
<div id="bookingModal" class="relative z-30 mb-20 md:mb-32">
  <!-- Backdrop: click ra ngoài để đóng -->
  <div id="modalBackdrop" class="fixed inset-0 z-20 bg-black/20"></div>

  <!-- Modal box -->
  <div class="relative z-30 bg-surface-light dark:bg-surface-dark shadow-2xl max-w-2xl mx-auto rounded-lg overflow-hidden border border-gray-100 dark:border-gray-700 animate-fade-in-up">
    <div class="flex justify-between items-start p-6 border-b border-gray-100 dark:border-gray-700">
      <div>
        <h2 class="text-sm font-bold uppercase tracking-widest text-gray-500 dark:text-gray-400 mb-1">
          Bạn đã lựa chọn:
        </h2>
        <div class="text-gray-800 dark:text-gray-200 font-medium">
          <span class="font-bold">2</span> Phòng  |  <span class="font-bold">10</span> Đêm
        </div>
        <div class="text-xs text-gray-500 mt-1 italic">27/09/2025 - 06/10/2025</div>
      </div>

      <!-- Nút X -->
      <button id="btnCloseModal" type="button" class="text-gray-400 hover:text-red-500 dark:hover:text-red-400 transition-colors">
        <span class="material-icons-outlined">close</span>
      </button>
    </div>

    <div class="p-6 space-y-4">
      <div class="flex flex-col sm:flex-row justify-between items-center border border-primary/20 dark:border-primary/30 rounded p-4 bg-[#fcfbf9] dark:bg-[#302e2b]">
        <div class="w-full sm:w-auto mb-4 sm:mb-0">
          <h3 class="font-display text-lg text-gray-700 dark:text-gray-200">Deluxe room</h3>
          <div class="flex items-center mt-2">
            <button class="w-8 h-8 flex items-center justify-center border border-gray-300 dark:border-gray-600 text-gray-500 dark:text-gray-400 hover:border-primary hover:text-primary transition-colors rounded-l">-</button>
            <input class="w-10 h-8 text-center text-xs border-y border-gray-300 dark:border-gray-600 bg-transparent text-gray-700 dark:text-gray-200 focus:ring-0 focus:border-gray-300" readonly type="text" value="01" />
            <button class="w-8 h-8 flex items-center justify-center border border-gray-300 dark:border-gray-600 text-gray-500 dark:text-gray-400 hover:border-primary hover:text-primary transition-colors rounded-r">+</button>
          </div>
        </div>

        <div class="text-right w-full sm:w-auto flex flex-row sm:flex-col justify-between items-center sm:items-end">
          <span class="font-display text-xl text-gray-600 dark:text-gray-300 font-bold mb-0 sm:mb-2">
            50.000.000 <span class="text-xs font-sans font-normal">đ</span>
          </span>
          <button class="text-primary hover:text-red-600 dark:text-primary dark:hover:text-red-400 transition-colors" title="Xóa phòng">
            <span class="material-icons-outlined">delete_outline</span>
          </button>
        </div>
      </div>

      <div class="flex flex-col sm:flex-row justify-between items-center border border-primary/20 dark:border-primary/30 rounded p-4 bg-[#fcfbf9] dark:bg-[#302e2b]">
        <div class="w-full sm:w-auto mb-4 sm:mb-0">
          <h3 class="font-display text-lg text-gray-700 dark:text-gray-200">Red rose house</h3>
          <div class="flex items-center mt-2">
            <button class="w-8 h-8 flex items-center justify-center border border-gray-300 dark:border-gray-600 text-gray-500 dark:text-gray-400 hover:border-primary hover:text-primary transition-colors rounded-l">-</button>
            <input class="w-10 h-8 text-center text-xs border-y border-gray-300 dark:border-gray-600 bg-transparent text-gray-700 dark:text-gray-200 focus:ring-0 focus:border-gray-300" readonly type="text" value="01" />
            <button class="w-8 h-8 flex items-center justify-center border border-gray-300 dark:border-gray-600 text-gray-500 dark:text-gray-400 hover:border-primary hover:text-primary transition-colors rounded-r">+</button>
          </div>
        </div>

        <div class="text-right w-full sm:w-auto flex flex-row sm:flex-col justify-between items-center sm:items-end">
          <span class="font-display text-xl text-gray-600 dark:text-gray-300 font-bold mb-0 sm:mb-2">
            50.000.000 <span class="text-xs font-sans font-normal">đ</span>
          </span>
          <button class="text-primary hover:text-red-600 dark:text-primary dark:hover:text-red-400 transition-colors" title="Xóa phòng">
            <span class="material-icons-outlined">delete_outline</span>
          </button>
        </div>
      </div>
    </div>

    <div class="bg-gray-50 dark:bg-zinc-900/50 p-6 flex justify-between items-center border-t border-gray-100 dark:border-gray-700">
      <div>
        <span class="text-sm text-gray-500 dark:text-gray-400 mr-2">Tạm tính:</span>
        <span class="font-display text-2xl font-bold text-gray-800 dark:text-white">
          100.000.000 <span class="text-base font-sans font-normal">đ</span>
        </span>
      </div>
      <button class="bg-brand-brown hover:bg-brand-brown-dark text-white text-xs font-bold uppercase px-6 py-3 rounded shadow-lg transition-transform transform hover:-translate-y-0.5">
        Đặt ngay
      </button>
    </div>
  </div>
</div>

</div>
<div id="pageContent" class="space-y-16 transition-all duration-700">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
<div class="relative h-64 lg:h-80 rounded overflow-hidden shadow-md">
<img alt="Deluxe Room Interior" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDOS6yi10lm0H28IruT7QXPqdDZb9qfX_sB1vAHew0Kf1K0btdh8YGbWjdCcQKQ5aGEH7quUqbz_0v6I65nyMl4-TasfL8nMoedti6HyFFPpBZPv8wR9rcLciz_4fG9Mav0dFhJ8R2Mu-3sNu1zmb-Vzwn3pEejDl52S7UWxMSs9Pw7PpSU0h1n1KhAv3Vj3iqBzz6gK0H7DgC4F2jt9Rf58Pv6KWeYgbiOwXpKy2dyFV87185IMwAQxSLIgQamllhDaNv4xfT2"/>
<div class="absolute bottom-4 left-4 text-white flex space-x-4">
<span class="material-icons-outlined">west</span>
</div>
<div class="absolute bottom-4 right-4 text-white flex space-x-4">
<span class="material-icons-outlined">east</span>
</div>
</div>
<div class="flex flex-col justify-center">
<h2 class="font-display text-3xl text-primary mb-4 italic">Deluxe room</h2>
<div class="grid grid-cols-2 gap-x-8 gap-y-2 text-sm text-gray-600 dark:text-gray-400 mb-6 font-light">
<div class="flex items-center"><span class="material-icons-outlined text-xs mr-2">person</span> 02 người lớn</div>
<div class="flex items-center"><span class="material-icons-outlined text-xs mr-2">square_foot</span> 40 m²</div>
<div class="flex items-center"><span class="material-icons-outlined text-xs mr-2">bedroom_parent</span> 01 phòng ngủ</div>
<div class="flex items-center"><span class="material-icons-outlined text-xs mr-2">bed</span> 01 giường</div>
</div>
<div class="flex justify-between items-end border-t border-dashed border-gray-300 dark:border-gray-700 pt-6">
<div>
<button class="border border-gray-400 text-gray-500 text-xs px-4 py-2 uppercase tracking-wide rounded hover:bg-gray-100">Chọn</button>
</div>
<div class="text-right">
<div class="font-display text-2xl text-primary mb-1">5.000.000 <span class="text-sm font-sans">đ</span> <span class="text-xs text-gray-400 font-sans italic">(1 đêm)</span></div>
<div class="text-xs text-gray-500 mb-2">Còn 02 phòng</div>
<button class="bg-brand-brown text-white text-xs px-6 py-2 uppercase tracking-wide rounded">Đặt ngay</button>
</div>
</div>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
<div class="relative h-64 lg:h-80 rounded overflow-hidden shadow-md">
<img alt="Family Room Interior" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCQVloOEUJ02qQHvgpnZ4dyMHft7LaPk8FI4rroxJwdq7Di_d0n2tOHzxhffRKojvFo9eLnB5_C9CqMvZLxdWDhFtIzq_q8CvsvnWc9WwF66bgpwBS1j0COj_CUCMp19vnWxd0anVxRHNS6_YXdwWfM03y8BiMnNx5ko9LBjA6WDanuFwBkqXEM9fdOYmcbWTxNv7mWYdXCetyHY6yoxfGUNAakjbjWbdfk0K-X6nD7dBS-x053sqw3Q5rNn3aAih-cw74E2SZv"/>
</div>
<div class="flex flex-col justify-center">
<h2 class="font-display text-3xl text-primary mb-4 italic">Family room</h2>
<div class="grid grid-cols-2 gap-x-8 gap-y-2 text-sm text-gray-600 dark:text-gray-400 mb-6 font-light">
<div class="flex items-center"><span class="material-icons-outlined text-xs mr-2">groups</span> 04 người lớn</div>
<div class="flex items-center"><span class="material-icons-outlined text-xs mr-2">square_foot</span> 65 m²</div>
<div class="flex items-center"><span class="material-icons-outlined text-xs mr-2">bedroom_parent</span> 02 phòng ngủ</div>
<div class="flex items-center"><span class="material-icons-outlined text-xs mr-2">bed</span> 02 giường</div>
</div>
<div class="flex justify-between items-end border-t border-dashed border-gray-300 dark:border-gray-700 pt-6">
<div>
<button class="border border-gray-400 text-gray-500 text-xs px-4 py-2 uppercase tracking-wide rounded hover:bg-gray-100">Chọn</button>
</div>
<div class="text-right">
<div class="font-display text-2xl text-primary mb-1">8.000.000 <span class="text-sm font-sans">đ</span> <span class="text-xs text-gray-400 font-sans italic">(1 đêm)</span></div>
<div class="text-xs text-gray-500 mb-2">Còn 01 phòng</div>
<button class="bg-brand-brown text-white text-xs px-6 py-2 uppercase tracking-wide rounded">Đặt ngay</button>
</div>
</div>
</div>
</div>
</div>
<div class="mt-32 pt-16 border-t border-divider-light dark:border-divider-dark">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24">
<div class="flex flex-col items-center">
<h2 class="font-display text-4xl lg:text-5xl text-primary mb-12 text-center leading-tight">
                        Tiện nghi đã bao<br/><span class="italic">gồm</span>
</h2>
<div class="w-full space-y-0">
<div class="text-center py-6 border-b border-divider-light dark:border-divider-dark w-3/4 mx-auto group hover:bg-primary/5 dark:hover:bg-primary/10 transition-colors rounded-lg cursor-default">
<h3 class="font-display text-xl text-primary-dark dark:text-primary mb-2">Wi-Fi 24/7</h3>
<p class="text-sm font-light text-gray-600 dark:text-gray-400">Luôn duy trì sự kết nối mượt mà trong suốt kỳ nghỉ.</p>
</div>
<div class="text-center py-6 border-b border-divider-light dark:border-divider-dark w-3/4 mx-auto group hover:bg-primary/5 dark:hover:bg-primary/10 transition-colors rounded-lg cursor-default">
<h3 class="font-display text-xl text-primary-dark dark:text-primary mb-2">Trà và cà phê miễn phí</h3>
<p class="text-sm font-light text-gray-600 dark:text-gray-400">Được chuẩn bị sẵn để có thể thưởng thức bất cứ lúc nào.</p>
</div>
<div class="text-center py-6 border-b border-divider-light dark:border-divider-dark w-3/4 mx-auto group hover:bg-primary/5 dark:hover:bg-primary/10 transition-colors rounded-lg cursor-default">
<h3 class="font-display text-xl text-primary-dark dark:text-primary mb-2">Nệm pillow-top cao cấp</h3>
<p class="text-sm font-light text-gray-600 dark:text-gray-400">Mang lại giấc ngủ êm ái và trọn vẹn.</p>
</div>
<div class="text-center py-6 border-b border-divider-light dark:border-divider-dark w-3/4 mx-auto group hover:bg-primary/5 dark:hover:bg-primary/10 transition-colors rounded-lg cursor-default">
<h3 class="font-display text-xl text-primary-dark dark:text-primary mb-2">Vòi sen mưa &amp; sen cầm tay</h3>
<p class="text-sm font-light text-gray-600 dark:text-gray-400">Mang lại giấc ngủ êm ái và trọn vẹn.</p>
</div>
<div class="text-center py-6 border-b border-divider-light dark:border-divider-dark w-3/4 mx-auto group hover:bg-primary/5 dark:hover:bg-primary/10 transition-colors rounded-lg cursor-default">
<h3 class="font-display text-xl text-primary-dark dark:text-primary mb-2">Điều hòa không khí</h3>
<p class="text-sm font-light text-gray-600 dark:text-gray-400">Duy trì không gian thoáng mát, dễ chịu.</p>
</div>
<div class="text-center py-6 w-3/4 mx-auto group hover:bg-primary/5 dark:hover:bg-primary/10 transition-colors rounded-lg cursor-default">
<h3 class="font-display text-xl text-primary-dark dark:text-primary mb-2">Smart TV &amp; điều hòa</h3>
<p class="text-sm font-light text-gray-600 dark:text-gray-400">Mang đến trải nghiệm giải trí đa dạng ngay tại phòng.</p>
</div>
</div>
</div>
<div>
<h2 class="font-display text-4xl lg:text-5xl text-primary mb-12 text-center lg:text-left">
                        Chính sách <span class="italic">villa</span>
</h2>
<div class="space-y-10 pl-0 lg:pl-8">
<div>
<h3 class="font-display text-2xl text-primary-dark dark:text-primary mb-4 border-b border-dashed border-primary/30 pb-2 inline-block">Thanh toán &amp; huỷ đặt phòng</h3>
<ul class="list-disc list-outside ml-4 space-y-2 text-sm text-gray-600 dark:text-gray-400 font-light leading-relaxed">
<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
<li>Suspendisse iaculis urna nec odio tincidunt, sed aliquet libero imperdiet.</li>
<li>Fusce quis massa ac velit cursus dictum.</li>
<li>Ut placerat ipsum eu efficitur aliquam.</li>
</ul>
</div>
<div>
<h3 class="font-display text-2xl text-primary-dark dark:text-primary mb-4 border-b border-dashed border-primary/30 pb-2 inline-block">Thời gian nhận và trả phòng</h3>
<ul class="list-disc list-outside ml-4 space-y-2 text-sm text-gray-600 dark:text-gray-400 font-light leading-relaxed">
<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
<li>Suspendisse iaculis urna nec odio tincidunt, sed aliquet libero imperdiet.</li>
<li>Fusce quis massa ac velit cursus dictum.</li>
<li>Ut placerat ipsum eu efficitur aliquam.</li>
</ul>
</div>
<div>
<h3 class="font-display text-2xl text-primary-dark dark:text-primary mb-4 border-b border-dashed border-primary/30 pb-2 inline-block">Chính sách trẻ em</h3>
<ul class="list-disc list-outside ml-4 space-y-2 text-sm text-gray-600 dark:text-gray-400 font-light leading-relaxed">
<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
<li>Suspendisse iaculis urna nec odio tincidunt, sed aliquet libero imperdiet.</li>
<li>Fusce quis massa ac velit cursus dictum.</li>
<li>Ut placerat ipsum eu efficitur aliquam.</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</main>

<!-- ✅ phần còn lại bạn giữ nguyên y chang -->
<!-- (mình không sửa nội dung body vì bạn chỉ yêu cầu tách CSS) -->
<!-- Bạn copy nguyên phần còn lại từ code bạn gửi vào đây -->
<script>

  const modal = document.getElementById("bookingModal");
  const btnClose = document.getElementById("btnCloseModal");
  const backdrop = document.getElementById("modalBackdrop");
  const pageContent = document.getElementById("pageContent");

  function closeModal() {
    modal.classList.add("hidden");
    if (pageContent) {
      pageContent.classList.remove(
        "opacity-40",
        "dark:opacity-30",
        "blur-[1px]",
        "select-none",
        "pointer-events-none",
        "grayscale-[50%]"
      );
    }
  }

  function openModal() {
    modal.classList.remove("hidden");
    if (pageContent) {
      pageContent.classList.add(
        "opacity-40",
        "dark:opacity-30",
        "blur-[1px]",
        "select-none",
        "pointer-events-none",
        "grayscale-[50%]"
      );
    }
  }

  btnClose?.addEventListener("click", closeModal);
  backdrop?.addEventListener("click", closeModal);

  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && !modal.classList.contains("hidden")) closeModal();
  });

  // Nếu modal đang mở sẵn ngay khi load trang (như hiện tại)
  // thì bật blur luôn:
  if (pageContent && !modal.classList.contains("hidden")) {
    pageContent.classList.add(
      "opacity-40",
      "dark:opacity-30",
      "blur-[1px]",
      "select-none",
      "pointer-events-none",
      "grayscale-[50%]"
    );
  }

  // Nếu muốn mở modal từ nút "Đặt ngay" bên ngoài:
  // gắn onclick="openModal()" vào nút đó.
  window.openBookingModal = openModal; // optional
</script>


</body>
</html>
