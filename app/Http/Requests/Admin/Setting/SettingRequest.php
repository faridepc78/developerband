<?php

namespace App\Http\Requests\Admin\Setting;

use App\Models\User;
use App\Rules\ValidationMobile;
use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check() == true && auth()->user()->role == User::ADMIN;
    }


    public function rules(): array
    {
        return [
            'projects_count' => ['nullable', 'numeric'],
            'customers_count' => ['nullable', 'numeric'],
            'team_count' => ['nullable', 'numeric'],
            'experience_count' => ['nullable', 'numeric'],
            'linkedin' => ['nullable', 'url', 'max:255'],
            'instagram' => ['nullable', 'url', 'max:255'],
            'telegram' => ['nullable', 'url', 'max:255'],
            'whatsapp' => ['nullable', 'url', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'address' => ['nullable', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:255'],
            'mobile1' => ['nullable', 'numeric', 'digits:11', new ValidationMobile()],
            'mobile2' => ['nullable', 'numeric', 'digits:11', new ValidationMobile()]
        ];
    }

    public function attributes(): array
    {
        return [
            'projects_count' => 'تعداد پروژه ها',
            'customers_count' => 'تعداد مشتریان',
            'team_count' => 'تعداد اعضای تیم',
            'experience_count' => 'تعداد سال های تجربه',
            'instagram' => 'اینستاگرام',
            'telegram' => 'تلگرام',
            'whatsapp' => 'واتس اپ',
            'email' => 'ایمیل',
            'address' => 'آدرس',
            'phone' => 'تلفن ثابت',
            'mobile' => 'تلفن همراه',
            'about_page' => 'متن صفحه درباره ما'
        ];
    }
}
