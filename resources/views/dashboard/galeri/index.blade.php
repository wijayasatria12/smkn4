@extends('layouts.dashboard')

@section('title', 'Galeri')

@section('page-title', 'Galeri')

@section('content')

<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 fw-semibold mb-2 text-white">Galeri</h1>

            <p class="mb-0" style="color: #a0a0a0;">Kelola foto galeri yang ditampilkan di website SMKN 4 Bogor.</p>
        </div>

        <a href="{{ route('dashboard.galeri.create') }}"
           class="btn text-white"
           style="background-color: #198754;">Tambah Foto</a>

    </div>

    {{-- Daftar Galeri --}}
    <div class="card border-0 shadow-sm" style="background: #1f2937;">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0"
                   style="
                       --bs-table-bg: #1f2937;
                       --bs-table-color: #fff;
                       --bs-table-border-color: #374151;
                       --bs-table-hover-bg: #374151;
                       --bs-table-hover-color: #fff;
                   ">

                <thead style="background: #111827; color: #fff;">
                    <tr>
                        <th class="px-4 py-3">Gambar</th>
                        <th class="py-3">Judul</th>
                        <th class="py-3 text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($galeris as $galeri)
                        <tr>
                            {{-- Gambar --}}
                            <td class="px-4">
                                <img
                                    src="{{ asset('storage/galeri/' . $galeri->gambar) }}"
                                    alt="{{ $galeri->judul }}"
                                    class="rounded"
                                    style="
                                        width: 90px;
                                        height: 60px;
                                        object-fit: cover;
                                    ">

                            </td>

                            {{-- Judul --}}
                            <td>
                                <span class="fw-semibold text-white">{{ $galeri->judul }}</span>
                            </td>

                            {{-- Aksi --}}
                            <td>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="{{ route('dashboard.galeri.edit', $galeri->id) }}"
                                       class="btn btn-outline-success btn-sm">Edit</a>

                                    <form
                                        action="{{ route('dashboard.galeri.destroy', $galeri->id) }}"
                                        method="POST">

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-outline-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus foto ini?')">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center py-5">
                                <h5 class="fw-semibold mb-2 text-white">Belum Ada Foto</h5>
                                <p class="mb-4" style="color: #a0a0a0;">Belum ada foto yang ditambahkan.</p>
                                <a href="{{ route('dashboard.galeri.create') }}"
                                   class="btn text-white"
                                   style="background-color: #198754;">Tambah Foto</a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection