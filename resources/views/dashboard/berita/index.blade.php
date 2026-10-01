@extends('layouts.dashboard')

@section('title', 'Berita')

@section('page-title', 'Berita')

@section('content')

<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fw-semibold mb-2 text-white">Berita</h1>
            <p class="text-secondary mb-0">Kelola berita yang ditampilkan di website SMKN 4 Bogor.</p>
        </div>

        <a href="{{ route('dashboard.berita.create') }}"
           class="btn text-white"
           style="background-color: #198754;">Tambah Berita</a>
    </div>

{{-- Daftar Berita --}}

@if($beritas->count() > 0)

<div class="card border-0 shadow-sm"
     style="background: #1f2937;">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0"
       style="
           --bs-table-bg: #1f2937;
           --bs-table-color: #fff;
           --bs-table-border-color: #374151;
       ">
            <thead style="background: #111827; color: #fff;">
                <tr>
                    <th class="px-4 py-3 text-center">Gambar</th>
                    <th class="py-3 text-center">Judul</th>
                    <th class="py-3 text-center">Tanggal</th>
                    <th class="py-3 text-center">Deskripsi</th>
                    <th class="py-3 text-center">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($beritas as $berita)
                    <tr>
                        {{-- Gambar --}}
                        <td class="px-4">
                            @if ($berita->gambar)
                                <img
                                    src="{{ asset('storage/berita/' . $berita->gambar) }}"
                                    alt="{{ $berita->judul }}"
                                    class="rounded"
                                    style="width: 90px; height: 60px; object-fit: cover;">
                            @else
                                <img
                                    src="{{ asset('assets/images/berita.png') }}"
                                    alt="{{ $berita->judul }}"
                                    class="rounded"
                                    style="width: 90px; height: 60px; object-fit: cover;">
                            @endif
                        </td>

                        {{-- Judul --}}
                        <td>
                            <span class="fw-semibold text-secondary">{{ $berita->judul }}</span>
                        </td>

                        {{-- Tanggal --}}
                        <td>
                            <span class="text-secondary">{{ \Carbon\Carbon::parse($berita->tanggal)->format('d/m/Y') }}</span>
                        </td>

                        {{-- Deskripsi --}}
                        <td class="text-center">
                            <span class="text-secondary">{{ $berita->deskripsi }}</span>
                        </td>

                        {{-- Aksi --}}
                        <td>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('dashboard.berita.edit', $berita->id) }}"
                                    class="btn btn-outline-success btn-sm">Edit</a>
                                <form action="{{ route('dashboard.berita.destroy', $berita->id) }}"method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-outline-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus berita ini?')">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    
                @endforeach

            </tbody>
        </table>
    </div>
</div>

@else

<div class="card border-0 shadow-sm"
     style="background: #1f2937;">

    <div class="text-center py-5">
        <h5 class="fw-semibold mb-2 text-white">Belum Ada Berita</h5>
        <p class="text-secondary mb-4">Belum ada berita yang ditambahkan.</p>

        <a href="{{ route('dashboard.berita.create') }}"
           class="btn text-white"
           style="background-color: #198754;">
            Tambah Berita
        </a>
    </div>
</div>

@endif

@endsection