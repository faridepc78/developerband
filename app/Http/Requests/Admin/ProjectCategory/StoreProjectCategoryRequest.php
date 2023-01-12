<?php

namespace App\Http\Requests\Admin\ProjectCategory;

use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProjectCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check() == true && auth()->user()->role == User::ADMIN;
    }

    public function prepareForValidation()
    {
        return $this->merge([
            'slug' => str_slug_persian(request()->input('slug'))
        ]);
    }

    public function rules(): array
    {
        $name = request()->input('name');
        $slug = request()->input('slug');

        return [
            'name' => ['required', 'string', 'max:255',
                Rule::unique('categories')->where(function ($query) use ($name) {
                    return $query->where('name', '=', $name)
                        ->where('type', '=', Category::Project);
                })],
            'slug' => ['required', 'string', 'max:255',
                Rule::unique('categories')->where(function ($query) use ($slug) {
                    return $query->where('slug', '=', $slug)
                        ->where('type', '=', Category::Project);
                })]
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'نام دسته بندی',
            'slug' => 'اسلاگ دسته بندی'
        ];
    }
}
