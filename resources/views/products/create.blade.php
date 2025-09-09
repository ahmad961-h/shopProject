@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        @include('products.partials.form', ['button' => 'Create'])
    </form>
</div>
@endsection