@extends('layouts.main')
@section('title', 'Teacher')
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
                <a href="{{ route('teachers.create') }}" class="btn btn-primary float-end">Add Teacher</a>
            </div>
            <div class="card-body">
                @if ($teachers->isEmpty())
                    <p>No teachers found.</p>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Specialty</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teachers as $teacher)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $teacher->first_name }} {{ $teacher->last_name }}</td>
                                    <td>{{ $teacher->email }}</td>
                                    <td>{{ $teacher->phone_number }}</td>
                                    <td>{{ $teacher->specialty }}</td>
                                    <td>
                                        <a href="{{ route('teachers.show', $teacher->id) }}" class="btn btn-sm btn-info">View</a>
                                        <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this teacher?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
