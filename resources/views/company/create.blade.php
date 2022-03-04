@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Company</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Company</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
    <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-12">

                 <main class="c-main">
    <div class="container-fluid">
      <div class="fade-in">
        <div class="row">
          <div class="col-md-12">
            <div class="card border-0 rounded shadow-sm border-top-orange">
              <div class="card-header">
                <span class="font-weight-bold"><i class="fa fa-user"></i>  ADD New Company</span>
              </div>
              <div class="card-body">

                <form method="POST" action="{{ route('company.store') }}">

                  <div class="form-group">
                    <label>Company Name</label>
                    <input type="text" placeholder="PT. Wynacom Unitama Sejahtera" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Company City</label>
                    <input type="text" placeholder="Company City" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Company Cabang</label>
                    <input type="text" placeholder="Company City" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Company Address</label>
                    <input type="text" placeholder="Alamat Perusahaan" class="form-control">
                  </div>
                    
                  <button class="btn btn-info mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>
                    SAVE</button>
                  <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i>
                    RESET</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
</section>

@endsection



