{{-- resources/views/shared/index-template.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="content-header">
        <h2>{{ $title }}</h2>
    </div>

    <div class="content-body">
        <div class="search-bar">
            <input type="text" class="search-input" placeholder="CARI">
            <a href="{{ $createRoute }}" class="add-button">+ TAMBAH DATA</a>
        </div>

        <div class="table-container">
            <table class="data-table">
                <thead>
                    <tr>
                        @foreach($headers as $header)
                            <th>{{ $header }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                        <tr>
                            @foreach($columns as $column)
                                <td>{{ $item->$column }}</td>
                            @endforeach
                            <td class="action-column">
                                @yield('action-buttons')
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
.main-content {
    margin-left: 250px;
    padding: 20px;
    background: #f5f5f5;
}

.content-header {
    margin-bottom: 20px;
}

.content-header h2 {
    font-size: 24px;
    font-weight: 600;
}

.search-bar {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
    gap: 10px;
}

.search-input {
    flex: 1;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background: #fff;
}

.add-button {
    background: #000;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    white-space: nowrap;
}

.table-container {
    background: white;
    border-radius: 10px;
    padding: 20px;
}

.data-table {
    width: 100%;
    border-collapse: collapse;
}

.data-table th {
    background: #f8f9fa;
    padding: 12px;
    text-align: left;
    border-bottom: 2px solid #dee2e6;
}

.data-table td {
    padding: 12px;
    border-bottom: 1px solid #dee2e6;
}

.action-column {
    white-space: nowrap;
}

.btn-detail {
    padding: 5px 10px;
    border-radius: 3px;
    text-decoration: none;
    font-size: 14px;
    background: #007bff;
    color: white;
}

.status-badge {
    padding: 5px 10px;
    border-radius: 3px;
    font-size: 12px;
    background: #28a745;
    color: white;
}
</style>
@endsection