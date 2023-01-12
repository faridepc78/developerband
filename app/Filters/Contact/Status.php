<?php


namespace App\Filters\Contact;

use App\Filters\Filter;

class Status extends Filter
{
    protected function applyFilter($builder)
    {
        $keyword = request()->input($this->filterName());

        if ($keyword != null) {
            return $builder->where('status', '=', $keyword);
        } else {
            return $builder;
        }
    }
}
