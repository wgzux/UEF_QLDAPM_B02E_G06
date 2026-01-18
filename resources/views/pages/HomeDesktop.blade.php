<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Wandering Rose Villa Ba Vì</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/pages/HomeDesktop.css') }}">

</head>
<body>

    <header class="header">
        <div class="container header-content">
            <div class="logo">
                <h2>THE WANDERING ROSE</h2>
            </div>
            
            <nav class="navbar">
                <a href="#" class="active">TRANG CHỦ</a>
                <a href="#">VỀ CHÚNG TÔI</a>
                <a href="#">HẠNG PHÒNG</a>
                <a href="#">DỊCH VỤ SỰ KIỆN</a>
                <a href="#">TRẢI NGHIỆM & TOUR</a>
                <a href="#">LIÊN HỆ</a>
            </nav>

            <div class="header-actions">
                <div class="phone">
                    <i class="fa-solid fa-phone"></i> 092 981 6699
                </div>
                <div class="lang-switch">
                    <span class="active">VI</span> | <span>EN</span>
                </div>
                <a href="#" class="btn btn-outline-light">ĐẶT PHÒNG</a>
            </div>
        </div>
    </header>

    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>The Wandering Rose Villa</h1>
            <p>Hòa mình vào thiên nhiên Ba Vì</p>
        </div>
    </section>

    <div class="booking-bar-wrapper">
        <div class="booking-bar">
            <div class="booking-item">
                <label>CHECK-IN</label>
                <input type="date" placeholder="mm/dd/yyyy">
            </div>
            <div class="booking-item">
                <label>CHECK-OUT</label>
                <input type="date" placeholder="mm/dd/yyyy">
            </div>
            <div class="booking-item">
                <label>KHÁCH</label>
                <select>
                    <option>2 Người lớn, 1 Trẻ em</option>
                    <option>4 Người lớn</option>
                </select>
            </div>
            <button class="btn btn-primary">ĐẶT LỊCH VỚI GIÁ TỐT NHẤT</button>
        </div>
    </div>

    <section class="section container intro-section">
        <div class="row">
            <div class="col-text text-right">
                <h2 class="heading-font text-primary">Vị trí & Không gian</h2>
                <p>The Wandering Rose Villa nằm ẩn mình giữa núi rừng Ba Vì hùng vĩ. Không gian được thiết kế mở, tận dụng tối đa ánh sáng tự nhiên và gió trời, mang lại cảm giác thư thái tuyệt đối cho du khách.</p>
                <a href="#" class="btn btn-outline-primary">XEM THÊM <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="col-img">
                <img src="https://images.unsplash.com/photo-1587061949409-02df41d5e562?q=80&w=2070&auto=format&fit=crop" alt="Vị trí">
            </div>
        </div>
    </section>

    <section class="section container intro-section">
        <div class="row reverse">
            <div class="col-text text-left">
                <h2 class="heading-font text-primary">Hoà mình vào thiên nhiên</h2>
                <p>Mỗi góc nhỏ tại đây đều được chăm chút tỉ mỉ, từ những khóm hoa hồng rực rỡ đến những lối đi lát đá mộc mạc. Hãy để tâm hồn bạn được "lang thang" và tìm lại sự cân bằng vốn có.</p>
                <a href="#" class="btn btn-outline-primary">XEM THÊM <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="col-img">
                <img src="https://images.unsplash.com/photo-1449844908441-8829872d2607?q=80&w=2070&auto=format&fit=crop" alt="Thiên nhiên">
            </div>
        </div>
    </section>

    <section class="section bg-light">
        <div class="container">
            <h2 class="heading-font text-center text-primary mb-50">Quyền lợi khi đặt phòng</h2>
            <div class="amenities-grid">
                <div class="amenity-item">
                    <div class="icon-box"><i class="fa-solid fa-wifi"></i></div>
                    <h3>Wifi 24/7</h3>
                    <p>Kết nối tốc độ cao toàn khu vực</p>
                </div>
                <div class="amenity-item">
                    <div class="icon-box"><i class="fa-solid fa-water-ladder"></i></div>
                    <h3>Hồ bơi</h3>
                    <p>Bể bơi vô cực view núi</p>
                </div>
                <div class="amenity-item">
                    <div class="icon-box"><i class="fa-solid fa-bicycle"></i></div>
                    <h3>Xe đạp miễn phí</h3>
                    <p>Dạo quanh khuôn viên xanh mát</p>
                </div>
                <div class="amenity-item">
                    <div class="icon-box"><i class="fa-solid fa-fire-burner"></i></div>
                    <h3>BBQ ngoài trời</h3>
                    <p>Tiệc nướng sân vườn ấm cúng</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container text-center">
            <h2 class="heading-font text-primary mb-50">Các hạng phòng</h2>
        </div>
        
        <div class="room-scroll-container">
            <div class="room-card">
                <div class="room-img" style="background-image: url('https://images.unsplash.com/photo-1613490493576-7fde63acd811?q=80&w=2071&auto=format&fit=crop');"></div>
                <div class="room-info">
                    <h3 class="heading-font text-primary">The Wandering Rose Villa</h3>
                    <div class="room-specs">
                        <span><i class="fa-solid fa-user"></i> 16 người lớn</span>
                        <span><i class="fa-solid fa-ruler-combined"></i> 100m²</span>
                        <span><i class="fa-solid fa-bed"></i> 8 đệm</span>
                    </div>
                    <a href="#" class="btn btn-primary btn-block">XEM CHI TIẾT</a>
                </div>
            </div>

            <div class="room-card">
                <div class="room-img" style="background-image: url('https://images.unsplash.com/photo-1598928506311-c55ded91a20c?q=80&w=2070&auto=format&fit=crop');"></div>
                <div class="room-info">
                    <h3 class="heading-font text-primary">Forest Room</h3>
                    <div class="room-specs">
                        <span><i class="fa-solid fa-user"></i> 2 người lớn</span>
                        <span><i class="fa-solid fa-ruler-combined"></i> 18m²</span>
                        <span><i class="fa-solid fa-bed"></i> 1 giường</span>
                    </div>
                    <a href="#" class="btn btn-outline-primary btn-block">XEM CHI TIẾT</a>
                </div>
            </div>

             <div class="room-card">
                <div class="room-img" style="background-image: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=2070&auto=format&fit=crop');"></div>
                <div class="room-info">
                    <h3 class="heading-font text-primary">Deluxe Room</h3>
                    <div class="room-specs">
                        <span><i class="fa-solid fa-user"></i> 4 người lớn</span>
                        <span><i class="fa-solid fa-ruler-combined"></i> 25m²</span>
                        <span><i class="fa-solid fa-bed"></i> 2 giường</span>
                    </div>
                    <a href="#" class="btn btn-outline-primary btn-block">XEM CHI TIẾT</a>
                </div>
            </div>

             <div class="room-card">
                <div class="room-img" style="background-image: url('https://images.unsplash.com/photo-1518780664697-55e3ad937233?q=80&w=1965&auto=format&fit=crop');"></div>
                <div class="room-info">
                    <h3 class="heading-font text-primary">Pink Rose House</h3>
                    <div class="room-specs">
                        <span><i class="fa-solid fa-user"></i> 2 người lớn</span>
                        <span><i class="fa-solid fa-ruler-combined"></i> 24m²</span>
                        <span><i class="fa-solid fa-bed"></i> 1 giường</span>
                    </div>
                    <a href="#" class="btn btn-outline-primary btn-block">XEM CHI TIẾT</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-dark">
        <div class="container text-center">
            <h2 class="heading-font text-white mb-50">Các khu tại The Wandering Rose</h2>
        </div>
        <div class="zones-grid container">
            <div class="zone-card">
                <div class="zone-img" style="background-image: url('https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?q=80&w=2070&auto=format&fit=crop');"></div>
                <h3 class="heading-font text-white">KHU ROSE HOUSE</h3>
                <a href="#" class="btn btn-outline-light">TÌM HIỂU THÊM</a>
            </div>
            <div class="zone-card">
                <div class="zone-img" style="background-image: url('https://images.unsplash.com/photo-1449156493391-d2cfa28e468b?q=80&w=2074&auto=format&fit=crop');"></div>
                <h3 class="heading-font text-white">KHU WOODEN HOUSE</h3>
                <p class="text-white zone-desc">Chốn dừng chân lý tưởng cho những ai kiếm tìm sự ấm áp, bình yên và nhịp sống chậm rãi.</p>
                <a href="#" class="btn btn-outline-light">TÌM HIỂU THÊM</a>
            </div>
            <div class="zone-card">
                <div class="zone-img" style="background-image: url('https://images.unsplash.com/photo-1600596542815-e328d4de4bf7?q=80&w=2070&auto=format&fit=crop');"></div>
                <h3 class="heading-font text-white">KHU VILLA</h3>
                <a href="#" class="btn btn-outline-light">TÌM HIỂU THÊM</a>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container text-center">
            <h2 class="heading-font text-primary mb-50">Dịch vụ sự kiện</h2>
        </div>
        <div class="services-grid container">
            <div class="service-item" style="background-image: url('https://images.unsplash.com/photo-1530103862676-de3c9a59aa57?q=80&w=2070&auto=format&fit=crop');">
                <div class="service-overlay">
                    <h3 class="heading-font">Tổ chức sinh nhật</h3>
                    <a href="#" class="btn btn-outline-light btn-sm">ĐẶT LỊCH</a>
                </div>
            </div>
            <div class="service-item" style="background-image: url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop');">
                <div class="service-overlay">
                    <h3 class="heading-font">Teambuilding</h3>
                    <a href="#" class="btn btn-outline-light btn-sm">ĐẶT LỊCH</a>
                </div>
            </div>
            <div class="service-item" style="background-image: url('https://images.unsplash.com/photo-1519741497674-611481863552?q=80&w=2070&auto=format&fit=crop');">
                <div class="service-overlay">
                    <h3 class="heading-font">Tiệc cưới nhỏ</h3>
                    <a href="#" class="btn btn-outline-light btn-sm">ĐẶT LỊCH</a>
                </div>
            </div>
             <div class="service-item" style="background-image: url('https://images.unsplash.com/photo-1511795409834-ef04bbd61622?q=80&w=2069&auto=format&fit=crop');">
                <div class="service-overlay">
                    <h3 class="heading-font">Đặt sự kiện riêng</h3>
                    <a href="#" class="btn btn-outline-light btn-sm">ĐẶT LỊCH</a>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section bg-primary text-center">
        <div class="container">
            <h2 class="heading-font text-white">Đặt lịch với The Wandering Rose</h2>
            <p class="text-white mb-20">Trải nghiệm không gian nghỉ dưỡng tuyệt vời ngay hôm nay.</p>
            <a href="#" class="btn btn-light text-primary">BOOK PHÒNG</a>
        </div>
    </section>

    <footer class="footer bg-dark">
        <div class="container">
            <div class="footer-top">
                <div class="footer-col logo-col">
                    <h2 class="heading-font text-white">THE WANDERING ROSE</h2>
                </div>
                <div class="footer-col">
                    <h4>THÔNG TIN</h4>
                    <ul>
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#">Về chúng tôi</a></li>
                        <li><a href="#">Hạng phòng</a></li>
                        <li><a href="#">Tin tức</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>KHÁM PHÁ</h4>
                    <ul>
                        <li><a href="#">Khu Rose House</a></li>
                        <li><a href="#">Khu Wooden House</a></li>
                        <li><a href="#">Khu Villa</a></li>
                        <li><a href="#">Sự kiện âm nhạc</a></li>
                    </ul>
                </div>
                <div class="footer-col contact-col">
                    <h4>LIÊN HỆ</h4>
                    <p><i class="fa-solid fa-phone"></i> 092 981 6699</p>
                    <p><i class="fa-solid fa-envelope"></i> booking@thewanderingrosebavi.com</p>
                    <p><i class="fa-solid fa-location-dot"></i> Thôn Mít Mái, Ba Vì, Hà Nội</p>
                    <a href="#" class="btn btn-outline-light btn-sm mt-10">GỬI LIÊN HỆ</a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© Copyright 2025 The Wandering Rose</p>
                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>