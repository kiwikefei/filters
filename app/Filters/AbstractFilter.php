<?php
namespace App\Filters;

abstract class AbstractFilter
{
   protected $filters = []; 
   protected $query;

   public function apply($query)
   {
        $this->query = $query;
        foreach($this->getRequestFilters() as $filter => $value){
            if(method_exists($this,$filter)){
                $this->$filter($value);
            }
        }
   }

   protected function getRequestFilters()
   {
       return request()->only($this->filters);
   }
}