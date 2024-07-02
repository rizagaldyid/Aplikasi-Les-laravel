@extends('layouts.main')
@section('title', 'Payment Details')
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

        <div class="mb-3">
            <label class="form-label">Amount</label>
            <p class="form-control">{{ $payment->amount }}</p>
        </div>

        <div class="mb-3">
            <label class="form-label">Payment Date</label>
            <p class="form-control">{{ $payment->payment_date }}</p>
        </div>

        <div class="mb-3">
            <label class="form-label">Payment Method</label>
            <p class="form-control">{{ $payment->payment_method }}</p>
        </div>

        <div class="mb-3">
            <label class="form-label">Status</label>
            <p class="form-control">{{ $payment->status }}</p>
        </div>

        <a href="{{ route('payments.edit', $payment->id) }}" class="btn btn-primary">Edit</a>
        <a href="{{ route('payments.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
</div>
@endsection
