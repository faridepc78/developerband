<?php


namespace App\Filters\Contact;

use App\Filters\Filter;

class Date extends Filter
{
    protected function applyFilter($builder)
    {
        $keyword = request()->input($this->filterName());

        if ($keyword != null) {
            $date = convertToGregorianDate($keyword, 'Y-m-d');
            return $builder->whereDate('created_at', $date);
        } else {
            return $builder;
        }
    }
}
