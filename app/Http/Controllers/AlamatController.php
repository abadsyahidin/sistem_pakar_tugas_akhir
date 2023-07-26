<?php

namespace App\Http\Controllers;

use App\Models\Alamat;
use Illuminate\Http\Request;

class AlamatController extends Controller
{
    public function index()
    {
        $alamats = Alamat::all();

        return view('dashboard.alamat.index', compact('alamats'));
    }

    public function create()
    {
        return view('dashboard.alamat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        Alamat::create($request->all());

        return redirect()->route('alamat.index')
            ->with('success', 'Alamat berhasil ditambahkan.');
    }

    public function edit(Alamat $alamat)
    {
        return view('dashboard.alamat.edit', compact('alamat'));
    }

    public function update(Request $request, Alamat $alamat)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        $alamat->update($request->all());

        return redirect()->route('dashboard.alamat.index')
            ->with('success', 'Alamat berhasil diperbarui.');
    }

    public function destroy(Alamat $alamat)
    {
        $alamat->delete();

        return redirect()->route('dashboaard.alamat.index')
            ->with('success', 'Alamat berhasil dihapus.');
    }
}
