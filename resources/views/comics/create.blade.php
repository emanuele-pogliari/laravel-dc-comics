@extends('layouts/app')
@section('content')
<section>
<div class="container p-5">
  <h2>Add your comic by filling out the form below</h2>
<form class="my-5" action="{{route('comics.store')}}" method="POST">
  @csrf

  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}">
    @error('title')
          <div class="invalid-feedback">
              {{$message}}
          </div>
      @enderror
  </div>

  <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description"></textarea>
      @error('description')
          <div class="invalid-feedback">
              {{$message}}
          </div>
      @enderror
  </div>

  <div class="mb-3">
      <label for="thumb" class="form-label">Thumb</label>
      <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb')}}">
  </div>

  <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price')}}">
      @error('price')
          <div class="invalid-feedback">
              {{$message}}
          </div>
      @enderror
  </div>

  <div class="mb-3">
      <label for="series" class="form-label">Series</label>
      <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{old('series')}}">
      @error('series')
          <div class="invalid-feedback">
              {{$message}}
          </div>
      @enderror
  </div>

  <div class="mb-3">
      <label for="sale_date" class="form-label">Sale Date</label>
      <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{old('sale_date')}}" placeholder ="Date Format: YYYY-MM-DD">
      @error('sale_date')
          <div class="invalid-feedback">
              {{$message}}
          </div>
      @enderror
  </div>

  <div class="mb-3">
    <label for="type" class="form-label">Type</label>
    <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{old('type')}}">
    @error('type')
          <div class="invalid-feedback">
              {{$message}}
          </div>
      @enderror
  </div>

  <div class="mb-3">
    <label for="artists" class="form-label">Artists</label>
    <input type="text" class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists" value="{{old('artists')}}">
    @error('artists')
          <div class="invalid-feedback">
              {{$message}}
          </div>
      @enderror
  </div>

  <div class="mb-3">
    <label for="writers" class="form-label">Writers</label>
    <input type="text text-black" class="form-control @error('writers') is-invalid @enderror id="writers" name="writers" value="{{old('writers')}}">
    @error('writers')
          <div class="invalid-feedback">
              {{$message}}
          </div>
      @enderror
  </div>

    <div class="btn-box text-center mt-5">
        <button type="submit" class="add-comic">Add Comic</button>
    </div>
</form>
</div>
</section>
@endsection