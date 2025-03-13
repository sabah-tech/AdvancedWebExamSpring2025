@extends('layout')

@section('title', 'Add Course')

@section('content')
<h2>Add a New Course</h2>

<form action="{{ route('course') }}" method="POST" class="mt-3">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Recipe Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
    </div>
    
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" class="form-control">{{ old('description', $course->description ?? '') }}</textarea>
        @error('description') <small class="text-danger">{{ $message }}</small> @enderror
    </div>
    
    <button type="submit" class="btn btn-success">Save Recipe</button>
    <a href="{{ route('recipes.index') }}" class="btn btn-secondary">Cancel</a>
</form>
<h2>{{ $Course->name }}</h2>

<div class="mb-3">
    <h4>name</h4>
    <p>{{ $course->name }}</p>
</div>
<div class="mb-3">
    <h4>description</h4>
    <p>{{ $course->description }}</p>
</div>
<div><button class="deleteCourse">Delete Course</button></div>


@endsection
