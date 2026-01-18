<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>@yield('title', 'The Wandering Rose - Luxury Villa Ba Vì')</title>
    
    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Montserrat:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Lato:wght@300;400;700&display=swap" rel="stylesheet"/>
    
    {{-- Material Icons --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined|Material+Icons" rel="stylesheet"/>
    
    {{-- Font Awesome --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    
    {{-- Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    
    {{-- Tailwind Config --}}
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#a88b68", // Màu vàng đồng gốc
                        "primary-dark": "#8c7354",
                        "header-bg": "#1a1818", // Màu nền đen cho Header
                        "background-light": "#fdfbf7", // Màu nền sáng cho Body
                        "text-main": "#333333",
                    },
                    fontFamily: {
                        // Font cho Header
                        headerTitle: ["'Cormorant Garamond'", "serif"],
                        headerUI: ["'Montserrat'", "sans-serif"],
                        // Font cho Body
                        display: ["'Playfair Display'", "serif"],
                        body: ["'Lato'", "sans-serif"],
                    },
                },
            },
        };
    </script>
    
    {{-- Vite CSS - Laravel sẽ compile từ resources/css --}}
    @vite(['resources/css/app.css', 'resources/css/components/header.css', 'resources/css/components/footer.css'])
    
    {{-- Custom Styles cho từng page --}}
    @stack('styles')
</head>
<body class="font-body bg-background-light text-text-main">

    {{-- Include Header Component --}}
    <x-header />

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Include Footer Component --}}
    <x-footer />

    {{-- Vite JS --}}
    @vite(['resources/js/app.js'])
    
    {{-- Custom Scripts cho từng page --}}
    @stack('scripts')
</body>
</html>
