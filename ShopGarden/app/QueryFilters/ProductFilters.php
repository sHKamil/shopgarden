<?php

namespace App\QueryFilters;

use Cerbero\QueryFilters\QueryFilters;

class ProductFilters extends QueryFilters
{
    public function name($search_key)
    {
        $this->query->where('name', 'like', '%'.$search_key.'%');
    }

    public function category($search_key)
    {
        $this->query->where('category_id', $search_key);
    }
    
}