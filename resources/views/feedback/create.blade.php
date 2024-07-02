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
                Add Feedback
            </div>
            <div class="card-body">
                <form action="{{ route('feedbacks.store') }}" method="POST">
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
                        <label for="given_by" class="form-label">Given By</label>
                        <input type="text" class="form-control" id="given_by" name="given_by" required>
                    </div>
                    <div class="mb-3">
                        <label for="comments" class="form-label">Comments</label>
                        <textarea class="form-control" id="comments" name="comments" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="rating" class="form-label">Rating</label>
                        <input type="number" class="form-control" id="rating" name="rating" min="1" max="5" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Add Feedback</button>
                    <a href="{{ route('feedbacks.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
