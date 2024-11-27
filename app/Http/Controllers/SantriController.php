<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;

class SantriController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
    
        if ($search) {
            $santris = Santri::where('nama', 'like', '%' . $search . '%')
                ->orWhere('tempat_lahir', 'like', '%' . $search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(10);
        } else {
            $santris = Santri::orderBy('created_at', 'desc')->paginate(10);
        }
    
        return view('santris.index', compact('santris'));
    }       

    public function create()
    {
        return view('santris.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'tes_tulis' => 'required|integer|min:0|max:100',
            'surah_pilihan' => 'required|integer|min:0|max:100',
            'menulis_pegon' => 'required|integer|min:0|max:100',
        ]);

        Santri::create($request->all());

        return redirect()->route('santris.index')
                         ->with('success', 'Santri created successfully.');
    }

    public function edit(Santri $santri)
    {
        return view('santris.edit', compact('santri'));
    }

    public function update(Request $request, Santri $santri)
    {
        $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'tes_tulis' => 'required|integer|min:0|max:100',
            'surah_pilihan' => 'required|integer|min:0|max:100',
            'menulis_pegon' => 'required|integer|min:0|max:100',
        ]);

        $santri->update($request->all());

        return redirect()->route('santris.index')
                         ->with('success', 'Santri updated successfully.');
    }

    public function destroy(Santri $santri)
    {
        $santri->delete();

        return redirect()->route('santris.index')
                         ->with('success', 'Santri deleted successfully.');
    }
}
