@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add Product</h2>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Price:</label>
            <input type="number" name="price" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Quantity:</label>
            <input type="number" name="quantity" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Description:</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
