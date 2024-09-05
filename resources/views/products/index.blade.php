@extends('products.layout')

@section('content')
    <div style="background-color: #f8f9fa; min-height: 100vh; padding: 20px;">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-12 d-flex justify-content-between align-items-center">
                    <h2 class="text-primary" style="color: #3498db;">Product Management</h2>
                    <a class="btn btn-success" href="{{ route('products.create') }}" style="background-color: #28a745; color: white;">Create New Product</a>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <strong>Success!</strong> {{ $message }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-striped table-hover" style="background-color: #ffffff;">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Details</th>
                            <th>Price</th>
                            <th width="280px">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->detail }}</td>
                                <td>${{ number_format($product->price, 2) }}</td>
                                <td>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                        <a class="btn btn-info btn-sm" href="{{ route('products.show', $product->id) }}" style="background-color: #17a2b8;">Show</a>
                                        <a class="btn btn-primary btn-sm" href="{{ route('products.edit', $product->id) }}" style="background-color: #007bff;">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" style="background-color: #dc3545;">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-center">
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection
