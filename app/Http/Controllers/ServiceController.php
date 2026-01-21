<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('pages.servicesandevents');
    }
    
    public function sinhNhat()
    {
        return view('pages.services.SinhNhatDesktop');
    }
    
    public function teamBuilding()
    {
        return view('pages.services.TeamBuildingDesktop');
    }
    
    public function tiecCuoi()
    {
        return view('pages.services.TiecCuoiNhoDesktop');
    }
    
    public function kyNiem()
    {
        return view('pages.services.KyNiemDesktop');
    }
}

