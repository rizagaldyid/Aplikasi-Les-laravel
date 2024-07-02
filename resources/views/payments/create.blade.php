@extends('layouts.app')

@section('content')
<div class="mb-3">
    <h1>Add Payment</h1>
</div>

<form action="{{ route('payments.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="student_id" class="form-label">Student</label>
        <select class="form-control" id="student_id" name="student_id" required>
            @foreach($students as $student)
            <option value="{{ $student->id }}">{{ $student->first_name }} {{ $student->last_name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="amount" class="form-label">Amount</label>
        <input type="number" class="form-control" id="amount" name="amount" required>
    </div>
    <div class="mb-3">
        <label for="payment_date" class="form-label">Payment Date</label>
        <input type="date" class="form-control" id="payment_date" name="payment_date" required>
    </div>
    <div class="mb-3">
        <label for="payment_method" class="form-label">Payment Method</label>
        <input type="text" class="form-control" id="payment_method" name="payment_method" required>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-control" id="status" name="status" required>
            <option value="pending">Pending</option>
            <option value="completed">Completed</option>
            <option value="failed">Failed</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
