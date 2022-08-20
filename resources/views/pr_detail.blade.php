@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="{{$product->images}}" alt="" class="w-50">
            </div>
            <div class="col-6">
                <h3>{{$product->name}}</h3>
                <p>{{$product->price}}</p>
                <p>{{$product->description}}</p>
                <button class="btn btn-primary">Add to cart</button>
            </div>
        </div>
    </div>
@endsection