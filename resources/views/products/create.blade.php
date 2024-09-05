@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="float-start">
                <h2>Create New Product</h2>
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

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" required>
        </div>
        <div class="form-group">
            <label for="details">Details:</label>
            <textarea name="details" class="form-control" id="details" required>{{ old('details') }}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" step="0.01" name="price" class="form-control" id="price" value="{{ old('price') }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Create Product</button>
    </form>
@endsection
