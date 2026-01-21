<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        return view('pages.experiences');
    }
    
    public function tourBavi()
    {
        return view('pages.experiences.TourBavi');
    }
    
    public function aoVua()
    {
        return view('pages.experiences.AoVua');
    }
    
    public function khoangXanh()
    {
        return view('pages.experiences.KhoangXanh');
    }
    
    public function banDia()
    {
        return view('pages.experiences.BanDia');
    }
}
