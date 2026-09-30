@extends('layouts.layouts')

@section('content')

<section class="contact-section kontak-page pt-5" id="kontak" style="margin-top: 50px;">

    <div class="text-center mb-5 mt-5">
        <h2 class="fw-bold text-hijau mb-0">Kontak & Lokasi</h2>
    </div>

    <div class="container">

        <div class="contact-card contact-info mx-auto d-flex align-items-center justify-content-between gap-4 bg-white border rounded-3 p-4">

            <div class="contact-info-left flex-grow-1 d-flex flex-column gap-4">

                <div class="contact-item d-flex align-items-start gap-3">
                    <span class="contact-icon flex-shrink-0 d-flex align-items-center justify-content-center rounded-circle">
                        <iconify-icon icon="mdi:map-marker"></iconify-icon>
                    </span>

                    <div>
                        <strong class="d-block mb-1 fw-bold">Alamat</strong>
                        <p class="mb-0 text-secondary">
                            Jl. Raya Tajur, Kp. Buntar RT.02/RW.08,
                            Kel. Muarasari, Kec. Bogor Selatan,
                            Kota Bogor, Jawa Barat 16137.
                        </p>
                    </div>
                </div>

                <div class="contact-item d-flex align-items-start gap-3">
                    <span class="contact-icon flex-shrink-0 d-flex align-items-center justify-content-center rounded-circle">
                        <iconify-icon icon="mdi:phone"></iconify-icon>
                    </span>

                    <div>
                        <strong class="d-block mb-1 fw-bold">Telepon</strong>
                        <p class="mb-0 text-secondary">02517547381</p>
                    </div>
                </div>

                <div class="contact-item d-flex align-items-start gap-3">
                    <span class="contact-icon flex-shrink-0 d-flex align-items-center justify-content-center rounded-circle">
                        <iconify-icon icon="mdi:email"></iconify-icon>
                    </span>

                    <div>
                        <strong class="d-block mb-1 fw-bold">Email</strong>
                        <p class="mb-0 text-secondary">smkn4@smkn4bogor.sch.id</p>
                    </div>
                </div>

                <div class="contact-item d-flex align-items-start gap-3">
                    <span class="contact-icon flex-shrink-0 d-flex align-items-center justify-content-center rounded-circle">
                        <iconify-icon icon="mdi:clock-outline"></iconify-icon>
                    </span>

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

    </div>

</section>

@endsection