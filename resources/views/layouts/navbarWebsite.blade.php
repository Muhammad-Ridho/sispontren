<div class="container">

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="nav-link">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Tentang Kami</a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                    <li><a href="#" class="dropdown-item">Profil Yayasan</a></li>
                    <li><a href="#" class="dropdown-item">Profil Pesantren</a></li>
                    <li><a href="#" class="dropdown-item">Struktur Kepengurusan</a></li>
              
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Layanan</a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                    <li><a href="#" class="dropdown-item">Zakat</a></li>
                    <li><a href="#" class="dropdown-item">Wakaf</a></li>

                    <!-- Level two dropdown-->
                    <li class="dropdown-submenu dropdown-hover">
                        <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Panduan Pembayaran</a>
                        <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">Infaq Bulanan & Pendaftaran Santri</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a id="dropdownSubMenu3" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Media</a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                    <li><a href="#" class="dropdown-item">Seputar Pesantren</a></li>
                    <li><a href="#" class="dropdown-item">Karya Santri</a></li>
                    <li><a href="#" class="dropdown-item">Kajain</a></li>
              
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a id="dropdownSubMenu3" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Pendidikan</a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                    <li><a href="#" class="dropdown-item">Program Reguler</a></li>
                    <li><a href="#" class="dropdown-item">Program Non-Reguler</a></li>
              
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">Kontak</a>
            </li>

        </ul>
        

      <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <!-- login button-->
            <li class="nav-item dropdown">
                <div class="d-grid gap-2 d-md-block">
                    @if (Route::has('login'))
                        <a href="{{ url('/log_in') }}" class="btn btn-warning"> {{ __('Login') }} </a>
                    @endif
                </div>
            </li>
        </ul>
</div>