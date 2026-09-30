<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    // Menampilkan semua galeri
    public function index()
    {
        $galeris = Galeri::latest()->get();

        return view('dashboard.galeri.index', compact('galeris'));
    }

    // Menampilkan form tambah galeri
    public function create()
    {
        return view('dashboard.galeri.create');
    }

    // Menyimpan galeri baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'gambar' => 'required|image|mimes:jpg,jpeg,png,webp|max:5048',
        ]);

        $data = [
            'judul' => $request->judul,
        ];

        // Upload gambar
        if ($request->hasFile('gambar')) {

            $gambar = $request->file('gambar');

            $namaGambar = time() . '_' . $gambar->getClientOriginalName();

            $gambar->storeAs(
                'galeri',
                $namaGambar,
                'public'
            );

            $data['gambar'] = $namaGambar;
        }

        Galeri::create($data);

        return redirect()
            ->route('dashboard.galeri.index');
    }


    // Menampilkan form edit
    public function edit(Galeri $galeri)
    {
        return view('dashboard.galeri.edit', compact('galeri'));
    }

    // Mengupdate galeri
    public function update(Request $request, Galeri $galeri)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5048',
        ]);

        $data = [
            'judul' => $request->judul,
        ];

        // Kalau upload gambar baru
        if ($request->hasFile('gambar')) {

            // Hapus gambar lama
            if ($galeri->gambar) {

                $gambarLama = storage_path(
                    'app/public/galeri/' . $galeri->gambar
                );

                if (file_exists($gambarLama)) {
                    unlink($gambarLama);
                }
            }

            // Upload gambar baru
            $gambar = $request->file('gambar');

            $namaGambar = time() . '_' . $gambar->getClientOriginalName();

            $gambar->storeAs(
                'galeri',
                $namaGambar,
                'public'
            );

            $data['gambar'] = $namaGambar;
        }

        $galeri->update($data);

        return redirect()
            ->route('dashboard.galeri.index');
    }

    // Menghapus galeri
    public function destroy(Galeri $galeri)
    {
        // Hapus gambar
        if ($galeri->gambar) {

            $gambar = storage_path(
                'app/public/galeri/' . $galeri->gambar
            );

            if (file_exists($gambar)) {
                unlink($gambar);
            }
        }

        $galeri->delete();

        return redirect()
            ->route('dashboard.galeri.index');
    }
}