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
                Add Attendance
            </div>
            <div class="card-body">
                <form action="{{ route('attendances.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="lesson_id" class="form-label">Lesson</label>
                        <select class="form-select" id="lesson_id" name="lesson_id" required>
                            @foreach ($lessons as $lesson)
                                <option value="{{ $lesson->id }}">{{ $lesson->date }} {{ $lesson->time }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="student_id" class="form-label">Student</label>
                        <select class="form-select" id="student_id" name="student_id" required>
                            @foreach ($students as $student)
                                <option value="{{ $student->id }}">{{ $student->first_name }} {{ $student->last_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select type="text" class="form-control" id="status" name="status" required>
                            <option value="Hadir">Hadir</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Add Attendance</button>
                    <a href="{{ route('attendances.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
