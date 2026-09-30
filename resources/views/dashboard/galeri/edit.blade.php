@extends('layouts.dashboard')

@section('title', 'Edit Galeri')
@section('page-title', 'Edit Galeri')

@section('content')

<div class="container-fluid">
    {{-- Header --}}
    <div class="mb-4">
        <h1 class="h3 fw-semibold mb-2 text-white">Edit Foto</h1>

        <p class="mb-0" style="color: #a0a0a0;">Perbarui informasi foto galeri SMKN 4 Bogor.</p>

    </div>

    {{-- Form --}}
    <div class="card border-0 shadow-sm" style="background: #1f2937;">
        <div class="card-body p-4">
            <form action="{{ route('dashboard.galeri.update', $galeri->id) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                {{-- Judul --}}
                <div class="mb-4">
                    <label for="judul" class="form-label fw-semibold text-white">Judul Foto</label>

                    <input
                        type="text"
                        id="judul"
                        name="judul"
                        value="{{ old('judul', $galeri->judul) }}"
                        placeholder="Masukkan judul foto"
                        class="form-control @error('judul') is-invalid @enderror">

                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                </div>

                {{-- Gambar Saat Ini --}}
                <div class="mb-4">
                    <label class="form-label fw-semibold text-white">Foto Saat Ini</label>
                    @if ($galeri->gambar)
                        <div class="mb-3">
                            <img
                                src="{{ asset('storage/galeri/' . $galeri->gambar) }}"
                                alt="{{ $galeri->judul }}"
                                class="img-thumbnail"
                                style="
                                    width: 220px;
                                    height: 140px;
                                    object-fit: cover;
                                ">

                        </div>

                    @else
                        <div style="color: #a0a0a0;">Belum ada foto.</div>
                    @endif

                </div>

                {{-- Ganti Foto --}}
                <div class="mb-4">
                    <label for="gambar" class="form-label fw-semibold text-white">Ganti Foto</label>

                    <input
                        type="file"
                        id="gambar"
                        name="gambar"
                        accept="image/*"
                        class="form-control @error('gambar') is-invalid @enderror">

                    <div class="form-text" style="color: #a0a0a0;">Kosongkan jika tidak ingin mengganti foto.</div>

                    @error('gambar')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                </div>

                {{-- Button --}}
                <div class="d-flex gap-2">
                    <a href="{{ route('dashboard.galeri.index') }}"
                       class="btn btn-outline-secondary">Batal</a>

                    <button type="submit" class="btn text-white"
                        style="background-color: #198754;">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection