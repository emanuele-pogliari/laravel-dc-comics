@extends('layouts.app')

@section('content')
<div class="blue-divider"></div>

<div class="part1">
    <div class="container">
        <img class="comic-img"src="{{$comic->thumb}}" alt="">
        <div class="desc-box d-flex">
            <div class="col-8 text">
                <h2 class="text-uppercase">{{$comic->title}}</h2>
                <div class="row green-table p-0">
                    <div class="col-8 d-flex justify-content-between border-end align-items-center py-2">
                        <div class="left">U.S. Price: <span class="text-white">{{$comic->price}}</span></div>
                        <div class="right text-uppercase">Available</div>
                    </div>
                    <div class="col-4 d-flex align-items-center">
                        <p class="text-white m-0">Check Availability</p>
                    </div>
                </div>
                <p>{{$comic->description}}</p>
            </div>
            <div class="col-4 banner-ads d-flex flex-column justify-content-end">
                <div class="align-self-end">Advertisement</div>
                <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
            </div>
        </div>



        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
              <div class="modal-content">
    
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Comic</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
    
                <div class="modal-body">
                  Are you sure to delete {{$comic->title}}
                </div>
    
    
                <div class="modal-footer">
    
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        
                        <button class="btn btn-danger">Delete</button>
                    </form>
    
                </div>
    
              </div>
            </div>
        </div>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Delete Comic
        </button>
            <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-primary">edit</a>
    </div>
</div>
<div class="part2">
    <div class="container">
        <div class="more-info d-flex ">
            
            <div class="talent col-6">
                <h3>Talent</h3>
                <div class="art-box d-flex border-top border-bottom">
                    <div class=" col-4">Art by:</div>
                    <div class="art-credits col-8"><p>{{$comic->artists}}</p></div>
                </div>
                    <div class="write-box d-flex border-bottom">
                        <div class="col-4">Written by:</div>
                
                        <div class="write-credits col-8  "><p>{{$comic->writers}}</p></div>
                    </div>
            </div>
            <div class="specs col-6">
                <h3>Specs</h3>
                <div class="series row">
                    <div class="col-4">
                        Series:
                    </div>
                    <div class="col-8">
                        {{$comic->series}}
                    </div>
                </div>
                <div class="price row">
                    <div class="col-4">
                        U.S. Price:
                    </div>
                    <div class="col-8">
                        {{$comic->price}}
                    </div>
                </div>
                <div class="release-date row">
                    <div class="col-4">
                        On Sale Date:
                    </div>
                    <div class="col-8">
                        {{$comic->sale_date}}
                    </div>
                </div>
                
            </div>
        </div>
        <div class="cta-box"></div>
    </div>
</div>
@endsection

@section('content')

<img src= alt="">
@endsection