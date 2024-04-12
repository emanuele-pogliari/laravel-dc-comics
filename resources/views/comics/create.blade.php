@extends('layouts/app')
@section('content')
<section>
<div class="container p-5">
  <h2>Add your comic by filling out the form below</h2>
<form class="my-5" action="{{route('comics.store')}}" method="POST">
  @csrf

  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" required>
  </div>

  <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea type="text" class="form-control" id="description" name="description"></textarea>
  </div>

  <div class="mb-3">
      <label for="thumb" class="form-label">Thumb</label>
      <input type="text" class="form-control" id="thumb" name="thumb">
  </div>

  <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="text" class="form-control" id="price" name="price">
  </div>

  <div class="mb-3">
      <label for="series" class="form-label">Series</label>
      <input type="text" class="form-control" id="series" name="series">
  </div>

  <div class="mb-3">
      <label for="sale_date" class="form-label">Sale Date</label>
      <input type="text" class="form-control" id="sale_date" name="sale_date">
  </div>

  <div class="mb-3">
    <label for="type" class="form-label">Type</label>
    <input type="text" class="form-control" id="type" name="type">
  </div>

  <div class="mb-3">
    <label for="type" class="form-label">Artists</label>
    <input type="text" class="form-control" id="artists" name="artists">
  </div>

  <div class="mb-3">
    <label for="writers" class="form-label">Writers</label>
    <input type="text" class="form-control" id="writers" name="writers">
  </div>

  <div class="btn-box text-center mt-5">
  <button type="submit" class="add-comic">Add Comic</button>
</div>

</form>
</div>
</section>
@endsection