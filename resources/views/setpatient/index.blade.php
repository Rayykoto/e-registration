@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Setting Patient</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Setting Patient</li>
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
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="ion ion-clipboard mr-1"></i>
                            Setting Patient
                        </h3>
                         <button onclick="addForm('{{ route('setpatient.create') }}')" class="btn btn-success float-right">Tambah Data</button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <table class="table table-bordered table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Patient Name</th>
                                    <th>Company Name</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                        </table>

                    </div>
                </div>
                <!-- /.card -->
            </section>
            <!-- /.Left col -->
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>

@includeIf('setpatient.form')
@endsection

@push('scripts')
<script>
    let table;
    
$(function () {
    table = $('.table').DataTable({
        processing: true,
        autoWidth: false,
    });
});

    function addForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Tambah Setting Patient');
    }

    function editForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Edit Setting Patient');
    }

    function deleteData(url) {
        
    }
</script>
@endpush





