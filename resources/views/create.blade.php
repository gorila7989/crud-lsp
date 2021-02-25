@extends('layout.main')

@section('title','Add New Data')

@section('content')
<div class="container">
    <h1>Tambah Data Baru</h1>
    <hr>
    <form action="/save">
    {{csrf_field()}}
<form>
  <div class="mb-3">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" id="title" aria-describedby="title" placeholder="Enter Title">
    <small id="title" class="form-text text-muted"></small>
  </div>
  <div class="mb-3">
    <label for="description">Description</label>
    <input type="text" name="description" class="form-control" id="description" placeholder="Description">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection