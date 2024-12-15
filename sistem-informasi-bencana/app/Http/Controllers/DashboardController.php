<?php

namespace App\Http\Controllers;

use App\Models\Disaster;
use App\Models\Patient;
use App\Models\DisasterType;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'total_kejadian' => Disaster::count(),
            'total_pasien' => Patient::count(),
            'total_pengguna' => \App\Models\User::count(),
            'total_jenis_bencana' => DisasterType::count(),
            'proses_entry' => Disaster::where('status', 'Proses Entry')->count(),
            'menunggu_konfirmasi' => Disaster::where('status', 'Menunggu Konfirmasi')->count(),
            'ditolak' => Disaster::where('status', 'Ditolak')->count(),
            'diterima' => Disaster::where('status', 'Diterima')->count(),
            'tahun_kemarin' => Disaster::whereYear('created_at', now()->subYear()->year)->count(),
            'tahun_sekarang' => Disaster::whereYear('created_at', now()->year)->count(),
            'bulan_kemarin' => Disaster::whereMonth('created_at', now()->subMonth()->month)->count(),
            'bulan_sekarang' => Disaster::whereMonth('created_at', now()->month)->count(),
        ];

        return view('dashboard', $data);
    }
}

