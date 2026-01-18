# 🧩 CÁC COMPONENTS ĐÃ TẠO

## 📋 Danh sách Components

### 1. **Header** (`resources/views/components/header.blade.php`)
- Logo, Menu, Booking bar, Language switcher
- **Cách dùng:** `<x-header />`

### 2. **Footer** (`resources/views/components/footer.blade.php`)
- Newsletter, Links, Contact, Social media
- **Cách dùng:** `<x-footer />`

### 3. **Button** (`resources/views/components/button.blade.php`)
- Nút bấm với nhiều kiểu
- **Cách dùng:**
  ```php
  <x-button>Đặt phòng</x-button>
  <x-button type="outline" href="/booking">Xem thêm</x-button>
  ```

### 4. **Card** (`resources/views/components/card.blade.php`)
- Card hiển thị phòng, tin tức
- **Cách dùng:**
  ```php
  <x-card 
      image="url-hinh-anh"
      title="Deluxe Room"
      description="Mô tả phòng"
      price="2.500.000đ"
      badge="Hot"
      href="/rooms/deluxe"
  />
  ```

---

## 💡 Ví dụ sử dụng trong trang

### **Trang Rooms (Ví dụ)**

```php
{{-- resources/views/pages/rooms.blade.php --}}
@extends('layouts.app')

@section('title', 'Hạng Phòng')

@section('content')
    <div class="container mx-auto py-20">
        <h1 class="text-4xl font-display text-center mb-12">Hạng Phòng</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Sử dụng component Card --}}
            <x-card 
                image="https://images.unsplash.com/photo-1631049307264-da0ec9d70304"
                title="Deluxe Room"
                description="Phòng sang trọng với view núi rừng"
                price="2.500.000đ/đêm"
                badge="Deluxe"
                href="/rooms/deluxe"
            />
            
            <x-card 
                image="https://images.unsplash.com/photo-1566073771259-6a8506099945"
                title="Rose House"
                description="Villa riêng biệt với không gian sang trọng"
                price="5.000.000đ/đêm"
                badge="Hot"
                href="/rooms/rose-house"
            />
            
            <x-card 
                image="https://images.unsplash.com/photo-1602002418082-a4443e081dd1"
                title="Wooden House"
                description="Nhà gỗ ấm cúng giữa lòng thiên nhiên"
                price="3.500.000đ/đêm"
                href="/rooms/wooden-house"
            />
        </div>
        
        {{-- Sử dụng component Button --}}
        <div class="text-center mt-12">
            <x-button type="primary" href="/booking">Đặt phòng ngay</x-button>
            <x-button type="outline" href="/contact">Liên hệ tư vấn</x-button>
        </div>
    </div>
@endsection
```

---

## 🎨 Tùy chỉnh Component

### **Button Component - Các kiểu:**

```php
{{-- Primary (mặc định) --}}
<x-button>Đặt phòng</x-button>

{{-- Outline --}}
<x-button type="outline">Xem thêm</x-button>

{{-- Secondary --}}
<x-button type="secondary">Hủy</x-button>

{{-- Với link --}}
<x-button href="/booking">Đặt ngay</x-button>

{{-- Với class thêm --}}
<x-button class="w-full">Full width button</x-button>
```

### **Card Component - Tùy chọn:**

```php
{{-- Card đơn giản --}}
<x-card 
    image="url"
    title="Tiêu đề"
/>

{{-- Card đầy đủ --}}
<x-card 
    image="url"
    title="Tiêu đề"
    description="Mô tả"
    price="Giá"
    badge="Badge"
    href="link"
/>

{{-- Card với nội dung custom --}}
<x-card image="url" title="Tiêu đề">
    <p>Nội dung tùy chỉnh thêm...</p>
    <button>Custom button</button>
</x-card>
```

---

## 🚀 Tạo Component mới

### **Bước 1: Tạo file**
Tạo file trong `resources/views/components/tên-component.blade.php`

### **Bước 2: Viết code**
```php
{{-- resources/views/components/alert.blade.php --}}
@props(['type' => 'info'])

<div class="alert alert-{{ $type }}">
    {{ $slot }}
</div>
```

### **Bước 3: Sử dụng**
```php
<x-alert type="success">Đặt phòng thành công!</x-alert>
```

---

## 📚 Lợi ích của Components

### ✅ **Tái sử dụng**
- Viết 1 lần, dùng nhiều nơi
- Không phải copy code

### ✅ **Dễ bảo trì**
- Sửa component → tất cả chỗ dùng đều cập nhật
- Không phải tìm và sửa từng chỗ

### ✅ **Code sạch hơn**
- Trang ngắn gọn, dễ đọc
- Logic tách riêng

---

## 💡 Tips

### **Khi nào nên tạo Component?**
- Khi 1 đoạn HTML lặp lại nhiều lần
- Khi muốn tạo UI element tái sử dụng (button, card, modal...)
- Khi muốn code dễ maintain hơn

### **Component vs Include?**
- **Component:** Có props, logic, tái sử dụng linh hoạt
- **Include:** Chỉ đơn giản chèn HTML vào

---

## 🎓 Tổng kết

Bạn đã có:
- ✅ 4 components sẵn dùng (Header, Footer, Button, Card)
- ✅ Hiểu cách tạo component mới
- ✅ Biết cách sử dụng component trong trang

**Hãy thử tạo thêm các component khác như:** Alert, Modal, Navbar, Sidebar...
