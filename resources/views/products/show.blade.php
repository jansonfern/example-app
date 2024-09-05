@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="float-start">
                <h2>Show Product</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>
                <a class="btn btn-secondary" href="{{ route('products.index') }}">Back</a>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="name">Name:</label>
        <p>{{ $product->name }}</p>
    </div>
    <div class="form-group">
        <label for="price">Price:</label>
        <p>${{ number_format($product->price, 2) }}</p>
    </div>
    <div class="form-group">
        <label for="details">Details:</label>
        <p>{{ $product->details }}</p>
    </div>
@endsection
