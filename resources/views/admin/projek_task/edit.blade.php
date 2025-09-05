@extends('layouts.main')

@section('title', 'Edit Task Projek')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Task Projek</h1>

    <form action="{{ route('projek_task.update', $projek_task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Projek</label>
            <select name="projek_id" class="form-control" required>
                @foreach($projeks as $projek)
                    <option value="{{ $projek->id }}"
                        {{ $projek_task->projek_id == $projek->id ? 'selected' : '' }}>
                        {{ $projek->name_projek }}
                    </option>
                @endforeach
            </select>
            @error('projek_id') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group">
            <label>Task</label>
            <input type="text" name="task" class="form-control"
                   value="{{ old('task', $projek_task->task) }}" required>
            @error('task') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control" required>
                <option value="belum dikerjakan" {{ $projek_task->status == 'belum dikerjakan' ? 'selected' : '' }}>Belum Dikerjakan</option>
                <option value="sedang dikerjakan" {{ $projek_task->status == 'sedang dikerjakan' ? 'selected' : '' }}>Sedang Dikerjakan</option>
                <option value="selesai" {{ $projek_task->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
            </select>
            @error('status') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group">
            <label>Handler</label>
            <select name="handler" class="form-control" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}"
                        {{ $projek_task->handler == $user->id ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>
            @error('handler') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('projek_task.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
