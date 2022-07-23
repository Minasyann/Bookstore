@extends('layouts.app')
@section('title')
    Update Customer
@endsection
@section('content')

    <div class="container">
        <a href="{{ route("customers.index") }}" class="btn btn-secondary mt-2">Back</a>


        <form action="{{ route("customers.update", $customer["id"]) }}" class="w-50" method="post">
            @csrf
            @method("patch")

            <div class="mb-3">
                <label for="name" class="form-label">Customer Name</label>
                <input value="{{ $customer['name'] }}" type="text" class="form-control" name="name" placeholder="John Smith" id="name">
            </div>

            <div class="mb-3">
                <label for="birth_date" class="form-label">Birth Date</label>
                <input  value="{{ $customer['birth_date'] }}" type="date" class="form-control" name="birth_date" placeholder="11.11.2011" id="birth_date">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input  value="{{ $customer['email'] }}" type="email" class="form-control" name="email" placeholder="john@gmail.com" id="email">
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input value="{{ $customer['address'] }}" type="text"  class="form-control" name="address"  id="address">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input value="{{ $customer['phone'] }}" type="number"  class="form-control" name="phone"  id="phone">
            </div>

            <div class="mb-3">
                <label for="passport_num" class="form-label">Passport Number</label>
                <input value="{{ $customer['passport_num'] }}" type="text"  class="form-control" name="passport_num"  id="passport_num">
            </div>

            <button  class="btn btn-success">Save Changes</button>
        </form>
    </div>
@endsection
