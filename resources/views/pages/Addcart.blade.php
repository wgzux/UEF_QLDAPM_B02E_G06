<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>The Wandering Rose Ba Vì - Room Selection</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>

    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Lato:wght@300;400;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="./styles.css" />

    <script>
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              primary: "#8B6B4E", // Deep warm brown for buttons/highlights
              secondary: "#D4C5B0", // Lighter beige for accents
              "background-light": "#EAE7E2", // Soft warm grey-beige
              "background-dark": "#1F1C18", // Deep dark brown-black
              "card-light": "#F5F3F0",
              "card-dark": "#2D2A26",
              "text-main": "#5D4037", // Darker brown text
              "text-light": "#EFEBE9", // Light text for dark mode
              gold: "#C5A065", // Gold accents
            },
            fontFamily: {
              display: ["'Playfair Display'", "serif"],
              body: ["'Lato'", "sans-serif"],
            },
            borderRadius: {
              DEFAULT: "4px",
              lg: "8px",
            },
            boxShadow: {
              soft: "0 4px 20px -2px rgba(0, 0, 0, 0.05)",
              floating: "0 10px 40px -10px rgba(0, 0, 0, 0.2)",
            },
          },
        },
      };
    </script>
  </head>

  <body
    class="bg-background-light dark:bg-background-dark text-gray-700 dark:text-gray-300 font-body antialiased transition-colors duration-300"
  >
    <header
      class="sticky top-0 z-40 bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-md shadow-sm border-b border-[#D4C5B0] dark:border-gray-800"
    >
      <div
        class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between"
      >
        <button
          class="flex items-center text-sm uppercase tracking-widest text-[#8B6B4E] hover:text-[#5D4037] dark:text-[#D4C5B0] dark:hover:text-white transition-colors"
        >
          <span class="material-icons-outlined mr-1 text-lg">west</span>
          TRỞ VỀ
        </button>

        <div class="flex flex-col items-center">
          <h1
            class="font-display text-2xl lg:text-3xl text-[#8B6B4E] dark:text-[#D4C5B0] tracking-wide"
          >
            THE WANDERING ROSE
          </h1>
          <span class="font-display italic text-lg text-[#C5A065]">Ba Vì</span>
        </div>

        <div class="relative">
          <button
            class="flex items-center space-x-2 border border-gray-300 dark:border-gray-600 px-3 py-1 rounded text-sm bg-transparent hover:bg-white dark:hover:bg-gray-800 transition-colors"
          >
            <span>VND</span>
            <img
              alt="Vietnam Flag"
              class="w-5 h-auto shadow-sm"
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuD2bSQYsHPjMAb6CvhV3CpME2AC44ZEOR1jwyG2SBPjhyC__cpPFp06myz5ESuJ3scvxMj1De9SCGLGBWs4P2mTtmxOBThDoTHrvy3p3J-uRqAPsRP8PgyTCJhXajFjAyHRUW6SHq8K71UPjb_WYyDzcBXSJ-WS3CgzQ1Hy8zsZCn-x0oly_gNYvXUzyb0MSUDHNm1Jwg1jkqTdqO0ilbOMPJcKkZGjBYOjkr_nbGhSpGnnyCR5arr3EQEhotJInwPCD-5NKWy5"
            />
            <span class="material-icons-outlined text-sm">expand_more</span>
          </button>
        </div>
      </div>

      <div
        class="bg-background-light dark:bg-background-dark border-t border-[#D4C5B0]/30 dark:border-gray-700 py-4"
      >
        <div
          class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0 text-[#5D4037] dark:text-[#D4C5B0]"
        >
          <div class="flex items-center space-x-8">
            <div class="text-center">
              <p
                class="text-xs uppercase tracking-widest text-gray-500 dark:text-gray-400 mb-1"
              >
                NGÀY
                <span
                  class="bg-[#8B6B4E] text-white px-2 py-0.5 rounded text-[10px] ml-1"
                  >10 Đêm</span
                >
              </p>
              <div class="flex items-baseline space-x-4">
                <div>
                  <span class="font-display text-4xl">27</span>
                  <span class="text-xs text-gray-500 dark:text-gray-400 block -mt-1"
                    >Tháng 9 2025</span
                  >
                </div>
                <div class="h-8 w-[1px] bg-gray-300 dark:bg-gray-600"></div>
                <div>
                  <span class="font-display text-4xl">6</span>
                  <span class="text-xs text-gray-500 dark:text-gray-400 block -mt-1"
                    >Tháng 10 2025</span
                  >
                </div>
              </div>
            </div>
          </div>

          <div
            class="flex items-center space-x-10 md:border-l md:border-r border-gray-300 dark:border-gray-600 px-8"
          >
            <div class="text-center">
              <p class="text-xs uppercase font-bold tracking-widest mb-1">PHÒNG</p>
              <span class="font-display text-3xl">1</span>
            </div>
            <div class="text-center">
              <p class="text-xs uppercase font-bold tracking-widest mb-1">NGƯỜI LỚN</p>
              <span class="font-display text-3xl">2</span>
            </div>
            <div class="text-center">
              <p class="text-xs uppercase font-bold tracking-widest mb-1">TRẺ EM</p>
              <span class="font-display text-3xl">0</span>
            </div>

            <button class="text-gray-400 hover:text-[#8B6B4E]">
              <span class="material-icons-outlined">expand_more</span>
            </button>
          </div>

          <button
            class="bg-[#8B6B4E] hover:bg-[#72563d] text-white px-8 py-2 text-xs uppercase tracking-widest rounded shadow-md transition-all"
          >
            TÌM KIẾM
            <span class="material-icons-outlined text-sm align-middle ml-1">search</span>
          </button>
        </div>
      </div>
    </header>

    <div
      class="bg-[#8B6B4E] dark:bg-[#5D4037] text-white py-3 sticky top-[138px] z-30 shadow-md"
    >
      <div
        class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row justify-between items-center"
      >
        <div class="text-sm font-light tracking-wide mb-2 sm:mb-0">
          <span class="opacity-80 uppercase">BẠN ĐÃ LỰA CHỌN:</span>
          <span class="font-bold ml-2">2 PHÒNG</span>
          <span class="mx-2 opacity-50">|</span>
          <span class="font-bold">10 ĐÊM</span>
        </div>
        <div class="flex items-center space-x-4">
          <span class="font-display text-xl font-bold">100.000.000 ₫</span>
          <button
            class="bg-[#D4C5B0] text-[#5D4037] hover:bg-white text-xs font-bold px-4 py-2 rounded uppercase tracking-widest transition-colors"
          >
            ĐẶT NGAY
          </button>
        </div>
      </div>
    </div>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 relative">
      <div
        class="hidden lg:block absolute right-8 top-12 w-96 bg-white dark:bg-[#2D2A26] shadow-floating rounded-lg z-20 border border-gray-100 dark:border-gray-700 p-5 transform transition-all duration-500"
      >
        <div
          class="flex justify-between items-start mb-4 border-b border-gray-100 dark:border-gray-700 pb-3"
        >
          <div>
            <h3
              class="text-sm font-bold text-[#8B6B4E] dark:text-[#D4C5B0] uppercase tracking-wide"
            >
              BẠN ĐÃ LỰA CHỌN:
              <span class="text-black dark:text-white">2 PHÒNG 10 ĐÊM</span>
            </h3>
            <p class="text-xs text-gray-500 mt-1">27/09/2025 - 06/10/2025</p>
          </div>
          <button class="text-gray-400 hover:text-red-500">
            <span class="material-icons-outlined text-lg">close</span>
          </button>
        </div>

        <div
          class="bg-card-light dark:bg-[#1F1C18] p-3 rounded mb-3 border border-gray-200 dark:border-gray-700"
        >
          <div class="flex justify-between mb-2">
            <span class="text-sm font-serif text-gray-700 dark:text-gray-300"
              >Deluxe room</span
            >
            <button class="text-[#8B6B4E] hover:text-red-500">
              <span class="material-icons-outlined text-lg">delete_outline</span>
            </button>
          </div>
          <div class="flex justify-between items-center">
            <div
              class="flex items-center border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 rounded"
            >
              <button class="px-2 py-1 text-gray-500 hover:text-[#8B6B4E]">-</button>
              <input
                class="w-8 text-center text-xs bg-transparent border-none p-0 text-gray-700 dark:text-gray-300 focus:ring-0"
                type="text"
                value="01"
              />
              <button class="px-2 py-1 text-gray-500 hover:text-[#8B6B4E]">+</button>
            </div>
            <span class="font-display font-bold text-[#5D4037] dark:text-[#D4C5B0]"
              >50.000.000 ₫</span
            >
          </div>
        </div>

        <div
          class="bg-card-light dark:bg-[#1F1C18] p-3 rounded mb-4 border border-gray-200 dark:border-gray-700"
        >
          <div class="flex justify-between mb-2">
            <span class="text-sm font-serif text-gray-700 dark:text-gray-300"
              >Red rose house</span
            >
            <button class="text-[#8B6B4E] hover:text-red-500">
              <span class="material-icons-outlined text-lg">delete_outline</span>
            </button>
          </div>
          <div class="flex justify-between items-center">
            <div
              class="flex items-center border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 rounded"
            >
              <button class="px-2 py-1 text-gray-500 hover:text-[#8B6B4E]">-</button>
              <input
                class="w-8 text-center text-xs bg-transparent border-none p-0 text-gray-700 dark:text-gray-300 focus:ring-0"
                type="text"
                value="01"
              />
              <button class="px-2 py-1 text-gray-500 hover:text-[#8B6B4E]">+</button>
            </div>
            <span class="font-display font-bold text-[#5D4037] dark:text-[#D4C5B0]"
              >50.000.000 ₫</span
            >
          </div>
        </div>

        <div
          class="flex justify-between items-center pt-2 border-t border-gray-100 dark:border-gray-700 mb-4"
        >
          <span class="text-sm font-bold text-gray-600 dark:text-gray-400">Tạm tính:</span>
          <span class="font-display text-xl font-bold text-[#8B6B4E] dark:text-[#D4C5B0]"
            >100.000.000 ₫</span
          >
        </div>

        <button
          class="w-full bg-[#8B6B4E] hover:bg-[#72563d] text-white py-3 rounded uppercase text-xs font-bold tracking-widest shadow-lg transition-colors"
        >
          ĐẶT NGAY
        </button>
      </div>

      <div class="grid grid-cols-1 gap-16 lg:pr-[400px]">
        <!-- Deluxe room -->
        <div class="group">
          <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-start">
            <div class="md:col-span-7 relative overflow-hidden rounded-lg shadow-md aspect-[4/3]">
              <img
                alt="Deluxe Room Interior"
                class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBu1CRWdbET4xaND-yJaQGBrqci0uf2Bs60LjTcZV-Hl0D_4n0NqDTBoQlq_DTQ6a2mI3ZZOGeBFYOU-p0F9evUG-ZvhCbqMJ6F1tdFcf03siew50wBWrsxiya2aujDD8l0esMZFGBo3dMEG5KXy9Pp8zmGyxu_yZ4D2_tW21RYWHp4pr9vEMCOlcTwSMC2epCaPi_wS029CHOAEc8uCGzsSWmjIF7HCUb4lS9y5YTmQijdgaNdcMFW3sDXEsmIR0H0Eu3u57gw"
              />
              <div
                class="absolute bottom-4 left-4 right-4 flex justify-between text-white/80 pointer-events-none"
              >
                <span class="material-icons-outlined">west</span>
                <span class="material-icons-outlined">east</span>
              </div>
            </div>

            <div class="md:col-span-5 flex flex-col h-full justify-center pl-4">
              <h2 class="font-display text-3xl text-[#8B6B4E] dark:text-[#D4C5B0] mb-4">
                Deluxe room
              </h2>

              <div class="space-y-2 mb-6 text-sm text-gray-600 dark:text-gray-400 font-light">
                <div class="flex items-center space-x-3">
                  <span class="material-icons-outlined text-lg w-5">person_outline</span>
                  <span>02 người lớn</span>
                </div>
                <div class="flex items-center space-x-3">
                  <span class="material-icons-outlined text-lg w-5">square_foot</span>
                  <span>35 m²</span>
                </div>
                <div class="flex items-center space-x-3">
                  <span class="material-icons-outlined text-lg w-5">bed</span>
                  <span>01 phòng ngủ</span>
                </div>
                <div class="flex items-center space-x-3">
                  <span class="material-icons-outlined text-lg w-5">single_bed</span>
                  <span>01 giường King</span>
                </div>
              </div>

              <div class="border-t border-[#D4C5B0]/30 dark:border-gray-700 pt-6">
                <div class="flex items-baseline mb-1">
                  <span class="font-display text-2xl text-[#8B6B4E] dark:text-[#D4C5B0]"
                    >50.000.000 ₫</span
                  >
                  <span class="text-xs text-gray-500 ml-2">(10 đêm)</span>
                </div>
                <p class="text-xs text-gray-500 mb-3">Còn 02 phòng</p>

                <div class="flex items-center justify-between">
                  <div
                    class="flex items-center border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-800"
                  >
                    <button
                      class="px-3 py-1.5 text-gray-500 hover:text-[#8B6B4E] transition-colors"
                    >
                      -
                    </button>
                    <input
                      class="w-10 text-center text-sm bg-transparent border-none p-0 text-gray-700 dark:text-gray-300 focus:ring-0"
                      type="text"
                      value="01"
                    />
                    <button
                      class="px-3 py-1.5 text-gray-500 hover:text-[#8B6B4E] transition-colors"
                    >
                      +
                    </button>
                  </div>

                  <div class="flex space-x-2">
                    <button
                      class="px-4 py-2 border border-[#8B6B4E] text-[#8B6B4E] dark:border-[#D4C5B0] dark:text-[#D4C5B0] uppercase text-xs tracking-wider rounded hover:bg-[#8B6B4E] hover:text-white transition-all"
                    >
                      CHỌN
                    </button>
                    <button
                      class="px-4 py-2 bg-[#8B6B4E] text-white uppercase text-xs tracking-wider rounded hover:bg-[#72563d] transition-all shadow-md"
                    >
                      ĐẶT NGAY
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Family room -->
        <div class="group">
          <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-start">
            <div class="md:col-span-7 relative overflow-hidden rounded-lg shadow-md aspect-[4/3]">
              <img
                alt="Family Room Interior"
                class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCIQvB5b222YbFrc9y82SdlLw0CCMtdSOBNH7ummxqz87NJd07KYKhSzZmEf5pngEN84cpp8q0lZDn5a295jkewKNlVLy8-OdoTIgjY5CyAAy2oMQulldsLHOkhBQuMAzEO-6v-pFLz-wxwIbD772PcKUxPVaUNxyoXXsNhH3z7jxumKI22DcxxklSxutFPId-EaZPEiE75UXfzHAdhJziMdU0LkUxI3SLcyxY38JskcA9gjVwdKXonkpWRc1rRYcl4yAbBKLxo"
              />
              <div
                class="absolute bottom-4 left-4 right-4 flex justify-between text-white/80 pointer-events-none"
              >
                <span class="material-icons-outlined">west</span>
                <span class="material-icons-outlined">east</span>
              </div>
            </div>

            <div class="md:col-span-5 flex flex-col h-full justify-center pl-4">
              <h2 class="font-display text-3xl text-[#8B6B4E] dark:text-[#D4C5B0] mb-4">
                Family room
              </h2>

              <div class="space-y-2 mb-6 text-sm text-gray-600 dark:text-gray-400 font-light">
                <div class="flex items-center space-x-3">
                  <span class="material-icons-outlined text-lg w-5">people_outline</span>
                  <span>04 người lớn</span>
                </div>
                <div class="flex items-center space-x-3">
                  <span class="material-icons-outlined text-lg w-5">square_foot</span>
                  <span>60 m²</span>
                </div>
                <div class="flex items-center space-x-3">
                  <span class="material-icons-outlined text-lg w-5">bed</span>
                  <span>02 phòng ngủ</span>
                </div>
                <div class="flex items-center space-x-3">
                  <span class="material-icons-outlined text-lg w-5">single_bed</span>
                  <span>02 giường King</span>
                </div>
              </div>

              <div class="border-t border-[#D4C5B0]/30 dark:border-gray-700 pt-6">
                <div class="flex items-baseline mb-1">
                  <span class="font-display text-2xl text-[#8B6B4E] dark:text-[#D4C5B0]"
                    >50.000.000 ₫</span
                  >
                  <span class="text-xs text-gray-500 ml-2">(10 đêm)</span>
                </div>
                <p class="text-xs text-gray-500 mb-3">Còn 02 phòng</p>

                <div class="flex items-center justify-between">
                  <div
                    class="flex items-center border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-800"
                  >
                    <button
                      class="px-3 py-1.5 text-gray-500 hover:text-[#8B6B4E] transition-colors"
                    >
                      -
                    </button>
                    <input
                      class="w-10 text-center text-sm bg-transparent border-none p-0 text-gray-700 dark:text-gray-300 focus:ring-0"
                      type="text"
                      value="01"
                    />
                    <button
                      class="px-3 py-1.5 text-gray-500 hover:text-[#8B6B4E] transition-colors"
                    >
                      +
                    </button>
                  </div>

                  <div class="flex space-x-2">
                    <button
                      class="px-4 py-2 border border-[#8B6B4E] text-[#8B6B4E] dark:border-[#D4C5B0] dark:text-[#D4C5B0] uppercase text-xs tracking-wider rounded hover:bg-[#8B6B4E] hover:text-white transition-all"
                    >
                      CHỌN
                    </button>
                    <button
                      class="px-4 py-2 bg-[#8B6B4E] text-white uppercase text-xs tracking-wider rounded hover:bg-[#72563d] transition-all shadow-md"
                    >
                      ĐẶT NGAY
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Red rose house -->
        <div class="group">
          <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-start">
            <div class="md:col-span-7 relative overflow-hidden rounded-lg shadow-md aspect-[4/3]">
              <img
                alt="Red Rose House Interior"
                class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCiWOODXcQ1lmQnaAPDrLbY6Bg901_rdrAaLEDlBNb0YOcmZiby52iZmR4jyG4O6ps2nQtbSIPc1ncNGwPXK2mVGjxuMJioe3pigrXGRwvY8PEKUK2yZ_4D9wYrkrgFu0IIvewBX-Sl9CeMDfqn4zYSb43gesvVMViQp9EAdsc7uy8vrnqsKobCSzvxfJdeWUR_eEuec38YTEoG0EtDVCisWTER0PpuSHyD1L97qYHaLaGJ1Y_F7bJ-XnZbCrSN12234Nvbqat7"
              />
              <div
                class="absolute bottom-4 left-4 right-4 flex justify-between text-white/80 pointer-events-none"
              >
                <span class="material-icons-outlined">west</span>
                <span class="material-icons-outlined">east</span>
              </div>
            </div>

            <div class="md:col-span-5 flex flex-col h-full justify-center pl-4">
              <h2 class="font-display text-3xl text-[#8B6B4E] dark:text-[#D4C5B0] mb-4">
                Red rose house
              </h2>

              <div class="space-y-2 mb-6 text-sm text-gray-600 dark:text-gray-400 font-light">
                <div class="flex items-center space-x-3">
                  <span class="material-icons-outlined text-lg w-5">person_outline</span>
                  <span>06 người lớn</span>
                </div>
                <div class="flex items-center space-x-3">
                  <span class="material-icons-outlined text-lg w-5">square_foot</span>
                  <span>120 m²</span>
                </div>
                <div class="flex items-center space-x-3">
                  <span class="material-icons-outlined text-lg w-5">bed</span>
                  <span>03 phòng ngủ</span>
                </div>
                <div class="flex items-center space-x-3">
                  <span class="material-icons-outlined text-lg w-5">single_bed</span>
                  <span>03 giường King</span>
                </div>
              </div>

              <div class="border-t border-[#D4C5B0]/30 dark:border-gray-700 pt-6">
                <div class="flex items-baseline mb-1">
                  <span class="font-display text-2xl text-[#8B6B4E] dark:text-[#D4C5B0]"
                    >50.000.000 ₫</span
                  >
                  <span class="text-xs text-gray-500 ml-2">(10 đêm)</span>
                </div>
                <p class="text-xs text-gray-500 mb-3">Còn 02 phòng</p>

                <div class="flex items-center justify-between">
                  <div
                    class="flex items-center border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-800"
                  >
                    <button
                      class="px-3 py-1.5 text-gray-500 hover:text-[#8B6B4E] transition-colors"
                    >
                      -
                    </button>
                    <input
                      class="w-10 text-center text-sm bg-transparent border-none p-0 text-gray-700 dark:text-gray-300 focus:ring-0"
                      type="text"
                      value="01"
                    />
                    <button
                      class="px-3 py-1.5 text-gray-500 hover:text-[#8B6B4E] transition-colors"
                    >
                      +
                    </button>
                  </div>

                  <div class="flex space-x-2">
                    <button
                      class="px-4 py-2 border border-[#8B6B4E] text-[#8B6B4E] dark:border-[#D4C5B0] dark:text-[#D4C5B0] uppercase text-xs tracking-wider rounded hover:bg-[#8B6B4E] hover:text-white transition-all"
                    >
                      CHỌN
                    </button>
                    <button
                      class="px-4 py-2 bg-[#8B6B4E] text-white uppercase text-xs tracking-wider rounded hover:bg-[#72563d] transition-all shadow-md"
                    >
                      ĐẶT NGAY
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <section class="bg-[#E5E0DA] dark:bg-[#1A1816] py-20 mt-12">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
          <div>
            <h2
              class="font-display text-4xl lg:text-5xl text-[#8B6B4E] dark:text-[#D4C5B0] text-center mb-12"
            >
              Tiện nghi đã bao gồm
            </h2>

            <div class="space-y-6">
              <div class="text-center pb-4 border-b border-[#D4C5B0] dark:border-gray-700">
                <h3 class="font-display text-2xl text-[#5D4037] dark:text-[#C5A065] mb-2">
                  Wi-Fi 24/7
                </h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 font-light">
                  Luôn duy trì sự kết nối mượt mà trong suốt kỳ nghỉ.
                </p>
              </div>

              <div class="text-center pb-4 border-b border-[#D4C5B0] dark:border-gray-700">
                <h3 class="font-display text-2xl text-[#5D4037] dark:text-[#C5A065] mb-2">
                  Trà và cà phê miễn phí
                </h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 font-light">
                  Được chuẩn bị sẵn để có thể thưởng thức bất cứ lúc nào.
                </p>
              </div>

              <div class="text-center pb-4 border-b border-[#D4C5B0] dark:border-gray-700">
                <h3 class="font-display text-2xl text-[#5D4037] dark:text-[#C5A065] mb-2">
                  Nệm pillow-top cao cấp
                </h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 font-light">
                  Mang lại giấc ngủ êm ái và trọn vẹn.
                </p>
              </div>

              <div class="text-center pb-4 border-b border-[#D4C5B0] dark:border-gray-700">
                <h3 class="font-display text-2xl text-[#5D4037] dark:text-[#C5A065] mb-2">
                  Vòi sen mưa &amp; sen cầm tay
                </h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 font-light">
                  Mang lại giác ngủ êm ái và trọn vẹn.
                </p>
              </div>

              <div class="text-center pb-4 border-b border-[#D4C5B0] dark:border-gray-700">
                <h3 class="font-display text-2xl text-[#5D4037] dark:text-[#C5A065] mb-2">
                  Điều hòa không khí
                </h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 font-light">
                  Duy trì không gian thoáng mát, dễ chịu.
                </p>
              </div>

              <div class="text-center pb-4 border-b border-[#D4C5B0] dark:border-gray-700">
                <h3 class="font-display text-2xl text-[#5D4037] dark:text-[#C5A065] mb-2">
                  Ấm đun siêu tốc
                </h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 font-light">
                  Phục vụ nhu cầu pha chế nhanh chóng và tiện lợi.
                </p>
              </div>

              <div class="text-center pb-4 border-b border-[#D4C5B0] dark:border-gray-700">
                <h3 class="font-display text-2xl text-[#5D4037] dark:text-[#C5A065] mb-2">
                  Smart TV &amp; điều hòa
                </h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 font-light">
                  Mang đến trải nghiệm giải trí đa dạng ngay tại phòng.
                </p>
              </div>

              <div class="text-center pb-4 border-b border-[#D4C5B0] dark:border-gray-700">
                <h3 class="font-display text-2xl text-[#5D4037] dark:text-[#C5A065] mb-2">
                  Tiện nghi phòng tắm cao cấp
                </h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 font-light">
                  Bao gồm máy sấy tóc cùng sản phẩm chăm sóc tinh chọn.
                </p>
              </div>

              <div class="text-center pb-4 border-b border-[#D4C5B0] dark:border-gray-700">
                <h3 class="font-display text-2xl text-[#5D4037] dark:text-[#C5A065] mb-2">
                  Áo choàng tắm &amp; dép đi trong phòng
                </h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 font-light">
                  Tôn thêm sự thoải mái và tinh tế.
                </p>
              </div>

              <div class="text-center pb-4 border-b border-[#D4C5B0] dark:border-gray-700">
                <h3 class="font-display text-2xl text-[#5D4037] dark:text-[#C5A065] mb-2">
                  Phòng không hút thuốc
                </h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 font-light">
                  Giữ không gian trong lành, thoải mái cho mọi khách.
                </p>
              </div>
            </div>
          </div>

          <div>
            <h2
              class="font-display text-4xl lg:text-5xl text-[#8B6B4E] dark:text-[#D4C5B0] text-center mb-12"
            >
              Chính sách
            </h2>

            <div class="space-y-10 pl-4 md:pl-10 text-gray-700 dark:text-gray-300">
              <div class="pb-6 border-b border-[#D4C5B0] dark:border-gray-700">
                <h3 class="font-display text-2xl text-[#8B6B4E] dark:text-[#C5A065] mb-4">
                  Thanh toán &amp; huỷ đặt phòng
                </h3>
                <ul class="list-disc pl-5 space-y-2 text-sm font-light">
                  <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                  <li>Suspendisse iaculis urna nec odio tincidunt, sed aliquet libero imperdiet.</li>
                  <li>Fusce quis massa ac velit cursus dictum.</li>
                  <li>Ut placerat ipsum eu efficitur aliquam.</li>
                </ul>
              </div>

              <div class="pb-6 border-b border-[#D4C5B0] dark:border-gray-700">
                <h3 class="font-display text-2xl text-[#8B6B4E] dark:text-[#C5A065] mb-4">
                  Thời gian nhận và trả phòng
                </h3>
                <ul class="list-disc pl-5 space-y-2 text-sm font-light">
                  <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                  <li>Suspendisse iaculis urna nec odio tincidunt, sed aliquet libero imperdiet.</li>
                  <li>Fusce quis massa ac velit cursus dictum.</li>
                  <li>Ut placerat ipsum eu efficitur aliquam.</li>
                </ul>
              </div>

              <div class="pb-6 border-b border-[#D4C5B0] dark:border-gray-700">
                <h3 class="font-display text-2xl text-[#8B6B4E] dark:text-[#C5A065] mb-4">
                  Chính sách trẻ em
                </h3>
                <ul class="list-disc pl-5 space-y-2 text-sm font-light">
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
    </section>
  </body>
</html>
