@extends('layouts.app')

@section('content')
<div class="mb-3">
    <h1>Edit Material</h1>
</div>

<form action="{{ route('materials.update', $material->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $material->title }}" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description">{{ $material->description }}</textarea>
    </div>
    <div class="mb-3">
        <label for="file" class="form-label">File</label>
        <input type="file" class="form-control" id="file" name="file">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
