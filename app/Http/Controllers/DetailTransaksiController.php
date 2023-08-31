<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Detail_transaksi;
use Illuminate\Http\Request;

class DetailTransaksiController extends Controller
{
    public function index($id){
        $detail_transaksi = DB::table('tbl_detail_transaksi')
        ->join('barang','barang.id_barang', '=', 'tbl_detail_transaksi.id_barang')
        ->where('id_transaksi',$id)
        ->get();
       //dd($detail_transaksi);
        return view('detail_transaksi.index', compact(['detail_transaksi'])); 
    }
    public function cetak(){
        $cetak = DB::table('tbl_detail_transaksi')
        ->get();
        return view('detail_transaski.cetak', compact('cetak'));
    }
    public function ubah($id){
        $detail_transaksi = Detail_transaksi::find($id);
        
        return view ('detail_transaksi.ubah',compact(['detail_transaksi']));
    }
    public function update($id, request $request){
        $detail_transaksi = Detail_transaksi::find($id);
        $detail_transaksi -> update($request->except('_token,_method'));
        return redirect ('detail_transaksi');
    }
    public function hapus($id){
        $hapus = Detail_transaksi::find($id);
        $hapus -> delete();
        return redirect ('detail_transaksi');
}

}
