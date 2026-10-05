@extends('layouts.layouts')

@section('content')

<style>
    .detail-tkj-image img {
        max-width: 350px;
    }

    .detail-back:hover {
        background-color: #157347 !important;
    }
</style>

<section class="py-5" style="background: #f8faf9;">

    <div class="container py-5">

        {{-- Judul --}}
        <div class="text-center mb-5">
            <h2 class="fw-bold text-hijau">
                Tentang Jurusan Teknik Jaringan Komputer Dan Telekomunikasi
            </h2>
        </div>

        <div class="row align-items-center g-5">

            {{-- Gambar --}}
            <div class="col-lg-5 text-center">

                <div class="bg-white rounded-4 shadow-sm p-5">
                    <img
                        src="{{ asset('assets/images/tkj.png') }}"
                        alt="TKJ"
                        class="img-fluid"
                        style="max-width: 350px;">
                </div>

            </div>

            {{-- Teks --}}
            <div class="col-lg-7">

                <h1 class="fw-bold mb-4">
                    Apa Itu TKJ?
                </h1>

                <p class="text-secondary lh-lg mb-3">
                    Teknik Jaringan Komputer dan Telekomunikasi (TKJ)
                    merupakan salah satu jurusan di SMK Negeri 4 Bogor
                    yang berfokus pada bidang jaringan komputer dan
                    teknologi telekomunikasi.
                </p>

                <p class="text-secondary lh-lg mb-4">
                    Pada jurusan ini, siswa mempelajari berbagai hal
                    seperti jaringan komputer, instalasi jaringan,
                    konfigurasi perangkat jaringan, keamanan jaringan,
                    serta teknologi telekomunikasi.
                </p>

<div class="d-flex align-items-center gap-3">

    {{-- Tombol Kembali --}}
    <button
        type="button"
        onclick="history.back()"
        class="btn text-white detail-back"
        style="background-color: #198754;">
        Kembali
    </button>

    {{-- Follow Instagram --}}
    <a href="https://www.instagram.com/official.tkjsmkn4bogor?utm_source=ig_web_button_share_sheet&stkn=ZDNlZDc0MzIxNw==" target="_blank"
        class="text-decoration-none">

        <div class="bg-white border rounded-3 shadow-sm px-3 py-2 d-flex align-items-center gap-2">
            <iconify-icon
                icon="mdi:instagram"
                width="25"
                height="25"
                style="color: #198754;">
            </iconify-icon>

            <div>
                <div class="fw-semibold text-dark">
                    Follow Kami
                </div>
            </div>
        </div>
    </a>
</div>
</section>

@endsection