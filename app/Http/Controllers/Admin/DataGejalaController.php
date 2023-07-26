<?php

namespace App\Http\Controllers\Admin;

use App\Models\DataGejala;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataGejalaController extends Controller
{
    public function index()
    {
        $data_gejala = DataGejala::orderBy('id', 'asc')->paginate(5);

        return view('pakar.datagejala.index_gejala', compact('data_gejala'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_gejala' => 'required',
            'nama_gejala' => 'required',
        ]);

        DataGejala::create([
            'kode_gejala' => $request->kode_gejala,
            'nama_gejala' => $request->nama_gejala
        ]);

        return redirect()->route('datagejala.index')->with(['success' => 'Data berhasil ditambah']);
    }

    public function edit($id)
    {
        $data_gejala = DataGejala::findOrFail($id);

        return view('pakar.datagejala.edit', compact('data_gejala'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'kode_gejala' => 'required',
            'nama_gejala' => 'required',
        ]);

        $data_gejala = DataGejala::findOrFail($id);

        $data_gejala->update([
            'kode_gejala' => $request->kode_gejala,
            'nama_gejala' => $request->nama_gejala
        ]);

        return redirect()->route('datagejala.index')->with(['success', 'Data berhasil diubah']);
    }

    public function destroy($id)
    {
        $data_gejala = DataGejala::findOrFail($id);

        $data_gejala->delete();

        return redirect()->route('datagejala.index')->with(['success', 'Data berhasil dihapus']);
    }
}
