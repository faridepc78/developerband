<?php

namespace App\Http\Requests\Admin\ProjectGallery;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class ProjectGalleryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check() == true && auth()->user()->role == User::ADMIN;
    }


    public function prepareForValidation()
    {
        return $this->merge([
            'project_id' => request()->route('project_id')
        ]);
    }

    public function rules(): array
    {
        return [
            'image' => ['required', 'mimes:jpg,png,jpeg', 'max:5120']
        ];
    }

    public function attributes(): array
    {
        return [
            'image' => 'تصویر گالری پروژه'
        ];
    }
}
