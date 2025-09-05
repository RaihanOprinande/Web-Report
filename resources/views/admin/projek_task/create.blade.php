@extends('layouts.main')

@section('title', 'Tambah Task Projek')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Task Projek</h1>

    <form action="{{ route('projek_task.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Projek</label>
            <select name="projek_id" class="form-control">
                @foreach($projeks as $projek)
                    <option value="{{ $projek->id }}">{{ $projek->name_projek }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Task</label>
            <input type="text" name="task" class="form-control">
        </div>
        <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="belum dikerjakan">Belum Dikerjakan</option>
                <option value="sedang dikerjakan">Sedang Dikerjakan</option>
                <option value="selesai">Selesai</option>
            </select>
        </div>
        <div class="form-group">
            <label>Handler</label>
            <select name="handler" class="form-control">
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
