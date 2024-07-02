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


        
        <!-- Main content -->
   <div class="content">
       <div class="container-fluid">
           <!-- Small boxes (Stat box) -->
           <div class="row">
               <div class="col-lg-3 col-6">
                   <!-- small box -->
                   <div class="small-box bg-info">
                       <div class="inner">
                           <h3>0</h3>
                           <p>Purchase</p>
                       </div>
                       <div class="icon">
                           <i class="ion ion-bag"></i>
                       </div>
                       <a href="/barang" class="small-box-footer">More info <i
                               class="fas fa-arrow-circle-right"></i></a>
                   </div>
               </div>
               <!-- ./col -->
               <div class="col-lg-3 col-6">
                   <!-- small box -->
                   <div class="small-box bg-success">
                       <div class="inner">
                           <h3>0</h3>

                           <p>Product yang di beli</p>
                       </div>
                       <div class="icon">
                           <i class="ion ion-stats-bars"></i>
                       </div>
                       <a href="#" class="small-box-footer">More info <i
                               class="fas fa-arrow-circle-right"></i></a>
                   </div>
               </div>
               <!-- ./col -->
               <div class="col-lg-3 col-6">
                   <!-- small box -->
                   <div class="small-box bg-warning">
                       <div class="inner">
                           <h3>0</h3>

                           <p>feedback</p>
                       </div>
                       <div class="icon">
                           <i class="ion ion-person-add"></i>
                       </div>
                       <a href="#" class="small-box-footer">More info <i
                               class="fas fa-arrow-circle-right"></i></a>
                   </div>
               </div>
               <!-- ./col -->
               <div class="col-lg-3 col-6">
                   <!-- small box -->
                   <div class="small-box bg-danger">
                       <div class="inner">
                           <h3>0</h3>

                           <p>Kehadiran</p>
                       </div>
                       <div class="icon">
                           <i class="ion ion-pie-graph"></i>
                       </div>
                       <a href="#" class="small-box-footer">More info <i
                               class="fas fa-arrow-circle-right"></i></a>
                   </div>
               </div>
               <!-- ./col -->
           </div>
           <!-- /.row -->
       </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <div class="card content-header">
            <h2 class="content-header ">{{ $message }} </h2>
            <h4 class="container-fluid content ml-4"> {{ auth()->user()->name }}</h4>
            <h4 class="container-fluid ml-4">Semoga Hari mu Selalu Menyenangkan😁</h4>
    
            <div class="container mt-5">
            </div>
            
        </div>
    </div>
   </div>
<!-- /.content -->
        

@endsection
