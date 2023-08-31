<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        $kategori = DB::table('tbl_kategori')
        ->get();

        //dd($kategori);
        return view('kategori.index', compact('kategori'));
    }
    public function tambah(){
        return view ('kategori.tambah');

    }
    public function simpan(request $request){
        //dd($request);
        $simpan = Kategori::create([
            
            'kategori_nama' => $request->kategori_nama
            
        ]); 
        echo $simpan->id_kategori;

        return redirect ('kategori');
    }
    public function ubah($id){
        $kategori = Kategori::find($id);
        return view ('kategori.ubah',compact(['kategori']));
    }
    public function update($id, request $request){
        $kategori = Kategori::find($id);
        $kategori -> update($request->except('_token,_method'));
        return redirect ('kategori');
    }
    public function hapus($id){
        $hapus = Kategori::find($id);
        $hapus -> delete();
        return redirect ('kategori');
}
}
