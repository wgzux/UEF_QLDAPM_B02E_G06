<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Booking Confirmation - The Wandering Rose</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>

    <!-- Tailwind config -->
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#AD7D56",
                        secondary: "#C69C6D",
                        "background-light": "#FFFCF7",
                        "background-dark": "#121212",
                        "surface-dark": "#1E1E1E",
                        "brown-dark": "#7a563a",
                    },
                    fontFamily: {
                        display: ["Playfair Display", "serif"],
                        body: ["Manrope", "sans-serif"],
                    },
                    borderRadius: {
                        DEFAULT: "4px",
                    },
                },
            },
        };
    </script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet"/>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="font-body text-gray-700 dark:text-gray-300 antialiased bg-background-light dark:bg-background-dark transition-colors duration-300">

<section class="min-h-[60vh] flex flex-col items-center justify-center text-center px-4 py-12 lg:py-20">
    <div class="max-w-3xl space-y-8 animate-fade-in-up">
        <h1 class="font-display text-4xl md:text-6xl text-secondary font-normal">
            Gửi tin nhắn thành công
        </h1>
        <p class="text-gray-500 dark:text-gray-400 font-light text-lg">
            Chúng tôi sẽ chủ động liên hệ lại trong thời gian ngắn nhất !
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center pt-4">
            <button class="px-8 py-3 bg-primary hover:bg-[#966b48] text-white text-sm font-semibold tracking-wider uppercase shadow-md rounded transition-all">
                Trở lại trang trước
            </button>
            <a href="#" class="px-8 py-3 border border-gray-300 hover:border-primary text-gray-500 hover:text-primary text-sm font-semibold tracking-wider uppercase rounded flex items-center gap-2 group transition-all">
                Về trang chủ
                <span class="material-icons text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </a>
        </div>
    </div>
</section>

<!-- PHẦN TIN TỨC + FOOTER -->
<?php /* Giữ nguyên layout như bạn gửi, không ảnh hưởng PHP */ ?>

</body>
</html>
