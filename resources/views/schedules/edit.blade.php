@extends('layouts.main')
@section('title', 'Schedul Detail')
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
            Edit Schedule
        </div>
        <div class="card-body">
            <form action="{{ route('schedules.update', $schedule->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="teacher_id" class="form-label">Teacher</label>
                    <select class="form-select" id="teacher_id" name="teacher_id" required>
                        @foreach ($teachers as $teacher)
                            <option value="{{ $teacher->id }}" {{ $schedule->teacher_id == $teacher->id ? 'selected' : '' }}>{{ $teacher->first_name }} {{ $teacher->last_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="day" class="form-label">Day</label>
                    <input type="text" class="form-control" id="day" name="day" value="{{ $schedule->day }}" required>
                </div>
                <div class="mb-3">
                    <label for="start_time" class="form-label">Start Time</label>
                    <input type="time" class="form-control" id="start_time" name="start_time" value="{{ $schedule->start_time }}" required>
                </div>
                <div class="mb-3">
                    <label for="end_time" class="form-label">End Time</label>
                    <input type="time" class="form-control" id="end_time" name="end_time" value="{{ $schedule->end_time }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Update Schedule</button>
                <a href="{{ route('schedules.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
