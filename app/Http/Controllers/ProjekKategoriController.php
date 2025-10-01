<?php

namespace App\Http\Controllers;

use App\Models\ProjekKategori;
use Illuminate\Http\Request;

class ProjekKategoriController extends Controller
{
    public function index()
    {
        $kategoris = ProjekKategori::all();
        return view('admin.projek_kategori.index', compact('kategoris'));
    }

    public function create()
    {
        return view('admin.projek_kategori.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'nama_kategori' => 'required|string|max:255',
        'deskripsi' => 'nullable|string',
        'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $data = $request->only(['nama_kategori', 'deskripsi']);

    if ($request->hasFile('gambar')) {
        $data['gambar'] = $request->file('gambar')->store('projek_kategori', 'public');
    }

    ProjekKategori::create($data);

    return redirect()->route('projek_kategori.index')->with('success', 'Kategori berhasil ditambahkan.');
}

    public function edit(ProjekKategori $projek_kategori)
    {
        return view('admin.projek_kategori.edit', compact('projek_kategori'));
    }

    public function update(Request $request, string $id)
{
    try {
        $projekKategori = ProjekKategori::findOrFail($id);

        $validated = $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        $dataUpdate = [
            'nama_kategori' => $validated['nama_kategori'],
            'deskripsi' => $validated['deskripsi'] ?? null,
        ];

        // handle upload gambar baru
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('projek_kategori', 'public');
            $dataUpdate['gambar'] = $gambarPath;
        }

        $projekKategori->update($dataUpdate);

        return redirect()->route('projek_kategori.index')
            ->with('success', 'Kategori berhasil diperbarui');
    } catch (\Exception $e) {
        return back()->with('error', $e->getMessage());
    }
}


    public function destroy(ProjekKategori $projek_kategori)
    {
        $projek_kategori->delete();
        return redirect()->route('projek_kategori.index')->with('success', 'Kategori berhasil dihapus.');
    }
}
