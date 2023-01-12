<?php

namespace App\Http\Requests\Admin\Project;

use App\Models\User;
use App\Repositories\ProjectRepository;
use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check() == true && auth()->user()->role == User::ADMIN;
    }

    public function prepareForValidation()
    {
        $projectRepository = resolve(ProjectRepository::class);

        $delivery_date = request()->input('delivery_date');

        if (!empty($delivery_date))
            $new_delivery_date = convertToGregorianDate($delivery_date);
        else
            $new_delivery_date = null;

        return $this->merge([
            'slug' => str_slug_persian(request('slug')),
            'delivery_date' => $new_delivery_date,
            'priority' => $projectRepository->generatePriority()
        ]);
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255', 'unique:projects,name'],
            'slug' => ['required', 'string', 'max:255', 'unique:projects,slug'],
            'customer' => ['nullable', 'string', 'max:255'],
            'text' => ['nullable'],
            'link' => ['required', 'url', 'max:255', 'unique:projects,link'],
            'image' => ['required', 'mimes:jpg,png,jpeg', 'max:5120'],
            'category_id' => ['required', 'exists:categories,id'],
            'delivery_date' => ['nullable', 'date', 'date_format:Y-m-d', 'before:today']
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'نام پروژه',
            'slug' => 'اسلاگ پروژه',
            'customer' => 'مشتری پروژه',
            'text' => 'توضیحات پروژه',
            'link' => 'لینک پروژه',
            'image' => 'تصویر پروژه',
            'category_id' => 'دسته بندی پروژه',
            'delivery_date' => 'تاریخ تحویل پروژه'
        ];
    }

    public function messages(): array
    {
        return [
            'delivery_date.before' => 'فیلد تاریخ تحویل پروژه باید تاریخی قبل از امروز باشد',
        ];
    }
}
