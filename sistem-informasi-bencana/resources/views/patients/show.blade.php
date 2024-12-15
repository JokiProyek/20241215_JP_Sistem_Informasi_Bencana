@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h2>PENYEBAB KONDISI PASIEN</h2>
    <div class="card">
        <div class="card-body">
            <table class="table table-borderless">
                <tr>
                    <th>NO. RM</th>
                    <td>{{ $patient->no_rm }}</td>
                </tr>
                <tr>
                    <th>NAMA</th>
                    <td>{{ $patient->nama }}</td>
                </tr>
                <tr>
                    <th>TEMPAT LAHIR</th>
                    <td>{{ $patient->tempat_lahir }}</td>
                </tr>
                <tr>
                    <th>TANGGAL LAHIR</th>
                    <td>{{ $patient->tanggal_lahir }}</td>
                </tr>
                <tr>
                    <th>JENIS KELAMIN</th>
                    <td>{{ $patient->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <th>AGAMA</th>
                    <td>{{ $patient->agama }}</td>
                </tr>
                <tr>
                    <th>ALAMAT</th>
                    <td>{{ $patient->alamat }}</td>
                </tr>
                <tr>
                    <th>TRIASE</th>
                    <td>
                        @php
                            $triaseColor = match($patient->triase) {
                                'Merah' => 'danger',
                                'Kuning' => 'warning',
                                'Hijau' => 'success',
                                'Hitam' => 'dark',
                                default => 'secondary'
                            };
                        @endphp
                        <span class="badge bg-{{ $triaseColor }}">{{ $patient->triase }}</span>
                    </td>
                </tr>
                <tr>
                    <th>KONDISI PASIEN</th>
                    <td>{{ $patient->kondisi_pasien }}</td>
                </tr>
                <tr>
                    <th>HASIL DIAGNOSA</th>
                    <td>{{ $patient->hasil_diagnosa }}</td>
                </tr>
                <tr>
                    <th>JAMINAN KESEHATAN</th>
                    <td>{{ $patient->jaminan_kesehatan }}</td>
                </tr>
                <tr>
                    <th>KODE ICD 10</th>
                    <td>{{ $patient->kode_icd_10 }}</td>
                </tr>
                <tr>
                    <th>KODE ICD 9CM</th>
                    <td>{{ $patient->kode_icd_9cm }}</td>
                </tr>
            </table>
            <a href="{{ route('patients.index') }}" class="btn btn-dark">Kembali</a>
        </div>
    </div>
</div>
@endsection