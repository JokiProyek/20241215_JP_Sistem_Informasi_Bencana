@extends('layouts.app')

@section('content')
<div class="main-content">
    <h2>TAMBAH JENIS BENCANA</h2>
    
    <div class="form-container">
        <form action="{{ route('disaster_types.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="kode">KODE BENCANA</label>
                <input type="text" name="kode" id="kode" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nama">NAMA BENCANA</label>
                <input type="text" name="namanama" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn-save">SIMPAN</button>
                <a href="{{ route('disaster_types.index') }}" class="btn-cancel">BATAL</a>
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
    max-width: 500px;
    margin: 0 auto;
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
}

.btn-cancel {
    background: #ddd;
    color: #333;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    margin-left: 10px;
}
</style>
@endsection