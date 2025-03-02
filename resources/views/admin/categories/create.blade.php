@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf
        <input type="text" name="name" class="form-control" placeholder="Category Name" required>
        <button type="submit" class="btn btn-success mt-2">Save</button>
    </form>
@endsection
