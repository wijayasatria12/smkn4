@extends('layouts.dashboard')

@section('title', 'Pesan')

@section('page-title', 'Pesan')

@section('content')

<div class="container-fluid">

    <div class="mb-4">
        <h1 class="fw-semibold mb-2 text-white">Pesan</h1>
        <p class="text-secondary mb-0">
            Lihat masukan dan tingkat kepuasan pengguna terhadap website SATSET.
        </p>
    </div>

    @if($feedbacks->count() > 0)

        <div class="card border-0 shadow-sm"
             style="background: #1f2937;">

            <div class="table-responsive">

                <table class="table table-hover align-middle mb-0 feedback-table"
                    style="
                        --bs-table-bg: #1f2937;
                        --bs-table-color: #fff;
                        --bs-table-border-color: #374151;
                    ">

                    <thead style="background: #111827; color: #fff;">

                        <tr>
                            <th class="px-4 py-3 text-center">Nama</th>
                            <th class="py-3 text-center">Kepuasan</th>
                            <th class="py-3 text-center">Saran / Masukan</th>
                            <th class="py-3 text-center">Tanggal</th>
                            <th class="py-3 text-center">Aksi</th>
                        </tr>

                    </thead>

                    <tbody>

                        @foreach($feedbacks as $feedback)

                            <tr>

                                {{-- Nama --}}
                                <td class="text-center">
                                    <span class="fw-semibold text-secondary">
                                        {{ $feedback->nama }}
                                    </span>
                                </td>

                                {{-- Kepuasan --}}
                                <td class="text-center">

                                    @switch($feedback->rating)

                                        @case(1)
                                            <span class="text-secondary">
                                                Sangat Tidak Puas
                                            </span>
                                            @break

                                        @case(2)
                                            <span class="text-secondary">
                                                Tidak Puas
                                            </span>
                                            @break

                                        @case(3)
                                            <span class="text-secondary">
                                                Cukup Puas
                                            </span>
                                            @break

                                        @case(4)
                                            <span class="text-secondary">
                                                Puas
                                            </span>
                                            @break

                                        @case(5)
                                            <span class="text-secondary">
                                                Sangat Puas
                                            </span>
                                            @break

                                    @endswitch

                                </td>

                                {{-- Saran --}}
                                <td class="text-center">
                                    <span class="text-secondary">
                                        {{ $feedback->pesan }}
                                    </span>
                                </td>

                                {{-- Tanggal --}}
                                <td class="text-center">
                                    <span class="text-secondary">
                                        {{ $feedback->created_at->format('d/m/Y') }}
                                    </span>
                                </td>

                                {{-- Aksi --}}
                                <td>

                                    <div class="d-flex justify-content-center">

                                        <form
                                            action="{{ route('dashboard.feedback.destroy', $feedback->id) }}"
                                            method="POST">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-outline-danger btn-sm" 
                                                onclick="return confirm('Yakin ingin menghapus feedback ini?')">Hapus</button>

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

                <h5 class="fw-semibold mb-2 text-white">
                    Belum Ada Feedback
                </h5>

                <p class="text-secondary mb-0">
                    Belum ada feedback yang diberikan oleh pengguna.
                </p>

            </div>

        </div>

    @endif

</div>

@endsection