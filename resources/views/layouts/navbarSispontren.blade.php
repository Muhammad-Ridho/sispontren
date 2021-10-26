<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="{{url('/')}}" class="navbar-brand">
        <img src="{{asset('template/')}}/dist/img/SisPontren Logo.png" alt="Sispontren Logo" class="brand-image img-circle elevation-2" style="opacity: .8">
        <span class="brand-text font-weight-light">SISPONTREN YATIM DHUAFA AL-IKHLAS</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="{{url('/')}}" class="nav-link">Beranda</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('pembayaran.index') }}" class="nav-link">Pembayaran</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('karyawan.index') }}" class="nav-link">Karyawan</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('santri.index') }}" class="nav-link">Santri</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('kelas.index') }}" class="nav-link">Kelas</a>
          </li>
        </ul>


      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          <li class="nav-item">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <!-- <button type="button" class="btn btn-block btn-outline-danger">Keluar</button> -->
                <button type="button" class="btn btn-warning">Logout</button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
                </form>
            </a>
          </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->