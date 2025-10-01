<?php

namespace App\Http\Controllers;

use App\Models\Projek;
use App\Models\ProjekKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjekController extends Controller
{
    public function index()
    {
        // lebih baik pakai with() untuk eager load kategori biar tidak N+1
        $projek = Projek::with('kategori')->get();
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
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'tanggal_mulai' => 'nullable|date',
            'tanggal_selesai' => 'nullable|date',
            'deadline' => 'nullable|date',
            'prioritas' => 'required|in:tinggi,sedang,rendah',
            'status' => 'required|in:akan datang,sedang berjalan,selesai',
            'deskripsi' => 'nullable|string',
        ]);

        // upload thumbnail kalau ada
        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('projek', 'public');
        }

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
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'tanggal_mulai' => 'nullable|date',
            'tanggal_selesai' => 'nullable|date',
            'deadline' => 'nullable|date',
            'prioritas' => 'required|in:tinggi,sedang,rendah',
            'status' => 'required|in:akan datang,sedang berjalan,selesai',
            'deskripsi' => 'nullable|string',
        ]);

        if ($request->hasFile('thumbnail')) {
            // hapus file lama kalau ada
            if ($projek->thumbnail && Storage::disk('public')->exists($projek->thumbnail)) {
                Storage::disk('public')->delete($projek->thumbnail);
            }
            $validated['thumbnail'] = $request->file('thumbnail')->store('projek', 'public');
        }

        $projek->update($validated);

        return redirect()->route('projek.index')->with('success', 'Projek berhasil diperbarui');
    }

    public function show($id)
    {
        $projek = Projek::with('kategori')->findOrFail($id);
        return view('admin.projek.show', compact('projek'));
    }

    public function destroy(Projek $projek)
    {
        // hapus file thumbnail kalau ada
        if ($projek->thumbnail && Storage::disk('public')->exists($projek->thumbnail)) {
            Storage::disk('public')->delete($projek->thumbnail);
        }

        $projek->delete();

        return redirect()->route('projek.index')->with('success', 'Projek berhasil dihapus');
    }
}
