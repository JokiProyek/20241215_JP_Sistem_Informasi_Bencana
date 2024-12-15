<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $patients = Patient::when($search, function($query) use ($search) {
            return $query->where('nama', 'like', "%{$search}%")
                        ->orWhere('no_rm', 'like', "%{$search}%");
        })->paginate(10);

        return view('patients.index', compact('patients'));
    }

    public function create()
    {
        return view('patients.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'no_rm' => 'required|unique:patients',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'agama' => 'required',
            'alamat' => 'required',
            'jaminan_kesehatan' => 'required',
            'penyebab_kondisi' => 'required',
            'triase' => 'required',
            'kondisi_pasien' => 'required',
            'hasil_diagnosa' => 'required',
            'kode_icd_10' => 'required',
            'kode_icd_9cm' => 'required'
        ]);

        Patient::create($validated);
        return redirect()->route('patients.index')->with('success', 'Data pasien berhasil ditambahkan');
    }

    public function show(Patient $patient)
    {
        return view('patients.show', compact('patient'));
    }
}
