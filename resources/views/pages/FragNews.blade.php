{{-- FAQ & News Page - REFACTORED --}}
@extends('layouts.app')

@section('title', 'FAQ & News - The Wandering Rose')

@section('content')

  {{-- Hero Banner --}}
  <header class="relative w-full h-[60vh] md:h-[70vh] overflow-hidden">
    <img alt="FAQ & News Hero" class="absolute w-full h-full object-cover" src="https://images.unsplash.com/photo-1505228395891-9a51e7e86bf6?q=80&w=2000&auto=format&fit=crop"/>
    <div class="absolute inset-0 bg-black/40"></div>
    <div class="relative h-full flex items-center justify-center text-white">
      <div class="text-center px-4">
        <h1 class="font-display text-4xl md:text-6xl mb-4">Câu hỏi thường gặp & Tin tức</h1>
        <p class="text-lg md:text-xl opacity-90">Thông tin hữu ích cho chuyến du lịch của bạn</p>
      </div>
    </div>
  </header>

  {{-- FAQ Section --}}
  <section class="py-16 md:py-24 px-4 md:px-8 max-w-5xl mx-auto bg-background-light dark:bg-background-dark">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-5xl font-display text-primary mb-4">Các câu hỏi thường gặp</h2>
      <p class="text-gray-600">Giải đáp mọi thắc mắc của bạn</p>
    </div>

    <div class="space-y-0 divide-y divide-primary/30 border-t border-b border-primary/30">
      @for ($i = 0; $i < 8; $i++)
      <details class="group py-6 cursor-pointer">
        <summary class="flex justify-between items-center font-display text-xl md:text-2xl text-primary/80 dark:text-primary hover:text-primary transition-colors">
          <span>Đây là câu hỏi thường gặp {{ $i + 1 }}?</span>
          <i class="fa-solid fa-chevron-down text-sm transition-transform duration-300 group-open:rotate-180"></i>
        </summary>
        <div class="pt-4 text-gray-600 dark:text-gray-400 font-light leading-relaxed">
          Nội dung mẫu trả lời cho câu hỏi thường gặp số {{ $i + 1 }}. Thay bằng nội dung thực tế khi có.
        </div>
      </details>
      @endfor
    </div>
  </section>

  {{-- News & Events Section --}}
  <section class="py-20 px-4 md:px-8 bg-background-light dark:bg-background-dark">
    <div class="max-w-7xl mx-auto">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-5xl font-display text-primary mb-4">Tin tức & Sự kiện</h2>
        <p class="text-gray-600">Cập nhật hoạt động mới nhất tại The Wandering Rose</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @for ($i = 0; $i < 6; $i++)
        <div class="bg-white dark:bg-background-dark rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
          <div class="relative h-56">
            <img alt="News {{ $i + 1 }}" class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1{{ 500 + $i }}78442607-{{ 300 + $i }}?q=80&w=600&auto=format&fit=crop"/>
            <span class="absolute top-4 right-4 bg-primary text-white text-xs font-bold px-3 py-1 rounded">SỰ KIỆN</span>
          </div>
          <div class="p-6">
            <h3 class="font-display text-xl text-primary mb-2 line-clamp-2">
              Tiêu đề sự kiện hoặc tin tức {{ $i + 1 }}
            </h3>
            <p class="text-sm text-gray-600 dark:text-gray-400 mb-4 line-clamp-3">
              Mô tả ngắn gọn về sự kiện hoặc tin tức. Thay bằng nội dung thực tế từ database khi có sẵn dữ liệu.
            </p>
            <a class="text-primary text-sm font-semibold hover:underline" href="/fragnews">Đọc thêm →</a>
          </div>
        </div>
        @endfor
      </div>

      <div class="flex justify-center gap-4 mt-8">
        <button class="w-10 h-10 rounded-full bg-white text-brand-brown flex items-center justify-center hover:bg-white/90 transition-colors">
          <i class="fa-solid fa-arrow-left"></i>
        </button>
        <button class="w-10 h-10 rounded-full bg-white text-brand-brown flex items-center justify-center hover:bg-white/90 transition-colors">
          <i class="fa-solid fa-arrow-right"></i>
        </button>
      </div>
    </div>
  </section>

@endsection
