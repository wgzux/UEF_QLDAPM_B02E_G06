<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        // Get images
        $images = Gallery::where('type', 'image')
            ->orderBy('created_at', 'desc')
            ->get();
        
        // Get videos
        $videos = Gallery::where('type', 'video')
            ->orderBy('created_at', 'desc')
            ->get();
        
        return view('pages.gallery', compact('images', 'videos'));
    }
}
