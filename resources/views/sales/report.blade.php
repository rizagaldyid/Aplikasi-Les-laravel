<!-- resources/views/sales/report.blade.php -->

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
                            <li class="breadcrumb-item"><a href="/">@yield('title')</a></li>

                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    <div class="container">
        <h1>Laporan Penjualan</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Total Penjualan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sales as $sale)
                    <tr>
                        <td>{{ $sale['date'] }}</td>
                        <td>Rp {{ number_format($sale['total_amount'], 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
 </div>
@endsection
