@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-2">Product Name</div>
            <div class="col-2">Price</div>
            <div class="col-2">Action</div>
        </div>
        @foreach($items as $item)
                <div class="row">
                    <div class="col-3">
                        <img src="{{ $item->images }}" class="card-img-top mt-3" alt="{{ $item->name }}">
                    </div>
                    <div class="col-2">
                        <h5>{{ $item->name }}</h5>
                    </div>
                    <div class="col-2">{{ $item->price }}</div>
                    <div class="col-2"><a href="/delete/{{$item->id}}" class="btn btn-info">Remove</a></div>
                </div>
        @endforeach
    </div>
@endsection