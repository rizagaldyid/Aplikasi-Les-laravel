@extends('layouts.main')
@section('title', 'Schedule')
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
            <a href="{{ route('schedules.create') }}" class="btn btn-primary float-end">Add Schedule</a>
        </div>
        <div class="card-body">
            @if ($schedules->isEmpty())
                <p>No schedules found.</p>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Teacher</th>
                            <th>Day</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($schedules as $schedule)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $schedule->teacher->first_name }} {{ $schedule->teacher->last_name }}</td>
                                <td>{{ $schedule->day }}</td>
                                <td>{{ $schedule->start_time }}</td>
                                <td>{{ $schedule->end_time }}</td>
                                <td>
                                    <a href="{{ route('schedules.show', $schedule->id) }}" class="btn btn-sm btn-info">View</a>
                                    <a href="{{ route('schedules.edit', $schedule->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('schedules.destroy', $schedule->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this schedule?')">Delete</button>
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
