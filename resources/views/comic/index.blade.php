@extends('layouts.app')

@section('content')



<main>
    <div class="content-container">
        <div class="current-series">Current Series</div>
        <div class="content">
            <div class="row justify-content-between  ">
        @foreach($comics as $comic)
        <div class="col-12 col-md-6 col-lg-2 px-4 mb-5">
        <a class="text-white text-decoration-none my-link d-inline-block "href="{{route('comics.show', $comic->id)}}">
                <div class="comic">
                    <img class="mb-3 img-fluid" src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                    <h4>{{ $comic['series'] }}</h4>
                </div>
            </a>
        </div>
        @endforeach  
        
                       
        </div>
    </div>
        <div class="text-center">
        <button class="load-btn">Load More</button> 
    </div> 
    </div>
    <div class="ecommerce-container">
        <ul>
            @foreach($links as $link)
            <li>
                <img src="{{ Vite::asset('resources' . $link['image'])}}">
                <p>{{ $link['name'] }}</p>
            </li>
            @endforeach
        </ul>
    </div>
    
</main>

@endsection