<?php
namespace App\Filters;

trait Filterable
{
    public function scopeFilter($query, AbstractFilter $filter)
    {
        $filter->apply($query);
    }
}