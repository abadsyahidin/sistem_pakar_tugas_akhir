<header class="site-header site-header--menu-right fugu-header-section" id="sticky-menu">
    <div class="container-fluid">
      <nav class="navbar site-navbar">
        <!-- Brand Logo-->
        <div class="brand-logo">
          <a href="index.html">
            <img src="assets/images/logo/logo-black.svg" alt="" class="light-version-logo">
          </a>
        </div>
        <div class="menu-block-wrapper">
          <div class="menu-overlay"></div>
          <nav class="menu-block" id="append-menu-header">
            <div class="mobile-menu-head">
              <div class="go-back">
                <i class="fa fa-angle-left"></i>
              </div>
              <div class="current-menu-title"></div>
              <div class="mobile-menu-close">&times;</div>
            </div>
            <ul class="site-menu-main">
              <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link-item drop-trigger">Beranda</a>
              </li>
              <li class="nav-item">
                <a href="{{ url('diagnosa') }}" class="nav-link-item drop-trigger">Diagnosa Penyakit Kucing</a>
              </li>
              <li class="nav-item">
                <a href="{{ url('riwayat') }}" class="nav-link-item drop-trigger">Riwayat Diagnosa</a>
              </li>
              <li class="nav-item">
                <a href="{{ url('materis') }}" class="nav-link-item drop-trigger">Jenis Kucing</a>
              </li>
              <li class="nav-item">
                <a href="{{ url('about') }}" class="nav-link-item drop-trigger">Penyakit Kucing</a>
              </li>
              <li class="nav-item">
                <a href="{{ url('kategories') }}" class="nav-link-item drop-trigger">Tentang Kami</a>
              </li>
              <li class="header-btn header-btn-l1 fugu-responsive-btn">
                <a class="fugu-btn fugu-header-btn" href="{{ route('login') }}">
                  Login
                </a>
              </li>
            </ul>
          </nav>

        </div>
        <div class="header-btn header-btn-l1 ms-auto d-none d-xs-inline-flex">
          <a class="fugu-btn fugu-header-btn" href="{{ route('login') }}">
            Login
          </a>
        </div>
        <!-- mobile menu trigger -->
        <div class="mobile-menu-trigger">
          <span></span>
        </div>
        <!--/.Mobile Menu Hamburger Ends-->
      </nav>
    </div>
  </header>
  <!--End landex-header-section -->
