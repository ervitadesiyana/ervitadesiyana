<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\j_barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = barang::all();
        return view('admin.barang.barang',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jns_barang = j_barang::all();
        return view('admin.barang.buat_barang',compact('jns_barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $barang = new barang;
        $barang->kode_barang = $request->kode;
        $barang->nama_barang = $request->nama;
        $barang->merek_barang = $request->merek;
        $barang->j_barang_id = $request->j_barang;
        $barang->tahun_pembelian = $request->tahun;
        $barang->kondisi_barang = $request->kondisi;
        if ($barang->save()){
            return redirect()->route('barang');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(barang $barang)
    {
        //
    }

    public static function get_jbarang($barangny){
        $jns_barang = j_barang::find($barangny);
        return $jns_barang->nama_jenis;
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(barang $barang)
    {
        $jns_barang = j_barang::all();
        return view('admin.barang.edit_barang',compact('barang','jns_barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, barang $barang)
    {
        $barang = barang::find($request->id_data);
        $barang->kode_barang = $request->kode;
        $barang->nama_barang = $request->nama;
        $barang->merek_barang = $request->merek;
        $barang->j_barang_id = $request->j_barang;
        $barang->tahun_pembelian = $request->tahun;
        $barang->kondisi_barang = $request->kondisi;
        if ($barang->update()){
            return redirect()->route('barang');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(barang $barang)
    {
        if (barang::destroy($barang->id)){
            return redirect()->route('barang');
        }
    }
}
