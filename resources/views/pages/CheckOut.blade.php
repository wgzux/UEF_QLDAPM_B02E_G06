<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Booking Confirmation - The Wandering Rose</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>

    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Nunito:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Round"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="./styles.css" />

    <script>
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              primary: "#C19A6B", // Bronze/Gold tone from the image
              "primary-dark": "#A07E54",
              "background-light": "#FFFAF5", // Light cream background
              "background-dark": "#121212", // Dark mode background
              "card-light": "#FFFFFF",
              "card-dark": "#1E1E1E",
              "border-light": "#E5E7EB",
              "border-dark": "#333333",
              "text-light": "#4B5563",
              "text-dark": "#D1D5DB",
            },
            fontFamily: {
              display: ["'Playfair Display'", "serif"],
              body: ["'Nunito'", "sans-serif"],
            },
            borderRadius: {
              DEFAULT: "0.25rem",
            },
          },
        },
      };
    </script>
  </head>

  <body
    class="bg-background-light dark:bg-background-dark font-body text-text-light dark:text-text-dark antialiased transition-colors duration-300 min-h-screen flex flex-col"
  >
    <header class="w-full px-6 py-4 md:py-6">
      <div class="max-w-7xl mx-auto flex justify-between items-center relative">
        <a
          class="flex items-center text-primary hover:opacity-80 transition-opacity text-sm font-medium uppercase tracking-wider absolute left-0 top-1/2 -translate-y-1/2 md:static md:translate-y-0"
          href="#"
        >
          <i class="fas fa-arrow-left mr-2"></i> Trở về
        </a>

        <div class="flex-1 text-center">
          <h1 class="font-display text-2xl md:text-3xl text-primary tracking-wide">
            THE WANDERING ROSE
          </h1>
          <p class="font-display italic text-primary text-lg md:text-xl -mt-1">Ba Vì</p>
        </div>

        <div
          class="hidden md:flex items-center border border-border-light dark:border-border-dark rounded bg-white dark:bg-card-dark px-3 py-1.5 text-sm text-gray-600 dark:text-gray-300 absolute right-0 top-1/2 -translate-y-1/2 md:static md:translate-y-0"
        >
          <span class="mr-2">VNĐ</span>
          <img
            alt="Vietnam Flag"
            class="w-5 h-3.5 mr-2 object-cover rounded-[1px]"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQVcYoD_lbVB3u1lmXLRyAZwzNU5CmOEovqNXZrR-Sc_EBQZBcENfzsNChHEGSrKpSY0pL0kT_85CzD2mCH9KHFqfrDmtNi_f8hPSABT0FlVmBkcAWGX7Bk3f5nbNQUCj8KczhtTpQLCCOtXDKq2W0zURPqFcS2YzxUFAn431WwP6VVwG66sHLfYap-Tn4RhUrLDQq0A511Ixwifhezqti4nf3HKdePEnqXwtKq-NxfJuJiOlhyKTzcnVsCkRGioBg4s8YMmVz"
          />
          <i class="fas fa-chevron-down text-xs ml-1"></i>
        </div>
      </div>
    </header>

    <main class="flex-grow w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 md:py-12">
      <div class="text-center mb-12">
        <h2 class="font-display text-5xl md:text-6xl text-primary mb-6">Xác nhận</h2>
        <p class="text-gray-600 dark:text-gray-400 max-w-3xl mx-auto text-sm md:text-base leading-relaxed">
          Đang tiến hành kiểm tra thông tin bạn sẽ nhận được thông báo qua mail và tin nhắn trong
          <span class="inline-flex items-center font-bold ml-1 text-gray-800 dark:text-gray-200">
            <i class="far fa-clock mr-1.5"></i> 24:00:00
          </span>
        </p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-start">
        <!-- Customer info -->
        <div
          class="bg-card-light dark:bg-card-dark p-6 md:p-8 rounded-lg shadow-sm border border-transparent dark:border-border-dark"
        >
          <h3 class="section-title">Thông tin khách hàng</h3>

          <form action="#" class="space-y-5" method="POST">
            <div>
              <label class="label-text">Họ và tên <span class="text-primary">*</span></label>
              <input class="input-field" placeholder="Nhập họ và tên" type="text" />
            </div>

            <div>
              <label class="label-text">Số điện thoại <span class="text-primary">*</span></label>
              <div class="relative flex">
                <div
                  class="flex items-center justify-center px-3 border border-r-0 border-border-light dark:border-border-dark rounded-l-md bg-gray-50 dark:bg-[#333]"
                >
                  <img
                    alt="Vietnam"
                    class="w-5 h-3.5 object-cover rounded-[1px]"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDFp7P831QHdwsO9P6KDj90Is7drKEdYMBjYXU16kLQE5dqj18C3AFYwhSLR1KT3EOKXXy_DXO5CnUcED0xexw_V0ff0MIuNUw1t2k7GRFWhdbEx6w4ZpNBK9agPM00Xgg4o3gzFBePdRbtrVJ1QEInnoRXYb3qNSflIKDT3nAhaSMNzo4t4nxZS09cDH1o67an85TjJTgo584YGhG6PmtdvhivC8YhcOzEF8A7HgfE6OK7CeoSiCewpfqR4MEKyddEpcEIk2M8"
                  />
                  <i class="fas fa-chevron-down text-xs ml-1.5 text-gray-400"></i>
                </div>

                <input class="input-field rounded-l-none" placeholder="Nhập số điện thoại" type="tel" />
              </div>
            </div>

            <div>
              <label class="label-text">Email <span class="text-primary">*</span></label>
              <input class="input-field" placeholder="Nhập địa chỉ email" type="email" />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
              <div>
                <label class="label-text">ID/Passport <span class="text-primary">*</span></label>
                <input class="input-field" placeholder="Nhập số định danh cá nhân" type="text" />
              </div>

              <div>
                <label class="label-text">Giới tính theo ID/Passport <span class="text-primary">*</span></label>
                <div class="relative">
                  <select class="input-field appearance-none cursor-pointer">
                    <option>Nam</option>
                    <option>Nữ</option>
                    <option>Khác</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-500">
                    <i class="fas fa-chevron-down text-xs"></i>
                  </div>
                </div>
              </div>
            </div>

            <div>
              <label class="label-text">Ngày sinh <span class="text-primary">*</span></label>
              <input class="input-field" placeholder="Nhập số định danh cá nhân" type="text" />
            </div>

            <div>
              <label class="label-text">Quốc tịch <span class="text-primary">*</span></label>
              <div class="relative">
                <select class="input-field appearance-none cursor-pointer">
                  <option>Việt Nam</option>
                  <option>Other</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-500">
                  <i class="fas fa-chevron-down text-xs"></i>
                </div>
              </div>
            </div>
          </form>
        </div>

        <!-- Booking info -->
        <div
          class="bg-card-light dark:bg-card-dark p-6 md:p-8 rounded-lg shadow-sm border border-transparent dark:border-border-dark"
        >
          <h3 class="section-title">Thông tin đặt phòng</h3>

          <div class="space-y-6">
            <div>
              <div class="flex items-baseline space-x-2 mb-1">
                <span class="text-lg font-bold text-gray-700 dark:text-gray-200">2 PHÒNG</span>
                <span class="text-lg font-bold text-gray-700 dark:text-gray-200">10 ĐÊM</span>
              </div>
              <p class="text-gray-500 dark:text-gray-400 text-sm">27/09/2025 - 06/10/2025</p>
            </div>

            <div class="space-y-3">
              <div class="flex justify-between items-center text-sm md:text-base">
                <span class="font-bold text-gray-800 dark:text-gray-100">Nhận phòng</span>
                <span class="text-gray-600 dark:text-gray-300">27/09/2025</span>
              </div>
              <div class="flex justify-between items-center text-sm md:text-base">
                <span class="font-bold text-gray-800 dark:text-gray-100">Trả phòng</span>
                <span class="text-gray-600 dark:text-gray-300">06/10/2025</span>
              </div>
            </div>

            <div class="border-t border-border-light dark:border-border-dark"></div>

            <div class="space-y-4">
              <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center space-y-1 sm:space-y-0">
                <span class="font-bold text-primary text-lg">Duluxe room</span>
                <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 space-x-1">
                  <span class="material-icons-round text-base text-gray-400 mr-1">groups</span>
                  <span>00 người lớn</span>
                  <span>00 trẻ em</span>
                  <span>00 em bé</span>
                </div>
              </div>

              <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center space-y-1 sm:space-y-0">
                <span class="font-bold text-primary text-lg">Rose house</span>
                <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 space-x-1">
                  <span class="material-icons-round text-base text-gray-400 mr-1">groups</span>
                  <span>00 người lớn</span>
                  <span>00 trẻ em</span>
                  <span>00 em bé</span>
                </div>
              </div>
            </div>

            <div class="pt-2">
              <label class="label-text">Yêu cầu bổ sung (nếu có)</label>
              <input class="input-field" placeholder="Không có" type="text" />
            </div>

            <div class="border-t border-border-light dark:border-border-dark my-4"></div>

            <div class="space-y-4">
              <div class="flex justify-between items-center">
                <span class="font-bold text-gray-800 dark:text-gray-100">Mã đặt phòng</span>
                <span class="font-bold text-gray-500 dark:text-gray-400">#OL29893265</span>
              </div>

              <div class="flex justify-between items-start">
                <span class="font-bold text-gray-800 dark:text-gray-100 mt-1">Tổng thanh toán</span>
                <div class="text-right">
                  <div class="text-2xl font-bold text-gray-600 dark:text-gray-200">100.000.000 đ</div>
                  <div class="text-xs text-gray-400 dark:text-gray-500 mt-1 italic">
                    (Bao gồm thuế GTGT 10% và phí dịch vụ 5%)
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
