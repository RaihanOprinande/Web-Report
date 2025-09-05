@extends('layouts.main')

@section('title', 'Daftar Task Projek')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Daftar Task Projek</h1>
    <a href="{{ route('projek_task.create') }}" class="btn btn-primary mb-3">Tambah Task</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Task</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Projek</th>
                            <th>Task</th>
                            <th>Status</th>
                            <th>Handler</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tasks as $task)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $task->projek->name_projek }}</td>
                            <td>{{ $task->task }}</td>
                            <td>{{ ucfirst($task->status) }}</td>
                            <td>{{ $task->user->name }}</td>
                            <td>
                                <a href="{{ route('projek_task.edit', $task->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('projek_task.destroy', $task->id) }}" method="POST" style="display:inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus task ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @if($tasks->isEmpty())
                        <tr>
                            <td colspan="6" class="text-center">Belum ada task</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
