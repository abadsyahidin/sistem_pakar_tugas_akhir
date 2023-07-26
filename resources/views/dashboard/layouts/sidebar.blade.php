<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' :'' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('kategori-kucing.index') ? 'active' :'' }}" href="{{ route('kategori-kucing.index') }}">
              <span data-feather="file-text"></span>
              Kategori Kucing
            </a>
          </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/materis*') ? 'active' :'' }}" href="{{ url('/dashboard/materis') }}">
            <span data-feather="file-text"></span>
            Jenis Kucing
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/alamat*') ? 'active' :'' }}" href="{{ url('/dashboard/alamat') }}">
              <span data-feather="file-text"></span>
              Kejala
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/datapenyakit*') ? 'active' :'' }}" href="{{ route('datapenyakit.index') }}">
              <span data-feather="file-text"></span>
              Penyakit
            </a>
        </li>
          {{-- <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/datapenyakit*') ? 'active' :'' }}" href="{{ route('datapenyakit.index') }}">
              <span data-feather="file-text"></span>
              Data Penyakit
            </a>
          </li> --}}
      </ul>
    </div>
  </nav>
