<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function index()
    {
        // Menghitung total santri
        $totalSantri = Santri::count();

        // Menambahkan log untuk totalSantri
        Log::info('Total Santri: ' . $totalSantri);

        return view('dashboard', compact('totalSantri'));
    }
}
