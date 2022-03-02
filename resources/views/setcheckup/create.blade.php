@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Setting Checkup</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Setting Checkup</li>
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
                <span class="font-weight-bold"><i class="fa fa-user"></i>  ADD New Setting Checkup</span>
              </div>
              <div class="card-body">

                <form @submit.prevent="storeCategory">

                  <div class="form-group">
                    <label>Checkup Name</label>
                        <select class="form-control">
                            <option>contoh 1</option>
                            <option>contoh 2</option>
                        </select>
                  </div>

                  <div class="form-group">
                    <label>Company Name</label>
                        <select class="form-control">
                            <option>contoh 1</option>
                            <option>contoh 2</option>
                        </select>
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



