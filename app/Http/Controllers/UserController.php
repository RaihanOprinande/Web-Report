<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.user.index',compact('users'));
    }

    public function create(){
        return view('admin.user.create');
    }

    public function store (Request $request){
        try {
            $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4|confirmed',
            'role' => 'required'
        ]);
           $user =  User::create(
            [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'role' => $request->role,
                'password' => Hash::make($validated['password'])
            ]
        );
        return redirect('/admin/anggota')->with('success', 'Anggota berhasil ditambahkan.');
    } catch (\Exception $e) {
        return back()->with('error', $e->getMessage());
    }
}
}
