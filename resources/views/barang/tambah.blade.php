@extends('layout.master')
@section('content')


<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Barang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="/barang/simpan">
                    @csrf
                  <div class="form-group">
                    <label for="">Nama Barang</label>
                    <input type="text" name="barang_nama" class="form-control" id="" placeholder="" required>
                  </div>
                  <div class="form-group">
                    <label for="">Id Kategori</label>
                    <select name="id_kategori" class="form-control" id="">
                      <option>Silahkan Dipilih</option>
                      @foreach($kategori as $row)
                      <option value="{{$row->id_kategori}}">{{$row->kategori_nama}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Id Supplier</label>
                   <select name="id_supplier" class ="form-control" id="">
                    <option>Silahkan dipilih</option>
                    @foreach($supplier as $row)
                    <option value="{{$row->id_supplier}}">{{$row->supplier_nama}}</option>
                      @endforeach
                   </select>
                  </div>
                  <div class="form-group">
                    <label for="">Total Harga</label>
                    <input type="text" name="harga_jual" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Barang Status</label>
                    <input type="text" name="barang_status" class="form-control" id="" placeholder="">
                  </div>
                  
                 
                <!-- /.card-body -->
             
                <div class="card-footer">
                 <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
                </div>
              </form>
            </div>
@endsection