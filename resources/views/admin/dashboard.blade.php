@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Dashboard</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-12 col-sm-6 col-md-4">
        <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">TOTAL USER</span>
            <span class="info-box-number">
              {{ $user }}
              <small>User</small>
            </span>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-hospital"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">TOTAL COMPANY</span>
            <span class="info-box-number">
              {{ $company }}
              <small>Company</small>
            </span>
          </div>
        </div>
      </div>


      <div class="clearfix hidden-md-up"></div>
      <div class="col-12 col-sm-6 col-md-4">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-success elevation-1"><i class="fas fa-address-book"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">TOTAL PATIENT</span>
            <span class="info-box-number">100
              <small>Patient</small>
            </span>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-check-circle"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">TOTAL CHECKUP</span>
            <span class="info-box-number">2,000
              <small>Checkup</small>
            </span>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-credit-card"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">TOTAL PAYMENT</span>
            <span class="info-box-number">5 MILYAR
              <small>Payment</small>
            </span>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-circle"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Output</span>
            <span class="info-box-number">Out</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content -->
  @endsection