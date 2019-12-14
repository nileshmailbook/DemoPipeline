<?php

namespace App\QueryFilters;

use App\QueryFilters\Filter; 

class MaxCount extends Filter
{
	protected function applyFilter($builder)
	{
		return $builder->take(request('max_count'));
	}	
}