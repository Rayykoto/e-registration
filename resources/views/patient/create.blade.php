@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Patient</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Patient</li>
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
                <span class="font-weight-bold"><i class="fa fa-user"></i>  ADD New Patient</span>
              </div>
              <div class="card-body">

                <form @submit.prevent="storeCategory">
                  <div class="row">
                  <div class="col-md-6">
                        <div class="mb-3">
                          <label>Title</label>
                            <select placeholder="Wynacom" class="form-control">
                              <option>Mr</option>
                              <option>Mrs</option>
                              <option>Ny</option>
                            </select>
                        </div>
                      </div>
                  <div class="col-md-6">
                      <div class="mb-3">
                        <label>Kota</label>
                          <input type="text" placeholder="121321" class="form-control">
                      </div>
                    </div>

                      <div class="col-md-6">
                        <div class="mb-3">
                          <label>Nama Lengkap</label>
                            <input type="text" placeholder="Wynacom" class="form-control">
                        </div>
                      </div>
                      
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label>Kode Pos</label>
                        <input type="text" placeholder="11241" class="form-control">
                    </div>
                  </div>

                  <div class="col-md-6">
                      <div class="mb-3">
                        <label>Jenis Kelamin</label>
                            <select placeholder="Wynacom" class="form-control">
                              <option value="">Laki - Laki</option>
                              <option value="">Perempuan</option>
                            </select>
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="mb-3">
                        <label>No Hanphone</label>
                          <input type="number" placeholder="0813411223112" class="form-control">
                      </div>
                  </div>

                  <div class="col-md-6">
                        <div class="mb-3">
                          <label>No KTP / NIK</label>
                            <input type="number" placeholder="31750302971236" class="form-control">
                        </div>
                      </div>
                  <div class="col-md-6">
                      <div class="mb-3">
                        <label>Umur</label>
                          <input type="date" class="form-control">
                      </div>
                  </div>

                  <div class="form-group col-lg-12">
                    <label>Email </label>
                      <input type="email" placeholder="wynacom@gmail.com" class="form-control">
                    </div>
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



