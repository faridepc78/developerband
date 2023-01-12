<?php


namespace App\Filters\Project;

use App\Filters\Filter;

class Date extends Filter
{
    protected function applyFilter($builder)
    {
        $keyword = request()->input($this->filterName());

        if ($keyword != null) {
            $date = convertToGregorianDate($keyword, 'Y-m-d');
            return $builder->whereDate('delivery_date', $date);
        } else {
            return $builder;
        }
    }
}
