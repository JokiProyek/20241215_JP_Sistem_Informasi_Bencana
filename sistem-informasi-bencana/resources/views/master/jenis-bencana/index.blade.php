// resources/views/master/jenis-bencana/index.blade.php
@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="content-header">
        <h2>DATA JENIS BENCANA</h2>
    </div>

    <div class="content-body">
        <div class="search-bar">
            <input type="text" class="search-input" placeholder="CARI">
            <a href="{{ route('master.jenis-bencana.create') }}" class="add-button">+ TAMBAH DATA</a>
        </div>

        <div class="table-container">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA BENCANA</th>
                        <th>TIPE BENCANA</th>
                        <th>TANGGAL INPUT</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($disasterTypes as $type)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $type->nama }}</td>
                        <td>{{ $type->tipe }}</td>
                        <td>{{ $type->created_at->format('d-m-Y') }}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
