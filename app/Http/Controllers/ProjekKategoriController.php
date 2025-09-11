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
        ]);

        ProjekKategori::create($request->all());

        return redirect()->route('projek_kategori.index')->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function edit(ProjekKategori $projek_kategori)
    {
        return view('admin.projek_kategori.edit', compact('projek_kategori'));
    }

    public function update(Request $request, ProjekKategori $projek_kategori)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $projek_kategori->update($request->all());

        return redirect()->route('projek_kategori.index')->with('success', 'Kategori berhasil diperbarui.');
    }

    public function destroy(ProjekKategori $projek_kategori)
    {
        $projek_kategori->delete();
        return redirect()->route('projek_kategori.index')->with('success', 'Kategori berhasil dihapus.');
    }
}
