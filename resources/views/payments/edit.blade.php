@extends('layouts.main')
@section('title', 'Edit Payment')
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

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('payments.update', $payment->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="number" step="0.01" class="form-control" id="amount" name="amount" value="{{ $payment->amount }}" required>
            </div>

            <div class="mb-3">
                <label for="payment_date" class="form-label">Payment Date</label>
                <input type="date" class="form-control" id="payment_date" name="payment_date" value="{{ $payment->payment_date }}" required>
            </div>

            <div class="mb-3">
                <label for="payment_method" class="form-label">Payment Method</label>
                <input type="text" class="form-control" id="payment_method" name="payment_method" value="{{ $payment->payment_method }}" required>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="pending" {{ $payment->status == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="completed" {{ $payment->status == 'completed' ? 'selected' : '' }}>Completed</option>
                    <option value="failed" {{ $payment->status == 'failed' ? 'selected' : '' }}>Failed</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update Payment</button>
            <a href="{{ route('payments.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
