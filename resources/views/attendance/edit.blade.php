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
                Edit Attendance
            </div>
            <div class="card-body">
                <form action="{{ route('attendances.update', $attendance->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="lesson_id" class="form-label">Lesson</label>
                        <select class="form-select" id="lesson_id" name="lesson_id" required>
                            @foreach ($lessons as $lesson)
                                <option value="{{ $lesson->id }}" {{ $attendance->lesson_id == $lesson->id ? 'selected' : '' }}>{{ $lesson->date }} {{ $lesson->time }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="student_id" class="form-label">Student</label>
                        <select class="form-select" id="student_id" name="student_id" required>
                            @foreach ($students as $student)
                                <option value="{{ $student->id }}" {{ $attendance->student_id == $student->id ? 'selected' : '' }}>{{ $student->first_name }} {{ $student->last_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <input type="text" class="form-control" id="status" name="status" value="{{ $attendance->status }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Attendance</button>
                    <a href="{{ route('attendances.show', $attendance->id) }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
