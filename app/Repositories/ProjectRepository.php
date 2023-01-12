<?php

namespace App\Repositories;

use App\Filters\Project\Date;
use App\Filters\Project\Search;
use App\Models\Project;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pipeline\Pipeline;

class ProjectRepository
{
    public function getLastProject(): Model|Builder|null
    {
        return Project::query()
            ->latest()
            ->first();
    }

    public function generatePriority(): int
    {
        $last_project = $this->getLastProject();

        if (is_null($last_project))
            $priority = 1;
        else
            $priority = ++$last_project->priority;

        return $priority;
    }

    public function store($values): Model|Builder
    {
        return Project::query()
            ->create([
                'name' => $values['name'],
                'slug' => $values['slug'],
                'customer' => $values['customer'],
                'delivery_date' => $values['delivery_date'],
                'text' => $values['text'],
                'priority' => $values['priority'],
                'link' => $values['link'],
                'category_id' => $values['category_id'],
                'image_id' => null
            ]);
    }

    public function addImage($image_id, $id): int
    {
        return Project::query()
            ->where('id', '=', $id)
            ->update([
                'image_id' => $image_id
            ]);
    }

    public function paginateByFilters()
    {
        return app(Pipeline::class)
            ->send(Project::query())
            ->through([
                Search::class,
                Date::class
            ])
            ->thenReturn()
            ->latest()
            ->paginate(10);
    }

    public function findById($id): Model|Collection|Builder|array|null
    {
        return Project::query()
            ->findOrFail($id);
    }

    public function update($values, $image_id, $id): int
    {
        return Project::query()
            ->where('id', '=', $id)
            ->update([
                'name' => $values['name'],
                'slug' => $values['slug'],
                'customer' => $values['customer'],
                'delivery_date' => $values['delivery_date'],
                'text' => $values['text'],
                'priority' => $values['priority'],
                'link' => $values['link'],
                'category_id' => $values['category_id'],
                'image_id' => $image_id
            ]);
    }

    public function paginateForSite($per_page, bool $priority = false): LengthAwarePaginator
    {
        if ($priority == false)
            return Project::query()
                ->latest()
                ->paginate($per_page);
        else
            return Project::query()
                ->orderBy('priority', 'desc')
                ->paginate($per_page);
    }

    public function getNewProjects($limit): Collection|array
    {
        return Project::query()
            ->limit($limit)
            ->orderBy('priority', 'desc')
            ->get();
    }
}
