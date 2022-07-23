@extends('layouts.app')
@section('title')
    Books
@endsection
@section('content')
    <x-nav-bar  />

    <div class="container">
        <h2 >Books List => {{ count($books) }} </h2>
        <a href="{{ route('books.create') }}" class="btn btn-success mt-3" style="width: 550px">Create New Book List</a>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @foreach($books as $book)
        <div class="card w-50" style="margin-top: 10px">
            <div class="card-body">
                <h5 class="card-title"> Author => {{ $book['author'] }}</h5>
                <h5 class="card-title">Book Name => {{ $book['name'] }}</h5>

                <a href="{{ route('books.show', $book) }}" class="btn btn-primary" style="width: 300px">More Information</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection
