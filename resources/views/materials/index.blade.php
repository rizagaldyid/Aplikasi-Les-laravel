@extends('layouts.main')
@section('title', 'Beranda')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">@yield('title')</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">@yield('title')</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between mb-3">
                    <a href="{{ route('materials.create') }}" class="btn btn-primary">Add Material</a>
                </div>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>File</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($materials as $material)
                        <tr>
                            <td>{{ $material->id }}</td>
                            <td>{{ $material->title }}</td>
                            <td>{{ $material->description }}</td>
                            <td>
                                <a href="{{ Storage::url($material->file_path) }}" target="_blank">Download</a>
                            </td>
                            <td>
                                <a href="{{ route('materials.show', $material->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('materials.edit', $material->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('materials.destroy', $material->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
