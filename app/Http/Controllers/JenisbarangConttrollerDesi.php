<?php

namespace App\Http\Controllers;

use App\Models\j_barang;
use Illuminate\Http\Request;

class JenisbarangConttrollerDesi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = j_barang::all();
        return view('admin.jenis_barang.jenis_barang',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jenis_barang.buat_jenisbarang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jns_barang = new j_barang;
        $jns_barang->nama_jenis = $request->nama;
        if ($jns_barang->save()){
            return redirect()->route('j_barang');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(j_barang $j_barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(j_barang $j_barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, j_barang $j_barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(j_barang $j_barang)
    {
        if (j_barang::destroy($j_barang->id)){
            return redirect()->route('j_barang');
        }
    }
}
