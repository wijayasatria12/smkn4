@extends('layouts.layouts')

@section('content')

{{-- Tentang --}}
<section id="tentang" class="py-4" style="margin-top: 70px;">
    <div class="container py-4 mt-5">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <div class="d-flex align-items-center mb-3">
                    <div class="stripe me-2"></div>
                    <h5 class="mb-0 text-hijau fs-5">Tentang Kami</h5>
                </div>

                <h1 class="display-5 fw-bold mb-3">
                    SMKN 4 Bogor
                </h1>

                <p class="mb-3 lh-base">
                    SMKN 4 Bogor merupakan sekolah menengah kejuruan yang
                    berdedikasi untuk mencetak lulusan yang kompeten,
                    berkarakter, dan siap menghadapi tantangan dunia kerja.
                    Dengan dukungan tenaga pendidik yang profesional serta
                    lingkungan belajar yang nyaman, kami terus mendorong
                    siswa untuk mengembangkan potensi, keterampilan, dan
                    kreativitas mereka.
                </p>

            </div>

            <div class="col-lg-6">

                <img src="{{ asset('assets/images/Tentang.png') }}"
                     class="img-fluid"
                     alt="SMKN 4 Bogor">

            </div>

        </div>

    </div>
</section>


{{-- Visi & Misi --}}
<section class="visi-misi py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="text-hijau fw-bold">Visi & Misi</h2>
            <p class="text-secondary mb-0">
                Komitmen SMKN 4 Bogor dalam menciptakan pendidikan
                yang unggul dan berkualitas.
            </p>
        </div>


        <div class="row g-4">

            {{-- Visi --}}
            <div class="col-lg-6">
                <div class="visi-misi-card h-100">
                    <h3 class="fw-bold text-hijau mb-3">Visi</h3>
                    <p class="mb-0">
                        Terwujudnya SMK yang unggul, berkarakter,
                        kompeten, dan siap menghadapi perkembangan
                        dunia kerja serta teknologi.
                    </p>
                </div>
            </div>

            {{-- Misi --}}
            <div class="col-lg-6">
                <div class="visi-misi-card h-100">
                    <h3 class="fw-bold text-hijau mb-3">Misi</h3>

                    <ul class="mb-0">
                        <li>
                            Menyelenggarakan pendidikan yang berkualitas
                            sesuai kebutuhan industri.
                        </li>

                        <li>
                            Mengembangkan keterampilan dan kreativitas siswa.
                        </li>

                        <li>
                            Membentuk peserta didik yang disiplin,
                            mandiri, dan berkarakter.
                        </li>

                        <li>
                            Meningkatkan pemanfaatan teknologi dalam
                            proses pembelajaran.
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection