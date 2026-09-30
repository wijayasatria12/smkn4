@extends('layouts.dashboard')

@section('title', 'Tambah Berita')
@section('page-title', 'Tambah Berita')

@section('content')

<div class="container-fluid">
    <div class="mb-4">
        <h1 class="h3 fw-semibold mb-2 text-white">Tambah Berita</h1>
        <p class="mb-0" style="color: #a0a0a0;">Tambahkan berita baru untuk website SMKN 4 Bogor.</p>
    </div>

    {{-- Form Tambah Berita --}}
    <div class="card border-0 shadow-sm" style="background: #1f2937;">
        <div class="card-body p-4">
            <form action="{{ route('dashboard.berita.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                {{-- Judul --}}
                <div class="mb-4">
                    <label for="judul" class="form-label fw-semibold text-white">Judul Berita</label>

                    <input
                        type="text"
                        id="judul"
                        name="judul"
                        value="{{ old('judul') }}"
                        placeholder="Masukkan judul berita"
                        class="form-control @error('judul') is-invalid @enderror">

                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                </div>

                {{-- Tanggal --}}
                <div class="mb-4">
                    <label for="tanggal" class="form-label fw-semibold text-white">Tanggal Berita</label>

                    <input
                        type="date"
                        id="tanggal"
                        name="tanggal"
                        value="{{ old('tanggal') }}"
                        class="form-control @error('tanggal') is-invalid @enderror">

                    @error('tanggal')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                </div>

                {{-- Deskripsi --}}
                <div class="mb-4">
                    <label for="deskripsi" class="form-label fw-semibold text-white">Deskripsi Singkat</label>

                    <textarea
                        id="deskripsi"
                        name="deskripsi"
                        rows="5"
                        placeholder="Masukkan deskripsi singkat berita"
                        class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}</textarea>

                    @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                </div>

                {{-- Gambar --}}
                <div class="mb-4">
                    <label for="gambar" class="form-label fw-semibold text-white">Gambar Berita</label>

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
                    <a href="{{ route('dashboard.berita.index') }}"
                       class="btn btn-outline-secondary">Batal</a>

                    <button type="submit" class="btn text-white"
                        style="background-color: #198754;">Simpan Berita</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection