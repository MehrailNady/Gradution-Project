@extends('layouts.admin')

@section('content')
    <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Add Category</a>
    <table class="table mt-3">
        <tr>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        @foreach($categories as $category)
        <tr>
            <td>{{ $category->name }}</td>
            <td>
                <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
