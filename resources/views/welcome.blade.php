@extends('layouts.layouts')

@section('content')

<section id="hero">
    <div class="hero-content">
        <p class="hero-subtitle">Selamat datang di SATSET</p>
        <h1>Galeri SMK Negeri 4 Bogor</h1>
        <p class="hero-description">Mewujudkan generasi yang unggul, berkarakter, dan kompeten di bidang teknologi dan kejuruan.</p>

        <div class="hero-buttons">
            <a href="#tentang" class="hero-btn hero-btn-primary">Tentang Kami</a>
            <a href="#foto" class="hero-btn hero-btn-outline">Lihat Galeri</a>
        </div>

    </div>
</section>
{{-- statistik --}}
<section id="statistik">
    <div class="container" >
        <div class="row">
            <div class="col-lg-3">
                <div class="bg-white rounded-3 shadow p-3 d-flex align-items-center">
                    <div class="stat-text ms-3">
                        <h5>Pengembangan Perangkat Lunak Dan Gim</h5>
                    </div>
                    <img src="{{ asset('assets/images/pplg.png') }}" width="100" height="100" class="ms-auto" alt="Siswa Aktif">
                </div>
            </div>

            <div class="col-lg-3">
                <div class="bg-white rounded-3 shadow p-3 d-flex align-items-center">
                    <div class="stat-text ms-3">
                        <h5>Teknik Jaringan Komputer Dan Telekomunikasi</h5>
                    </div>
                    <img src="{{ asset('assets/images/tkj.png') }}" width="100" height="100" class="ms-auto" alt="Guru & Staff">
                </div>
            </div>

            <div class="col-lg-3">
                <div class="bg-white rounded-3 shadow p-3 d-flex align-items-center">
                    <div class="stat-text ms-3">
                        <h5>Teknik Kendaraan Ringan Dan Otomotif</h5>
                    </div>
                    <img src="{{ asset('assets/images/to.png') }}" width="100" height="100" class="ms-auto" alt="Program Keahlian">
                </div>
            </div>

            <div class="col-lg-3">
                <div class="bg-white rounded-3 shadow p-3 d-flex align-items-center">
                    <div class="stat-text ms-3">
                        <h5>Teknik Pengelasan Dan Fabrikasi Logam</h5>
                    </div>
                    <img src="{{ asset('assets/images/tp.png') }}" width="100" height="100" class="ms-auto" alt="Prestasi">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Tentang --}}
<section id="tentang" class="py-4">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="d-flex align-items-center mb-3">
                    <div class="stripe me-2"></div>
                    <h5 class="mb-0 fs-5 text-hijau">Tentang Kami</h5>
                </div>
                <h1 class="display-5 fw-bold mb-3">SMKN 4 Bogor</h1>

                <p class="mb-3 lh-base">
                    SMKN 4 Bogor merupakan sekolah menengah kejuruan yang
                    berdedikasi untuk mencetak lulusan yang kompeten,
                    berkarakter, dan siap menghadapi tantangan dunia kerja.
                    Dengan dukungan tenaga pendidik yang profesional serta
                    lingkungan belajar yang nyaman, kami terus mendorong
                    siswa untuk mengembangkan potensi, keterampilan, dan
                    kreativitas mereka.
                </p>
                   <a href="/tentang" class="btn btn-hijau">Selengkapnya</a>
            </div>
        <div class="col-lg-6">
                <img src="{{ asset('assets/images/Tentang.png') }}"
                     class="img-fluid"
                     alt="SMKN 4 Bogor">
            </div>
        </div>
    </div>
</section>

{{-- Berita --}}
<section id="berita">
    <div class="container py-5">
        <div class="header-berita text-center">
            <h2 class="fw-bold text-hijau">Berita SMKN 4 Bogor</h2>
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

        <div class="text-center">
            <a href="{{ route('berita') }}" class="btn btn-hijau">Berita Lainnya</a>
        </div>
    </div>
</section>

{{-- galeri --}}
<section id="foto" class="paralax py-5">
    <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-white mb-0">Galeri SMKN 4 Bogor</h2>
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
                    <p class="text-white">Belum ada foto galeri yang tersedia.</p>
                </div>
            @endforelse
        </div>
        <div class="text-center mt-4">
            <a href="/galeri" class="btn btn-outline-light"> Foto Lainnya</a>
        </div>
    </div>
</section>

{{-- Feedback Pengguna --}}
<section class="feedback-section py-5">
    <div class="container">

        <div class="text-center mb-4">
            <h2 class="fw-bold text-hijau mb-2">
                Pesan & Kesan
            </h2>

            <p class="text-secondary mb-0">
                Berikan penilaian dan saran untuk membantu kami meningkatkan website SATSET.
            </p>
        </div>

        <div class="feedback-card mx-auto">

            <form action="{{ route('feedback.store') }}" method="POST">

                @csrf

                {{-- Nama --}}
                <div class="mb-3 text-start">
                    <label for="nama" class="form-label fw-semibold">
                        Nama
                    </label>

                    <input
                        type="text"
                        name="nama"
                        id="nama"
                        class="form-control"
                        placeholder="Masukkan nama Anda"
                        required>
                </div>

                {{-- Kepuasan --}}
                    <div class="mb-3 text-start">
                        <label for="rating" class="form-label fw-semibold">
                            Seberapa puas Anda dengan website SATSET?
                        </label>

                        <select name="rating" id="rating" class="form-select" required>
                            <option value="" selected disabled>
                                Pilih tingkat kepuasan
                            </option>
                            <option value="1">1. Sangat Tidak Puas</option>
                            <option value="2">2. Tidak Puas</option>
                            <option value="3">3. Cukup Puas</option>
                            <option value="4">4. Puas</option>
                            <option value="5">5. Sangat Puas</option>
                        </select>
                    </div>

                {{-- Pesan --}}
                <div class="mb-4 text-start">
                    <label for="pesan" class="form-label fw-semibold">
                        Saran atau Masukan
                    </label>

                    <textarea
                        name="pesan"
                        id="pesan"
                        rows="4"
                        class="form-control"
                        placeholder="Tuliskan saran atau masukan Anda..."
                        required></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn feedback-submit">
                        Kirim Pesan
                    </button>
                </div>

            </form>

        </div>

    </div>
</section>

{{-- kontak --}}
<section class="contact-section kontak-page pt-5" id="kontak">
<div class="text-center mb-5">
    <h2 class="fw-bold text-hijau mb-0">Kontak & Lokasi</h2>
</div>

    <div class="container">
       <div class="contact-card contact-info mx-auto d-flex align-items-center justify-content-between gap-4 bg-white border rounded-3 p-4">
           <div class="contact-info-left flex-grow-1 d-flex flex-column gap-4">
                <div class="contact-item d-flex align-items-start gap-3">
                    <span class="contact-icon flex-shrink-0 d-flex align-items-center justify-content-center rounded-circle">
                        <iconify-icon icon="mdi:map-marker"></iconify-icon></span>

            <div>
                <strong class="d-block mb-1 fw-bold">Alamat</strong>
                    <p class="mb-0 text-secondary">
                    Jl. Raya Tajur, Kp. Buntar RT.02/RW.08, Kel. Muarasari, Kec. Bogor Selatan, Kota Bogor, Jawa Barat 16137.</p>
                  </div>
                </div>

                <div class="contact-item d-flex align-items-start gap-3">
                    <span class="contact-icon flex-shrink-0 d-flex align-items-center justify-content-center rounded-circle">
                        <iconify-icon icon="mdi:phone"></iconify-icon></span>

                <div>
                    <strong class="d-block mb-1 fw-bold">Telepon</strong>
                    <p class="mb-0 text-secondary">02517547381</p>
                    </div>
                </div>

                <div class="contact-item d-flex align-items-start gap-3">
                    <span class="contact-icon flex-shrink-0 d-flex align-items-center justify-content-center rounded-circle">
                        <iconify-icon icon="mdi:email"></iconify-icon></span>

                    <div>
                       <strong class="d-block mb-1 fw-bold">Email</strong>
                            <p class="mb-0 text-secondary">smkn4@smkn4bogor.sch.id</p>
                    </div>
                </div>

                <div class="contact-item d-flex align-items-start gap-3">
                    <span class="contact-icon flex-shrink-0 d-flex align-items-center justify-content-center rounded-circle">
                        <iconify-icon icon="mdi:clock-outline"></iconify-icon></span>
                        
                    <div>
                       <strong class="d-block mb-1 fw-bold">Jam Operasional</strong>
                            <p class="mb-0 text-secondary">Senin - Jumat 07.00 - 16.00 WIB</p>
                    </div>
                </div>
            </div>

            <div class="contact-map flex-shrink-0 overflow-hidden rounded">
           <iframe
                class="w-100 h-100 d-block border-0"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.0498396124394!2d106.82211897504128!3d-6.640733393353845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c8b16ee07ef5%3A0x14ab253dd267de49!2sSMKN%204%20Bogor!5e0!3m2!1sen!2sid!4v1786538475804!5m2!1sen!2sid"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="strict-origin-when-cross-origin">
            </iframe>
        </div>
    </div>
</section>
@endsection

