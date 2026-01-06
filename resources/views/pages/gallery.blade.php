{{-- Trang Gallery - The Wandering Rose --}}
@extends('layouts.app')

@section('title', 'Gallery Hình Ảnh & Video - The Wandering Rose')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages/gallery.css') }}">
@endpush

@section('content')

{{-- Hero Banner --}}
<div class="gallery-hero">
    <img src="https://images.unsplash.com/photo-1518837695005-2083093ee35b?q=80&w=2070&auto=format&fit=crop" alt="Gallery Hero - Nature landscape with plants">
    <div class="gallery-hero-text">
        <h1>Gallery hình ảnh & video</h1>
    </div>
</div>

{{-- Gallery Section - Hình ảnh & Video --}}
<section class="gallery-section">
    {{-- Section for Images --}}
    <div class="tab-content active" id="images-content">
        <h2 class="section-title">Hình ảnh</h2>
        
        {{-- Tab Buttons --}}
        <div class="gallery-tabs">
            <button class="gallery-tab-btn" data-tab="videos">
                VIDEO <span class="material-icons-outlined" style="font-size: 14px;">arrow_forward</span>
            </button>
        </div>
        
        {{-- Gallery Grid --}}
        <div class="gallery-grid" id="gallery-images">
        {{-- Row 1 --}}
        <div class="gallery-item" data-index="0">
            <img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?q=80&w=400&auto=format&fit=crop" alt="Villa by the lake">
        </div>
        <div class="gallery-item" data-index="1">
            <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=80&w=400&auto=format&fit=crop" alt="Villa exterior with garden">
        </div>
        <div class="gallery-item" data-index="2">
            <img src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?q=80&w=400&auto=format&fit=crop" alt="Room interior with window view">
        </div>
        
        {{-- Row 2 --}}
        <div class="gallery-item" data-index="3">
            <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?q=80&w=400&auto=format&fit=crop" alt="Breakfast setup by lotus pond">
        </div>
        <div class="gallery-item" data-index="4">
            <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?q=80&w=400&auto=format&fit=crop" alt="Relaxing by the deck">
        </div>
        <div class="gallery-item" data-index="5">
            <img src="https://images.unsplash.com/photo-1459411552884-841db9b3cc2a?q=80&w=400&auto=format&fit=crop" alt="Tropical garden">
        </div>
        
        {{-- Row 3 --}}
        <div class="gallery-item" data-index="6">
            <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?q=80&w=400&auto=format&fit=crop" alt="Garden basket">
        </div>
        <div class="gallery-item" data-index="7">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=400&auto=format&fit=crop" alt="Stone wall decoration">
        </div>
        <div class="gallery-item" data-index="8">
            <img src="https://images.unsplash.com/photo-1540206395-68808572332f?q=80&w=400&auto=format&fit=crop" alt="Plants and rocks">
        </div>
        
        {{-- Row 4 --}}
        <div class="gallery-item" data-index="9">
            <img src="https://images.unsplash.com/photo-1500534623283-312aade485b7?q=80&w=400&auto=format&fit=crop" alt="Hand touching grass">
        </div>
        <div class="gallery-item" data-index="10">
            <img src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?q=80&w=400&auto=format&fit=crop" alt="Garden tunnel walkway">
        </div>
        <div class="gallery-item" data-index="11">
            <img src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?q=80&w=400&auto=format&fit=crop" alt="Blue hydrangea flowers">
        </div>
        
        {{-- Row 5 --}}
        <div class="gallery-item" data-index="12">
            <img src="https://images.unsplash.com/photo-1444021465936-c6ca81d39b84?q=80&w=400&auto=format&fit=crop" alt="Pink flowers field">
        </div>
        <div class="gallery-item" data-index="13">
            <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=400&auto=format&fit=crop" alt="Outdoor seating area">
        </div>
        <div class="gallery-item" data-index="14">
            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=400&auto=format&fit=crop" alt="Woman looking out window">
        </div>
        
        {{-- Row 6 --}}
        <div class="gallery-item" data-index="15">
            <img src="https://images.unsplash.com/photo-1560185893-a55cbc8c57e8?q=80&w=400&auto=format&fit=crop" alt="Villa exterior dark">
        </div>
        <div class="gallery-item" data-index="16">
            <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?q=80&w=400&auto=format&fit=crop" alt="Modern living room">
        </div>
        <div class="gallery-item" data-index="17">
            <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?q=80&w=400&auto=format&fit=crop" alt="Bright interior with pool view">
        </div>
        
        {{-- Row 7 --}}
        <div class="gallery-item" data-index="18">
            <img src="https://images.unsplash.com/photo-1600585154363-67eb9e2e2099?q=80&w=400&auto=format&fit=crop" alt="Woman reading by window">
        </div>
        <div class="gallery-item" data-index="19">
            <img src="https://images.unsplash.com/photo-1600573472591-ee6981cf35b6?q=80&w=400&auto=format&fit=crop" alt="Books and diffuser on table">
        </div>
        <div class="gallery-item" data-index="20">
            <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?q=80&w=400&auto=format&fit=crop" alt="Breakfast with coffee">
        </div>
        
        {{-- Row 8 --}}
        <div class="gallery-item" data-index="21">
            <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?q=80&w=400&auto=format&fit=crop" alt="Cozy bedroom">
        </div>
        <div class="gallery-item" data-index="22">
            <img src="https://images.unsplash.com/photo-1579783902614-a3fb3927b6a5?q=80&w=400&auto=format&fit=crop" alt="Art painting on floor">
        </div>
        <div class="gallery-item" data-index="23">
            <img src="https://images.unsplash.com/photo-1513519245088-0e12902e5a38?q=80&w=400&auto=format&fit=crop" alt="Hand drawing map">
        </div>
    </div>
    </div>
    
    {{-- Section for Videos --}}
    <div class="tab-content" id="videos-content">
        <h2 class="section-title">Video</h2>
        
        {{-- Tab Buttons --}}
        <div class="gallery-tabs">
            <button class="gallery-tab-btn" data-tab="images">
                Hình ảnh <span class="material-icons-outlined" style="font-size: 14px;">arrow_forward</span>
            </button>
        </div>
        
        {{-- Video Grid --}}
        <div class="video-grid" id="gallery-videos">
            {{-- Video 1 --}}
            <div class="video-item" data-video="https://www.youtube.com/embed/dQw4w9WgXcQ">
                <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=80&w=600&auto=format&fit=crop" alt="Villa exterior">
                <div class="play-btn"></div>
            </div>
            
            {{-- Video 2 --}}
            <div class="video-item" data-video="https://www.youtube.com/embed/dQw4w9WgXcQ">
                <img src="https://images.unsplash.com/photo-1499793983690-e29da59ef1c2?q=80&w=600&auto=format&fit=crop" alt="Basket weaving">
                <div class="play-btn"></div>
            </div>
            
            {{-- Video 3 --}}
            <div class="video-item" data-video="https://www.youtube.com/embed/dQw4w9WgXcQ">
                <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?q=80&w=600&auto=format&fit=crop" alt="Mountain view">
                <div class="play-btn"></div>
            </div>
            
            {{-- Video 4 --}}
            <div class="video-item" data-video="https://www.youtube.com/embed/dQw4w9WgXcQ">
                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=600&auto=format&fit=crop" alt="Garden villa">
                <div class="play-btn"></div>
            </div>
        </div>
    </div>
</section>

{{-- Video Modal --}}
<div class="video-modal" id="video-modal">
    <span class="video-modal-close" id="video-modal-close">&times;</span>
    <div class="video-modal-content">
        <iframe src="" id="video-iframe" allowfullscreen></iframe>
    </div>
</div>

{{-- Lightbox Modal --}}
<div class="lightbox" id="lightbox">
    <span class="lightbox-close" id="lightbox-close">&times;</span>
    <span class="lightbox-nav lightbox-prev" id="lightbox-prev">&#10094;</span>
    <div class="lightbox-content">
        <img src="" alt="Lightbox Image" id="lightbox-img">
    </div>
    <span class="lightbox-nav lightbox-next" id="lightbox-next">&#10095;</span>
</div>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Tab switching
    const tabBtns = document.querySelectorAll('.gallery-tab-btn');
    const imagesContent = document.getElementById('images-content');
    const videosContent = document.getElementById('videos-content');
    
    tabBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const tab = this.dataset.tab;
            
            if (tab === 'videos') {
                imagesContent.classList.remove('active');
                videosContent.classList.add('active');
            } else {
                videosContent.classList.remove('active');
                imagesContent.classList.add('active');
            }
        });
    });
    
    // Image Lightbox functionality
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxClose = document.getElementById('lightbox-close');
    const lightboxPrev = document.getElementById('lightbox-prev');
    const lightboxNext = document.getElementById('lightbox-next');
    const galleryItems = document.querySelectorAll('.gallery-item');
    
    let currentIndex = 0;
    const images = Array.from(galleryItems).map(item => item.querySelector('img').src.replace('w=400', 'w=1200'));
    
    // Open lightbox
    galleryItems.forEach((item, index) => {
        item.addEventListener('click', function() {
            currentIndex = index;
            lightboxImg.src = images[currentIndex];
            lightbox.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    });
    
    // Close lightbox
    lightboxClose.addEventListener('click', closeLightbox);
    lightbox.addEventListener('click', function(e) {
        if (e.target === lightbox) {
            closeLightbox();
        }
    });
    
    function closeLightbox() {
        lightbox.classList.remove('active');
        document.body.style.overflow = '';
    }
    
    // Navigate lightbox
    lightboxPrev.addEventListener('click', function(e) {
        e.stopPropagation();
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        lightboxImg.src = images[currentIndex];
    });
    
    lightboxNext.addEventListener('click', function(e) {
        e.stopPropagation();
        currentIndex = (currentIndex + 1) % images.length;
        lightboxImg.src = images[currentIndex];
    });
    
    // Keyboard navigation for image lightbox
    document.addEventListener('keydown', function(e) {
        if (lightbox.classList.contains('active')) {
            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowLeft') lightboxPrev.click();
            if (e.key === 'ArrowRight') lightboxNext.click();
        }
    });
    
    // Video Modal functionality
    const videoModal = document.getElementById('video-modal');
    const videoIframe = document.getElementById('video-iframe');
    const videoModalClose = document.getElementById('video-modal-close');
    const videoItems = document.querySelectorAll('.video-item');
    
    // Open video modal
    videoItems.forEach(item => {
        item.addEventListener('click', function() {
            const videoUrl = this.dataset.video;
            videoIframe.src = videoUrl + '?autoplay=1';
            videoModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    });
    
    // Close video modal
    videoModalClose.addEventListener('click', closeVideoModal);
    videoModal.addEventListener('click', function(e) {
        if (e.target === videoModal) {
            closeVideoModal();
        }
    });
    
    function closeVideoModal() {
        videoModal.classList.remove('active');
        videoIframe.src = '';
        document.body.style.overflow = '';
    }
    
    // Keyboard navigation for video modal
    document.addEventListener('keydown', function(e) {
        if (videoModal.classList.contains('active')) {
            if (e.key === 'Escape') closeVideoModal();
        }
    });
});
</script>
@endpush
