@extends('layouts.layouts')

@section('content')
{{-- Berita --}}
<section id="berita" class="berita-page" data-aos="fade-up">
    <div class="container py-5">
        <div class="header-berita text-center">
            <h2 class="fw-bold text-hijau">Berita SMKN 4 Bogor</h2>
               <p class="text-secondary mb-0">Informasi terbaru seputar kegiatan dan prestasi SMKN 4 Bogor.</p>
        </div>

        <div class="row g-4 py-5">
            @forelse($beritas as $berita)
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm h-100 overflow-hidden">
                        {{-- Gambar --}}
                        @if($berita->gambar)
                            <img
                                src="{{ asset('storage/berita/' . $berita->gambar) }}"
                                class="card-img-top"
                                alt="{{ $berita->judul }}"
                                style="height: 280px; object-fit: cover;">

                        @else

                            <img
                                src="{{ asset('assets/images/berita.png') }}"
                                class="card-img-top"
                                alt="{{ $berita->judul }}"
                                style="height: 280px; object-fit: cover;">

                        @endif

                        {{-- Isi --}}
                        <div class="card-body p-4 d-flex flex-column">
                            <p class="text-secondary mb-2">{{ \Carbon\Carbon::parse($berita->tanggal)->format('d/m/Y') }}</p>
                            <h4 class="fw-bold mb-2">{{ $berita->judul }}</h4>
                            <p class="text-secondary mb-3">{{ $berita->deskripsi }}</p>
                            <a href="{{ route('berita.detail', $berita->id) }}"
                                class="text-decoration-none fw-semibold mt-auto text-hijau">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p class="text-secondary">Belum ada berita yang tersedia.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection