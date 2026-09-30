@extends('layouts.layouts')

@section('content')

<section id="detail" class="py-5" style="margin-top: 40px;">
    <div class="container" style="max-width: 900px;">

        <div class="mb-3 breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            <span>/</span>
            <a href="{{ route('berita') }}">Berita</a>
            <span>/</span>
            <span>Detail</span>
        </div>

        {{-- Gambar Berita --}}
        @if($berita->gambar)
            <img src="{{ asset('storage/berita/' . $berita->gambar) }}"
                 class="img-fluid w-100 mb-3"
                 alt="{{ $berita->judul }}"
                 style="max-height: 500px; object-fit: cover; border-radius:8px;">
        @else
            <img src="{{ asset('assets/images/berita.png') }}"
                 class="img-fluid w-100 mb-3"
                 alt="{{ $berita->judul }}"
                 style="max-height: 500px; object-fit: cover; border-radius:8px;">
        @endif

        <div class="konten berita">
            <p class="mb-3 text-secondary">
                {{ \Carbon\Carbon::parse($berita->tanggal)->format('d/m/Y') }}
            </p>

            <h4 class="fw-bold">
                {{ $berita->judul }}
            </h4>

            <p class="text-secondary">
                {{ $berita->deskripsi }}
            </p>
        </div>

    </div>
</section>

@endsection