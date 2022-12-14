@extends('master')
@section('content')
        <div class="">
                        <div class="col-12">
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                                @foreach($products as $product)
                                                        <div class="carousel-item  {{$product->id==1?'active':''}}">
                                                                <a href="detail/{{$product->id}}">
                                                                        <img src="{{$product->images}}" class="d-block w-100 slider-img" alt="{{$product->name}}" >
                                                                        <div class="carousel-caption">
                                                                                <h3>{{$product->name}}</h3>
                                                                                <p>{{$product->description}}</p>
                                                                        </div>
                                                                </a>
                                                        </div>
                                                @endforeach
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                        </button>
                                </div>
                        </div>
        </div>
@endsection