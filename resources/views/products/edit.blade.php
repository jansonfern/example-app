@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="float-start">
                <h2>Edit Product</h2>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $product->name) }}" required>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" step="0.01" name="price" class="form-control" id="price" value="{{ old('price', $product->price) }}" required>
        </div>
        <div class="form-group">
            <label for="details">Details (e.g., Brand: Nike, Color: Red, Size: M, Price: $100):</label>
            <input type="text" name="details" class="form-control" id="details" value="{{ old('details', $product->details) }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update Product</button>
    </form>
@endsection
