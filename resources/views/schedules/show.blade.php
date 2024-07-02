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
                <a href="{{ route('schedules.edit', $schedule->id) }}" class="btn btn-primary float-end">Edit Schedule</a>
            </div>
            <div class="card-body">
                <p><strong>Teacher:</strong> {{ $schedule->teacher->first_name }} {{ $schedule->teacher->last_name }}</p>
                <p><strong>Day:</strong> {{ $schedule->day }}</p>
                <p><strong>Start Time:</strong> {{ $schedule->start_time }}</p>
                <p><strong>End Time:</strong> {{ $schedule->end_time }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
