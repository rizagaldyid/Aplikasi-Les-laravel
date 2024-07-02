@extends('layouts.main')
@section('title', 'Details Lesson')
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
                <a href="{{ route('lessons.edit', $lesson->id) }}" class="btn btn-primary float-end">Edit Lesson</a>
            </div>
            <div class="card-body">
                <p><strong>Student:</strong> {{ $lesson->student->first_name }} {{ $lesson->student->last_name }}</p>
                <p><strong>Teacher:</strong> {{ $lesson->teacher->first_name }} {{ $lesson->teacher->last_name }}</p>
                <p><strong>Date:</strong> {{ $lesson->date }}</p>
                <p><strong>Time:</strong> {{ $lesson->time }}</p>
                <p><strong>Duration:</strong> {{ $lesson->duration }} minutes</p>
                <p><strong>Location:</strong> {{ $lesson->location }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
