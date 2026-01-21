<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;

class StoreBookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'customer_name' => ['required', 'string', 'max:255'],
            'customer_email' => ['required', 'email', 'max:255'],
            'customer_phone' => ['required', 'string', 'regex:/^[0-9]{10,11}$/'],
            'customer_address' => ['nullable', 'string', 'max:500'],
            'check_in_date' => ['required', 'date', 'after_or_equal:today'],
            'check_out_date' => ['required', 'date', 'after:check_in_date'],
            'number_of_adults' => ['required', 'integer', 'min:1', 'max:20'],
            'number_of_children' => ['nullable', 'integer', 'min:0', 'max:10'],
            
            // Multi-room booking support
            'selected_rooms' => ['required', 'array', 'min:1'],
            'selected_rooms.*.room_type_id' => ['required', 'exists:room_types,id'],
            'selected_rooms.*.quantity' => ['required', 'integer', 'min:1', 'max:10'],
            
            'services' => ['nullable', 'array'],
            'services.*' => ['exists:services,id'],
            'special_requests' => ['nullable', 'string', 'max:1000'],
        ];
    }

    /**
     * Get custom validation messages
     */
    public function messages(): array
    {
        return [
            'customer_name.required' => 'Vui lòng nhập họ và tên.',
            'customer_email.required' => 'Vui lòng nhập địa chỉ email.',
            'customer_email.email' => 'Email không hợp lệ.',
            'customer_phone.required' => 'Vui lòng nhập số điện thoại.',
            'customer_phone.regex' => 'Số điện thoại phải có 10-11 chữ số.',
            'check_in_date.required' => 'Vui lòng chọn ngày check-in.',
            'check_in_date.after_or_equal' => 'Ngày check-in phải từ hôm nay trở đi.',
            'check_out_date.required' => 'Vui lòng chọn ngày check-out.',
            'check_out_date.after' => 'Ngày check-out phải sau ngày check-in.',
            'number_of_adults.required' => 'Vui lòng nhập số người lớn.',
            'number_of_adults.min' => 'Phải có ít nhất 1 người lớn.',
            'selected_rooms.required' => 'Vui lòng chọn ít nhất 1 phòng.',
            'selected_rooms.*.room_type_id.required' => 'Loại phòng không hợp lệ.',
            'selected_rooms.*.room_type_id.exists' => 'Loại phòng không tồn tại.',
            'selected_rooms.*.quantity.required' => 'Số lượng phòng không hợp lệ.',
            'selected_rooms.*.quantity.min' => 'Số lượng phòng phải lớn hơn 0.',
        ];
    }

    /**
     * Prepare the data for validation
     */
    protected function prepareForValidation()
    {
        // Convert date formats if needed
        if ($this->check_in_date) {
            $this->merge([
                'check_in_date' => Carbon::parse($this->check_in_date)->format('Y-m-d'),
            ]);
        }
        
        if ($this->check_out_date) {
            $this->merge([
                'check_out_date' => Carbon::parse($this->check_out_date)->format('Y-m-d'),
            ]);
        }
    }
}
