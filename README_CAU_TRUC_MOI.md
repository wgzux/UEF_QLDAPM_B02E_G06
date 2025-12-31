# 📦 DỰ ÁN THE WANDERING ROSE - CẤU TRÚC MỚI

## 🎯 Tổng quan

Dự án đã được **tái cấu trúc** theo chuẩn Laravel, tách biệt:
- ✅ CSS riêng cho từng component
- ✅ Header & Footer tái sử dụng
- ✅ Layout master cho toàn bộ website
- ✅ Components UI có thể dùng lại (Button, Card...)

---

## 📁 Cấu trúc thư mục

```
UEF_QLDAPM_B02E_G06/
│
├── resources/
│   ├── css/
│   │   ├── components/
│   │   │   ├── header.css         ← CSS cho Header
│   │   │   └── footer.css         ← CSS cho Footer
│   │   └── app.css                ← CSS chung
│   │
│   └── views/
│       ├── components/
│       │   ├── header.blade.php   ← Component Header
│       │   ├── footer.blade.php   ← Component Footer
│       │   ├── button.blade.php   ← Component Button
│       │   └── card.blade.php     ← Component Card
│       │
│       ├── layouts/
│       │   └── app.blade.php      ← Layout master
│       │
│       └── pages/
│           └── home.blade.php     ← Trang Home
│
├── routes/
│   └── web.php                     ← Định nghĩa routes
│
├── vite.config.js                  ← Config Vite
│
└── Các file hướng dẫn:
    ├── TOM_TAT_NHANH.md           ← ĐỌC FILE NÀY TRƯỚC!
    ├── HUONG_DAN_CAU_TRUC.md      ← Chi tiết cấu trúc
    └── HUONG_DAN_COMPONENTS.md    ← Hướng dẫn Components
```

---

## 🚀 Chạy dự án

### **1. Cài đặt dependencies (lần đầu)**
```bash
composer install
npm install
```

### **2. Cấu hình môi trường**
```bash
cp .env.example .env
php artisan key:generate
```

### **3. Chạy development server**

**Terminal 1 - Laravel:**
```bash
php artisan serve
```

**Terminal 2 - Vite (compile CSS/JS):**
```bash
npm run dev
```

### **4. Mở trình duyệt**
```
http://localhost:8000
```

---

## 📚 Đọc các file hướng dẫn

### **1. TOM_TAT_NHANH.md** 📘
- **ĐỌC ĐẦU TIÊN!**
- Giải thích ngắn gọn, dễ hiểu
- Hướng dẫn chạy nhanh

### **2. HUONG_DAN_CAU_TRUC.md** 📗
- Chi tiết về cấu trúc
- Giải thích từng file/folder
- Cách tạo trang mới

### **3. HUONG_DAN_COMPONENTS.md** 📕
- Hướng dẫn sử dụng Components
- Ví dụ cụ thể
- Cách tạo component mới

---

## 🎨 Các thành phần đã tạo

### **CSS Components:**
1. `header.css` - Style cho Header
2. `footer.css` - Style cho Footer

### **Blade Components:**
1. `header.blade.php` - Header (Logo, Menu, Booking)
2. `footer.blade.php` - Footer (Newsletter, Links)
3. `button.blade.php` - Button tái sử dụng
4. `card.blade.php` - Card hiển thị phòng/tin tức

### **Layout:**
1. `app.blade.php` - Layout master (khung xương website)

### **Pages:**
1. `home.blade.php` - Trang chủ

---

## 💡 Workflow làm việc

### **Tạo trang mới:**

1. **Tạo file view:**
   ```
   resources/views/pages/ten-trang.blade.php
   ```

2. **Viết nội dung:**
   ```php
   @extends('layouts.app')
   
   @section('title', 'Tiêu đề trang')
   
   @section('content')
       <h1>Nội dung trang</h1>
   @endsection
   ```

3. **Thêm route:**
   Trong `routes/web.php`:
   ```php
   Route::get('/ten-trang', function () {
       return view('pages.ten-trang');
   });
   ```

4. **Xong!** Trang mới tự động có Header + Footer

---

## 🔧 Các lệnh Laravel hay dùng

```bash
# Chạy server
php artisan serve

# Xem danh sách routes
php artisan route:list

# Clear cache
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Tạo controller
php artisan make:controller TenController

# Tạo model
php artisan make:model TenModel
```

---

## 🔨 Các lệnh NPM hay dùng

```bash
# Chạy dev (compile CSS/JS)
npm run dev

# Build production
npm run build

# Install package
npm install ten-package
```

---

## ❓ Troubleshooting

### **Lỗi: View not found**
→ Kiểm tra đường dẫn view: `pages.home` = `resources/views/pages/home.blade.php`

### **Lỗi: CSS không load**
→ Chạy `npm run dev` trong terminal riêng

### **Lỗi: Route not found**
→ Kiểm tra file `routes/web.php` đã định nghĩa route chưa

### **Thay đổi CSS không cập nhật**
→ Hard refresh trình duyệt (Ctrl + Shift + R hoặc Ctrl + F5)

---

## 📖 Tài liệu tham khảo

- **Laravel Documentation:** https://laravel.com/docs
- **Blade Templates:** https://laravel.com/docs/blade
- **Tailwind CSS:** https://tailwindcss.com/docs
- **Vite:** https://vitejs.dev/guide/

---

## 👥 Thông tin dự án

**Tên dự án:** The Wandering Rose - Luxury Villa Ba Vì  
**Framework:** Laravel 11.x  
**CSS Framework:** Tailwind CSS  
**Build Tool:** Vite  

---

## 📝 Ghi chú

- File `vendor/home.html` và `vendor/about.html` là file gốc (giữ làm tham khảo)
- Tất cả code mới nằm trong `resources/views/`
- CSS mới trong `resources/css/components/`

---

## 🎓 Bước tiếp theo

1. ✅ Đọc `TOM_TAT_NHANH.md`
2. ✅ Chạy dự án: `php artisan serve` + `npm run dev`
3. ✅ Xem trang Home: http://localhost:8000
4. ✅ Thử tạo trang mới theo hướng dẫn
5. ✅ Tìm hiểu về Blade Components trong `HUONG_DAN_COMPONENTS.md`

---

**Chúc bạn code vui vẻ! 🚀**
