<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hotel Booking - The Wandering Rose</title>

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>

  <!-- Tailwind config -->
  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            primary: "#AD8B68",
            "primary-dark": "#8C6F50",
            "primary-light": "#F3E8DC",
            "background-light": "#FFFAF5",
            "background-dark": "#121212",
            "surface-light": "#FFFFFF",
            "surface-dark": "#1E1E1E",
            "text-main-light": "#333333",
            "text-main-dark": "#E5E5E5",
            "text-muted-light": "#9CA3AF",
            "text-muted-dark": "#6B7280",
          },
          fontFamily: {
            display: ["Playfair Display", "serif"],
            body: ["Inter", "sans-serif"],
          },
          borderRadius: {
            DEFAULT: "4px",
          },
        },
      },
    };
  </script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

  <!-- Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="styles.css">
</head>

<body class="bg-background-light dark:bg-background-dark text-text-main-light dark:text-text-main-dark transition-colors duration-300 min-h-screen">

<header class="pt-8 px-6 md:px-12 lg:px-24">
  <div class="flex justify-between items-start">
    <a class="flex items-center text-xs tracking-widest text-gray-500 dark:text-gray-400 hover:text-primary transition-colors uppercase mt-2" href="#">
      <span class="material-icons text-sm mr-1">arrow_back</span>
      TRỞ VỀ
    </a>

    <div class="flex flex-col items-center">
      <span class="material-icons text-primary text-2xl mb-2">spa</span>
      <h1 class="font-display text-3xl md:text-4xl lg:text-5xl text-primary text-center tracking-wide">
        THE WANDERING ROSE
      </h1>
      <div class="font-display italic text-2xl text-primary/80 mt-1 relative">
        <span class="absolute top-1/2 left-[-40px] w-8 h-[1px] bg-primary/40"></span>
        BaVi
        <span class="absolute top-1/2 right-[-40px] w-8 h-[1px] bg-primary/40"></span>
      </div>
      <p class="text-[10px] tracking-[0.2em] text-gray-400 mt-1">EST 2023</p>
    </div>

    <div class="relative group mt-2">
      <button class="flex items-center space-x-2 border border-gray-200 dark:border-gray-700 rounded px-3 py-1.5 bg-surface-light dark:bg-surface-dark text-xs font-medium shadow-sm hover:border-primary transition-colors">
        <span>VNĐ</span>
        <img
          src="https://lh3.googleusercontent.com/aida-public/AB6AXuCYjJKzISePWXVll0gv5cK0Dv7fHkMVx-75P-_gMg2b4fBJqKVUinRaz15j1Lh7PB4VF4qPXJnzxPC7pZba9tshfRebp1wYjUOBj2lXmIq5coAwwqDUFN7h28HSFrao292YYRDxvzjhGXcNOk0yfV9GTCL7oPRYl_CByLUcbeWI3s25qzJndInsDyCTOz77RGHxyOwRTu1WZpVB56UxineC0NdW5Va8Ccsz9nnBPGLGpH65vSRL5nkfASLtCmJ3o7oxlTrbyxhCNFQ"
          class="w-4 h-3 object-cover shadow-sm"
          alt="Vietnam Flag"
        />
        <span class="material-icons text-sm text-gray-400">expand_more</span>
      </button>
    </div>
  </div>
</header>
<section class="mt-16 px-4 md:px-12 lg:px-24 mb-16">
<div class="max-w-6xl mx-auto">
<div class="flex flex-col lg:flex-row items-center justify-between gap-8 lg:gap-16">
<div class="flex items-center gap-6 w-full lg:w-auto justify-center lg:justify-start">
<div class="text-right">
<div class="flex items-center justify-end gap-2 mb-1">
<span class="font-bold uppercase tracking-wider text-sm">NGÀY</span>
<span class="bg-primary text-white text-[10px] px-2 py-0.5 rounded-full font-medium">10 Đêm</span>
</div>
<div class="flex items-baseline gap-2">
<span class="font-display text-4xl lg:text-5xl text-gray-800 dark:text-white">27</span>
<div class="flex flex-col text-xs text-gray-500 dark:text-gray-400 text-left leading-tight">
<span>Tháng 9</span>
<span>2025</span>
</div>
</div>
</div>
<div class="flex items-baseline gap-2">
<span class="font-display text-4xl lg:text-5xl text-gray-800 dark:text-white">6</span>
<div class="flex flex-col text-xs text-gray-500 dark:text-gray-400 text-left leading-tight">
<span>Tháng 10</span>
<span>2025</span>
</div>
</div>
</div>
<div class="flex items-center gap-12 w-full lg:w-auto justify-center">
<div class="text-center">
<span class="block font-bold uppercase tracking-wider text-sm mb-2">PHÒNG</span>
<span class="font-display text-4xl text-gray-800 dark:text-white">1</span>
</div>
<div class="text-center">
<span class="block font-bold uppercase tracking-wider text-sm mb-2">NGƯỜI LỚN</span>
<span class="font-display text-4xl text-gray-800 dark:text-white">2</span>
</div>
<div class="text-center">
<div class="flex items-center gap-2 mb-2 justify-center">
<span class="block font-bold uppercase tracking-wider text-sm">TRẺ EM</span>
<button class="text-gray-400 hover:text-primary">
<span class="material-icons">expand_more</span>
</button>
</div>
<span class="font-display text-4xl text-gray-800 dark:text-white">0</span>
</div>
</div>
<div class="w-full lg:w-auto flex justify-center lg:justify-end">
<button class="bg-primary hover:bg-primary-dark text-white px-8 py-3 rounded shadow-lg hover:shadow-xl transition-all flex items-center gap-2 text-sm font-medium tracking-wide uppercase">
                        TÌM KIẾM
                        <span class="material-icons text-sm">search</span>
</button>
</div>
</div>
</div>
</section>
<section class="px-4 md:px-12 lg:px-24 pb-24 relative">
<div class="max-w-7xl mx-auto relative">
<button class="absolute left-[-20px] lg:left-[-60px] top-[250px] lg:top-[50%] transform -translate-y-1/2 bg-primary text-white w-10 h-10 rounded-full flex items-center justify-center shadow-md hover:bg-primary-dark transition-colors z-10">
<span class="material-icons">arrow_back</span>
</button>
<button class="absolute right-[-20px] lg:right-[-60px] top-[750px] lg:top-[50%] transform -translate-y-1/2 bg-primary text-white w-10 h-10 rounded-full flex items-center justify-center shadow-md hover:bg-primary-dark transition-colors z-10">
<span class="material-icons">arrow_forward</span>
</button>
<div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">
<div>
<h3 class="font-display text-3xl font-bold text-primary text-center mb-8">Tháng 9 2025</h3>
<div class="grid grid-cols-7 mb-4">
<div class="text-center font-bold text-sm">T2</div>
<div class="text-center font-bold text-sm">T3</div>
<div class="text-center font-bold text-sm">T4</div>
<div class="text-center font-bold text-sm">T5</div>
<div class="text-center font-bold text-sm">T6</div>
<div class="text-center font-bold text-sm">T7</div>
<div class="text-center font-bold text-sm">CN</div>
</div>
<div class="grid grid-cols-7 gap-2">
<div class="aspect-square flex flex-col justify-center items-center border border-gray-100 dark:border-gray-800 rounded bg-white dark:bg-surface-dark opacity-40">
<span class="text-xl font-light text-gray-300 dark:text-gray-600">1</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-100 dark:border-gray-800 rounded bg-white dark:bg-surface-dark opacity-40">
<span class="text-xl font-light text-gray-300 dark:text-gray-600">2</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-100 dark:border-gray-800 rounded bg-white dark:bg-surface-dark opacity-40">
<span class="text-xl font-light text-gray-300 dark:text-gray-600">3</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-100 dark:border-gray-800 rounded bg-white dark:bg-surface-dark opacity-40">
<span class="text-xl font-light text-gray-300 dark:text-gray-600">4</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-100 dark:border-gray-800 rounded bg-white dark:bg-surface-dark opacity-40">
<span class="text-xl font-light text-gray-300 dark:text-gray-600">5</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-100 dark:border-gray-800 rounded bg-white dark:bg-surface-dark opacity-40">
<span class="text-xl font-light text-gray-300 dark:text-gray-600">6</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-100 dark:border-gray-800 rounded bg-white dark:bg-surface-dark opacity-40">
<span class="text-xl font-light text-gray-300 dark:text-gray-600">7</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-100 dark:border-gray-800 rounded bg-white dark:bg-surface-dark opacity-40"><span class="text-xl font-light text-gray-300 dark:text-gray-600">8</span></div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-100 dark:border-gray-800 rounded bg-white dark:bg-surface-dark opacity-40"><span class="text-xl font-light text-gray-300 dark:text-gray-600">9</span></div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-100 dark:border-gray-800 rounded bg-white dark:bg-surface-dark opacity-40"><span class="text-xl font-light text-gray-300 dark:text-gray-600">10</span></div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-100 dark:border-gray-800 rounded bg-white dark:bg-surface-dark opacity-40"><span class="text-xl font-light text-gray-300 dark:text-gray-600">11</span></div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-100 dark:border-gray-800 rounded bg-white dark:bg-surface-dark opacity-40"><span class="text-xl font-light text-gray-300 dark:text-gray-600">12</span></div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-100 dark:border-gray-800 rounded bg-white dark:bg-surface-dark opacity-40"><span class="text-xl font-light text-gray-300 dark:text-gray-600">13</span></div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-100 dark:border-gray-800 rounded bg-white dark:bg-surface-dark opacity-40"><span class="text-xl font-light text-gray-300 dark:text-gray-600">14</span></div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-100 dark:border-gray-800 rounded bg-white dark:bg-surface-dark opacity-40"><span class="text-xl font-light text-gray-300 dark:text-gray-600">15</span></div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-100 dark:border-gray-800 rounded bg-white dark:bg-surface-dark opacity-40"><span class="text-xl font-light text-gray-300 dark:text-gray-600">16</span></div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-100 dark:border-gray-800 rounded bg-white dark:bg-surface-dark opacity-40"><span class="text-xl font-light text-gray-300 dark:text-gray-600">17</span></div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-100 dark:border-gray-800 rounded bg-white dark:bg-surface-dark opacity-40"><span class="text-xl font-light text-gray-300 dark:text-gray-600">18</span></div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-100 dark:border-gray-800 rounded bg-white dark:bg-surface-dark opacity-40"><span class="text-xl font-light text-gray-300 dark:text-gray-600">19</span></div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-100 dark:border-gray-800 rounded bg-white dark:bg-surface-dark opacity-40"><span class="text-xl font-light text-gray-300 dark:text-gray-600">20</span></div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-100 dark:border-gray-800 rounded bg-white dark:bg-surface-dark opacity-40"><span class="text-xl font-light text-gray-300 dark:text-gray-600">21</span></div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-100 dark:border-gray-800 rounded bg-white dark:bg-surface-dark opacity-40"><span class="text-xl font-light text-gray-300 dark:text-gray-600">22</span></div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-100 dark:border-gray-800 rounded bg-white dark:bg-surface-dark opacity-40"><span class="text-xl font-light text-gray-300 dark:text-gray-600">23</span></div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-100 dark:border-gray-800 rounded bg-white dark:bg-surface-dark opacity-40"><span class="text-xl font-light text-gray-300 dark:text-gray-600">24</span></div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-100 dark:border-gray-800 rounded bg-white dark:bg-surface-dark opacity-40"><span class="text-xl font-light text-gray-300 dark:text-gray-600">25</span></div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-100 dark:border-gray-800 rounded bg-white dark:bg-surface-dark opacity-40"><span class="text-xl font-light text-gray-300 dark:text-gray-600">26</span></div>
<div class="aspect-square flex flex-col justify-center items-center border border-primary/40 dark:border-primary/60 rounded bg-primary-light dark:bg-primary/20 cursor-pointer relative">
<span class="text-2xl font-light text-gray-900 dark:text-white">27</span>
<span class="text-[9px] text-primary-dark dark:text-primary-light mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-primary/40 dark:border-primary/60 rounded bg-primary-light dark:bg-primary/20 cursor-pointer relative">
<span class="text-2xl font-light text-gray-900 dark:text-white">28</span>
<span class="text-[9px] text-primary-dark dark:text-primary-light mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-primary/40 dark:border-primary/60 rounded bg-primary-light dark:bg-primary/20 cursor-pointer relative">
<span class="text-2xl font-light text-gray-900 dark:text-white">29</span>
<span class="text-[9px] text-primary-dark dark:text-primary-light mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-primary/40 dark:border-primary/60 rounded bg-primary-light dark:bg-primary/20 cursor-pointer relative">
<span class="text-2xl font-light text-gray-900 dark:text-white">30</span>
<span class="text-[9px] text-primary-dark dark:text-primary-light mt-1">5.000.000 ₫</span>
</div>
</div>
</div>
<div>
<h3 class="font-display text-3xl font-bold text-primary text-center mb-8">Tháng 10 2025</h3>
<div class="grid grid-cols-7 mb-4">
<div class="text-center font-bold text-sm">T2</div>
<div class="text-center font-bold text-sm">T3</div>
<div class="text-center font-bold text-sm">T4</div>
<div class="text-center font-bold text-sm">T5</div>
<div class="text-center font-bold text-sm">T6</div>
<div class="text-center font-bold text-sm">T7</div>
<div class="text-center font-bold text-sm">CN</div>
</div>
<div class="grid grid-cols-7 gap-2">
<div class="aspect-square"></div>
<div class="aspect-square"></div>
<div class="aspect-square flex flex-col justify-center items-center border border-primary/40 dark:border-primary/60 rounded bg-primary-light dark:bg-primary/20 cursor-pointer relative">
<span class="text-2xl font-light text-gray-900 dark:text-white">1</span>
<span class="text-[9px] text-primary-dark dark:text-primary-light mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-primary/40 dark:border-primary/60 rounded bg-primary-light dark:bg-primary/20 cursor-pointer relative">
<span class="text-2xl font-light text-gray-900 dark:text-white">2</span>
<span class="text-[9px] text-primary-dark dark:text-primary-light mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-primary/40 dark:border-primary/60 rounded bg-primary-light dark:bg-primary/20 cursor-pointer relative">
<span class="text-2xl font-light text-gray-900 dark:text-white">3</span>
<span class="text-[9px] text-primary-dark dark:text-primary-light mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-primary/40 dark:border-primary/60 rounded bg-primary-light dark:bg-primary/20 cursor-pointer relative">
<span class="text-2xl font-light text-gray-900 dark:text-white">4</span>
<span class="text-[9px] text-primary-dark dark:text-primary-light mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-primary/40 dark:border-primary/60 rounded bg-primary-light dark:bg-primary/20 cursor-pointer relative">
<span class="text-2xl font-light text-gray-900 dark:text-white">5</span>
<span class="text-[9px] text-primary-dark dark:text-primary-light mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-primary/40 dark:border-primary/60 rounded bg-primary-light dark:bg-primary/20 cursor-pointer relative">
<span class="text-2xl font-light text-gray-900 dark:text-white">6</span>
<span class="text-[9px] text-primary-dark dark:text-primary-light mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-200 dark:border-gray-700 rounded bg-white dark:bg-surface-dark hover:border-primary dark:hover:border-primary cursor-pointer transition-colors">
<span class="text-2xl font-light text-gray-900 dark:text-white">7</span>
<span class="text-[9px] text-gray-400 mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-200 dark:border-gray-700 rounded bg-white dark:bg-surface-dark hover:border-primary dark:hover:border-primary cursor-pointer transition-colors">
<span class="text-2xl font-light text-gray-900 dark:text-white">8</span>
<span class="text-[9px] text-gray-400 mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-200 dark:border-gray-700 rounded bg-white dark:bg-surface-dark hover:border-primary dark:hover:border-primary cursor-pointer transition-colors">
<span class="text-2xl font-light text-gray-900 dark:text-white">9</span>
<span class="text-[9px] text-gray-400 mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-200 dark:border-gray-700 rounded bg-white dark:bg-surface-dark hover:border-primary dark:hover:border-primary cursor-pointer transition-colors">
<span class="text-2xl font-light text-gray-900 dark:text-white">10</span>
<span class="text-[9px] text-gray-400 mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-200 dark:border-gray-700 rounded bg-white dark:bg-surface-dark hover:border-primary dark:hover:border-primary cursor-pointer transition-colors">
<span class="text-2xl font-light text-gray-900 dark:text-white">11</span>
<span class="text-[9px] text-gray-400 mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-200 dark:border-gray-700 rounded bg-white dark:bg-surface-dark hover:border-primary dark:hover:border-primary cursor-pointer transition-colors">
<span class="text-2xl font-light text-gray-900 dark:text-white">12</span>
<span class="text-[9px] text-gray-400 mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-200 dark:border-gray-700 rounded bg-white dark:bg-surface-dark hover:border-primary dark:hover:border-primary cursor-pointer transition-colors">
<span class="text-2xl font-light text-gray-900 dark:text-white">13</span>
<span class="text-[9px] text-gray-400 mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-200 dark:border-gray-700 rounded bg-white dark:bg-surface-dark hover:border-primary dark:hover:border-primary cursor-pointer transition-colors">
<span class="text-2xl font-light text-gray-900 dark:text-white">14</span>
<span class="text-[9px] text-gray-400 mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-200 dark:border-gray-700 rounded bg-white dark:bg-surface-dark hover:border-primary dark:hover:border-primary cursor-pointer transition-colors">
<span class="text-2xl font-light text-gray-900 dark:text-white">15</span>
<span class="text-[9px] text-gray-400 mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-200 dark:border-gray-700 rounded bg-white dark:bg-surface-dark hover:border-primary dark:hover:border-primary cursor-pointer transition-colors">
<span class="text-2xl font-light text-gray-900 dark:text-white">16</span>
<span class="text-[9px] text-gray-400 mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-200 dark:border-gray-700 rounded bg-white dark:bg-surface-dark hover:border-primary dark:hover:border-primary cursor-pointer transition-colors">
<span class="text-2xl font-light text-gray-900 dark:text-white">17</span>
<span class="text-[9px] text-gray-400 mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-200 dark:border-gray-700 rounded bg-white dark:bg-surface-dark hover:border-primary dark:hover:border-primary cursor-pointer transition-colors">
<span class="text-2xl font-light text-gray-900 dark:text-white">18</span>
<span class="text-[9px] text-gray-400 mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-200 dark:border-gray-700 rounded bg-white dark:bg-surface-dark hover:border-primary dark:hover:border-primary cursor-pointer transition-colors">
<span class="text-2xl font-light text-gray-900 dark:text-white">19</span>
<span class="text-[9px] text-gray-400 mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-200 dark:border-gray-700 rounded bg-white dark:bg-surface-dark hover:border-primary dark:hover:border-primary cursor-pointer transition-colors">
<span class="text-2xl font-light text-gray-900 dark:text-white">20</span>
<span class="text-[9px] text-gray-400 mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-200 dark:border-gray-700 rounded bg-white dark:bg-surface-dark hover:border-primary dark:hover:border-primary cursor-pointer transition-colors">
<span class="text-2xl font-light text-gray-900 dark:text-white">21</span>
<span class="text-[9px] text-gray-400 mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-200 dark:border-gray-700 rounded bg-white dark:bg-surface-dark hover:border-primary dark:hover:border-primary cursor-pointer transition-colors">
<span class="text-2xl font-light text-gray-900 dark:text-white">22</span>
<span class="text-[9px] text-gray-400 mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-200 dark:border-gray-700 rounded bg-white dark:bg-surface-dark hover:border-primary dark:hover:border-primary cursor-pointer transition-colors">
<span class="text-2xl font-light text-gray-900 dark:text-white">23</span>
<span class="text-[9px] text-gray-400 mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-200 dark:border-gray-700 rounded bg-white dark:bg-surface-dark hover:border-primary dark:hover:border-primary cursor-pointer transition-colors">
<span class="text-2xl font-light text-gray-900 dark:text-white">24</span>
<span class="text-[9px] text-gray-400 mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-200 dark:border-gray-700 rounded bg-white dark:bg-surface-dark hover:border-primary dark:hover:border-primary cursor-pointer transition-colors">
<span class="text-2xl font-light text-gray-900 dark:text-white">25</span>
<span class="text-[9px] text-gray-400 mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-200 dark:border-gray-700 rounded bg-white dark:bg-surface-dark hover:border-primary dark:hover:border-primary cursor-pointer transition-colors">
<span class="text-2xl font-light text-gray-900 dark:text-white">26</span>
<span class="text-[9px] text-gray-400 mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-200 dark:border-gray-700 rounded bg-white dark:bg-surface-dark hover:border-primary dark:hover:border-primary cursor-pointer transition-colors">
<span class="text-2xl font-light text-gray-900 dark:text-white">27</span>
<span class="text-[9px] text-gray-400 mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-200 dark:border-gray-700 rounded bg-white dark:bg-surface-dark hover:border-primary dark:hover:border-primary cursor-pointer transition-colors">
<span class="text-2xl font-light text-gray-900 dark:text-white">28</span>
<span class="text-[9px] text-gray-400 mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-200 dark:border-gray-700 rounded bg-white dark:bg-surface-dark hover:border-primary dark:hover:border-primary cursor-pointer transition-colors">
<span class="text-2xl font-light text-gray-900 dark:text-white">29</span>
<span class="text-[9px] text-gray-400 mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-200 dark:border-gray-700 rounded bg-white dark:bg-surface-dark hover:border-primary dark:hover:border-primary cursor-pointer transition-colors">
<span class="text-2xl font-light text-gray-900 dark:text-white">30</span>
<span class="text-[9px] text-gray-400 mt-1">5.000.000 ₫</span>
</div>
<div class="aspect-square flex flex-col justify-center items-center border border-gray-200 dark:border-gray-700 rounded bg-white dark:bg-surface-dark hover:border-primary dark:hover:border-primary cursor-pointer transition-colors">
<span class="text-2xl font-light text-gray-900 dark:text-white">31</span>
<span class="text-[9px] text-gray-400 mt-1">5.000.000 ₫</span>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- ⚠️ PHẦN BODY PHÍA DƯỚI GIỮ NGUYÊN HTML CỦA MÀY -->
<!-- Do quá dài nên không thay đổi logic, chỉ tách CSS -->

</body>
</html>
