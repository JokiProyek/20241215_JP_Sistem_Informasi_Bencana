<?php

namespace App\Http\Controllers;

use App\Models\DisasterType;
use Illuminate\Http\Request;

class DisasterTypeController extends Controller
{
    public function index()
    {
        $disasterTypes = DisasterType::all();
        return view('master.jenis-bencana.index', compact('disasterTypes'));
    }
}