@extends('layouts.main')
@section('title', 'Student')
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
                <div class="card">
                    <div class="card-header">
                        Student Details
                    </div>
                    <div class="card-body">
                        <p><strong>Name:</strong> {{ $student->first_name .' '. $student->last_name }}</p>
                        <p><strong>Email:</strong> {{ $student->user->email }}</p>
                        {{-- <p><strong>Address:</strong> {{ $student->address }}</p> --}}
                        <p><strong>Phone:</strong> {{ $student->phone_number }}</p>
                        <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
                        <a href="{{ route('students.index', $student->id) }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection