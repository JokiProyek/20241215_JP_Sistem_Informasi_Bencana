{{-- resources/views/dashboard.blade.php --}}
@extends('layouts.app')

@section('styles')
<style>
    .main-content {
        margin-left: 250px;
        background: #f3f3f3;
        min-height: 100vh;
        padding: 20px;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .header h2 {
        font-size: 24px;
        font-weight: 600;
    }

    .header .breadcrumb {
        color: #666;
    }

    .stats-cards {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 15px;
        margin-bottom: 30px;
    }

    .stat-card {
        background: white;
        padding: 20px;
        border-radius: 10px;
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 120px;
    }

    .stat-card.blue { background: #40bcd4; }
    .stat-card.green { background: #4caf50; }
    .stat-card.yellow { background: #ffd700; }
    .stat-card.red { background: #f44336; }

    .status-section {
        margin-bottom: 30px;
    }

    .status-section h3 {
        margin-bottom: 20px;
        font-size: 20px;
        font-weight: 600;
    }

    .status-cards {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 15px;
    }

    .status-card {
        background: white;
        padding: 20px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .status-icon {
        width: 50px;
        height: 50px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .status-icon.blue { background: #40bcd4; }
    .status-icon.yellow { background: #ffd700; }
    .status-icon.red { background: #f44336; }
    .status-icon.green { background: #4caf50; }

    .status-icon i {
        color: white;
        font-size: 24px;
    }

    .comparison-section {
        background: white;
        border-radius: 10px;
        padding: 20px;
    }

    .comparison-title {
        padding: 15px;
        border-bottom: 1px solid #eee;
    }

    .comparison-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        text-align: center;
        padding: 20px;
        background: #f5f5f5;
        border-radius: 0 0 10px 10px;
    }

    .comparison-item h4 {
        font-size: 24px;
        margin-bottom: 5px;
    }

    .comparison-item p {
        font-size: 14px;
        color: #666;
        margin: 0;
    }

    .percentage {
        margin-top: 5px;
        font-size: 14px;
    }

    .percentage.positive { color: #4caf50; }
    .percentage.negative { color: #f44336; }
</style>
@endsection

@section('content')
<div class="main-content">
    <div class="header">
        <h2>DASHBOARD</h2>
        <div class="breadcrumb">HOME/DASHBOARD</div>
    </div>

    <div class="stats-cards">
        <div class="stat-card blue">
            <div>TOTAL KEJADIAN</div>
            <h3>{{ $total_kejadian }}</h3>
        </div>
        <div class="stat-card green">
            <div>TOTAL PASIEN</div>
            <h3>{{ $total_pasien }}</h3>
        </div>
        <div class="stat-card yellow">
            <div>TOTAL PENGGUNA</div>
            <h3>{{ $total_pengguna }}</h3>
        </div>
        <div class="stat-card red">
            <div>TOTAL JENIS BENCANA</div>
            <h3>{{ $total_jenis_bencana }}</h3>
        </div>
    </div>

    <div class="status-section">
        <h3>DATA STATUS BENCANA</h3>
        <div class="status-cards">
            <div class="status-card">
                <div class="status-icon blue">
                    <i class="fas fa-edit"></i>
                </div>
                <div>
                    <div>Proses Entry</div>
                    <h4>{{ $proses_entry }}</h4>
                </div>
            </div>
            <div class="status-card">
                <div class="status-icon yellow">
                    <i class="fas fa-clock"></i>
                </div>
                <div>
                    <div>Menunggu Konfirmasi</div>
                    <h4>{{ $menunggu_konfirmasi }}</h4>
                </div>
            </div>
            <div class="status-card">
                <div class="status-icon red">
                    <i class="fas fa-times"></i>
                </div>
                <div>
                    <div>Ditolak</div>
                    <h4>{{ $ditolak }}</h4>
                </div>
            </div>
            <div class="status-card">
                <div class="status-icon green">
                    <i class="fas fa-check"></i>
                </div>
                <div>
                    <div>Diterima</div>
                    <h4>{{ $diterima }}</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="comparison-section">
        <div class="comparison-title">
            Data Perbandingan Kejadian Berdasarkan Waktu
        </div>
        <div class="comparison-grid">
            <div class="comparison-item">
                <h4>10</h4>
                <p>TAHUN KEMARIN</p>
            </div>
            <div class="comparison-item">
                <h4>15</h4>
                <p>TAHUN SEKARANG</p>
                <div class="percentage positive">+50%</div>
            </div>
            <div class="comparison-item">
                <h4>3</h4>
                <p>BULAN KEMARIN</p>
            </div>
            <div class="comparison-item">
                <h4>2</h4>
                <p>BULAN SEKARANG</p>
                <div class="percentage negative">-33,333%</div>
            </div>
        </div>
    </div>
</div>
@endsection