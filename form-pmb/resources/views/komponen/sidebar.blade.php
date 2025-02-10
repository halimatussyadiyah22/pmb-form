<div class="sidebar">
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
        <a href="/home" class="nav-link" style="{{ Request::is('home') ? 'background-color: #007bff; color: white;' : '' }}">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>Home</p>
        </a>
      </li>
      <li class="nav-item has-treeview {{ Request::is('pribadi/mine') || Request::is('pJurusan/mine') || Request::is('ortu/mine') || Request::is('sekolah/mine') || Request::is('dokumen/mine') ? 'menu-open' : '' }}">
        <a href="#" class="nav-link" style="{{ Request::is('pribadi/mine') || Request::is('pJurusan/mine') || Request::is('ortu/mine') || Request::is('sekolah/mine') || Request::is('dokumen/mine') ? 'background-color: #007bff; color: white;' : '' }}">
          <i class="nav-icon fas fa-folder"></i>
          <p>
            Formulir
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item {{ Request::is('pribadi/mine') ? 'active' : '' }}">
            <a href="/pribadi/mine" class="nav-link" style="{{ Request::is('pribadi/mine') ? 'background-color: #007bff; color: white;' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Identitas Pribadi</p>
            </a>
          </li>
          <li class="nav-item {{ Request::is('pJurusan/mine') ? 'active' : '' }}">
            <a href="/pJurusan/mine" class="nav-link" style="{{ Request::is('pJurusan/mine') ? 'background-color: #007bff; color: white;' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Peminatan</p>
            </a>
          </li>
          <li class="nav-item {{ Request::is('ortu/mine') ? 'active' : '' }}">
            <a href="/ortu/mine" class="nav-link" style="{{ Request::is('ortu/mine') ? 'background-color: #007bff; color: white;' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Identitas Orang Tua</p>
            </a>
          </li>
          <li class="nav-item {{ Request::is('sekolah/mine') ? 'active' : '' }}">
            <a href="/sekolah/mine" class="nav-link" style="{{ Request::is('sekolah/mine') ? 'background-color: #007bff; color: white;' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Identitas Sekolah</p>
            </a>
          </li>
          <li class="nav-item {{ Request::is('dokumen/mine') ? 'active' : '' }}">
            <a href="/dokumen/mine" class="nav-link" style="{{ Request::is('dokumen/mine') ? 'background-color: #007bff; color : white;' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Dokumen</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item {{ Request::is('pembayaran/mine') ? 'active' : '' }}">
        <a href="/pembayaran/mine" class="nav-link" style="{{ Request::is('pembayaran/mine') ? 'background-color: #007bff; color: white;' : '' }}">
          <i class="fa-solid fa-money-bill-wave"></i>
          <p>Pembayaran</p>
        </a>
      </li>
      <li class="nav-item ">
        <a href="" class="nav-link">
          <i class="fa-solid fa-bullhorn"></i>
          <p>Pengumuman</p>
        </a>
      </li>
    </ul>
  </nav>
</div>