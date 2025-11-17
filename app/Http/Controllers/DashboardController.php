<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Projek;
use App\Models\ProjekTask;
use App\Models\Dokumentasi;
use App\Models\ProjekKategori;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUser        = User::count();
        $totalProjek      = Projek::count();
        $projekSelesai    = Projek::where('status', 'selesai')->count();
        $totalTask        = ProjekTask::count();
        $taskSelesai      = ProjekTask::where('status', 'selesai')->count();
        $totalDokumentasi = Dokumentasi::count();

        // Projek per kategori
        $projekPerKategori = ProjekKategori::withCount('projeks')->get();

        // Projek per status
        $projekPerStatus = Projek::select('status', DB::raw('count(*) as total'))
            ->groupBy('status')
            ->get();

        // Projek per prioritas (chart)
        $projekPerPrioritasChart = Projek::select('prioritas', DB::raw('COUNT(*) as total'))
            ->groupBy('prioritas')
            ->get();

        return view('admin.dashboard', compact(
            'totalUser',
            'totalProjek',
            'projekSelesai',
            'totalTask',
            'taskSelesai',
            'totalDokumentasi',
            'projekPerKategori',
            'projekPerStatus',
            'projekPerPrioritasChart'
        ));
    }
}
