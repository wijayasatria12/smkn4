@extends('layouts.dashboard')

@section('title', 'Edit Berita')
@section('page-title', 'Edit Berita')

@section('content')

<div class="container-fluid">
    <div class="mb-4">
        <h1 class="h3 fw-semibold mb-2 text-white">Edit Berita</h1>
        <p class="mb-0" style="color: #a0a0a0;">Perbarui informasi berita.</p>
    </div>

    {{-- Form --}}
    <div class="card border-0 shadow-sm" style="background: #1f2937;">
        <div class="card-body p-4">
            <form action="{{ route('dashboard.berita.update', $berita->id) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                {{-- Judul --}}
                <div class="mb-4">
                    <label for="judul" class="form-label fw-semibold text-white">Judul Berita</label>

                    <input
                        type="text"
                        id="judul"
                        name="judul"
                        value="{{ old('judul', $berita->judul) }}"
                        placeholder="Masukkan judul berita"
                        class="form-control @error('judul') is-invalid @enderror">

                    @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Tanggal --}}
                <div class="mb-4">
                    <label for="tanggal" class="form-label fw-semibold text-white">Tanggal Berita</label>

                    <input
                        type="date"
                        id="tanggal"
                        name="tanggal"
                        value="{{ old('tanggal', $berita->tanggal) }}"
                        class="form-control @error('tanggal') is-invalid @enderror">

                    @error('tanggal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
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
                        class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi', $berita->deskripsi) }}</textarea>

                    @error('deskripsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Gambar Saat Ini --}}
                <div class="mb-4">
                    <label class="form-label fw-semibold text-white">Gambar Saat Ini</label>
                    @if ($berita->gambar)
                        <div class="mb-3">
                            <img
                                src="{{ asset('storage/berita/' . $berita->gambar) }}"
                                alt="{{ $berita->judul }}"
                                class="img-thumbnail"
                                style="width: 220px; height: 140px; object-fit: cover;">
                        </div>

                    @else
                        <div style="color: #a0a0a0;">Belum ada gambar.</div>
                    @endif

                </div>

                {{-- Ganti Gambar --}}
                <div class="mb-4">
                    <label for="gambar" class="form-label fw-semibold text-white">Ganti Gambar</label>

                    <input
                        type="file"
                        id="gambar"
                        name="gambar"
                        accept="image/*"
                        class="form-control @error('gambar') is-invalid @enderror">

                    <div class="form-text" style="color: #a0a0a0;">Kosongkan jika tidak ingin mengganti gambar.</div>

                    @error('gambar')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                </div>

                {{-- Button --}}
                <div class="d-flex gap-2">
                    <a href="{{ route('dashboard.berita.index') }}"
                       class="btn btn-outline-secondary">Batal</a>

                    <button type="submit"class="btn text-white" 
                    style="background-color: #198754;">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection