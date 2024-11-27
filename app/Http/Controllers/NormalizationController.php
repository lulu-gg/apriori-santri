<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;

class NormalizationController extends Controller
{
    public function index()
    {
        $santris = Santri::paginate(10); // Menampilkan 10 data per halaman
        return view('normalization.index', compact('santris'));
    }    

    public function process()
    {
        $santris = Santri::all();

        // Proses Normalisasi Min-Max
        $min_tes_tulis = $santris->min('tes_tulis');
        $max_tes_tulis = $santris->max('tes_tulis');
        $min_surah_pilihan = $santris->min('surah_pilihan');
        $max_surah_pilihan = $santris->max('surah_pilihan');
        $min_menulis_pegon = $santris->min('menulis_pegon');
        $max_menulis_pegon = $santris->max('menulis_pegon');

        foreach ($santris as $santri) {
            $santri->normalized_tes_tulis = ($santri->tes_tulis - $min_tes_tulis) / ($max_tes_tulis - $min_tes_tulis);
            $santri->normalized_surah_pilihan = ($santri->surah_pilihan - $min_surah_pilihan) / ($max_surah_pilihan - $min_surah_pilihan);
            $santri->normalized_menulis_pegon = ($santri->menulis_pegon - $min_menulis_pegon) / ($max_menulis_pegon - $min_menulis_pegon);
            $santri->save();
        }

        return redirect()->route('normalization.index')->with('success', 'Data has been normalized successfully.');
    }
}
