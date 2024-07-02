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
                Attendance Details
                <a href="{{ route('attendances.edit', $attendance->id) }}" class="btn btn-primary float-end">Edit Attendance</a>
            </div>
            <div class="card-body">
                <p><strong>Lesson:</strong> {{ $attendance->lesson->date }} {{ $attendance->lesson->time }}</p>
                <p><strong>Student:</strong> {{ $attendance->student->first_name }} {{ $attendance->student->last_name }}</p>
                <p><strong>Status:</strong> {{ $attendance->status }}</p>
            </div>
        </div>
    </div>
</div>
@endsection