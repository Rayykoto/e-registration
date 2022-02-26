@extends('layouts.master')
@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registrasi Pemeriksaan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Registrasi Pemeriksaan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <section class="content">
    <div class="card">
    <div class="card-header">
    <h3 class="card-title">Isi Data Dengan Benar</h3>
    </div>
    <div class="card-body">

        <div class="row">
<div class="col-md-6">
<div class="card card-danger">
<div class="card-header">
<h3 class="card-title">Form</h3>
</div>
<div class="card-body">

<div>

<div class="form-group" data-select2-id="95">
<label>Kota</label>
<select class="form-control" style="width: 100%;" tabindex="-1" aria-hidden="true">
<option selected="selected" data-select2-id="19">Alabama</option>
<option data-select2-id="97">Alaska</option>
<option data-select2-id="98">California</option>
<option data-select2-id="99">Delaware</option>
<option data-select2-id="100">Tennessee</option>
<option data-select2-id="101">Texas</option>
<option data-select2-id="102">Washington</option>
</select><span class="select2 select2-container select2-container--bootstrap4 select2-container--below" dir="ltr" data-select2-id="18" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-5q6f-container"><span class="select2-selection__rendered" id="select2-5q6f-container" role="textbox" aria-readonly="true" title="Alaska"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
</div>
</div>

<label>Nama Lokasi</label>
<input type="text" class="form-control" placeholder="Enter ...">

<label>Tanggal</label>
<input type="date" class="form-control">

<label>Waktu</label>
<input type="time" class="form-control">

</div>
</div>
</div>

<div class="col-md-6">
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Jenis Pemeriksaan</h3>
</div>
<div class="card-body">

<label>Jenis Pemeriksaan</label>
<select class="form-control" style="width: 100%;" tabindex="-1" aria-hidden="true">
<option selected="selected" data-select2-id="19">Covid</option>
<option data-select2-id="97">Antigen</option>

</select><span class="select2 select2-container select2-container--bootstrap4 select2-container--below" dir="ltr" data-select2-id="18" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-5q6f-container"><span class="select2-selection__rendered" id="select2-5q6f-container" role="textbox" aria-readonly="true" title="Alaska"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
    </div>
    </section>

    @endsection