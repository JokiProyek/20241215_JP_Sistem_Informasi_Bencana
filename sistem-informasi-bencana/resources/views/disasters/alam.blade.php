@extends('layouts.app')

@section('content')
<div class="main-content">
    <h2>DATA KEJADIAN BENCANA {{ strtoupper($tipe) }}</h2>
    
    <div class="search-section">
        <input type="text" class="form-control" placeholder="CARI">
        <a href="{{ route('disasters.create') }}" class="btn-add">+ TAMBAH DATA</a>
    </div>

    <div class="table-container">
        <table class="data-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NO. BENCANA</th>
                    <th>NAMA BENCANA</th>
                    <th>TANGGAL KEJADIAN</th>
                    <th>ALAMAT/KECAMATAN</th>
                    <th>DIINPUT OLEH</th>
                    <th>STATUS</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach($disasters as $disaster)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $disaster->no_bencana }}</td>
                    <td>{{ $disaster->nama_bencana }}</td>
                    <td>{{ date('d F Y', strtotime($disaster->tanggal_kejadian)) }}</td>
                    <td>{{ $disaster->alamat }}</td>
                    <td>{{ $disaster->diinput_oleh }}</td>
                    <td>{{ $disaster->status }}</td>
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
.data-table td {
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