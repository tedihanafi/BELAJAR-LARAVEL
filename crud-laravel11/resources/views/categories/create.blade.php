@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Category</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        {{-- <div class="form-group">
            <label for="icon">Category Icon</label>
            <input type="text" name="icon" class="form-control" required>
        </div> --}}
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
