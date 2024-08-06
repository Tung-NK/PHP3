<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
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
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // // Bài 1
            // 'email' => 'required|email|exists:users,email',
            // 'password' => 'required|mi8n:|same:confirmed',
            // 'password_confirmation' => 'required'

            // Bài 2
            // 'email' => 'required|email|unique:users,email,' . $this -> user_id,
            // 'age' => 'nullable|integer|min:18|max:100',
            // 'avata' => 'nullable|file|mimes:jpeg,png,jpg|max:2048'

            // Bài 3
            // 'is_shipping_address_same' => 'required|boolean',
            // 'shipping_address' => 'required_if:is_shipping_address_same,true',

            // Bài 4
            // 'user_id' => 'required|exists:users,user_id',
            // 'vote_star' => 'required|integer|digits_between:1,5',
            // 'feedback' => 'required|string|min:50|max:500'

            // Bài 5
            // 'name' => 'required|string|min:5|max:20',
            // 'birth_day' => 'required|date_format:d/m/Y',
            // 'province' => 'nullable|string',
            // 'district' => 'string|required_if:province,!null',

            // Bài 6
            'username' => 'required|unique:users,username',
            'phone_number' => 'nullable|regex:(/^(+?[\d\s-()]{7,15})$/)',

        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Khong duoc de trong email',
            'email.email' => 'Phai dung dinh dang email',
            'email.exists' => 'Email khong ton tai',
            'password.required' => 'Mat khau khong duoc de trong',
            'password.min' => 'Mat khau dai hon 8 ki tu',
            'password.confirmed' => 'Mật khẩu xác nhận không khớp',
            'password_confirmation.required' => 'Mat khau khong duoc de trong',

        ];
    }
}
