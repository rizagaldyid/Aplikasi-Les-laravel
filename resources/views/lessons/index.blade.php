@extends('layouts.main')
@section('title', 'Lesson')
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
                <a href="{{ route('lessons.create') }}" class="btn btn-primary float-end">Add Lesson</a>
            </div>
            <div class="card-body">
                @if ($lessons->isEmpty())
                    <p>No lessons found.</p>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Student</th>
                                <th>Teacher</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Duration</th>
                                <th>Location</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lessons as $lesson)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $lesson->student->first_name }} {{ $lesson->student->last_name }}</td>
                                    <td>{{ $lesson->teacher->first_name }} {{ $lesson->teacher->last_name }}</td>
                                    <td>{{ $lesson->date }}</td>
                                    <td>{{ $lesson->time }}</td>
                                    <td>{{ $lesson->duration }}</td>
                                    <td>{{ $lesson->location }}</td>
                                    <td>
                                        <a href="{{ route('lessons.show', $lesson->id) }}" class="btn btn-sm btn-info">View</a>
                                        <a href="{{ route('lessons.edit', $lesson->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('lessons.destroy', $lesson->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this lesson?')">Delete</button>
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
