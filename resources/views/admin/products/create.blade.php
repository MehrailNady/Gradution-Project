@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" class="form-control" placeholder="Product Name" required>
        <textarea name="description" class="form-control" placeholder="Product Description"></textarea>
        <input type="number" name="price" class="form-control" placeholder="Price" required>
        <select name="category_id" class="form-control">
            <option value="">Select Category</option>
            @foreach(\App\Models\Category::all() as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <input type="file" name="image" class="form-control">
        <button type="submit" class="btn btn-success mt-2">Save</button>
    </form>
@endsection
