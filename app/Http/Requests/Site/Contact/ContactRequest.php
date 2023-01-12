<?php

namespace App\Http\Requests\Site\Contact;

use App\Rules\ValidationMobile;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255', 'email'],
            'mobile' => ['required', 'numeric', 'digits:11', new ValidationMobile()],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string']
        ];
    }

    public function attributes(): array
    {
        return [
            'first_name' => 'نام',
            'last_name' => 'نام خانوادگی',
            'email' => 'ایمیل',
            'mobile' => 'تلفن همراه',
            'subject' => 'موضوع',
            'message' => 'پیام'
        ];
    }
}
