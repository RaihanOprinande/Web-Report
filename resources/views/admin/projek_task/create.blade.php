@extends('layouts.main')

@section('title', 'Tambah Task Projek')

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
        <h1 class="h3 mb-0 text-gray-800">Tambah Task Projek</h1>
        <a href="{{ route('projek_task.index') }}" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
        </a>
    </div>

    {{-- Card --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Task Projek</h6>
        </div>

        <div class="card-body">

            <form action="{{ route('projek_task.store') }}" method="POST">
                @csrf

                <div class="row">

                    {{-- Projek --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Projek</label>
                        <select name="projek_id" class="form-control" required>
                            <option value="">Pilih Projek</option>
                            @foreach($projeks as $projek)
                                <option value="{{ $projek->id }}">{{ $projek->name_projek }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Task --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Task</label>
                        <input type="text" name="task" class="form-control" required>
                    </div>

                    {{-- Status --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Status</label>
                        <select name="status" class="form-control">
                            <option value="belum dikerjakan">Belum Dikerjakan</option>
                            <option value="sedang dikerjakan">Sedang Dikerjakan</option>
                            <option value="selesai">Selesai</option>
                        </select>
                    </div>

                    {{-- Handler --}}
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Handler</label>
                        <select name="handler" class="form-control">
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary btn-block">
                    <i class="fas fa-save"></i> Simpan Task Projek
                </button>

            </form>

        </div>
    </div>

</div>

@endsection
