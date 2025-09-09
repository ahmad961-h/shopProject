@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf @method('PUT')
        @include('products.partials.form', ['button' => 'Update'])
    </form>
</div>
@endsection