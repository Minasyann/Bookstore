@extends('layouts.app')
@section('title')
@endsection
@section('content')
    <x-nav-bar  />

    <div class="container">
        <a href="{{route("customers.create")}}" class="btn btn-success mt-3">Create New customer</a>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <h2>Customer List ( {{ count($customers) }} )</h2>

        @foreach($customers as $customer)
            <div class="card w-50">
                <div class="card-body">
                    <h2 class="card-title"> Name` {{ $customer['name'] }}</h2>
                    <h2 class="card-title">Email` {{ $customer['email'] }}</h2>

                    <a href="{{ route('customers.show', $customer) }}" class="btn btn-primary">More Information </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
