@extends('layouts.main')

@section('title', 'Edit Task Projek')

@section('content')

<style>
    .btn-kembali {
        color: #4e73df;
    }

    .btn-kembali:hover {
        background-color: #4e73df;
        color: white;
    }
</style>

<div class="bungkus">

    {{-- Header --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Task Projek</h1>
        <a href="{{ route('projek_task.index') }}" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
        </a>
    </div>

    {{-- Card --}}
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Task Projek</h6>
        </div>

        <div class="card-body">

            <form action="{{ route('projek_task.update', $projek_task->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">

                    {{-- Projek --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Projek</label>
                        <select name="projek_id" class="form-control" required>
                            @foreach($projeks as $projek)
                                <option value="{{ $projek->id }}"
                                    {{ $projek_task->projek_id == $projek->id ? 'selected' : '' }}>
                                    {{ $projek->name_projek }}
                                </option>
                            @endforeach
                        </select>
                        @error('projek_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- Task --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Task</label>
                        <input type="text" name="task" class="form-control"
                               value="{{ old('task', $projek_task->task) }}" required>
                        @error('task')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- Status --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Status</label>
                        <select name="status" class="form-control" required>
                            <option value="belum dikerjakan" {{ $projek_task->status == 'belum dikerjakan' ? 'selected' : '' }}>Belum Dikerjakan</option>
                            <option value="sedang dikerjakan" {{ $projek_task->status == 'sedang dikerjakan' ? 'selected' : '' }}>Sedang Dikerjakan</option>
                            <option value="selesai" {{ $projek_task->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                        </select>
                        @error('status')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- Handler --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Handler</label>
                        <select name="handler" class="form-control" required>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}"
                                    {{ $projek_task->handler == $user->id ? 'selected' : '' }}>
                                    {{ $user->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('handler')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                </div>

                <button type="submit" class="btn btn-primary btn-block">
                    <i class="fas fa-save"></i> Perbarui Task Projek
                </button>

            </form>

        </div>
    </div>

</div>

@endsection
