<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Barang;
class BarangController extends Controller
{
    public function index(){
        $barang = DB::table('barang')
        ->get();

        //dd($barang);
        return view('barang.index', compact('barang'));
    }
    public function tambah(){
        $supplier = DB::table('tbl_suppllier')
        ->get();
        $kategori = DB::table('tbl_kategori')
        ->get();

        return view ('barang.tambah', compact(['supplier','kategori']));

    }
    public function simpan(request $request){
        //dd($request);
        $simpan = Barang::create([
            
            'barang_nama' => $request->barang_nama,
            'id_kategori' => $request->id_kategori,
            'id_supplier' => $request->id_supplier,
            'harga_jual' => $request->harga_jual,
            'barang_status' => $request->barang_status,
        ]); 
        echo $simpan->id_barang;
        return redirect ('barang');
    }
    public function ubah($id){
        $barang = Barang::find($id);
        //dd($barang);
        return view ('barang.ubah',compact(['barang']));
    }
    public function update($id, request $request){
        $barang = Barang::find($id);
        $barang -> update($request->except('_token,_method'));
        return redirect ('barang');
    }
    public function hapus($id){
        $hapus = Barang::find($id);
        $hapus -> delete();
        return redirect ('barang');
}
}
