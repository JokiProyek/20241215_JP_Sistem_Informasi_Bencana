{{-- resources/views/disasters/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Data Kejadian Bencana</h1>
        <a href="{{ route('disasters.create') }}" class="btn btn-primary">+ Tambah Kejadian</a>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Bencana</th>
                            <th>Lokasi</th>
                            <th>Waktu Kejadian</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($disasters as $disaster)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $disaster->disasterType->nama }}</td>
                            <td>{{ $disaster->lokasi }}</td>
                            <td>{{ $disaster->waktu_kejadian->format('d/m/Y H:i') }}</td>
                            <td>
                                <span class="badge bg-{{ $disaster->status_color }}">
                                    {{ $disaster->status }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('disasters.show', $disaster) }}" class="btn btn-sm btn-info">Detail</a>
                                @if($disaster->status == 'Proses Entry')
                                <form action="{{ route('disasters.update-status', $disaster) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="status" value="Menunggu Konfirmasi">
                                    <button type="submit" class="btn btn-sm btn-warning">Kirim</button>
                                </form>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{ $disasters->links() }}
        </div>
    </div>
</div>
@endsection

{{-- resources/views/disasters/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">Tambah Kejadian Bencana</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('disasters.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="disaster_type_id" class="form-label">Jenis Bencana</label>
                            <select class="form-select @error('disaster_type_id') is-invalid @enderror" id="disaster_type_id" name="disaster_type_id">
                                <option value="">Pilih Jenis Bencana</option>
                                @foreach($disasterTypes as $type)
                                    <option value="{{ $type->id }}" {{ old('disaster_type_id') == $type->id ? 'selected' : '' }}>
                                        {{ $type->nama }}
                                    </option>
                                @endforeach
                            </select>
                            @error('disaster_type_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="lokasi" class="form-label">Lokasi</label>
                            <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" value="{{ old('lokasi') }}">
                            @error('lokasi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="waktu_kejadian" class="form-label">Waktu Kejadian</label>
                            <input type="datetime-local" class="form-control @error('waktu_kejadian') is-invalid @enderror" id="waktu_kejadian" name="waktu_kejadian" value="{{ old('waktu_kejadian') }}">
                            @error('waktu_kejadian')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" rows="4">{{ old('deskripsi') }}</textarea>
                            @error('deskripsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('disasters.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection