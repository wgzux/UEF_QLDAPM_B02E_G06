# 📚 HƯỚNG DẪN SỬ DỤNG CẤU TRÚC MỚI - THE WANDERING ROSE

## 🎯 Giải thích cấu trúc đã tạo

### 1. **Cấu trúc thư mục**

```
resources/
├── css/
│   ├── components/
│   │   ├── header.css        ← CSS riêng cho Header
│   │   └── footer.css        ← CSS riêng cho Footer
│   ├── app.css               ← CSS chung
│   ├── base.css
│   ├── layout.css
│   └── utilities.css
│
└── views/
    ├── components/
    │   ├── header.blade.php  ← Component Header (tái sử dụng)
    │   └── footer.blade.php  ← Component Footer (tái sử dụng)
    │
    ├── layouts/
    │   └── app.blade.php     ← Layout chính (template master)
    │
    └── pages/
        └── home.blade.php    ← Trang Home (kế thừa layout)
```

---

## 🔍 Chi tiết từng phần

### **A. CSS Components**

#### 📄 `resources/css/components/header.css`
- Chứa CSS cho header (scrollbar, icon lịch, menu underline, logo animation...)
- Tách riêng để dễ quản lý và tái sử dụng

#### 📄 `resources/css/components/footer.css`
- Chứa CSS cho footer (hover effects, social icons, buttons...)
- Độc lập với các phần khác

---

### **B. Blade Components**

#### 📄 `resources/views/components/header.blade.php`
- **Component tái sử dụng** cho Header
- Gồm: Logo, Menu, Booking bar, Language switcher, Phone number
- Cách sử dụng: `<x-header />` ở bất kỳ trang nào

#### 📄 `resources/views/components/footer.blade.php`
- **Component tái sử dụng** cho Footer
- Gồm: Newsletter, Links, Contact info, Social media
- Cách sử dụng: `<x-footer />` ở bất kỳ trang nào

---

### **C. Layout Master**

#### 📄 `resources/views/layouts/app.blade.php`
- **Template chính** cho toàn bộ website
- Chứa:
  - HTML head (meta, fonts, CSS...)
  - Include Header component: `<x-header />`
  - Slot nội dung: `@yield('content')`
  - Include Footer component: `<x-footer />`
- **Tất cả trang đều kế thừa layout này**

---

### **D. Trang Home**

#### 📄 `resources/views/pages/home.blade.php`
- Trang chủ **kế thừa** layout: `@extends('layouts.app')`
- Chỉ chứa **nội dung riêng** của trang Home
- Tự động có Header và Footer từ layout

---

## 🚀 Cách sử dụng

### **1. Tạo trang mới (VD: About)**

```php
{{-- resources/views/pages/about.blade.php --}}
@extends('layouts.app')

@section('title', 'Về Chúng Tôi - The Wandering Rose')

@section('content')
    <h1>Nội dung trang About</h1>
    <p>Viết nội dung ở đây...</p>
@endsection
```

✅ **Tự động có Header + Footer!**

---

### **2. Định nghĩa Route**

Mở file `routes/web.php` và thêm:

```php
<?php

use Illuminate\Support\Facades\Route;

// Trang Home
Route::get('/', function () {
    return view('pages.home');
});

// Trang About
Route::get('/about', function () {
    return view('pages.about');
});

// Trang Rooms
Route::get('/rooms', function () {
    return view('pages.rooms');
});
```

---

### **3. Tạo Component riêng (VD: Button)**

```php
{{-- resources/views/components/button.blade.php --}}
<button class="bg-primary text-white px-6 py-2 rounded hover:bg-primary-dark transition">
    {{ $slot }}
</button>
```

**Cách dùng:**
```php
<x-button>Đặt phòng ngay</x-button>
```

---

## 🎨 Ưu điểm của cấu trúc này

### ✅ **1. Tách biệt rõ ràng**
- CSS cho từng component riêng biệt
- Dễ bảo trì, sửa lỗi

### ✅ **2. Tái sử dụng**
- Header/Footer viết 1 lần, dùng nhiều nơi
- Thay đổi Header → tất cả trang đều cập nhật

### ✅ **3. Dễ mở rộng**
- Thêm trang mới chỉ cần `@extends('layouts.app')`
- Tạo component mới dễ dàng

### ✅ **4. Theo chuẩn Laravel**
- Blade templating (PHP framework Laravel)
- Vite để compile CSS/JS

---

## 🛠️ Các lệnh cần biết

### **Chạy Laravel development server:**
```bash
php artisan serve
```
→ Mở trình duyệt: `http://localhost:8000`

### **Compile CSS/JS với Vite:**
```bash
npm install
npm run dev
```

### **Build production:**
```bash
npm run build
```

---

## 📝 Các file cần chỉnh sửa tiếp

### **1. File `routes/web.php`**
Thêm route cho trang Home:

```php
Route::get('/', function () {
    return view('pages.home');
});
```

### **2. File `vite.config.js`**
Đảm bảo đã cấu hình đúng để compile CSS:

```js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/components/header.css',
                'resources/css/components/footer.css',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
});
```

---

## 💡 Tips

### **Thêm CSS riêng cho 1 trang:**
```php
@section('content')
    <h1>Home</h1>
@endsection

@push('styles')
    <style>
        .custom-style { color: red; }
    </style>
@endpush
```

### **Thêm JS riêng cho 1 trang:**
```php
@push('scripts')
    <script>
        console.log('Custom JS');
    </script>
@endpush
```

---

## 🎓 Kết luận

Bây giờ bạn đã có:
- ✅ Header/Footer tách riêng, tái sử dụng được
- ✅ CSS tách riêng theo component
- ✅ Layout master để tất cả trang kế thừa
- ✅ Trang Home mẫu

**Chỉ cần tạo thêm các trang mới, tất cả đều tự động có Header & Footer!**
