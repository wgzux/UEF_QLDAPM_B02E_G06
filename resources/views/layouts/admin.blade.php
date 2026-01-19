<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>@yield('title','Admin') - The Wandering Rose</title>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body class="min-h-screen bg-gray-100 text-gray-800">
  <div class="flex">
    <aside class="w-64 bg-white border-r border-gray-200 min-h-screen">
      <div class="p-4 border-b">
        <h2 class="font-display text-xl text-primary">Admin</h2>
      </div>
      <nav class="p-4 space-y-2">
        <a href="/admin/rooms" class="block px-3 py-2 rounded hover:bg-gray-50">Rooms</a>
        <a href="/admin/rooms/create" class="block px-3 py-2 rounded hover:bg-gray-50">Add Room</a>
      </nav>
    </aside>

    <main class="flex-1 p-6">
      <header class="mb-6 flex justify-between items-center">
        <div>
          <h1 class="text-2xl font-semibold">@yield('title')</h1>
        </div>
        <div>
          <a href="/" class="text-sm text-gray-600 hover:text-primary">Back to site</a>
        </div>
      </header>

      <section>
        @yield('content')
      </section>
    </main>
  </div>
</body>
</html>
