@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
        <textarea name="description" class="form-control">{{ $product->description }}</textarea>
        <input type="number" name="price" class="form-control" value="{{ $product->price }}" required>
        <input type="file" name="image" class="form-control">
        <select name="category_id" class="form-control">
            <option value="">Select Category</option>
            @foreach(\App\Models\Category::all() as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
