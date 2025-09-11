<?php

namespace App\Http\Controllers;

use App\Models\Projek;
use App\Models\ProjekKategori;
use Illuminate\Http\Request;

class ProjekController extends Controller
{
    public function index()
{
    $projek = Projek::all();
    return view('admin.projek.index', compact('projek'));
    }

    public function create()
    {
        $kategoris = ProjekKategori::all();
        return view('admin.projek.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_projek' => 'required|string|max:255',
            'projek_kategori_id' => 'nullable|exists:projek_kategoris,id',
            'client' => 'required|string|max:255',
            'tanggal_mulai' => 'nullable|date',
            'tanggal_selesai' => 'nullable|date',
            'deadline' => 'nullable|date',
            'prioritas' => 'required|in:tinggi,sedang,rendah',
            'status' => 'required|in:akan datang,sedang berjalan,selesai',
            'deskripsi' => 'nullable|string',
        ]);

        Projek::create($validated);
        return redirect()->route('projek.index')->with('success', 'Projek berhasil ditambahkan');
    }

    public function edit(Projek $projek)
    {
        $kategoris = ProjekKategori::all();
        return view('admin.projek.edit', compact('projek', 'kategoris'));
    }

    public function update(Request $request, Projek $projek)
    {
        $validated = $request->validate([
            'name_projek' => 'required|string|max:255',
            'projek_kategori_id' => 'nullable|exists:projek_kategoris,id',
            'client' => 'required|string|max:255',
            'tanggal_mulai' => 'nullable|date',
            'tanggal_selesai' => 'nullable|date',
            'deadline' => 'nullable|date',
            'prioritas' => 'required|in:tinggi,sedang,rendah',
            'status' => 'required|in:akan datang,sedang berjalan,selesai',
            'deskripsi' => 'nullable|string',
        ]);

        $projek->update($validated);
        return redirect()->route('projek.index')->with('success', 'Projek berhasil diperbarui');
    }

    public function show(String $id){
        $projek = Projek::find($id);
        return view('admin.projek.show', compact('projek'));
    }

    public function destroy(Projek $projek)
    {
        $projek->delete();
        return redirect()->route('projek.index')->with('success', 'Projek berhasil dihapus');
    }

}
