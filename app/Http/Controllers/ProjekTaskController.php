<?php

namespace App\Http\Controllers;

use App\Models\ProjekTask;
use App\Models\Projek;
use App\Models\User;
use Illuminate\Http\Request;

class ProjekTaskController extends Controller
{
    public function index()
    {
        $tasks = ProjekTask::with(['projek', 'user'])->get();
        return view('admin.projek_task.index', compact('tasks'));
    }

    public function create()
    {
        $projeks = Projek::all();
        $users = User::all();
        return view('admin.projek_task.create', compact('projeks', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'projek_id' => 'required|exists:projeks,id',
            'task' => 'required|string',
            'status' => 'required|in:belum dikerjakan,sedang dikerjakan,selesai',
            'handler' => 'required|exists:users,id',
        ]);

        ProjekTask::create($request->all());

        return redirect()->route('projek_task.index')->with('success', 'Task berhasil ditambahkan.');
    }

    public function edit(ProjekTask $projek_task)
    {
        $projeks = Projek::all();
        $users = User::all();
        return view('admin.projek_task.edit', compact('projek_task', 'projeks', 'users'));
    }

    public function update(Request $request, ProjekTask $projek_task)
    {
        $request->validate([
            'projek_id' => 'required|exists:projeks,id',
            'task' => 'required|string',
            'status' => 'required|in:belum dikerjakan,sedang dikerjakan,selesai',
            'handler' => 'required|exists:users,id',
        ]);

        $projek_task->update($request->all());

        return redirect()->route('projek_task.index')->with('success', 'Task berhasil diperbarui.');
    }

    public function destroy(ProjekTask $projek_task)
    {
        $projek_task->delete();

        return redirect()->route('projek_task.index')->with('success', 'Task berhasil dihapus.');
    }
}
