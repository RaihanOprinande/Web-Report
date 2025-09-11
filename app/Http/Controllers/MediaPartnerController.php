<?php

namespace App\Http\Controllers;

use App\Models\MediaPartner;
use Illuminate\Http\Request;

class MediaPartnerController extends Controller
{
    public function index()
    {
        $mediaPartners = MediaPartner::all();
        return view('admin.media_partner.index', compact('mediaPartners'));
    }

    public function create()
    {
        return view('admin.media_partner.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $data = $request->only(['nama']);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('media_partner', 'public');
        }

        MediaPartner::create($data);

        return redirect()->route('media_partner.index')->with('success', 'Media partner berhasil ditambahkan.');
    }

    public function edit(MediaPartner $media_partner)
    {
        return view('admin.media_partner.edit', compact('media_partner'));
    }

    public function update(Request $request, MediaPartner $media_partner)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $data = $request->only(['nama']);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('media_partner', 'public');
        }

        $media_partner->update($data);

        return redirect()->route('media_partner.index')->with('success', 'Media partner berhasil diperbarui.');
    }

    public function destroy(MediaPartner $media_partner)
    {
        $media_partner->delete();
        return redirect()->route('media_partner.index')->with('success', 'Media partner berhasil dihapus.');
    }
}
