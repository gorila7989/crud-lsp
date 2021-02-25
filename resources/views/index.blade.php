@extends('layout.main')

@section('title','Laravel CRUD')

@section('content')
    <div class="container">

    <h1>Laravel LSP CRUD</h1>
    <hr>

    <a href="/create" class="btn btn-primary mb-1 mt-1">Tambah Data Baru</a>

    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">No</th>
        <th scope="col">Judul</th>
        <th scope="col">Keterangan</th>
        <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($book as $books)
        <tr>
        <th scope="col">1</th>
        <td>{{$books->title}}</td>
        <td>{{$books->description}}</td>
        <td>
            <a href="/edit/{{$books->id}}" class="btn btn-success">Edit</a>
            <a href="/delete/{{$books->id}}" class="btn btn-danger" onclick="confirm('Yakin Untuk Hapus Data ?')">Delete</a>
        </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    </div>
@endsection