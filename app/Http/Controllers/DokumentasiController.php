<?php

namespace App\Http\Controllers;

use App\Models\Dokumentasi;
use App\Models\Projek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DokumentasiController extends Controller
{
    public function index()
    {
        $dokumentasis = Dokumentasi::with('projek')->get();
        return view('admin.dokumentasi.index', compact('dokumentasis'));
    }

    public function create()
    {
        $projeks = Projek::all();
        return view('admin.dokumentasi.create', compact('projeks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'projek_id' => 'required|exists:projeks,id',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'required|string',
        ]);

        $path = $request->file('gambar')->store('dokumentasi', 'public');

        Dokumentasi::create([
            'projek_id' => $request->projek_id,
            'gambar' => $path,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('dokumentasi.index')->with('success', 'Dokumentasi berhasil ditambahkan.');
    }

    public function edit(Dokumentasi $dokumentasi)
    {
        $projeks = Projek::all();
        return view('admin.dokumentasi.edit', compact('dokumentasi', 'projeks'));
    }

    public function update(Request $request, Dokumentasi $dokumentasi)
    {
        $request->validate([
            'projek_id' => 'required|exists:projeks,id',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'required|string',
        ]);

        $data = $request->only('projek_id', 'deskripsi');

        if ($request->hasFile('gambar')) {
            if ($dokumentasi->gambar && Storage::disk('public')->exists($dokumentasi->gambar)) {
                Storage::disk('public')->delete($dokumentasi->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('dokumentasi', 'public');
        }

        $dokumentasi->update($data);

        return redirect()->route('dokumentasi.index')->with('success', 'Dokumentasi berhasil diperbarui.');
    }

    public function destroy(Dokumentasi $dokumentasi)
    {
        if ($dokumentasi->gambar && Storage::disk('public')->exists($dokumentasi->gambar)) {
            Storage::disk('public')->delete($dokumentasi->gambar);
        }

        $dokumentasi->delete();
        return redirect()->route('dokumentasi.index')->with('success', 'Dokumentasi berhasil dihapus.');
    }
}
