@extends('layouts.app')
@section('title')
@endsection
@section('content')
    <div class="container">
        <a href="{{ route('books.index') }}" class="btn btn-primary mt-3" style="width: 100px">Back</a>
        <h3>{{$book['author']}} => {{$book['name']}}</h3>
        <div class="card w-50 mt-2">
            <div class="card-body">
                <h5 class="card-title"> Pages Count => {{$book['pages_count']}}</h5>
                <h5 class="card-title">Quantity => {{$book['qt']}}</h5>
                <h5 class="card-title">Created At => {{$book['created_at']}}</h5>

            </div>
        </div>
        <div style="display: flex">
        <a href="{{ route('books.edit', $book['id']) }}" class="btn btn-success" style="margin-top: 10px">Edit</a>
        <form action="{{ route('books.destroy', $book['id']) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" style="margin-top: 10px;margin-left: 10px" >Delete</button>
        </form>
        </div>
    </div>
@endsection
