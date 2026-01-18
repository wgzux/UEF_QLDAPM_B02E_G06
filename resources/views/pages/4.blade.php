<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Liên hệ - The Wandering Rose</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>

    <!-- Tailwind config -->
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#A67B5B",
                        secondary: "#B88A68",
                        accent: "#C69C7B",
                        "background-light": "#FFFAF5",
                        "background-dark": "#2D2420",
                        "surface-light": "#FFFFFF",
                        "surface-dark": "#3E322C",
                        "text-main-light": "#5D4037",
                        "text-main-dark": "#EFEBE9",
                    },
                    fontFamily: {
                        display: ["Cormorant Garamond", "serif"],
                        body: ["Montserrat", "sans-serif"],
                    },
                    borderRadius: {
                        DEFAULT: "4px",
                        lg: "8px",
                    },
                },
            },
        };
    </script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet"/>

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-background-light dark:bg-background-dark text-text-main-light dark:text-text-main-dark transition-colors duration-300 font-body">

<header class="relative w-full h-[60vh] min-h-[400px] overflow-hidden">
    <div class="absolute inset-0">
        <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAemKM4NYnUG_kwH-RyonW2aG5JWwMmC_eURuLGk2mLyGxV-6AnHoCHOFRUuUS6zE-jTE7z1WR0XurJYbaqCNKOcMjVeqw_Wv8D5ACLk495Ke9oVQA_n8cPhfuru5N5C1-sjbHziH_GJXSbO1udRfWqaTeTQelEfgMounANVCXasX7ttpqf24Nas5VScWWRgOpiTlS7mMmr2-nycC76zNxXS2TWOGf8KwouGntMpe2OxuyXP3Eo9WGZ7FBtMsk9zSzZLTMh_Q_8Eflf" alt="">
        <div class="absolute inset-0 bg-black/40"></div>
    </div>
    <div class="relative z-10 flex items-end justify-center h-full pb-20">
        <h1 class="text-6xl md:text-8xl font-display font-light text-white tracking-wide">
            Liên hệ
        </h1>
    </div>
</header>

<main class="container mx-auto px-4 py-16 md:py-24 max-w-7xl">
    <!-- PHẦN NỘI DUNG + FORM + TIN TỨC -->
    <?php /* Nội dung bên trong giữ nguyên như bạn gửi */ ?>
</main>

<footer class="bg-secondary dark:bg-[#3D2F28] text-white pt-20 pb-10 border-t border-white/10">
    <?php /* Footer giữ nguyên layout */ ?>
</footer>

</body>
</html>
