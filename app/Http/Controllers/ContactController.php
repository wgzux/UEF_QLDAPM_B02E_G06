<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Http\Requests\StoreContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display contact page
     */
    public function index()
    {
        return view('pages.contact');
    }
    
    /**
     * Store contact message
     */
    public function store(StoreContactRequest $request)
    {
        try {
            // Create contact message
            ContactMessage::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'subject' => $request->subject ?? 'Liên hệ từ website',
                'message' => $request->message,
                'is_read' => false,
            ]);
            
            return back()->with('success', 'Cảm ơn bạn đã liên hệ! Chúng tôi sẽ phản hồi sớm nhất có thể.');
            
        } catch (\Exception $e) {
            return back()
                ->withInput()
                ->with('error', 'Có lỗi xảy ra. Vui lòng thử lại sau.');
        }
    }
}
