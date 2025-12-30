<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Confirmation & News Page - The Wandering Rose</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>

    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#B07E5C",
                        "primary-dark": "#8C6348",
                        "background-light": "#FFFCFA",
                        "background-dark": "#121212",
                        "section-brown": "#AF7D5B",
                        "section-brown-dark": "#3D2B1F",
                    },
                    fontFamily: {
                        display: ["'Playfair Display'", "serif"],
                        body: ["'Montserrat'", "sans-serif"],
                    },
                },
            },
        };
    </script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet"/>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-background-light dark:bg-background-dark font-body text-gray-800 dark:text-gray-200 transition-colors duration-300">

<main class="min-h-[50vh] flex flex-col items-center justify-center text-center px-4 py-20 lg:py-32">
    <h1 class="font-display text-4xl md:text-5xl lg:text-6xl text-primary mb-6">
        Gửi thông tin thành công
    </h1>
    <p class="text-gray-500 dark:text-gray-400 text-sm md:text-base font-light mb-12 tracking-wide max-w-xl mx-auto">
        Chúng tôi sẽ chủ động liên hệ lại trong thời gian ngắn nhất !
    </p>

    <div class="flex flex-col sm:flex-row gap-5">
        <button class="bg-primary hover:bg-primary-dark text-white text-xs md:text-sm py-3.5 px-10 uppercase tracking-widest transition-all shadow-lg">
            Trở lại trang trước
        </button>
        <button class="border border-primary text-primary hover:bg-primary hover:text-white text-xs md:text-sm py-3.5 px-10 uppercase tracking-widest transition-all flex items-center gap-3 group">
            Về trang chủ
            <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
        </button>
    </div>
</main>

<!-- PHẦN TIN TỨC + FOOTER GIỮ NGUYÊN -->
<?php /* Nội dung phía dưới giữ nguyên như bạn gửi */ ?>

</body>
</html>
