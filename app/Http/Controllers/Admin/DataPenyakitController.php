<?php

namespace App\Http\Controllers\Admin;

use App\Models\DataPenyakit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataPenyakitController extends Controller
{

    public function index()
    {
        $data_penyakit = DataPenyakit::orderBy('id', 'asc')->paginate(5);

        return view('dashboard.datapenyakit.index', compact('data_penyakit'));
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'kode_penyakit' => 'required',
        //     'nama_penyakit' => 'required',
        //     'deskripsi' => 'required',
        //     'penanganan' => 'required',
        // ]);

        DataPenyakit::create([
            'kode_penyakit' => $request->kode_penyakit,
            'nama_penyakit' => $request->nama_penyakit,
            'deskripsi' => $request->deskripsi,
            'penanganan' => $request->penanganan,
        ]);

        return back()->with(['berhasil' => 'Data berhasil ditambah']);
    }

    public function edit($id)
    {
        $data_penyakit = DataPenyakit::findOrFail($id);

        return view('dashboard.datapenyakit.edit', compact('data_penyakit'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'kode_penyakit' => 'required',
            'nama_penyakit' => 'required',
            'deskripsi' => 'required',
            'penanganan' => 'required',
        ]);

        $data_penyakit = DataPenyakit::findOrFail($id);

        $data_penyakit->update([
            'kode_penyakit' => $request->kode_penyakit,
            'nama_penyakit' => $request->nama_penyakit,
            'deskripsi' => $request->deskripsi,
            'penanganan' => $request->penanganan,
        ]);

        return back()->with(['berhasil', 'Data berhasil diubah']);
    }

    public function destroy($id)
    {
        $data_penyakit = DataPenyakit::findOrFail($id);

        $data_penyakit->delete();

        return redirect()->route('datapenyakit.index')->with(['berhasil', 'Data berhasil dihapus']);
    }
}
