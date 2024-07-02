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
                Feedback Details
                <a href="{{ route('feedbacks.edit', $feedback->id) }}" class="btn btn-primary float-end">Edit Feedback</a>
            </div>
            <div class="card-body">
                <p><strong>Lesson:</strong> {{ $feedback->lesson->date }} {{ $feedback->lesson->time }}</p>
                <p><strong>Given By:</strong> {{ $feedback->given_by }}</p>
                <p><strong>Comments:</strong> {{ $feedback->comments }}</p>
                <p><strong>Rating:</strong> {{ $feedback->rating }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
