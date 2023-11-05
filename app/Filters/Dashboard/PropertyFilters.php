<?php

namespace App\Filters\Dashboard;

use Essa\APIToolKit\Filters\QueryFilters;

class PropertyFilters extends QueryFilters
{
    protected array $allowedFilters = ['title'];

    protected array $columnSearch = ['title'];
    
    protected array $relationSearch = [
        'type' => ['name']
    ];
}
