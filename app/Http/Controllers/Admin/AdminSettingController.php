<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class AdminSettingController extends Controller
{
    public function index()
    {
        $weekendSurcharge = Setting::get('weekend_surcharge_percent', 10);
        
        return view('admin.settings.index', compact('weekendSurcharge'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'weekend_surcharge_percent' => 'required|numeric|min:0|max:100',
        ]);

        Setting::set(
            'weekend_surcharge_percent',
            $request->weekend_surcharge_percent,
            'Phụ thu cuối tuần (%) - Áp dụng cho Thứ 7 và Chủ nhật'
        );

        return redirect()
            ->route('admin.settings.index')
            ->with('success', 'Cập nhật cấu hình thành công!');
    }
}
