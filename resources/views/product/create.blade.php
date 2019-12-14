@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Product</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('product.store')}}" method="POST" class="form-horizontal" role="form">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="text" name="quantity" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Available</label>
                            <select class="form-control" name="status">
                                <option>out of stock</option>
                                <option>available</option>
                            </select>                             
                        </div>
                
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
