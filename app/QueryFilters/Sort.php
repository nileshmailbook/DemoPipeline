<?php

namespace App\QueryFilters;

use App\QueryFilters\Filter;
use Closure;

class Sort extends Filter
{
	// public function handle($request, Closure $next)
	// {
	// 	if(!request()->has('sort')){
 //            return $next($request);
 //        }

 //        $builder = $next($request);

	// 	return $builder->orderBy('name',request('sort'));
	// }

	protected function applyFilter($builder)
	{
		return $builder->orderBy('name',request('sort'));
	}	
}