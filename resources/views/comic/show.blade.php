@extends('layouts.app')

@section('content')
<p>{{$comic->title}}</p>
<img src="{{$comic->thumb}}" alt="">
@endsection