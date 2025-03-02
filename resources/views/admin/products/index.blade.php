@extends('layouts.admin')

@section('content')
    <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Add Product</a>
    <table class="table">
        <tr>
            <th>Name</th><th>Category</th><th>Price</th><th>Image</th><th>Actions</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category ? $product->category->name : 'Uncategorized' }}</td>
            <td>${{ $product->price }}</td>
            <td><img src="{{ asset('storage/' . $product->image) }}" width="50"></td>
            <td>
                <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

