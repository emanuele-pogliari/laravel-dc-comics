@extends('layouts.app')

@section('content')


@foreach ($comics as $comic)

<div><a href="{{route('comics.show', $comic->id)}}">Ciao Christian</a></div>
    
@endforeach
@endsection