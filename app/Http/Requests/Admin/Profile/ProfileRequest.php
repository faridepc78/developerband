<?php

namespace App\Http\Requests\Admin\Profile;

use App\Models\User;
use App\Rules\ValidationMobile;
use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check() == true && auth()->user()->role == User::ADMIN;
    }

    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'unique:users,email,' . auth()->id()],
            'mobile' => ['required', 'numeric', 'digits:11', new ValidationMobile(), 'unique:users,mobile,' . auth()->id()],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
            'avatar' => ['nullable', 'mimes:jpg,png,jpeg', 'max:5120']
        ];
    }

    public function attributes(): array
    {
        return [
            'first_name' => 'نام',
            'last_name' => 'نام خانوادگی',
            'email' => 'ایمیل',
            'mobile' => 'تلفن همراه',
            'password' => 'رمز عبور',
            'avatar' => 'تصویر پروفایل'
        ];
    }
}
