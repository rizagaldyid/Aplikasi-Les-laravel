@extends('layouts.main')
@section('title', 'Kehadiran')
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
                Attendance Records
                <a href="{{ route('attendances.create') }}" class="btn btn-primary float-end">Add Attendance</a>
            </div>
            <div class="card-body">
                @if ($attendances->isEmpty())
                    <p>No attendance records found.</p>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Lesson</th>
                                <th>Student</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($attendances as $attendance)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $attendance->lesson->date }} {{ $attendance->lesson->time }}</td>
                                    <td>{{ $attendance->student->first_name }} {{ $attendance->student->last_name }}</td>
                                    <td>{{ $attendance->status }}</td>
                                    <td>
                                        <a href="{{ route('attendances.show', $attendance->id) }}" class="btn btn-sm btn-info">View</a>
                                        <a href="{{ route('attendances.edit', $attendance->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('attendances.destroy', $attendance->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this attendance record?')">Delete</button>
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
