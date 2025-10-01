<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class LandingController extends Controller
{
    public function home()
{
    // ambil 6 projek terbaru beserta kategori
    $projek = \App\Models\Projek::with('kategori')
                ->latest()
                ->take(6)
                ->get();
    $kategoris = \App\Models\ProjekKategori::all();
    $mediaPartners = \App\Models\MediaPartner::all();
    $users = \App\Models\User::all();


    return view('landing.page.home', compact('projek', 'kategoris', 'mediaPartners', 'users'));
}

    public function tentang(){
        $users = \App\Models\User::all();

        return view('landing.page.tentang', compact('users'));
    }

    public function projek(){
        $projek = \App\Models\Projek::with('kategori')
                ->latest()
                ->paginate(6);
        return view('landing.page.projek', compact('projek'));
    }

    public function detailProjek(){
        return view('landing.page.detail-projek');
    }

    public function kontak(){
        return view('landing.page.kontak');
    }
}
