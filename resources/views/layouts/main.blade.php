<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Category Selection Interface</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet"/>
    
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">

    <script>
       tailwind.config = {
         darkMode: "class",
         theme: {
           extend: {
             colors: {
               primary: "#3b82f6",
               "background-light": "#f3f4f6",
               "background-dark": "#121212",
               "sidebar-light": "#ffffff",
               "sidebar-dark": "#1e1e1e",
             },
             fontFamily: { sans: ["Inter", "sans-serif"] },
           },
         },
       };
    </script>
</head>
<body class="bg-background-light dark:bg-background-dark font-sans h-screen flex overflow-hidden text-gray-900 dark:text-gray-200 transition-colors duration-200">

    @include('components.navbar')

    <main class="flex-1 flex flex-col min-w-0 bg-background-light dark:bg-background-dark relative">
        
        <header class="h-14 bg-white dark:bg-sidebar-dark border-b border-gray-200 dark:border-gray-700 flex items-center justify-between px-6 shadow-sm">
            <div class="flex items-center space-x-2 text-sm">
                <span class="text-gray-400 dark:text-gray-500 cursor-pointer">Events</span>
                <span class="text-gray-300 dark:text-gray-600">/</span>
                <span class="font-medium text-gray-800 dark:text-gray-100">Tiệc cưới nhỏ desktop</span>
            </div>
            <div class="flex items-center space-x-4">
                <button class="bg-primary hover:bg-blue-600 text-white px-4 py-1.5 rounded text-sm font-medium shadow-sm transition-colors flex items-center gap-2">
                    <span class="material-icons-outlined text-sm">save</span>
                    Save Changes
                </button>
                <div class="flex items-center space-x-2 border-l border-gray-200 dark:border-gray-600 pl-4">
                    <button id="darkModeToggle" class="p-1.5 text-gray-400 hover:text-gray-600 dark:hover:text-gray-200 transition-colors">
                        <span class="material-icons-outlined">dark_mode</span>
                    </button>
                </div>
            </div>
        </header>

        @yield('content')

    </main>

    <script>
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.classList.add('dark');
        }
        const toggleBtn = document.getElementById('darkModeToggle');
        if(toggleBtn) {
            toggleBtn.addEventListener('click', () => {
                document.documentElement.classList.toggle('dark');
            });
        }
    </script>
</body>
</html>