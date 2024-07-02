@extends('layouts.main')
@section('title', 'Profile')
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
    {{-- <div class="row">
        <div class="col-lg-10 mt-3">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="/assets/dist/img/user.png" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3">{{ auth()->user()->name }}</h5>
            </div>
          </div>
        </div> --}}
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="card-body text-center">

                    <img src="/assets/dist/img/user.png" alt="avatar"
                    class="rounded-circle img-fluid" style="width: 150px;">
                </div>
                <div class="mb-3">

                    <label class="form-label">Nama</label>
                    <p class="form-control">{{ $user->name }}</p>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <p class="form-control">{{ $user->email }}</p>
                </div>
                <div class="mb-3">
                    <label class="form-label">First name:</label>
                    <p class="form-control">{{ $user->student->first_name }}</p>
                </div>
                <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <p class="form-control">{{ $user->student->last_name }}</p>
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone number</label>
                    <p class="form-control">{{ $user->student->phone_number }}</p>
                </div>
                <div class="mb-3">
                    <label class="form-label">Birthdate</label>
                    <p class="form-control">{{ $user->student->birthdate }}</p>
                </div>
                <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
            </div>
        </div>
    </div>
</div>
@endsection
