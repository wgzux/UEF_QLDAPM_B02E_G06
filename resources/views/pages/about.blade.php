{{-- Trang About - The Wandering Rose --}}
@extends('layouts.app')

@section('title', 'Về Chúng Tôi - The Wandering Rose')

@section('content')


{{-- Hero Section + Navigation --}}
<section class="relative h-[60vh] md:h-[70vh] bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=2070&auto=format&fit=crop');">
    <div class="absolute inset-0 bg-black/40"></div>
    <div class="relative h-full flex flex-col items-center justify-center text-center px-4">
        <div>
            <h1 class="font-display text-5xl md:text-6xl text-white mb-4">Về chúng tôi</h1>
            <p class="text-white/90 text-lg max-w-2xl mx-auto mb-8">Câu chuyện về The Wandering Rose - Nơi nghỉ dưỡng giữa lòng Ba Vì</p>
        </div>
        <nav class="flex justify-center gap-12 text-white text-sm tracking-widest uppercase font-headerUI bg-black/30 rounded-full px-8 py-3 mt-2 shadow-lg backdrop-blur-md">
            <a href="#story" class="hover:text-primary transition">Câu chuyện hình thành villa</a>
            <a href="#vision" class="hover:text-primary transition">Tầm nhìn & giá trị</a>
            <a href="#gallery" class="hover:text-primary transition">Hình ảnh & video</a>
        </nav>
    </div>
</section>

{{-- Section: Câu chuyện hình thành Villa --}}
<section id="story" class="py-20 px-4 md:px-12 bg-[#fdfbf7] scroll-mt-24">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            {{-- Left: Text Content --}}
            <div>
                <h2 class="font-display text-4xl md:text-5xl text-primary mb-6">Câu chuyện hình thành Villa</h2>
                <div class="text-gray-600 leading-relaxed space-y-4 text-justify">
                    <p>
                        The Wandering Rose Villa ra đời từ giấc mơ về một chốn nghỉ dưỡng bình yên giữa lòng Ba Vì xanh mát. Chúng tôi mong muốn tạo nên một villa gần Hà Nội nơi du khách có thể tìm lại sự tĩnh lặng, quên đi nhịp sống ồn ào phố thị.
                    </p>
                    <p>
                        Mỗi góc nhỏ của villa đều được chăm chút tỉ mỉ: khu vườn ngập tràn hoa hồng, bể bơi trong xanh, những căn phòng ấm áp với ánh nắng chan hòa. Không chỉ là một biệt thự nghỉ dưỡng ở Ba Vì, nơi đây còn là điểm hẹn của cảm xúc - dành cho cặp đôi tìm sự lãng mạn, gia đình muốn gần kề, hay nhóm bạn cần khoảng thời gian tái tạo năng lượng.
                    </p>
                    <p>
                        Với khát khao mang lại trải nghiệm trọn vẹn, chúng tôi tin rằng The Wandering Rose Villa sẽ là điểm dừng chân lý tưởng để bạn tận hưởng thiên nhiên, lưu giữ kỷ niệm và tìm lại sự cân bằng trong cuộc sống.
                    </p>
                </div>
            </div>
            
            {{-- Right: 3 Images Grid --}}
            <div class="grid grid-cols-2 gap-4">
                <div class="col-span-2 relative overflow-hidden rounded-lg group">
                    <img alt="Villa View" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=2070&auto=format&fit=crop"/>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img alt="Interior" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?q=80&w=2070&auto=format&fit=crop"/>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img alt="Garden" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.unsplash.com/photo-1602002418082-a4443e081dd1?q=80&w=2070&auto=format&fit=crop"/>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section: Tầm nhìn & Giá trị --}}
<section id="vision" class="py-20 px-4 md:px-12 bg-white scroll-mt-24">
    <div class="max-w-7xl mx-auto">
        <h2 class="font-display text-4xl md:text-5xl text-center text-primary mb-16">Tầm nhìn & giá trị</h2>
        
        {{-- Row 1: Tầm nhìn (Image Left, Text Right) --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
            <div class="relative overflow-hidden rounded-lg">
                <img alt="Tầm nhìn" class="w-full h-96 object-cover" src="https://img.freepik.com/premium-photo/illustration-travel-woman-around-world_945369-6077.jpg"/>
            </div>
            <div>
                <h3 class="font-display text-3xl text-primary mb-6">Tầm nhìn</h3>
                <div class="text-gray-600 leading-relaxed space-y-4 text-justify">
                    <p>
                        The Wandering Rose Villa hướng tới trở thành điểm đến nghỉ dưỡng hàng đầu tại Ba Vì, nơi mỗi vị khách đều cảm nhận được sự bình yên, gần gũi với thiên nhiên và những giá trị sống tích cực.
                    </p>
                    <p>
                        Chúng tôi không ngừng đổi mới, nâng cao chất lượng dịch vụ để mang lại trải nghiệm trọn vẹn, góp phần xây dựng cộng đồng du lịch văn minh, thân thiện và bền vững.
                    </p>
                </div>
            </div>
        </div>
        
        {{-- Row 2: Giá trị (Text Left, Image Right) --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="order-2 lg:order-1">
                <h3 class="font-display text-3xl text-primary mb-6">Giá trị</h3>
                <div class="text-gray-600 leading-relaxed space-y-4 text-justify">
                    <p>
                        - Tận tâm phục vụ khách hàng bằng sự chân thành và chuyên nghiệp.<br>
                        - Đề cao sự riêng tư, an toàn và thoải mái cho từng vị khách.<br>
                        - Gìn giữ và lan tỏa giá trị thiên nhiên, văn hóa địa phương.<br>
                        - Khuyến khích lối sống cân bằng, hướng thiện và sẻ chia.
                    </p>
                </div>
            </div>
            <div class="order-1 lg:order-2 relative overflow-hidden rounded-lg">
                <img alt="Values" class="w-full h-96 object-cover" src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=2070&auto=format&fit=crop"/>
            </div>
        </div>
    </div>
</section>

{{-- Section: Hình ảnh & Video --}}
<section id="gallery" class="py-20 px-4 md:px-12 bg-[#fdfbf7] scroll-mt-24">
    <div class="max-w-7xl mx-auto">
        <h2 class="font-display text-4xl md:text-5xl text-center text-primary mb-12">Hình ảnh & video</h2>
        
        <div class="text-center mb-12">
            <a class="inline-block bg-primary text-white px-8 py-3 rounded text-sm uppercase tracking-wider hover:bg-primary-dark transition" href="#">
                Xem thêm
            </a>
        </div>
        
        {{-- Image Gallery Grid 1 - 4 Images --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
            <div class="relative overflow-hidden rounded-lg group cursor-pointer h-72">
                <img alt="Gallery 1" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=2070&auto=format&fit=crop"/>
            </div>
            <div class="relative overflow-hidden rounded-lg group cursor-pointer h-72">
                <img alt="Gallery 2" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?q=80&w=2070&auto=format&fit=crop"/>
            </div>
            <div class="relative overflow-hidden rounded-lg group cursor-pointer h-72">
                <img alt="Gallery 3" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.unsplash.com/photo-1602002418082-a4443e081dd1?q=80&w=2070&auto=format&fit=crop"/>
            </div>
            <div class="relative overflow-hidden rounded-lg group cursor-pointer h-72">
                <img alt="Gallery 4" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.unsplash.com/photo-1582719508461-905c673771fd?q=80&w=2025&auto=format&fit=crop"/>
            </div>
        </div>
        
        {{-- Navigation arrows 1 --}}
        <div class="flex justify-center mb-16 gap-4">
            <button class="w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center hover:bg-primary-dark transition shadow-lg">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center hover:bg-primary-dark transition shadow-lg">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        
        {{-- Image Gallery Grid 2 - 3 Videos/Images --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="relative overflow-hidden rounded-lg group cursor-pointer h-96">
                <img alt="Video 1" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?q=80&w=2070&auto=format&fit=crop"/>
                <div class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                    <div class="w-16 h-16 bg-white/90 rounded-full flex items-center justify-center">
                        <i class="fas fa-play text-primary text-2xl ml-1"></i>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg group cursor-pointer h-96">
                <img alt="Video 2" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.unsplash.com/photo-1585320806297-9794b3e4eeae?q=80&w=2071&auto=format&fit=crop"/>
                <div class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                    <div class="w-16 h-16 bg-white/90 rounded-full flex items-center justify-center">
                        <i class="fas fa-play text-primary text-2xl ml-1"></i>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg group cursor-pointer h-96">
                <img alt="Video 3" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?q=80&w=2071&auto=format&fit=crop"/>
                <div class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                    <div class="w-16 h-16 bg-white/90 rounded-full flex items-center justify-center">
                        <i class="fas fa-play text-primary text-2xl ml-1"></i>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Navigation arrows 2 --}}
        <div class="flex justify-center gap-4">
            <button class="w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center hover:bg-primary-dark transition shadow-lg">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center hover:bg-primary-dark transition shadow-lg">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
</section>

@endsection
