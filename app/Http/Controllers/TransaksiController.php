<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Transaksi;
use App\Models\Detail_transaksi;
use App\Models\Barang;
use App\Models\Admin;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index(){
        $transaksi = DB::table('tbl_transaksi')
        ->select('tbl_transaksi.*','tbl_admin.admin_nama')
        ->join('tbl_admin','tbl_transaksi.id_admin', '=', 'tbl_admin.id_admin')
        ->get();
        //dd($transaksi) ;
        return view('transaksi.index', compact(['transaksi']));
    }
    public function cetak(){
        $cetak = DB::table('tbl_transaksi')
        ->get();
        return view('transaksi.cetak', compact('cetak'));
    }
    public function tambah(){
        $barang = DB::table('barang')
        ->get();
        $admin = Admin::all();
        return view ('transaksi.tambah',compact(['barang','admin']));

    }
    public function simpan(request $request){
        //simpan ketransaksi
        $simpan = Transaksi::create([
            
            'id_admin' => $request->id_admin,
            'transaksi_tanggal' => $request->transaksi_tanggal,
            'total_harga' => $request->total_harga,
            'transaksi_status' => $request->transaksi_status
        ]);
        echo $simpan->id_transaksi; 

          //simpan kedetail transaksi
          $simpan_detail = Detail_transaksi::create([
                      
            'id_transaksi' => $simpan->id_transaksi,
            'id_barang' => $request->id_barang,
            'transaksi_jenis' => $request->transaksi_jenis,
            'transaksi_harga' => $request->transaksi_harga,
            'transaksi_jumlah' => $request->transaksi_jumlah,
            'transaksi_detail_status' => $request->transaksi_detail_status
            
        ]);
        echo $simpan_detail->id_detail_transaksi; 
        return redirect ('transaksi');
    }
    public function ubah($id){
        $transaksi = Transaksi::find($id);
        return view ('transaksi.ubah',compact(['transaksi']));
    }
    public function update($id, request $request){
        $transaksi = Transaksi::find($id);
        $transaksi -> update($request->except('_token,_method'));
        return redirect ('transaksi');
    }
    public function hapus($id){
        $hapus = Transaksi::find($id);
        $hapus -> delete();
        return redirect ('transaksi');
}
}
