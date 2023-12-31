@extends('layout.master')
@section('content')


<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Transaksi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="/transaksi/simpan">
                    @csrf
                  
                  <div class="form-group">
                    <label for="">Id Admin</label>
                    <select name="id_admin" class ="form-control" id="">
                    <option>Silahkan dipilih</option>
                    @foreach($admin as $row)
                    <option value="{{$row->id_admin}}">{{$row->admin_nama}}</option>
                      @endforeach
                   </select>
                  </div>
                  <div class="form-group">
                    <label for="">Transaksi Tanggal</label>
                    <input type="date" name="transaksi_tanggal" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Transaksi No Nota</label>
                    <input type="text" name="total_harga" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Transaksi Status</label>
                    <input type="text" name="transaksi_status" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Id Barang</label>
                    <select name="id_barang" class ="form-control" id="">
                    <option>Silahkan dipilih</option>
                    @foreach($barang as $row)
                    <option value="{{$row->id_barang}}">{{$row->barang_nama}}</option>
                      @endforeach
                   </select>
                  </div>
                  <div class="form-group">
                    <label for="">Transaksi Jenis</label>
                    <input type="text" name="transaksi_jenis" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Transaksi Harga</label>
                    <input type="text" name="transaksi_harga" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Transaksi Jumlah</label>
                    <input type="text" name="transaksi_jumlah" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Transaksi Detail Status</label>
                    <input type="text" name="transaksi_detail_status" class="form-control" id="" placeholder="">
                  </div>
                  
                 
                 
                <!-- /.card-body -->
             
                <div class="card-footer">
                 <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
                </div>
              </form>
            </div>
@endsection