<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class LandingController extends Controller
{
    public function home(){
        return view('landing.page.home');
    }

    public function tentang(){
        return view('landing.page.tentang');
    }

    public function projek(){
        return view('landing.page.projek');
    }

    public function detailProjek(){
        return view('landing.page.detail-projek');
    }

    public function kontak(){
        return view('landing.page.kontak');
    }
}
