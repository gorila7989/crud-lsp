@extends('layout.main')

@section('title','Edit Data')

@section('content')
<div class="container">
    <h1>Edit Data</h1>
    <hr>

    <form action="{{action('App\Http\Controllers\BooksController@update', $book->id)}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" id="title" aria-describedby="title" placeholder="Enter Title" value="{{$book->title}}">
        <small id="title" class="form-text text-muted"></small>
    </div>
    <div class="mb-3">
        <label for="description">Description</label>
        <input type="text" name="description" class="form-control" id="description" placeholder="Description" value="{{$book->description}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    </div>
    @endsection