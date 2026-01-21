# The Wandering Rose - Villa Management System

Hệ thống quản lý đặt phòng khách sạn/villa chuyên nghiệp, bao gồm trang đặt phòng cho khách hàng (Frontend) và hệ thống quản trị (Admin Dashboard/CMS).

## 🌟 Tính Năng Chính

### 1. Khách Hàng (Customer Portal)
- **Tìm kiếm phòng:** Theo ngày check-in/out, số lượng người.
- **Chi tiết phòng:** Hình ảnh, tiện ích, mô tả chi tiết.
- **Booking Flow (3 bước):**
  1. Chọn ngày & tìm phòng.
  2. Chọn số lượng phòng, thêm vào giỏ.
  3. Nhập thông tin & Xác nhận thanh toán (QR Code).
- **Tra cứu đơn hàng (`/tracking`):** Xem lại đơn hàng, trạng thái thanh toán, mã QR bằng Mã đặt phòng + SĐT.
- **Lịch sử đặt phòng (`/my-bookings`):** Đăng nhập để xem danh sách lịch sử đặt phòng.
- **Trải nghiệm & Dịch vụ:** Xem danh sách Tour, BBQ, Sự kiện.

### 2. Quản Trị Viên (Admin Dashboard)
- **Dashboard (`/admin`):** Thống kê doanh thu tháng, số khách đang lưu trú, booking mới hôm nay.
- **Quản lý Đặt phòng (`/admin/bookings`):**
  - Xem danh sách, lọc theo trạng thái.
  - Xem chi tiết Booking, danh sách khách (Guest List).
  - Cập nhật trạng thái (Xác nhận cọc, Check-in, Check-out, Hủy).
- **CMS Quản lý Nội dung:**
  - **Quản lý Phòng (`/admin/rooms`):** CRUD phòng, cập nhật giá, tiện nghi, upload ảnh.
  - **Quản lý Dịch vụ (`/admin/services`):** CRUD dịch vụ, chỉnh sửa nội dung bài viết (HTML).

## 🛠 Công Nghệ Sử Dụng

- **Backend:** Laravel 11.x, PHP 8.2+
- **Frontend:** Blade Templates, Tailwind CSS (CDN/Custom Config), JavaScript (Vanilla/AlpineJS logic).
- **Database:** MySQL 8.0 / MariaDB / SQLite.
- **Tools:** Artisan, Composer.

## 🚀 Hướng Dẫn Cài Đặt (Setup Guide)

### 1. Yêu Cầu Hệ Thống
- PHP >= 8.2
- Composer
- MySQL/MariaDB

### 2. Cài Đặt
Clone project về máy:
```bash
git clone https://github.com/your-repo/villa-management.git
cd villa-management
```

Cài đặt libraries:
```bash
composer install
```

Cấu hình môi trường:
Copy file `.env.example` thành `.env` và cập nhật thông tin Database:
```bash
cp .env.example .env
```
Mở file `.env` và chỉnh sửa:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=villa_management
DB_USERNAME=root
DB_PASSWORD=
```

Tạo Key:
```bash
php artisan key:generate
```

### 3. Cài Đặt Database & Dữ Liệu Mẫu
Chạy lệnh Migration và Seed (quan trọng để có dữ liệu Admin & Phòng):
```bash
php artisan migrate:fresh --seed
```
*Lưu ý: Lệnh này sẽ **xóa sạch** dữ liệu cũ và tạo dữ liệu chuẩn + dữ liệu demo.*

Link Storage (để hiển thị ảnh upload):
```bash
php artisan storage:link
```

### 4. Chạy Server
```bash
php artisan serve
```
Truy cập: `http://localhost:8000`

## 🔐 Tài Khoản Demo

**Admin Portal:** `http://localhost:8000/admin/login`

| Role | Email | Password |
|------|-------|----------|
| **Admin** | `admin@wanderingrose.com` | `password` |
| **Customer** | (Đăng ký mới hoặc dùng demo) | |

## 🧪 Testing
Chạy bộ test regression để đảm bảo hệ thống ổn định:
```bash
php artisan test
```

## 📝 Cấu Trúc Thư Mục Quan Trọng
- `app/Http/Controllers/Admin`: Controllers quản lý (Booking, Room, Service, Auth).
- `app/Http/Controllers/BookingController.php`: Xử lý luồng đặt phòng chính.
- `resources/views/layouts/admin.blade.php`: Layout Admin (Sidebar, Header).
- `resources/views/pages/booking`: Views đặt phòng (index, cart, details).
- `database/seeders`: Chứa dữ liệu mẫu (quan trọng).

---
*Developed by DeepMind Agent for The Wandering Rose Ba Vi.*
