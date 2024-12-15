<?php
// app/Http/Controllers/DisasterController.php
namespace App\Http\Controllers;

use App\Models\Disaster;
use Illuminate\Http\Request;

class DisasterController extends Controller
{
    public function indexAlam()
    {
        $disasters = Disaster::where('tipe', 'alam')->get();
        return view('disasters.alam', [
            'disasters' => $disasters,
            'tipe' => 'alam'
        ]);
    }
    
    public function indexNonAlam()
    {
        $disasters = Disaster::where('tipe', 'non-alam')->get();
        return view('disasters.alam', [
            'disasters' => $disasters,
            'tipe' => 'non-alam'
        ]);
    }}

