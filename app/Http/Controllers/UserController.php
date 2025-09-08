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
                'role' => $validated['role'],
                'password' => Hash::make($validated['password'])
            ]
        );
        return redirect('/admin/anggota')->with('success', 'Anggota berhasil ditambahkan.');
    } catch (\Exception $e) {
        return back()->with('error', $e->getMessage());
    }
}

    public function edit(String $id){
            $user = User::find($id);
            return view('admin.user.update',compact('user'));
    }

    public function update(Request $request, String $id){
        try {
            $user = User::findOrFail($id);
            $validated = $request->validate([
                'name' => 'string',
                'role' => 'required'
            ]);
            $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);
            return redirect('/admin/anggota')->with('success','Anggota berhasil diubah');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function destroy(string $id){
        User::destroy($id);
        return redirect('/admin/anggota')->with('success','Anggota berhasil dihapus');
    }
}
