<?php

namespace App\Http\Controllers;

use App\Models\DisasterType;
use Illuminate\Http\Request;

class DisasterTypeController extends Controller
{
    public function index()
    {
        $disasterTypes = DisasterType::all();
        return view('disaster_types.index', compact('disasterTypes'));
    }

    public function create()
    {
        return view('disaster_types.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_bencana' => 'required',
            'nama_bencana' => 'required',
        ]);

        DisasterType::create($validatedData);

        return redirect()->route('disaster_types.index')->with('success', 'Jenis bencana berhasil ditambahkan.');
    }

    public function edit(DisasterType $disasterType)
    {
        return view('disaster_types.edit', compact('disasterType'));
    }

    public function update(Request $request, DisasterType $disasterType)
    {
        $validatedData = $request->validate([
            'kode_bencana' => 'required',
            'nama_bencana' => 'required',
        ]);

        $disasterType->update($validatedData);

        return redirect()->route('disaster_types.index')->with('success', 'Jenis bencana berhasil diperbarui.');
    }

    public function destroy(DisasterType $disasterType)
    {
        $disasterType->delete();

        return redirect()->route('disaster_types.index')->with('success', 'Jenis bencana berhasil dihapus.');
    }
}