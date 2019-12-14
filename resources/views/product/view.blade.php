@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">View Product 
                    <a id="sortasc" href="{{route('product.all')}}?sort=asc" class=" sort float-right btn btn-secondary btn-sm ml-2" title="filter by ascending order"><i class="fa fa-sort-amount-asc"></i></a>
                    <a id="sortdesc" href="{{route('product.all')}}?sort=desc" class="sort float-right btn btn-secondary btn-sm ml-2" title="filter by descing order"><i class="fa fa-sort-amount-desc"></i></a>

                    <a id="statusAV" href="{{route('product.all')}}?status=available" class="float-right btn btn-secondary btn-sm ml-2" title="filter by available products"><i class="fa fa-eye"></i></a>
                    <a id="statusUV" href="{{route('product.all')}}?status=out of stock" class="float-right btn btn-secondary btn-sm ml-2" title="filter by not available products"><i class="fa fa-eye-slash"></i></a>

                    <a href="{{route('product.all')}}" class="float-right btn btn-success btn-sm ml-2">clear filter</a>
                </div>

                <div class="card-body">
                    
                     <table class="table table-hover">
                     	<thead>
                     		<tr>
                     			<th>#</th>
                     			<th>Name</th>
                     			<th>Quantity</th>
                     			<th>Price</th>
                     			<th>Available</th>
                     		</tr>
                     	</thead>
                     	<tbody>
						@foreach($products as $product)
                     		<tr>
                     			<td>{{$loop->iteration}}</td>
                     			<td>{{$product->name}}</td>
                     			<td>{{$product->quantity}}</td>
                     			<td>{{$product->price}}</td>
                     			<td>{{$product->status}}</td>
                     		</tr>
                     	@endforeach
                     	</tbody>
                     </table>
                     {{$products->appends(request()->input())->links()}}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">ApplyFilters</div>
                <div class="card-body">
                    <form action="{{route('product.all')}}?sort=&&status=" method="GET" class="form-horizontal" role="form">
                            <div class="form-group">
                                <label>Order:</label>                                 
                                <select name="sort" id="input" class="form-control">
                                    <option value="">--select--</option>
                                    <option value="asc" @if(app('request')->input('sort')  == 'asc') selected @endif>
                                    Ascending
                                    </option>
                                    <option value="desc" @if(app('request')->input('sort') == 'desc') selected @endif>
                                    Descending
                                    </option>
                                </select>                                
                            </div>
                             <div class="form-group">
                                <label>Status:</label>                                 
                                <select name="status" id="input" class="form-control">
                                    <option value="">--select--</option>
                                    <option value="available" @if(app('request')->input('status') == 'available')selected @endif>Available
                                    </option>
                                    <option value="out of stock" @if(app('request')->input('status') == 'out of stock')selected @endif>
                                        Out Of stock
                                    </option>
                                </select>                                
                            </div>
                    
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary btn-sm">Filter</button>
                                    <a href="{{route('product.all')}}" class="btn btn-success btn-sm">clear filter</a>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

