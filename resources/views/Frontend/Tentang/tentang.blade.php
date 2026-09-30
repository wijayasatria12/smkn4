@extends('layouts.layouts')

@section('content')
{{-- Tentang --}}
<section id="tentang" class="py-4" style="margin-top: 70px;" data-aos="fade-up">
    <div class="container py-4 mt-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="d-flex align-items-center mb-3">
                    <div class="stripe me-2"></div>
                    <h5 class="mb-0 text-hijau fs-5">Tentang Kami</h5>
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
            </div>
        <div class="col-lg-6">
                <img src="{{ asset('assets/images/Tentang.png') }}"
                     class="img-fluid"
                     alt="SMKN 4 Bogor">
            </div>
        </div>
    </div>
</section>
@endsection