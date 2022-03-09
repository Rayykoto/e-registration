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

                                <div class="form-group">
                                    <div class="mb-3">
                                        <label>Kota</label>
                                        <select placeholder="Wynacom" class="form-control">
                                            <option value="">0</option>
                                            <option value="">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="mb-3">
                                    <label>Cabang</label>
                                    <select placeholder="Wynacom" class="form-control">
                                        <option value="">0</option>
                                        <option value="">1</option>
                                    </select>
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
                            <div class="form-group">
                                <div class="mb-3">
                                    <label>Cabang</label>
                                    <select placeholder="Wynacom" class="form-control">
                                        <option value="">0</option>
                                        <option value="">1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</section>
@endsection