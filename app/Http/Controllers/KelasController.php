<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;

class KelasController extends Controller
{
    public function index()
    {
        $santris = Santri::all();
        $santris = Santri::paginate(10); // Mengambil 10 data per halaman
        return view('kelas.index', compact('santris'));
    }

    public function process(Request $request)
    {
        $santris = Santri::all();
    
        // Sort santris by normalized scores
        $santris = $santris->sortByDesc(function ($santri) {
            return ($santri->normalized_tes_tulis + $santri->normalized_surah_pilihan + $santri->normalized_menulis_pegon) / 3;
        })->values();
    
        // Divide into classes
        $totalSantri = $santris->count();
        $classA = $santris->slice(0, ceil($totalSantri * 0.33));
        $classB = $santris->slice(ceil($totalSantri * 0.33), ceil($totalSantri * 0.33));
        $classC = $santris->slice(ceil($totalSantri * 0.66));
    
        // Assign class to each santri and save changes
        foreach ($classA as $santri) {
            $santri->kelas = 'A';
            $santri->save();
        }
        foreach ($classB as $santri) {
            $santri->kelas = 'B';
            $santri->save();
        }
        foreach ($classC as $santri) {
            $santri->kelas = 'C';
            $santri->save();
        }
    
        return redirect()->route('kelas.index')->with('success', 'Santri successfully grouped into classes.');
    }    
}
