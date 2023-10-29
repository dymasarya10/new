<nav class="navbar navbar-expand-lg" id="MyNavbar">
    <div class="container-fluid">
      <a class="navbar-brand ms-md-4 d-flex align-items-center pt-4" href="#"><p class="navbar-brand-text fw-bold fs-5">Lab<p class="fs-5 navbar-subtext fw-bold">itech</p></p></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link fs-6 mx-md-5 {{ ($title === "Home" ? 'active-navbar' : '') }}" aria-current="page" href="/">BERANDA</a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fs-6 mx-md-5 {{ ($title === "Maju Bersama Labitech"||$title === "Aplikasi"||$title === "Layanan Karir"||$title === "Akreditasi"||$title === "Berita Terbaru") ? 'active-navbar' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              TENTANG KITA
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/visimisi">VISI DAN MISI</a></li>
              <li><a class="dropdown-item" href="https://sertifikat.labitech.online">CEK SERTIFIKAT</a></li>
              <li><a class="dropdown-item" href="/aplikasi">APLIKASI</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/layanankarir">LAYANAN KARIR</a></li>
              <li><a class="dropdown-item" href="/artikel">BERITA TERBARU</a></li>
            </ul>
          </li>
          <a class="nav-link fs-6 mx-md-5 {{ ($title === "Kontak" ? 'active-navbar' : '') }}" href="/kontak">KONTAK</a>
          <a class="nav-link fs-6 mx-md-5 {{ ($title === "Kemitraan" ? 'active-navbar' : '') }}" href="/kemitraan">KEMITRAAN</a>
        </div>
      </div>
    </div>
</nav>
