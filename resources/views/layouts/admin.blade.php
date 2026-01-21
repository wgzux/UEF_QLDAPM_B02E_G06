<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Dashboard') - The Wandering Rose</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-white flex-shrink-0">
            <div class="p-6">
                <h1 class="text-2xl font-bold">The Wandering Rose</h1>
                <p class="text-sm text-gray-400 mt-1">Admin Dashboard</p>
            </div>

            <nav class="mt-6">
                <a href="{{ route('admin.dashboard') }}" 
                   class="flex items-center px-6 py-3 {{ request()->routeIs('admin.dashboard') ? 'bg-gray-800 border-l-4 border-blue-500' : 'hover:bg-gray-800' }}">
                    <span class="material-icons-outlined mr-3">dashboard</span>
                    Dashboard
                </a>
                <a href="{{ route('admin.bookings.index') }}" 
                   class="flex items-center px-6 py-3 {{ request()->routeIs('admin.bookings.*') ? 'bg-gray-800 border-l-4 border-blue-500' : 'hover:bg-gray-800' }}">
                    <span class="material-icons-outlined mr-3">event_note</span>
                    Quản lý Đơn hàng
                </a>
                <a href="{{ route('admin.rooms.index') }}" 
                   class="flex items-center px-6 py-3 {{ request()->routeIs('admin.rooms.*') ? 'bg-gray-800 border-l-4 border-blue-500' : 'hover:bg-gray-800' }}">
                    <span class="material-icons-outlined mr-3">hotel</span>
                    Quản lý Phòng
                </a>
                <a href="{{ route('admin.services.index') }}" 
                   class="flex items-center px-6 py-3 {{ request()->routeIs('admin.services.*') ? 'bg-gray-800 border-l-4 border-blue-500' : 'hover:bg-gray-800' }}">
                    <span class="material-icons-outlined mr-3">celebration</span>
                    Quản lý Dịch vụ
                </a>
                <a href="{{ route('admin.settings.index') }}" 
                   class="flex items-center px-6 py-3 {{ request()->routeIs('admin.settings.*') ? 'bg-gray-800 border-l-4 border-blue-500' : 'hover:bg-gray-800' }}">
                    <span class="material-icons-outlined mr-3">settings</span>
                    Cấu hình
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top bar -->
            <header class="bg-white shadow-sm">
                <div class="flex justify-between items-center px-8 py-4">
                    <h2 class="text-xl font-semibold text-gray-800">@yield('page-title', 'Dashboard')</h2>
                    
                    <div class="flex items-center space-x-4">
                        <span class="text-sm text-gray-600">{{ Auth::user()->name }}</span>
                        <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf
                            <button type="submit" class="text-sm text-red-600 hover:text-red-800">
                                Đăng xuất
                            </button>
                        </form>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
                <div class="container mx-auto px-6 py-8">
                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                            {{ session('error') }}
                        </div>
                    @endif

                    @yield('content')
                </div>
            </main>
        </div>
    </div>
</body>
</html>
