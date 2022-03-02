<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WYNACOM - LIS</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/bs-stepper/css/bs-stepper.min.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/plugins/dropzone/min/dropzone.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ asset('assets/index3.html') }}" class="brand-link">
        <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><b>WYNACOM</b></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Customer</a>
          </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="{{ __('/dashboard') }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <span class="right badge badge-danger"></span>
                </p>
              </a>
            </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-sitemap"></i>
                <p>
                  Master Data
                  <i class="fas fa-angle-left right"></i>
                    <span class="badge badge-info right">6</span>
                    </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                    <a href="{{ route('user.index') }}" class="nav-link">
                    <i class="fas fa-users nav-icon"></i>
                    <p>User</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="{{ route('company.index') }}" class="nav-link">
                    <i class="far fa-hospital nav-icon"></i>
                    <p>Company</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="{{ route('checkup.index') }}" class="nav-link">
                    <i class="fas fa-check-circle nav-icon"></i>
                    <p>Checkup</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="{{ route('patient.index') }}" class="nav-link">
                    <i class="far fa-address-book nav-icon"></i>
                    <p>Patient</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="{{ route('payment.index') }}" class="nav-link">
                    <i class="far fa-credit-card nav-icon"></i>
                    <p>Payment</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="{{ route('output.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Output</p>
                  </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
              <a href="{{ route('setpatient.index') }}" class="nav-link">
                <i class="nav-icon fas fa-recycle"></i>
                <p>
                  Setting Patient
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('setcheckup.index') }}" class="nav-link">
                <i class="nav-icon fas fa-recycle"></i>
                <p>
                  Setting Checkup
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('setpayment.index') }}" class="nav-link">
                <i class="nav-icon fas fa-recycle"></i>
                <p>
                  Setting Payment
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('setoutput.index') }}" class="nav-link">
                <i class="nav-icon fas fa-recycle"></i>
                <p>
                  Setting Output
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ __('myprofile') }}" class="nav-link">
                <i class="nav-icon fas fa-heart"></i>
                <p>
                  Informasi Pelanggan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ __('product') }}" class="nav-link">
                <i class="nav-icon fas fa-notes-medical"></i>
                <p>
                  Pemesanan Kesehatan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ __('account') }}" class="nav-link">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                  Ganti Password
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Logout
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      @yield('content')
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        {{-- <b>Version</b> 1.0 --}}
      </div>
      <strong>Copyright &copy; 2022-2023 <a href="https://wynacom.com">WYNACOM</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('assets/dist/js/demo.js') }}"></script>

  <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

  <script src="{{ asset('assets/') }}plugins/select2/js/select2.full.min.js"></script>

  <script src="{{ asset('assets/') }}plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>

  <script src="{{ asset('assets/') }}plugins/moment/moment.min.js"></script>
  <script src="{{ asset('assets/') }}plugins/inputmask/jquery.inputmask.min.js"></script>

  <script src="{{ asset('assets/') }}plugins/daterangepicker/daterangepicker.js"></script>

  <script src="{{ asset('assets/') }}plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>

  <script src="{{ asset('assets/') }}plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

  <script src="{{ asset('assets/') }}plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>

  <script src="{{ asset('assets/') }}plugins/bs-stepper/js/bs-stepper.min.js"></script>

  <script src="{{ asset('assets/') }}plugins/dropzone/min/dropzone.min.js"></script>

</body>

</html>