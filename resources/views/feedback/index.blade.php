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
                Feedbacks
                <a href="{{ route('feedbacks.create') }}" class="btn btn-primary float-end">Add Feedback</a>
            </div>
            <div class="card-body">
                @if ($feedbacks->isEmpty())
                    <p>No feedbacks found.</p>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Lesson</th>
                                <th>Given By</th>
                                <th>Comments</th>
                                <th>Rating</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($feedbacks as $feedback)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $feedback->lesson->date }} {{ $feedback->lesson->time }}</td>
                                    <td>{{ $feedback->given_by }}</td>
                                    <td>{{ $feedback->comments }}</td>
                                    <td>{{ $feedback->rating }}</td>
                                    <td>
                                        <a href="{{ route('feedbacks.show', $feedback->id) }}" class="btn btn-sm btn-info">View</a>
                                        <a href="{{ route('feedbacks.edit', $feedback->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('feedbacks.destroy', $feedback->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this feedback?')">Delete</button>
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
