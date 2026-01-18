@extends('layouts.app')

@section('title', 'FAQ & News - The Wandering Rose')

@push('styles')
<style>
  .scrollbar-hide { -ms-overflow-style:none; scrollbar-width:none; }
  .scrollbar-hide::-webkit-scrollbar { display:none; }
</style>
@endpush

@section('content')
  <header class="relative w-full h-[60vh] md:h-[70vh] overflow-hidden">
    <img
      alt="Woman reading a book by a window with greenery outside"
      class="absolute inset-0 w-full h-full object-cover"
      src="https://lh3.googleusercontent.com/aida-public/AB6AXuDnpqZ2Ry41Pq6ZsaLFqoV3rzA7cwoGgQI4JzrJaSJhPf6INdmEcwapuRdrDX9R8WahQez3YV5rr6co3zvoVV6sP-iq1UATSFIAP3yxcsXKt_oIs3iha6i2qXYIdg5tEqeOrHeyXSVt2yv1JqKM-qlx636Pr0CdOOxQiZQ3zlqs5n3lYQWuCXezPCTnt7i-MV0S_NmQ5T_yn2H5sQ2Qx7vxWvNsOFuhCVDFv9M1i4s7-3hgZRxNHP4U97dGPmE2lz71tJrc3_9JeuJU"
    />
    <div class="absolute inset-0 bg-black/30 dark:bg-black/50"></div>
    <div class="relative z-10 h-full flex flex-col items-center justify-end pb-20 md:pb-32">
      <h1 class="text-5xl md:text-7xl font-display text-white tracking-widest uppercase italic">Faq</h1>
    </div>
  </header>

  <section class="py-16 md:py-24 px-4 md:px-8 max-w-5xl mx-auto bg-background-light dark:bg-background-dark">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-5xl font-display text-primary mb-4">Các câu hỏi thường gặp</h2>
    </div>

    <div class="space-y-0 divide-y divide-primary/30 border-t border-b border-primary/30">
      @for ($i = 0; $i < 8; $i++)
      <details class="group py-6 cursor-pointer">
        <summary class="flex justify-between items-center font-display text-xl md:text-2xl text-primary/80 dark:text-primary hover:text-primary transition-colors">
          <span>Đây là câu hỏi thường gặp ?</span>
          <i class="fa-solid fa-chevron-down text-sm transition-transform duration-300 group-open:rotate-180"></i>
        </summary>
        <div class="pt-4 text-gray-600 dark:text-gray-400 font-light leading-relaxed">Nội dung mẫu trả lời cho câu hỏi thường gặp. Thay bằng nội dung thực tế khi có.</div>
      </details>
      @endfor
    </div>
  </section>

  <div class="bg-brand-brown dark:bg-brand-brown-dark text-white pt-20 transition-colors duration-300">
    <section class="max-w-7xl mx-auto px-4 md:px-8 mb-24">
      <div class="text-center mb-12"><h2 class="text-4xl md:text-5xl font-display text-white/90">Tin tức và sự kiện</h2></div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
        @foreach(range(1,3) as $n)
        <div class="group flex flex-col">
          <div class="relative overflow-hidden aspect-[3/4] mb-6">
            <img alt="News {{ $n }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDt0tYvZPjh1Y-pLLobj_PunnaVaZopqA55QLeMLrS7sYVFY1Es61CUawb64ZwylQRUznjBaJxcYt9_LmW-ikS0nqys5Tq_nYycpUqGLGNJdeFBjh84gG04mSrwQfzeDQDjfhtvMrT-dFeREMwFPj3J3LmeSNlu78MLhrr5nbrO0iR4zhQgsNJvhfpEC-y_Zk6b3aqenXtywg7SpKSTBbCsTw5Hhq_LHGscKGkSyWQlDyFfmuLJVveiwf55tZh3wqC2ofmbQi2jPxfs" />
          </div>
          <span class="text-xs font-light tracking-wider uppercase opacity-80 mb-2">Sự kiện âm nhạc</span>
          <h3 class="text-2xl font-display mb-4">Tên tin tức</h3>
          <a class="flex items-center text-xs uppercase tracking-widest border border-white/40 px-6 py-2 w-max hover:bg-white hover:text-brand-brown transition-all duration-300" href="/fragnews">Tìm hiểu <i class="fa-solid fa-arrow-right ml-2 text-[10px]"></i></a>
        </div>
        @endforeach
      </div>

      <div class="flex justify-center gap-4">
        <button class="w-10 h-10 rounded-full bg-white text-brand-brown flex items-center justify-center hover:bg-white/90 transition-colors"><i class="fa-solid fa-arrow-left"></i></button>
        <button class="w-10 h-10 rounded-full bg-white text-brand-brown flex items-center justify-center hover:bg-white/90 transition-colors"><i class="fa-solid fa-arrow-right"></i></button>
      </div>
    </section>

    <div class="flex flex-col items-center justify-center mb-16">
      <div class="text-center font-display">
        <div class="mb-2 text-2xl tracking-widest uppercase">The Wandering Rose</div>
        <div class="text-lg italic font-light opacity-80">Ba Vi</div>
      </div>
      <div class="mt-2 text-xl opacity-80"><i class="fa-solid fa-crown"></i></div>
    </div>

    <footer class="max-w-7xl mx-auto px-4 md:px-8 pb-12 border-t border-white/20 pt-16">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-12 gap-x-8">
        <div class="space-y-4">
          <h4 class="font-display text-xl md:text-2xl mb-6">TRANG CHỦ</h4>
          <ul class="space-y-3 text-sm font-light uppercase tracking-wider opacity-80">
            <li><a class="hover:opacity-100 hover:underline" href="{{ route('contact') }}">Về chúng tôi</a></li>
            <li><a class="hover:opacity-100 hover:underline" href="/fragnews">Sự kiện âm nhạc</a></li>
            <li><a class="hover:opacity-100 hover:underline" href="/fragnews">Gallery hình ảnh &amp; video</a></li>
            <li><a class="hover:opacity-100 hover:underline" href="/fragnews">Tin tức</a></li>
            <li><a class="hover:opacity-100 hover:underline" href="/fragnews">FAQ</a></li>
          </ul>
        </div>

        <div class="lg:col-span-2">
          <h4 class="font-display text-xl md:text-2xl mb-6">HẠNG PHÒNG</h4>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
            <ul class="space-y-3 text-sm font-light uppercase tracking-wider opacity-80">
              <li><a class="hover:opacity-100 hover:underline" href="{{ route('contact') }}">Khu Wooden House</a></li>
              <li><a class="hover:opacity-100 hover:underline" href="{{ route('contact') }}">Forest Room</a></li>
              <li><a class="hover:opacity-100 hover:underline" href="{{ route('contact') }}">Deluxe Room</a></li>
              <li><a class="hover:opacity-100 hover:underline" href="{{ route('contact') }}">Family Room</a></li>
            </ul>
            <ul class="space-y-3 text-sm font-light uppercase tracking-wider opacity-80">
              <li><a class="hover:opacity-100 hover:underline" href="{{ route('contact') }}">Khu Rose House</a></li>
              <li><a class="hover:opacity-100 hover:underline" href="{{ route('contact') }}">Pink Rose House</a></li>
              <li><a class="hover:opacity-100 hover:underline" href="{{ route('contact') }}">White Rose House</a></li>
              <li><a class="hover:opacity-100 hover:underline" href="{{ route('contact') }}">Red Rose House</a></li>
              <li><a class="hover:opacity-100 hover:underline" href="{{ route('contact') }}">The Wandering Rose Villa</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-12 gap-x-8 mt-12">
        <div class="space-y-4">
          <h4 class="font-display text-xl md:text-2xl mb-6">TRẢI NGHIỆM &amp; TOUR</h4>
          <ul class="space-y-3 text-sm font-light uppercase tracking-wider opacity-80">
            <li><a class="hover:opacity-100 hover:underline" href="/booking">Tour vườn quốc gia Ba Vì</a></li>
            <li><a class="hover:opacity-100 hover:underline" href="/booking">Tour ao vua</a></li>
            <li><a class="hover:opacity-100 hover:underline" href="/booking">Khoang xanh - suối tiên</a></li>
            <li><a class="hover:opacity-100 hover:underline" href="/booking">Các trải nghiệm bản địa</a></li>
          </ul>
        </div>

        <div class="space-y-4">
          <h4 class="font-display text-xl md:text-2xl mb-6">DỊCH VỤ SỰ KIỆN</h4>
          <ul class="space-y-3 text-sm font-light uppercase tracking-wider opacity-80">
            <li><a class="hover:opacity-100 hover:underline" href="/booking">Tổ chức sinh nhật</a></li>
            <li><a class="hover:opacity-100 hover:underline" href="/booking">Teambuilding</a></li>
            <li><a class="hover:opacity-100 hover:underline" href="/booking">Tiệc cưới nhỏ</a></li>
            <li><a class="hover:opacity-100 hover:underline" href="/booking">Tiệc kỷ niệm</a></li>
            <li><a class="hover:opacity-100 hover:underline" href="/booking">Đăng ký tổ chức sự kiện</a></li>
          </ul>
        </div>

        <div class="lg:col-span-2 space-y-4">
          <h4 class="font-display text-xl md:text-2xl mb-6">LIÊN HỆ</h4>
          <ul class="space-y-3 text-sm font-light opacity-80">
            <li class="tracking-wider">092 981 6699</li>
            <li>booking@thewanderingrosebavi.com</li>
            <li>Thôn Mít Mái, Ba Vì, Hà Nội</li>
          </ul>
          <div class="pt-4">
            <a class="text-xs uppercase tracking-widest border border-white/40 px-6 py-2 hover:bg-white hover:text-brand-brown transition-all duration-300 inline-flex items-center" href="/booking">Gửi liên hệ <i class="fa-solid fa-arrow-right ml-2 text-[10px]"></i></a>
          </div>
        </div>
      </div>

      <div class="mt-20 pt-8 border-t border-white/10 flex flex-col md:flex-row justify-between items-center text-xs font-light opacity-60">
        <div class="mb-4 md:mb-0">© Copyright 2025 The Wandering Rose</div>
        <div class="flex gap-6 text-base">
          <a class="hover:text-white transition-colors" href="/fragnews"><i class="fa-brands fa-facebook-f"></i></a>
          <a class="hover:text-white transition-colors" href="/fragnews"><i class="fa-brands fa-youtube"></i></a>
          <a class="hover:text-white transition-colors" href="/fragnews"><i class="fa-brands fa-youtube"></i></a>
          <a class="hover:text-white transition-colors" href="/fragnews"><i class="fa-brands fa-instagram"></i></a>
          <a class="hover:text-white transition-colors" href="/fragnews"><i class="fa-brands fa-pinterest-p"></i></a>
        </div>
      </div>
    </footer>
  </div>

@endsection
