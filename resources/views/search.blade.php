@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            @if(sizeof($search_result)>0)
                @foreach($search_result as $item)
                    <a href="detail/{{$item->id}}">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ $item->images }}" class="card-img-top mt-3" alt="{{ $item->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->name }}</h5>
                                <p class="card-text">{{ $item->description }}</p>
                                <a href="#" class="btn btn-primary">Add to cart</a>
                            </div>
                        </div>
                    </a>
                @endforeach
            @else
                <h3>Sorry! No result found for your query : {{$query}}</h3>
            @endif

        </div>

    </div>
@endsection