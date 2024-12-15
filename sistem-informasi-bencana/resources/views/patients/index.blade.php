@extends('layouts.app')

@section('content')
<div class="main-content">
    <h2>DATA PASIEN</h2>
    
    <div class="search-section">
        <input type="text" class="form-control" placeholder="CARI">
        <a href="{{ route('patients.create') }}" class="btn-add">+ TAMBAH DATA</a>
    </div>

    <div class="table-container">
        <table class="data-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NO. REKAM MEDIS</th>
                    <th>NAMA PASIEN</th>
                    <th>JENIS KELAMIN</th>
                    <th>TRIASE</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach($patients as $patient)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $patient->no_rekam_medis }}</td>
                    <td>{{ $patient->nama_pasien }}</td>
                    <td>{{ $patient->jenis_kelamin }}</td>
                    <td>{{ $patient->triase }}</td>
                    <td>*AKSI</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<style>
.main-content {
    margin-left: 250px;
    padding: 20px;
}

.search-section {
    display: flex;
    gap: 10px;
    margin: 20px 0;
}

.form-control {
    flex: 1;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.btn-add {
    background: #000;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
}

.table-container {
    background: white;
    padding: 20px;
    border-radius: 10px;
}

.data-table {
    width: 100%;
    border-collapse: collapse;
}

.data-table th,
.data- table td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #eee;
}

.data-table th {
    background: #f8f9fa;
}

.data-table tbody tr:hover {
    background: #f5f5f5;
}
</style>
@endsection