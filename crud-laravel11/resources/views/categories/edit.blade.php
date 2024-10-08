@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Category</h1>
    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
        </div>
        {{-- <div class="form-group">
            <label for="icon">Category Icon</label>
            <input type="text" name="icon" class="form-control" value="{{ $category->icon }}" required>
        </div> --}}
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
