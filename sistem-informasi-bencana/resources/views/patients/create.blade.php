@extends('layouts.app')

@section('content')
<div class="main-content">
    <h2>TAMBAH DATA PASIEN</h2>
    
    <div class="form-container">
        <form action="{{ route('patients.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="no_rm">NO. RM</label>
                <input type="text" name="no_rm" id="no_rm" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nama">NAMA</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tempat_lahir">TEMPAT LAHIR</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">TANGGAL LAHIR</label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">JENIS KELAMIN</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="agama">AGAMA</label>
                <input type="text" name="agama" id="agama" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="alamat">ALAMAT</label>
                <textarea name="alamat" id="alamat" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="jaminan_kesehatan">JAMINAN KESEHATAN</label>
                <input type="text" name="jaminan_kesehatan" id="jaminan_kesehatan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="penyebab_kondisi">PENYEBAB KONDISI PASIEN</label>
                <input type="text" name="penyebab_kondisi" id="penyebab_kondisi" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="triase">TRIASE</label>
                <select name="triase" id="triase" class="form-control" required>
                    <option value="">Pilih Triase</option>
                    <option value="Kuning">Kuning</option>
                    <option value="Merah">Merah</option>
                    <option value="Hijau">Hijau</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kondisi_pasien">KONDISI PASIEN</label>
                <textarea name="kondisi_pasien" id="kondisi_pasien" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="hasil_diagnosa">HASIL DIAGNOSA</label>
                <textarea name="hasil_diagnosa" id="hasil_diagnosa" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="kode_icd_10">KODE ICD 10</label>
                <input type="text" name="kode_icd_10" id="kode_icd_10" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="kode_icd_9cm">KODE ICD 9CM</label>
                <input type="text" name="kode_icd_9cm" id="kode_icd_9cm" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn-save">TAMBAH DATA PASIEN</button>
            </div>
        </form>
    </div>
</div>

<style>
.main-content {
  margin-left: 250px;
  padding: 20px;
}

.form-container {
  background: white;
  padding: 20px;
  border-radius: 10px;
}

.form-group {
  margin-bottom: 20px;
}

.form-group label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

.form-control {
  width: 100%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
}

.btn-save {
  background: #000;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}</style>
@endsection