{{-- Gallery Page - REFACTORED --}}
@extends('layouts.app')

@section('title', 'Gallery Hình Ảnh & Video - The Wandering Rose')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages/gallery.css') }}">
@endpush

@section('content')

{{-- Hero Banner --}}
<div class="gallery-hero">
    <img src="https://images.unsplash.com/photo-1518837695005-2083093ee35b?q=80&w=2070&auto=format&fit=crop" alt="Gallery Hero">
    <div class="gallery-hero-text">
        <h1>Gallery hình ảnh & video</h1>
    </div>
</div>

{{-- Gallery Section --}}
<section class="gallery-section">
    <div class="tab-content active" id="images-content">
        <h2 class="section-title">Hình ảnh</h2>
        
        <div class="gallery-tabs">
            <button class="gallery-tab-btn" data-tab="videos">
                VIDEO <span class="material-icons-outlined" style="font-size: 14px;">arrow_forward</span>
            </button>
        </div>
        
        <div class="gallery-grid" id="gallery-images">
            @forelse($images ?? [] as $index => $item)
                <div class="gallery-item" data-index="{{ $index }}">
                    <img src="{{ $item->file_path ?? $item->url ?? 'https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?q=80&w=400&auto=format&fit=crop' }}" alt="{{ $item->title ?? 'Gallery Image' }}">
                </div>
            @empty
                @for($i = 0; $i < 24; $i++)
                    <div class="gallery-item" data-index="{{ $i }}">
                        <img src="https://images.unsplash.com/photo-{{ 1520250497591 + $i }}?q=80&w=400&auto=format&fit=crop" alt="Gallery {{ $i + 1 }}">
                    </div>
                @endfor
            @endforelse
        </div>
    </div>
    
    <div class="tab-content" id="videos-content">
        <h2 class="section-title">Video</h2>
        
        <div class="gallery-tabs">
            <button class="gallery-tab-btn" data-tab="images">
                Hình ảnh <span class="material-icons-outlined" style="font-size: 14px;">arrow_forward</span>
            </button>
        </div>
        
        <div class="video-grid" id="gallery-videos">
            @forelse($videos ?? [] as $video)
                <div class="video-item" data-video="{{ $video->video_url ?? 'https://www.youtube.com/embed/dQw4w9WgXcQ' }}">
                    <img src="{{ $video->thumbnail ?? 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=80&w=600&auto=format&fit=crop' }}" alt="{{ $video->title ?? 'Video' }}">
                    <div class="play-btn"></div>
                </div>
            @empty
                @for($i = 0; $i < 4; $i++)
                    <div class="video-item" data-video="https://www.youtube.com/embed/dQw4w9WgXcQ">
                        <img src="https://images.unsplash.com/photo-{{ 1600596542815 + $i * 100 }}?q=80&w=600&auto=format&fit=crop" alt="Video {{ $i + 1 }}">
                        <div class="play-btn"></div>
                    </div>
                @endfor
            @endforelse
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
    
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxClose = document.getElementById('lightbox-close');
    const lightboxPrev = document.getElementById('lightbox-prev');
    const lightboxNext = document.getElementById('lightbox-next');
    const galleryItems = document.querySelectorAll('.gallery-item');
    
    let currentIndex = 0;
    const images = Array.from(galleryItems).map(item => item.querySelector('img').src.replace('w=400', 'w=1200'));
    
    galleryItems.forEach((item, index) => {
        item.addEventListener('click', function() {
            currentIndex = index;
            lightboxImg.src = images[currentIndex];
            lightbox.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    });
    
    lightboxClose.addEventListener('click', closeLightbox);
    lightbox.addEventListener('click', function(e) {
        if (e.target === lightbox) closeLightbox();
    });
    
    function closeLightbox() {
        lightbox.classList.remove('active');
        document.body.style.overflow = '';
    }
    
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
    
    document.addEventListener('keydown', function(e) {
        if (lightbox.classList.contains('active')) {
            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowLeft') lightboxPrev.click();
            if (e.key === 'ArrowRight') lightboxNext.click();
        }
    });
    
    const videoModal = document.getElementById('video-modal');
    const videoIframe = document.getElementById('video-iframe');
    const videoModalClose = document.getElementById('video-modal-close');
    const videoItems = document.querySelectorAll('.video-item');
    
    videoItems.forEach(item => {
        item.addEventListener('click', function() {
            const videoUrl = this.dataset.video;
            videoIframe.src = videoUrl + '?autoplay=1';
            videoModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    });
    
    videoModalClose.addEventListener('click', closeVideoModal);
    videoModal.addEventListener('click', function(e) {
        if (e.target === videoModal) closeVideoModal();
    });
    
    function closeVideoModal() {
        videoModal.classList.remove('active');
        videoIframe.src = '';
        document.body.style.overflow = '';
    }
    
    document.addEventListener('keydown', function(e) {
        if (videoModal.classList.contains('active') && e.key === 'Escape'){
            closeVideoModal();
        }
    });
});
</script>
@endpush
