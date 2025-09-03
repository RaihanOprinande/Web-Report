<?php

namespace App\Http\Controllers;

use App\Models\Projek;
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
        return view('admin.projek.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_projek' => 'required|string|max:255',
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
        return view('admin.projek.edit', compact('projek'));
    }

    public function update(Request $request, Projek $projek)
    {
        $validated = $request->validate([
            'name_projek' => 'required|string|max:255',
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

    public function destroy(Projek $projek)
    {
        $projek->delete();
        return redirect()->route('projek.index')->with('success', 'Projek berhasil dihapus');
    }

}
