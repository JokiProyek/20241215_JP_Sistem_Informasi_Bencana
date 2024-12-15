@extends('layouts.app')

@section('content')
<div class="main-content">
    <h2>JENIS BENCANA</h2>
    
    <div class="search-section">
        <input type="text" class="form-control" placeholder="CARI">
        <a href="{{ route('disaster_types.create') }}" class="btn-add">+ TAMBAH DATA</a>
    </div>

    <div class="table-container">
        <table class="data-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>KODE BENCANA</th>
                    <th>NAMA BENCANA</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach($disasterTypes as $disasterType)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $disasterType->kode }}</td>
                    <td>{{ $disasterType->nama }}</td>
                    <td>
                        <a href="{{ route('disaster_types.edit', $disasterType->id) }}" class="btn-edit">Edit</a>
                        <form action="{{ route('disaster_types.destroy', $disasterType->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
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

.btn-edit,
.btn-delete {
    padding: 5px 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn-edit {
    background: #007bff;
    color: white;
    margin-right: 5px;
}

.btn-delete {
    background: #dc3545;
    color: white;
}
</style>
@endsection