<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    // Menampilkan semua berita
    public function index()
    {
        $beritas = Berita::latest()->get();

        return view('dashboard.berita.index', compact('beritas'));
    }

    // Menampilkan berita di website
    public function publicIndex()
    {
    $beritas = Berita::latest()->get();

    return view('Frontend.berita.berita', compact('beritas'));
}

// Menampilkan detail berita di website
    public function publicShow(Berita $berita)
    {
    return view('Frontend.berita.detail', compact('berita'));
    }

    // Menampilkan form tambah berita
    public function create()
    {
        return view('dashboard.berita.create');
    }

    // Menyimpan berita baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5048',
            'tanggal' => 'required|date',
        ]);

        $data = $request->only([
            'judul',
            'deskripsi',
            'tanggal',
        ]);

        // Upload gambar
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaGambar = time() . '_' . $gambar->getClientOriginalName();

            $gambar->storeAs('berita', $namaGambar, 'public');

            $data['gambar'] = $namaGambar;
        }

        Berita::create($data);

        return redirect()
            ->route('dashboard.berita.index');
    }

    // Menampilkan form edit berita
    public function edit(Berita $berita)
    {
        return view('dashboard.berita.edit', compact('berita'));
    }

    // Mengupdate berita
    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5024',
            'tanggal' => 'required|date',
        ]);

        $data = $request->only([
            'judul',
            'deskripsi',
            'tanggal',
        ]);

        // Kalau upload gambar baru
        if ($request->hasFile('gambar')) {

            // Hapus gambar lama
            if ($berita->gambar) {
                $gambarLama = storage_path('app/public/berita/' . $berita->gambar);

                if (file_exists($gambarLama)) {
                    unlink($gambarLama);
                }
            }

            $gambar = $request->file('gambar');
            $namaGambar = time() . '_' . $gambar->getClientOriginalName();

            $gambar->storeAs('berita', $namaGambar, 'public');

            $data['gambar'] = $namaGambar;
        }

        $berita->update($data);

        return redirect()
            ->route('dashboard.berita.index');
    }

    // Menghapus berita
    public function destroy(Berita $berita)
    {
        // Hapus gambar
        if ($berita->gambar) {
            $gambar = storage_path('app/public/berita/' . $berita->gambar);

            if (file_exists($gambar)) {
                unlink($gambar);
            }
        }

        $berita->delete();

        return redirect()
            ->route('dashboard.berita.index');
    }
}