<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>The Wandering Rose - FAQ &amp; News</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Mulish:wght@300;400;500;600&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>

    <!-- Tailwind config (giữ trong HTML) -->
    <script>
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              primary: "#C69C6D", // The gold/tan color for text
              "brand-brown": "#A67C52", // The main brown background color
              "brand-brown-dark": "#5e422e", // Darker version for dark mode
              "background-light": "#FFFCF8", // Slightly off-white cream
              "background-dark": "#1a1a1a", // Dark gray
              "surface-light": "#ffffff",
              "surface-dark": "#262626",
            },
            fontFamily: {
              display: ["Playfair Display", "serif"],
              body: ["Mulish", "sans-serif"],
            },
            borderRadius: {
              DEFAULT: "4px",
            },
          },
        },
      };
    </script>

    <!-- CSS tách riêng -->
    <link rel="stylesheet" href="styles.css" />
  </head>

  <body
    class="bg-background-light dark:bg-background-dark font-body text-gray-700 dark:text-gray-300 antialiased transition-colors duration-300"
  >
    <header class="relative w-full h-[60vh] md:h-[70vh] overflow-hidden">
      <img
        alt="Woman reading a book by a window with greenery outside"
        class="absolute inset-0 w-full h-full object-cover"
        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDnpqZ2Ry41Pq6ZsaLFqoV3rzA7cwoGgQI4JzrJaSJhPf6INdmEcwapuRdrDX9R8WahQez3YV5rr6co3zvoVV6sP-iq1UATSFIAP3yxcsXKt_oIs3iha6i2qXYIdg5tEqeOrHeyXSVt2yv1JqKM-qlx636Pr0CdOOxQiZQ3zlqs5n3lYQWuCXezPCTnt7i-MV0S_NmQ5T_yn2H5sQ2Qx7vxWvNsOFuhCVDFv9M1i4s7-3hgZRxNHP4U97dGPmE2lz71tJrc3_9JeuJU"
      />
      <div class="absolute inset-0 bg-black/30 dark:bg-black/50"></div>
      <div
        class="relative z-10 h-full flex flex-col items-center justify-end pb-20 md:pb-32"
      >
        <h1
          class="text-5xl md:text-7xl font-display text-white tracking-widest uppercase italic"
        >
          Faq
        </h1>
      </div>
    </header>

    <section
      class="py-16 md:py-24 px-4 md:px-8 max-w-5xl mx-auto bg-background-light dark:bg-background-dark"
    >
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-5xl font-display text-primary mb-4">
          Các câu hỏi thường gặp
        </h2>
      </div>

      <div
        class="space-y-0 divide-y divide-primary/30 border-t border-b border-primary/30"
      >
        <details class="group py-6 cursor-pointer">
          <summary
            class="flex justify-between items-center font-display text-xl md:text-2xl text-primary/80 dark:text-primary hover:text-primary transition-colors"
          >
            <span>Đây là câu hỏi thường gặp ?</span>
            <i
              class="fa-solid fa-chevron-down text-sm transition-transform duration-300 group-open:rotate-180"
            ></i>
          </summary>
          <div
            class="pt-4 text-gray-600 dark:text-gray-400 font-light leading-relaxed"
          >
            Đây là nội dung trả lời cho câu hỏi thường gặp. Nội dung này cung cấp
            thông tin chi tiết để giải đáp thắc mắc của khách hàng một cách rõ
            ràng và đầy đủ nhất.
          </div>
        </details>

        <details class="group py-6 cursor-pointer">
          <summary
            class="flex justify-between items-center font-display text-xl md:text-2xl text-primary/80 dark:text-primary hover:text-primary transition-colors"
          >
            <span>Đây là câu hỏi thường gặp ?</span>
            <i
              class="fa-solid fa-chevron-down text-sm transition-transform duration-300 group-open:rotate-180"
            ></i>
          </summary>
          <div
            class="pt-4 text-gray-600 dark:text-gray-400 font-light leading-relaxed"
          >
            Thông tin chi tiết về dịch vụ, chính sách hoặc các vấn đề liên quan
            khác sẽ được hiển thị tại đây.
          </div>
        </details>

        <details class="group py-6 cursor-pointer">
          <summary
            class="flex justify-between items-center font-display text-xl md:text-2xl text-primary/80 dark:text-primary hover:text-primary transition-colors"
          >
            <span>Đây là câu hỏi thường gặp ?</span>
            <i
              class="fa-solid fa-chevron-down text-sm transition-transform duration-300 group-open:rotate-180"
            ></i>
          </summary>
          <div
            class="pt-4 text-gray-600 dark:text-gray-400 font-light leading-relaxed"
          >
            Chúng tôi luôn sẵn sàng hỗ trợ bạn với các thông tin cập nhật nhất.
          </div>
        </details>

        <details class="group py-6 cursor-pointer">
          <summary
            class="flex justify-between items-center font-display text-xl md:text-2xl text-primary/80 dark:text-primary hover:text-primary transition-colors"
          >
            <span>Đây là câu hỏi thường gặp ?</span>
            <i
              class="fa-solid fa-chevron-down text-sm transition-transform duration-300 group-open:rotate-180"
            ></i>
          </summary>
          <div
            class="pt-4 text-gray-600 dark:text-gray-400 font-light leading-relaxed"
          >
            Câu trả lời ngắn gọn và súc tích.
          </div>
        </details>

        <details class="group py-6 cursor-pointer">
          <summary
            class="flex justify-between items-center font-display text-xl md:text-2xl text-primary/80 dark:text-primary hover:text-primary transition-colors"
          >
            <span>Đây là câu hỏi thường gặp ?</span>
            <i
              class="fa-solid fa-chevron-down text-sm transition-transform duration-300 group-open:rotate-180"
            ></i>
          </summary>
          <div
            class="pt-4 text-gray-600 dark:text-gray-400 font-light leading-relaxed"
          >
            Nội dung mô tả chi tiết cho câu hỏi này.
          </div>
        </details>

        <details class="group py-6 cursor-pointer">
          <summary
            class="flex justify-between items-center font-display text-xl md:text-2xl text-primary/80 dark:text-primary hover:text-primary transition-colors"
          >
            <span>Đây là câu hỏi thường gặp ?</span>
            <i
              class="fa-solid fa-chevron-down text-sm transition-transform duration-300 group-open:rotate-180"
            ></i>
          </summary>
          <div
            class="pt-4 text-gray-600 dark:text-gray-400 font-light leading-relaxed"
          >
            Phản hồi cho câu hỏi thường gặp số 6.
          </div>
        </details>

        <details class="group py-6 cursor-pointer">
          <summary
            class="flex justify-between items-center font-display text-xl md:text-2xl text-primary/80 dark:text-primary hover:text-primary transition-colors"
          >
            <span>Đây là câu hỏi thường gặp ?</span>
            <i
              class="fa-solid fa-chevron-down text-sm transition-transform duration-300 group-open:rotate-180"
            ></i>
          </summary>
          <div
            class="pt-4 text-gray-600 dark:text-gray-400 font-light leading-relaxed"
          >
            Phản hồi cho câu hỏi thường gặp số 7.
          </div>
        </details>

        <details class="group py-6 cursor-pointer">
          <summary
            class="flex justify-between items-center font-display text-xl md:text-2xl text-primary/80 dark:text-primary hover:text-primary transition-colors"
          >
            <span>Đây là câu hỏi thường gặp ?</span>
            <i
              class="fa-solid fa-chevron-down text-sm transition-transform duration-300 group-open:rotate-180"
            ></i>
          </summary>
          <div
            class="pt-4 text-gray-600 dark:text-gray-400 font-light leading-relaxed"
          >
            Phản hồi cho câu hỏi thường gặp số 8.
          </div>
        </details>
      </div>
    </section>

    <div
      class="bg-brand-brown dark:bg-brand-brown-dark text-white pt-20 transition-colors duration-300"
    >
      <section class="max-w-7xl mx-auto px-4 md:px-8 mb-24">
        <div class="text-center mb-12">
          <h2 class="text-4xl md:text-5xl font-display text-white/90">
            Tin tức và sự kiện
          </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
          <div class="group flex flex-col">
            <div class="relative overflow-hidden aspect-[3/4] mb-6">
              <img
                alt="Music Concert Poster"
                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDt0tYvZPjh1Y-pLLobj_PunnaVaZopqA55QLeMLrS7sYVFY1Es61CUawb64ZwylQRUznjBaJxcYt9_LmW-ikS0nqys5Tq_nYycpUqGLGNJdeFBjh84gG04mSrwQfzeDQDjfhtvMrT-dFeREMwFPj3J3LmeSNlu78MLhrr5nbrO0iR4zhQgsNJvhfpEC-y_Zk6b3aqenXtywg7SpKSTBbCsTw5Hhq_LHGscKGkSyWQlDyFfmuLJVveiwf55tZh3wqC2ofmbQi2jPxfs"
              />
            </div>
            <span
              class="text-xs font-light tracking-wider uppercase opacity-80 mb-2"
              >Sự kiện âm nhạc</span
            >
            <h3 class="text-2xl font-display mb-4">Tên tin tức</h3>
            <button
              class="flex items-center text-xs uppercase tracking-widest border border-white/40 px-6 py-2 w-max hover:bg-white hover:text-brand-brown transition-all duration-300"
            >
              Tìm hiểu
              <i class="fa-solid fa-arrow-right ml-2 text-[10px]"></i>
            </button>
          </div>

          <div class="group flex flex-col">
            <div class="relative overflow-hidden aspect-[3/4] mb-6">
              <img
                alt="Blue Concert Poster"
                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDUaPIQdvNszUnl5bpghXBhyc7x-ttqvP4c__RHQDDG6zsEQ2ENB4tOuIhgRd_iHn5epsH72urgHgtkuu4ZlxD_LNRiTC-2WvyUXn_7ceTj9t64ncDKzsxN7CukJ3fKPcntYscMx8jy3tyAHmBevSfAkfh9GZkM_2otNXGNS4KllunTN2Bux_o0tkIY124_KKiK2aq9cFqeW7MnWb5NvKlFphCr0eMBB_sONQR3keqbXW1XWRpVIMK78pZ5Yohm6LH6gu9ETsb6f0li"
              />
            </div>
            <span
              class="text-xs font-light tracking-wider uppercase opacity-80 mb-2"
              >Tên loại tin tức</span
            >
            <h3 class="text-2xl font-display mb-4">Tên tin tức</h3>
            <button
              class="flex items-center text-xs uppercase tracking-widest border border-white/40 px-6 py-2 w-max hover:bg-white hover:text-brand-brown transition-all duration-300"
            >
              Tìm hiểu
              <i class="fa-solid fa-arrow-right ml-2 text-[10px]"></i>
            </button>
          </div>

          <div class="group flex flex-col">
            <div class="relative overflow-hidden aspect-[3/4] mb-6">
              <img
                alt="Red Concert Poster"
                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDfPn6Zk4VSTwakznYazK_uExXkATM5KujO_4kxxp-j9Sxdi82Rtr7CXu5yFfV8_tngU-sXLO8-wyGzrURlfF__mF0HbVx9Lfo9PO7cfrrjtMHCTiJ08Cb7NXkAvddJr0CXVviDJVX1VKRQGTXtNVGQvF9DmzO4QTU6W7gWeZI_q0rspWRxFqQ72Z8xiqIM7Ykrq9gxIn4dWj-09nayoYqr1fj5iHsqtjphisUlsLFJPX8eqKoNAvAot3CATdc3Daa01iUwBtJ-S1jS"
              />
            </div>
            <span
              class="text-xs font-light tracking-wider uppercase opacity-80 mb-2"
              >Tên loại tin tức</span
            >
            <h3 class="text-2xl font-display mb-4">Tên tin tức</h3>
            <button
              class="flex items-center text-xs uppercase tracking-widest border border-white/40 px-6 py-2 w-max hover:bg-white hover:text-brand-brown transition-all duration-300"
            >
              Tìm hiểu
              <i class="fa-solid fa-arrow-right ml-2 text-[10px]"></i>
            </button>
          </div>
        </div>

        <div class="flex justify-center gap-4">
          <button
            class="w-10 h-10 rounded-full bg-white text-brand-brown flex items-center justify-center hover:bg-white/90 transition-colors"
          >
            <i class="fa-solid fa-arrow-left"></i>
          </button>
          <button
            class="w-10 h-10 rounded-full bg-white text-brand-brown flex items-center justify-center hover:bg-white/90 transition-colors"
          >
            <i class="fa-solid fa-arrow-right"></i>
          </button>
        </div>
      </section>

      <div class="flex flex-col items-center justify-center mb-16">
        <div class="text-center font-display">
          <div class="mb-2 text-2xl tracking-widest uppercase">
            The Wandering Rose
          </div>
          <div class="text-lg italic font-light opacity-80">Ba Vi</div>
        </div>
        <div class="mt-2 text-xl opacity-80">
          <i class="fa-solid fa-crown"></i>
        </div>
      </div>

      <footer
        class="max-w-7xl mx-auto px-4 md:px-8 pb-12 border-t border-white/20 pt-16"
      >
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-12 gap-x-8">
          <div class="space-y-4">
            <h4 class="font-display text-xl md:text-2xl mb-6">TRANG CHỦ</h4>
            <ul class="space-y-3 text-sm font-light uppercase tracking-wider opacity-80">
              <li><a class="hover:opacity-100 hover:underline decoration-white/50 underline-offset-4" href="#">Về chúng tôi</a></li>
              <li><a class="hover:opacity-100 hover:underline decoration-white/50 underline-offset-4" href="#">Sự kiện âm nhạc</a></li>
              <li><a class="hover:opacity-100 hover:underline decoration-white/50 underline-offset-4" href="#">Gallery hình ảnh &amp; video</a></li>
              <li><a class="hover:opacity-100 hover:underline decoration-white/50 underline-offset-4" href="#">Tin tức</a></li>
              <li><a class="hover:opacity-100 hover:underline decoration-white/50 underline-offset-4" href="#">FAQ</a></li>
            </ul>
          </div>

          <div class="lg:col-span-2">
            <h4 class="font-display text-xl md:text-2xl mb-6">HẠNG PHÒNG</h4>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
              <ul class="space-y-3 text-sm font-light uppercase tracking-wider opacity-80">
                <li><a class="hover:opacity-100 hover:underline decoration-white/50 underline-offset-4" href="#">Khu Wooden House</a></li>
                <li><a class="hover:opacity-100 hover:underline decoration-white/50 underline-offset-4" href="#">Forest Room</a></li>
                <li><a class="hover:opacity-100 hover:underline decoration-white/50 underline-offset-4" href="#">Deluxe Room</a></li>
                <li><a class="hover:opacity-100 hover:underline decoration-white/50 underline-offset-4" href="#">Family Room</a></li>
              </ul>
              <ul class="space-y-3 text-sm font-light uppercase tracking-wider opacity-80">
                <li><a class="hover:opacity-100 hover:underline decoration-white/50 underline-offset-4" href="#">Khu Rose House</a></li>
                <li><a class="hover:opacity-100 hover:underline decoration-white/50 underline-offset-4" href="#">Pink Rose House</a></li>
                <li><a class="hover:opacity-100 hover:underline decoration-white/50 underline-offset-4" href="#">White Rose House</a></li>
                <li><a class="hover:opacity-100 hover:underline decoration-white/50 underline-offset-4" href="#">Red Rose House</a></li>
                <li><a class="hover:opacity-100 hover:underline decoration-white/50 underline-offset-4" href="#">The Wandering Rose Villa</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-12 gap-x-8 mt-12">
          <div class="space-y-4">
            <h4 class="font-display text-xl md:text-2xl mb-6">TRẢI NGHIỆM &amp; TOUR</h4>
            <ul class="space-y-3 text-sm font-light uppercase tracking-wider opacity-80">
              <li><a class="hover:opacity-100 hover:underline decoration-white/50 underline-offset-4" href="#">Tour vườn quốc gia Ba Vì</a></li>
              <li><a class="hover:opacity-100 hover:underline decoration-white/50 underline-offset-4" href="#">Tour ao vua</a></li>
              <li><a class="hover:opacity-100 hover:underline decoration-white/50 underline-offset-4" href="#">Khoang xanh - suối tiên</a></li>
              <li><a class="hover:opacity-100 hover:underline decoration-white/50 underline-offset-4" href="#">Các trải nghiệm bản địa</a></li>
            </ul>
          </div>

          <div class="space-y-4">
            <h4 class="font-display text-xl md:text-2xl mb-6">DỊCH VỤ SỰ KIỆN</h4>
            <ul class="space-y-3 text-sm font-light uppercase tracking-wider opacity-80">
              <li><a class="hover:opacity-100 hover:underline decoration-white/50 underline-offset-4" href="#">Tổ chức sinh nhật</a></li>
              <li><a class="hover:opacity-100 hover:underline decoration-white/50 underline-offset-4" href="#">Teambuilding</a></li>
              <li><a class="hover:opacity-100 hover:underline decoration-white/50 underline-offset-4" href="#">Tiệc cưới nhỏ</a></li>
              <li><a class="hover:opacity-100 hover:underline decoration-white/50 underline-offset-4" href="#">Tiệc kỷ niệm</a></li>
              <li><a class="hover:opacity-100 hover:underline decoration-white/50 underline-offset-4" href="#">Đăng ký tổ chức sự kiện</a></li>
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
              <button
                class="text-xs uppercase tracking-widest border border-white/40 px-6 py-2 hover:bg-white hover:text-brand-brown transition-all duration-300"
              >
                Gửi liên hệ <i class="fa-solid fa-arrow-right ml-2 text-[10px]"></i>
              </button>
            </div>
          </div>
        </div>

        <div
          class="mt-20 pt-8 border-t border-white/10 flex flex-col md:flex-row justify-between items-center text-xs font-light opacity-60"
        >
          <div class="mb-4 md:mb-0">© Copyright 2025 The Wandering Rose</div>
          <div class="flex gap-6 text-base">
            <a class="hover:text-white transition-colors" href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a class="hover:text-white transition-colors" href="#"><i class="fa-brands fa-youtube"></i></a>
            <a class="hover:text-white transition-colors" href="#"><i class="fa-brands fa-instagram"></i></a>
            <a class="hover:text-white transition-colors" href="#"><i class="fa-brands fa-pinterest-p"></i></a>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>
