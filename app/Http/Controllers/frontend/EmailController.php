<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Contact;
use App\Models\ServicePricing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendContactMail(Request $request)
    {
        // dd($request->toArray());

        $data = $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'website' => 'nullable|string|max:255',
            'message' => 'nullable|string',
            'service_id' => 'nullable|exists:service_pricings,id',
        ]);
        // Lưu vào bảng contacts
        Contact::create([
            'name' => $data['name'] ?? '',
            'email' => $data['email'],
            'phone' => $data['phone'] ?? '',
            'website' => $data['website'] ?? '',
            'message' => $data['message'] ?? '',
            'service_id' => $data['service_id'] ?? null,
        ]);
        $emailAdmin = config('mail.to');
        // dd($emailAdmin);
        if ($request->service_id) {
            $service = ServicePricing::with('category')->find($request->service_id);

            $data['service_name'] = $service->name;
            $data['category_name'] = $service->category->name ?? 'Không có';

        }
        // dd($data);
        // Gửi email
        Mail::to($emailAdmin)->queue(new ContactMail($data));

        return response()->json([
            'success' => true,
            'message' => 'Đã gửi yêu cầu tư vấn dịch vụ thành công!',
        ]);
    }
}