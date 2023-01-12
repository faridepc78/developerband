<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class CategoryRepository
{
    public function store($values, $type): Model|Builder
    {
        return Category::query()
            ->create([
                'name' => $values['name'],
                'slug' => $values['slug'],
                'type' => $type
            ]);
    }

    public function paginate($type): LengthAwarePaginator
    {
        return Category::query()
            ->where('type', '=', $type)
            ->latest()
            ->paginate(10);
    }

    public function findById($id): Model|Collection|Builder|array|null
    {
        return Category::query()
            ->findOrFail($id);
    }

    public function update($values, $id): int
    {
        return Category::query()
            ->where('id', '=', $id)
            ->update([
                'name' => $values['name'],
                'slug' => $values['slug']
            ]);
    }

    public function getAll($type): Collection|array
    {
        return Category::query()
            ->where('type', '=', $type)
            ->get();
    }
}
