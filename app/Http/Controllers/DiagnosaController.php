<?php

namespace App\Http\Controllers;

use App\Models\BasisRule;
use App\Models\DataGejala;
use App\Models\DataPenyakit;
use Illuminate\Http\Request;
use App\Models\DataDiagnosas;

class DiagnosaController extends Controller
{
    public function index()
    {
        $gejalas = DataGejala::get();
        $penyakits = DataPenyakit::all();
        $rules = BasisRule::with(['gejalaDiagnosa','penyakit'])->get();

        return view('diagnosa.index', compact('gejalas', 'penyakits', 'rules'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'gejala_diagnosa' => 'required|array',
            'gejala_diagnosa.*' => 'required|integer|exists:gejalas,id',
        ],
        [
            'gejala_diagnosa.required' => 'Gejala diagnosa tidak boleh kosong.',
            'gejala_diagnosa.array' => 'Gejala diagnosa harus berupa array.',
            'gejala_diagnosa.*.required' => 'Gejala diagnosa tidak boleh kosong.',
            'gejala_diagnosa.*.integer' => 'Gejala diagnosa harus berupa bilangan bulat.',
            'gejala_diagnosa.*.exists' => 'Gejala diagnosa tidak ditemukan.',
        ]);

        $diagnosa = new DataDiagnosas();
        $diagnosa->user_id = auth()->user()->id;
        $diagnosa->gejala_diagnosa = implode(',', $request->input('gejala_diagnosa'));
        $diagnosa->tanggal_diagnosa = now();
        $diagnosa->save();

        // dd($diagnosa);

        // Lanjutkan dengan logika penentuan penyakit berdasarkan gejala yang dipilih
        if($diagnosa)
        {
            return redirect()->route('diagnosa.show', $diagnosa->id)->with('success', 'Diagnosa berhasil disimpan.');
        } else {
            return redirect()->route('diagnosa.index')->with('gagal', 'Diagnosa gagal disimpan.');
        }
    }

    public function show($id)
    {
        $diagnosa = DataDiagnosas::with(['user', 'penyakits'])->findOrFail($id);
        $gejalaIds = explode(',', $diagnosa->gejala_diagnosa);
        $gejalas = DataGejala::whereIn('id', $gejalaIds)->get();
        $penyakits = DataPenyakit::all();
        $rules = BasisRule::with(['gejalaDiagnosa', 'penyakit'])->get();

        return view('user.diagnosa.hasil_diagnosa', compact('diagnosa', 'gejalas', 'penyakits', 'rules'));
    }

    public function showPrintDiagnosa($id)
    {
        $diagnosa = DataDiagnosas::with(['user', 'penyakits'])->findOrFail($id);
        $gejalaIds = explode(',', $diagnosa->gejala_diagnosa);
        $gejalas = DataGejala::whereIn('id', $gejalaIds)->get();
        $penyakits = DataPenyakit::all();
        $rules = BasisRule::with(['gejalaDiagnosa', 'penyakit'])->get();

        return view('user.diagnosa.print', compact('diagnosa', 'gejalas', 'penyakits', 'rules'));
    }
}
