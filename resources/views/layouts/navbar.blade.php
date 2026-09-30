{{-- Navbar --}}
<nav class="navbar py-3 fixed-top bg-white shadow">
    <div class="container">
    <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
    <img src="{{ asset('assets/images/logo.png') }}" height="48" width="48" alt="Logo SATSET">

    <span class="fw-bold" style="color: #198754; font-size: 22px;">SATSET</span>
</a>

    <ul class="navbar-nav flex-row gap-4 position-absolute top-50 start-50 translate-middle">
            <li class="nav-item">
                <a class="nav-link fs-5 mx-1 {{ Request::is('/') ? 'active' : '' }}"
                   href="{{ route('home') }}">Beranda</a>
            </li>

            <li class="nav-item">
                <a class="nav-link fs-5 mx-1 {{ Request::is('tentang') ? 'active' : '' }}"
                   href="/tentang">Tentang</a>
            </li>

            <li class="nav-item">
                <a class="nav-link fs-5 mx-1 {{ Request::is('berita') ? 'active' : '' }}"
                   href="/berita">Berita</a>
            </li>

            <li class="nav-item">
                <a class="nav-link fs-5 mx-1 {{ Request::is('galeri') ? 'active' : '' }}"
                   href="/galeri">Galeri</a>
            </li>

            <li class="nav-item">
                <a class="nav-link fs-5 mx-1 {{ Request::is('kontak') ? 'active' : '' }}"
                   href="/kontak">Kontak</a>
            </li>
        </ul>

        @if(request()->routeIs('home'))
            <a href="{{ route('login') }}" class="btn-masuk">
                Masuk
            </a>
        @endif

    </div>
</nav>