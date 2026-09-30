@extends('layouts.dashboard')

@section('title', 'Tambah Galeri')
@section('page-title', 'Tambah Foto')

@section('content')

<div class="container-fluid">
    <div class="mb-4">
    <h1 class="h3 fw-semibold mb-2 text-white">Tambah Foto</h1>
    <p class="mb-0" style="color: #a0a0a0;">Tambahkan foto baru untuk galeri website SMKN 4 Bogor.</p>

    </div>

    {{-- Form --}}
    <div class="card border-0 shadow-sm" style="background: #1f2937;">
        <div class="card-body p-4">
            <form action="{{ route('dashboard.galeri.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                {{-- Judul Foto --}}
                <div class="mb-4">
                    <label for="judul" class="form-label fw-semibold text-white">Judul Foto</label>

                    <input
                        type="text"
                        id="judul"
                        name="judul"
                        value="{{ old('judul') }}"
                        placeholder="Masukkan judul foto"
                        class="form-control @error('judul') is-invalid @enderror">

                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                </div>

                {{-- Gambar --}}
                <div class="mb-4">
                    <label for="gambar" class="form-label fw-semibold text-white">Gambar</label>

                    <input
                        type="file"
                        id="gambar"
                        name="gambar"
                        accept="image/*"
                        class="form-control @error('gambar') is-invalid @enderror">

                    <div class="form-text" style="color: #a0a0a0;">
                        Format JPG, JPEG, PNG, atau WEBP. Maksimal 2MB.
                    </div>

                    @error('gambar')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                </div>

                {{-- Tombol --}}
                <div class="d-flex gap-2">
                    <a href="{{ route('dashboard.galeri.index') }}"
                       class="btn btn-outline-secondary">Batal </a>

                    <button type="submit" class="btn text-white"
                        style="background-color: #198754;">Simpan Foto</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection