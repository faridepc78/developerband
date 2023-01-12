<?php

namespace App\Repositories;

use App\Models\ProjectGallery;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class ProjectGalleryRepository
{
    public function findGalleryByProjectId($project_id): LengthAwarePaginator
    {
        return ProjectGallery::query()
            ->where('project_id', '=', $project_id)
            ->latest()
            ->paginate(10);
    }

    public function store($values): Model|Builder
    {
        return ProjectGallery::query()
            ->create([
                'project_id' => $values['project_id'],
                'image_id' => null
            ]);
    }

    public function addImage($image_id, $id): int
    {
        return ProjectGallery::query()
            ->where('id', '=', $id)
            ->update([
                'image_id' => $image_id
            ]);
    }

    public function findById($id): Model|Collection|Builder|array|null
    {
        return ProjectGallery::query()
            ->findOrFail($id);
    }
}
