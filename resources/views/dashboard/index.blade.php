@extends('layouts.dashboard')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')

<div class="container-fluid">
    <div class="mb-4">
<h1 class="fw-semibold mb-2 text-white">Dashboard</h1>
<p class="mb-0" style="color: #a0a0a0;">
    Selamat datang di halaman dashboard admin SMKN 4 Bogor.
</p>
    </div>

    <div class="row g-4">
        {{-- Berita --}}
        <div class="col-md-6">
            <div class="card border-0 h-100" style="background: #1f2937; color: #fff;">
                <div class="card-body p-4">
                    <h5 class="fw-semibold mb-2 text-white">Kelola Berita</h5>
                    <p class="text-secondary mb-4 style="color: #a0a0a0;"">Kelola berita website.</p>
                    <a href="{{ route('dashboard.berita.index') }}"
                        class="btn text-white"
                        style="background-color: #198754;">Masuk</a>
                </div>
            </div>
        </div>

        {{-- Galeri --}}
        <div class="col-md-6">
            <div class="card border-0 h-100" style="background: #1f2937; color: #fff;">
                <div class="card-body p-4">
                    <h5 class="fw-semibold mb-2 text-white">Kelola Galeri</h5>
                    <p class="text-secondary mb-4 style="color: #a0a0a0;"">Kelola foto galeri website.</p>
                    <a href="{{ route('dashboard.galeri.index') }}"
                        class="btn text-white"
                        style="background-color: #198754;">Masuk</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection