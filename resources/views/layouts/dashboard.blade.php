<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Dashboard Admin') - SATSET
    </title>

    <link rel="shortcut icon" href="{{ asset('assets/images/logo ss.ico') }}">
    
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @yield('css')

</head>

<body class="d-flex min-vh-100" style="font-family: 'Lexend Deca', sans-serif; background: #111827;">
<aside class="d-flex flex-column text-white min-vh-100 p-3 flex-shrink-0"
       style="width: 240px; background-color: #198754;">

{{-- Logo --}}
<div class="text-center mb-4">

    <div style="
        width: 85px;
        height: 85px;
        margin: 0 auto 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #fff;
        border-radius: 15px;
    ">
        <img src="{{ asset('assets/images/logo.png') }}"
             alt="Logo SATSET"
             width="65"
             height="65"
             style="object-fit: contain;">
    </div>

    <h5 class="fw-bold mb-1">SATSET</h5>
    <small class="text-white">ADMIN</small>

</div>
    {{-- Menu --}}
    <nav class="d-flex flex-column gap-2">
    <a href="{{ route('dashboard') }}"
       class="text-decoration-none rounded px-3 py-2
        {{ request()->routeIs('dashboard') ? 'text-white' : 'text-white' }}"
        style="{{ request()->routeIs('dashboard') ? 'background-color: #026a43;' : '' }}">Dashboard</a>

    <a href="{{ route('dashboard.berita.index') }}"
        class="text-decoration-none rounded px-3 py-2 text-white"
        style="{{ request()->routeIs('dashboard.berita.*') ? 'background-color: #026a43;' : '' }}">Berita</a>

    <a href="{{ route('dashboard.galeri.index') }}"
       class="text-decoration-none rounded px-3 py-2 text-white"
       style="{{ request()->routeIs('dashboard.galeri.*') ? 'background-color: #026a43;' : '' }}">Galeri</a>

    <a href="{{ route('dashboard.feedback') }}"
       class="text-decoration-none rounded px-3 py-2 text-white"
       style="{{ request()->routeIs('dashboard.feedback*') ? 'background-color: #026a43;' : '' }}">Pesan</a>
    </nav>

    {{-- Logout --}}
    <div class="mt-auto">
        <button type="button"
                onclick="konfirmasiKeluar()"
                class="btn btn-outline-light w-100">Keluar</button>

        <form id="logout-form"
              action="{{ route('logout') }}"
              method="POST"
              class="d-none">
            @csrf
        </form>
    </div>
</aside>

<main class="flex-grow-1 style="background: #111827;">
  <header class="px-4 py-3"
        style="background: #1f2937; border-bottom: 1px solid #374151;">
    <h3 class="mb-0 fw-semibold text-white">
        @yield('page-title', 'Dashboard')
    </h3>
</header>
    <section class="p-4">
        @yield('content')
    </section>
</main>
<script>
    function konfirmasiKeluar() {
        if (confirm('Apakah Anda yakin ingin keluar?')) {
            document.getElementById('logout-form').submit();
        }
    }
</script>
</body>
</html>