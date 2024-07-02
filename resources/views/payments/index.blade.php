@extends('layouts.main')
@section('title', 'Payments')
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

<div class="cointaner ml-5 mr-5">
     <div class="card">
        <div class="card-header">

      
<div class="d-flex justify-content-between mb-3">
    <a href="{{ route('payments.create') }}" class="btn btn-primary">Add Payment</a>
</div>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Student</th>
                            <th>Amount</th>
                            <th>Payment Date</th>
                            <th>Payment Method</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($payments as $payment)
                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{ $payment->student->first_name }} {{ $payment->student->last_name }}</td>
                            <td>Rp.{{number_format ($payment->amount,0) }}</td>
                            <td>{{ $payment->payment_date }}</td>
                            <td>{{ $payment->payment_method }}</td>
                            <td>{{ $payment->status }}</td>
                            <td>
                                <a href="{{ route('payments.show', $payment->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('payments.edit', $payment->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('payments.destroy', $payment->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
