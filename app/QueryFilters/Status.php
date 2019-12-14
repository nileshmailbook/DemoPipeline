<?php

namespace App\QueryFilters;

use App\QueryFilters\Filter;
use Closure;

class Status extends Filter
{
	// public function handle($request, Closure $next)
	// {
	// 	if(!request()->has('status')){
 //            return $next($request);
 //        }

 //        $builder = $next($request);

	// 	return $builder->where('status',request('status'));
	// }	

	protected function applyFilter($builder)
	{
		return $builder->where('status',request('status'));
	}
}