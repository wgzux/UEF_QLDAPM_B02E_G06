@extends('layouts.app')

@section('title', 'Liên hệ - The Wandering Rose')

@push('styles')
<style>
  .hero-overlay { background: linear-gradient(0deg, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0) 50%); }
  .serif { font-family: 'Cormorant Garamond', serif; }
  body.page-contact { font-family: 'Montserrat', sans-serif; }
  .scrollbar-hide { -ms-overflow-style:none; scrollbar-width:none; }
  .scrollbar-hide::-webkit-scrollbar { display:none; }
</style>
@endpush

@section('content')
<div class="pt-16 page-contact"></div>

<section class="relative h-[80vh] w-full overflow-hidden">
  <img alt="Luxury Japanese-style garden with pond" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAqy0XgixldyhwKkfjGXbzY07iorwoJRHkOjZVWjbeBPM07NWXupwnC_E0ux4HnxssKWcpJ_nDtBwLZEdF0fzGzlOjhuK7oTph5mjwLi_WINX_JgmszXTKWVjcY1CCbaLwK7jpKRBYJhqGbh6qZaB6YRCpctcq42n9rkkksj-kMzEiMGn-IAJ3uEbLwWrUVyyBwJjvO1S3iqaxEp-8GnoHJ2RCqBF9a5iL6LkM_Idi_MfLKasg41c3oF39YV5nw6YLtzwzhkR0HKJMK"/>
  <div class="absolute inset-0 hero-overlay flex items-end justify-center pb-24">
    <h1 class="text-white text-6xl md:text-8xl font-light tracking-wide serif">Liên hệ</h1>
  </div>
</section>

<section class="max-w-7xl mx-auto py-24 px-6 md:px-12 grid grid-cols-1 lg:grid-cols-2 gap-20">
  <div class="space-y-12">
    <div class="space-y-6">
      <div class="flex items-start gap-4">
        <span class="material-icons text-primary mt-1">location_on</span>
        <p class="text-sm tracking-widest uppercase">Thôn Mít Mái, Ba Vì, Hà Nội</p>
      </div>
      <div class="flex items-start gap-4">
        <span class="material-icons text-primary mt-1">call</span>
        <p class="text-sm tracking-widest">092 981 6699</p>
      </div>
      <div class="flex items-start gap-4">
        <span class="material-icons text-primary mt-1">mail_outline</span>
        <p class="text-sm tracking-widest">booking@thewanderingrosebavi.com</p>
      </div>
    </div>

    <div class="w-full aspect-video bg-gray-200 dark:bg-gray-800 relative overflow-hidden">
      <img alt="Minimalist grayscale map" class="w-full h-full object-cover grayscale opacity-50" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBg3Bogz4KuJRphpyO-qwiJaAvGCNv_YU_B9GiCoNDWxfT2otpRz7YF-LoQQh5uiK61r07tD5Qa6eBeCXZpL-X48xTGXaFpxmewEEsyAL-hejheccjvVn1JPcv6REkkcDLVHVR4Dt05vQqDZiuvj6YG2ET9CMt5YRtbMeb2RSEsDbW7YcP7GaiwNdDJL8_KtrLiQhMq00sj_RnJIwBG5zxJ5wFOV_lrtqCK5ioer3EFC3kJFpyML2ohhfxo4CgIFDRFE6xXLgr4PUzs"/>
      <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
        <span class="material-icons text-primary text-4xl">place</span>
      </div>
    </div>

    <div class="flex gap-6">
      <a class="text-accent-brown hover:text-primary transition-colors" href="/fragnews">Facebook</a>
      <a class="text-accent-brown hover:text-primary transition-colors" href="{{ route('contact') }}">Twitter</a>
      <a class="text-accent-brown hover:text-primary transition-colors" href="/">YouTube</a>
      <a class="text-accent-brown hover:text-primary transition-colors" href="/fragnews">Instagram</a>
    </div>
  </div>

  <div class="bg-white/50 dark:bg-white/5 p-4">
    <h2 class="text-5xl mb-12 serif text-accent-brown leading-tight">Form liên hệ<br/>nhanh</h2>
    <form action="#" class="space-y-6">
      <div class="space-y-2">
        <label class="text-xs uppercase tracking-widest text-gray-500">Họ và tên *</label>
        <input class="w-full border-gray-300 dark:border-gray-700 bg-transparent py-3 focus:ring-0 focus:border-primary transition-all" placeholder="Nhập họ và tên" type="text"/>
      </div>
      <div class="space-y-2">
        <label class="text-xs uppercase tracking-widest text-gray-500">Email *</label>
        <input class="w-full border-gray-300 dark:border-gray-700 bg-transparent py-3 focus:ring-0 focus:border-primary transition-all" placeholder="Nhập địa chỉ email" type="email"/>
      </div>
      <div class="space-y-2">
        <label class="text-xs uppercase tracking-widest text-gray-500">Số điện thoại *</label>
        <div class="flex border border-gray-300 dark:border-gray-700">
          <div class="flex items-center px-3 border-r border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-800">
            <span class="text-sm">🇻🇳</span>
            <span class="material-icons text-xs ml-1">keyboard_arrow_down</span>
          </div>
          <input class="w-full border-none bg-transparent py-3 focus:ring-0" placeholder="Nhập số điện thoại" type="tel"/>
        </div>
      </div>
      <div class="space-y-2">
        <label class="text-xs uppercase tracking-widest text-gray-500">Tin nhắn *</label>
        <textarea class="w-full border-gray-300 dark:border-gray-700 bg-transparent py-3 focus:ring-0 focus:border-primary transition-all" placeholder="Nhập tin nhắn" rows="4"></textarea>
      </div>
      <button class="bg-primary text-white px-8 py-4 uppercase text-xs tracking-[0.2em] font-medium hover:bg-accent-brown transition-colors" type="submit">Gửi tin nhắn đặt lịch</button>
    </form>
  </div>
</section>

<section class="bg-[#AC8059] py-24 px-6 md:px-12 text-white overflow-hidden">
  <div class="max-w-7xl mx-auto">
    <h2 class="text-6xl text-center mb-16 serif font-light tracking-wide">Tin tức và sự kiện</h2>
    <div class="relative">
      <div class="flex gap-8 overflow-x-auto pb-12 scrollbar-hide snap-x">
        <div class="flex-none w-full md:w-1/3 snap-start">
          <div class="relative aspect-[3/4] mb-6 overflow-hidden">
            <img alt="News" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAYLNra6OSup4JZExlZEffeAYH5F00nMLiG20EoLYQ-C8aJ98GPeZLK_HX_yi2O-C2xciFC2BYBD73pxs4v1nb-Nv-Ibj8HeZ74OibtNiy7PT3FdYqux9HA3RlmPmnlnksRBqlc4Wmnr3i-zDigBhqLBODFzztL3MUsZ44TEkwgeAAmV8gKn09euLwLOj-z3yzY9nhDdfzU9TvVRiXqpTjJMuq230JFzHlZDH7RePrLlIxNDJPjOfOcm4ssxtaHthL4nUNOMObwTAVo"/>
          </div>
          <p class="text-xs uppercase tracking-[0.3em] opacity-70 mb-2">Sự kiện âm nhạc</p>
          <h3 class="text-3xl serif mb-4">Tên tin tức</h3>
          <a class="inline-flex items-center text-xs uppercase tracking-widest border border-white/40 px-6 py-2 hover:bg-white/10 transition-all" href="/fragnews">Tìm hiểu <span class="material-icons text-sm ml-2">east</span></a>
        </div>
      </div>
    </div>
  </div>
</section>

<button class="fixed bottom-6 right-6 p-3 bg-white dark:bg-gray-800 rounded-full shadow-lg border border-gray-200 dark:border-gray-700 z-50" id="toggle-dark-mode">
  <span class="material-icons text-primary">dark_mode</span>
</button>

@endsection

@push('scripts')
<script>
  document.getElementById('toggle-dark-mode')?.addEventListener('click', function(){
    document.documentElement.classList.toggle('dark');
  });
</script>
@endpush

