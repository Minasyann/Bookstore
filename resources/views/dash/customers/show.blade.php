@extends('layouts.app')
@section('title')
@endsection
@section('content')
    <div class="container">
        <a href="{{ route('customers.index') }}" class="btn btn-primary mt-3">Back</a>
        <div class="card w-50 mt-2">
            <div class="card-body">
                <h2 class="card-title">{{$customer['name']}}</h2>
                <h2 class="card-title">{{$customer['email']}}</h2>
                <h2 class="card-title">{{$customer['email']}}</h2>
                <h2 class="card-title">{{$customer['address']}}</h2>
                <h2 class="card-title">{{$customer['phone']}}</h2>
                <h2 class="card-title">{{$customer['passport_num']}}</h2>
                <h2 class="card-title">Created At` {{$customer['created_at']}}</h2>
                <a href="{{ route('customers.edit', $customer['id']) }}" class="btn btn-success">Edit</a>
                <form action="{{ route('customers.destroy', $customer['id']) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" style="margin-top: 5px">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection

