@extends('layouts.layouts')

@section('content')

{{-- galeri --}}
<section id="foto" class="section-foto galeri-page pt-5" style="margin-top: 70px;">
    <div class="container">

        <div class="galeri-header text-center mb-5">
            <h2 class="text-hijau fw-bold">Galeri SMKN 4 Bogor</h2>
            <p>Kumpulan dokumentasi kegiatan, fasilitas, dan momen di SMKN 4 Bogor</p>
        </div>

        <div class="row g-4">

            @forelse($galeris as $galeri)

            <div class="col-lg-4 col-md-6 col-6">
                <a
                    class="image-link galeri-item"
                    href="{{ asset('storage/galeri/' . $galeri->gambar) }}">
                    <img
                        src="{{ asset('storage/galeri/' . $galeri->gambar) }}"
                        class="img-fluid" alt="{{ $galeri->judul }}">

                    <div class="galeri-overlay">
                        <h5>{{ $galeri->judul }}</h5>
                    </div>
                </a>
            </div>
            @empty
                <div class="col-12 text-center">
                <p class="text-secondary">Belum ada foto galeri yang tersedia.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection