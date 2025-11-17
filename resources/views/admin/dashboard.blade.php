@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <div class="row">

        <!-- Total User -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total User</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalUser }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Projek -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Projek</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalProjek }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-project-diagram fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Projek Selesai -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Projek Selesai</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $projekSelesai }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check-circle fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Dokumentasi -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Dokumentasi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalDokumentasi }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-camera fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- CHART Projek per Kategori & Status --}}
<div class="row">

    <!-- Chart Bar -->
    <div class="col-lg-8">
        <div class="card shadow mb-4">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Projek Berdasarkan Prioritas</h6>
            </div>
            <div class="card-body">
                <canvas id="projekChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Pie Chart Projek Berdasarkan Status -->
    <div class="col-lg-4">
        <div class="card shadow mb-4">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-success">Projek Berdasarkan Status</h6>
            </div>
            <div class="card-body">
                <canvas id="statusPieChart"></canvas>
            </div>
        </div>
    </div>

</div>

<div class="card shadow mb-4 mt-4">
    <div class="card-header">
        <h6 class="m-0 font-weight-bold text-primary">Projects Berdasarkan Kategori</h6>
    </div>
    <div class="card-body">

        @foreach ($projekPerKategori as $item)
            @php
                $percent = $totalProjek > 0 ? ($item->projeks_count / $totalProjek * 100) : 0;
            @endphp

            <div class="mb-3">
                <div class="d-flex justify-content-between">
                    <span>{{ $item->nama_kategori }}</span>
                    <span>{{ $item->projeks_count }} Projek</span>
                </div>

                <div class="progress" style="height: 12px; border-radius: 10px;">
                    <div class="progress-bar bg-info"
                        role="progressbar"
                        style="width: {{ $percent }}%; border-radius: 10px;">
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>





</div>

@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('projekChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: @json($projekPerPrioritasChart->pluck('prioritas')),
            datasets: [{
                label: 'Jumlah Projek',
                data: @json($projekPerPrioritasChart->pluck('total')),
                backgroundColor: @json($projekPerPrioritasChart->pluck('prioritas')).map(p => {
                    if (p === 'tinggi') return '#ef9a9a';   // merah soft
                    if (p === 'sedang') return '#fff59d';   // kuning soft
                    return '#90caf9';                       // biru soft
                })
            }]
        }
    });

    const statusCtx = document.getElementById('statusPieChart').getContext('2d');
    new Chart(statusCtx, {
        type: 'pie',
        data: {
            labels: @json($projekPerStatus->pluck('status')),
            datasets: [{
                data: @json($projekPerStatus->pluck('total')),
                backgroundColor: @json($projekPerStatus->pluck('status')).map(s => {
                    if (s === 'akan datang') return '#90caf9';   // biru soft
                    if (s === 'sedang berjalan') return '#fff59d'; // kuning soft
                    return '#a5d6a7';                            // hijau soft
                })
            }]
        }
    });
</script>
@endpush


