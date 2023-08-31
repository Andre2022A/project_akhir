@extends('layout.master')
@section('content')


<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ubah Data Barang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->


              <form method="POST" action="/barang/update/{{$barang->id}}">
                    @csrf
                    @method('put')
                  <div class="form-group">
                    <label for="">Id Barang</label>
                    <input type="text" value="{{$barang->id_barang}}" name="id_barang" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Nama Barang</label>
                    <input type="text" value="{{$barang->barang_nama}}" name="barang_nama" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Id Kategori</label>
                    <input type="text" value="{{$barang->id_kategori}}" name="id_kategori" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Id Supplier</label>
                    <input type="text" value="{{$barang->id_supplier}}" name="id_supplier" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Total Harga</label>
                    <input type="text" value="{{$barang->harga_jual}}" name="harga_jual" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">barang Status</label>
                    <input type="text" value="{{$barang->barang_status}}" name="barang_status" class="form-control" id="" placeholder="">
                  </div>
                  
                 
                <!-- /.card-body -->
             
                <div class="card-footer">
                 <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
                </div>
              </form>
            </div>
@endsection