@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $product->name }}</h1>
    <p><strong>Category:</strong> {{ $product->category->name ?? '-' }}</p>
    <p><strong>Price:</strong> {{ $product->price }}</p>
    <p><strong>Stock:</strong> {{ $product->stock }}</p>
    <p><strong>Description:</strong> {{ $product->description }}</p>
    <p><strong>Active:</strong> {{ $product->is_active ? 'Yes' : 'No' }}</p>
    <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection