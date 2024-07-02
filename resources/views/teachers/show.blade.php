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
                Teacher Details
            </div>
            <div class="card-body">
                <p><strong>First Name:</strong> {{ $teacher->first_name }}</p>
                <p><strong>Last Name:</strong> {{ $teacher->last_name }}</p>
                <p><strong>Email:</strong> {{ $teacher->email }}</p>
                <p><strong>Phone Number:</strong> {{ $teacher->phone_number }}</p>
                <p><strong>Specialty:</strong> {{ $teacher->specialty }}</p>

                <h4>Lessons Taught:</h4>
                @if ($teacher->lessons->count() > 0)
                    <ul>
                        @foreach ($teacher->lessons as $lesson)
                            <li>{{ $lesson->title }}</li>
                        @endforeach
                    </ul>
                @else
                    <p>No lessons found for this teacher.</p>
                @endif

                <h4>Schedules:</h4>
                @if ($teacher->schedules->count() > 0)
                    <ul>
                        @foreach ($teacher->schedules as $schedule)
                            <li>{{ $schedule->day }} - {{ $schedule->time }}</li>
                        @endforeach
                    </ul>
                @else
                    <p>No schedules found for this teacher.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
