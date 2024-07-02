@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Material Details
        </div>
        <div class="card-body">
            <p><strong>Id:</strong> {{ $material->id }}</p>
            <p><strong>Judul:</strong> {{ $material->title }}</p>
            {{-- <p><strong>Address:</strong> {{ $student->address }}</p> --}}
            <p><strong>Deskripsi:</strong> {{ $material->description }}</p>
            <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
        </div>
    </div>
</div>
@endsection