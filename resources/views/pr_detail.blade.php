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
                <form action="/add_to_cart" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <button type="submit" class="btn btn-primary">Add to cart</button>
                </form>
            </div>
        </div>
    </div>
@endsection