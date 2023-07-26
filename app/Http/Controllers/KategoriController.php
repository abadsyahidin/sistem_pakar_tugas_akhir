<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoris = Kategori::get();
        return view('dashboard.kategori.index', compact('kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'slug' => 'nullable'
        ]);

        $kategoris = Kategori::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);

        return back()->with('berhasil', 'Data Kategori berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
    $this->validate($request, [
        'name' => 'required',
        'slug' => 'nullable'
    ]);

    $kategori = Kategori::findOrFail($id);

    $kategori->name = $request->name;
    $kategori->slug = Str::slug($request->name);
    $kategori->save();

    return back()->with('berhasil', 'Data Kategori berhasil diperbarui');
}

public function destroy($id)
{
    $kategori = Kategori::findOrFail($id);
    $kategori->delete();

    return back()->with('berhasil', 'Data Kategori berhasil dihapus');
}
}
