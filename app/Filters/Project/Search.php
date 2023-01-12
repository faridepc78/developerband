<?php


namespace App\Filters\Project;

use App\Filters\Filter;

class Search extends Filter
{
    protected function applyFilter($builder)
    {
        $keyword = request()->input($this->filterName());

        if ($keyword != null) {
            return $builder->where('name', 'like', '%' . $keyword . '%');
        } else {
            return $builder;
        }
    }
}
