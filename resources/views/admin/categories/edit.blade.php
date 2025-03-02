@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
        @csrf @method('PUT')
        <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
        <button type="submit" class="btn btn-success mt-2">Update</button>
    </form>
@endsection
