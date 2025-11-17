<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.user.index',compact('users'));
    }

    public function create(){
        return view('admin.user.create');
    }

    public function store(Request $request){
    try {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4|confirmed',
            'role' => 'required',
            'posisi' => 'nullable|string|max:255',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:10000'
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('users', 'public');
        }

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'role' => $validated['role'],
            'posisi' => $validated['posisi'] ?? null,
            'photo' => $photoPath,
            'password' => Hash::make($validated['password'])
        ]);

        return redirect('/admin/anggota')->with('success', 'Anggota berhasil ditambahkan.');
    } catch (\Exception $e) {
        return back()->with('error', $e->getMessage());
    }
}


    public function edit(String $id){
            $user = User::find($id);
            return view('admin.user.update',compact('user'));
    }

    public function update(Request $request, string $id){
    try {
        $user = User::findOrFail($id);
        $validated = $request->validate([
            'name' => 'string',
            'role' => 'required',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:10000'
        ]);

        $photoPath = $user->photo;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('users', 'public');
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'photo' => $photoPath,
        ]);

        return redirect('/admin/anggota')->with('success','Anggota berhasil diubah');
    } catch (\Exception $e) {
        return back()->with('error', $e->getMessage());
    }
}

public function show(string $id)
{
    $user = User::findOrFail($id);
    return view('admin.user.show', compact('user'));
}



    public function destroy(string $id){
        User::destroy($id);
        return redirect('/admin/anggota')->with('success','Anggota berhasil dihapus');
    }
}
