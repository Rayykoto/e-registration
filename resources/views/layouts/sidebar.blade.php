<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">
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
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                    Logout
                </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</nav>