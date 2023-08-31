@extends('layout.master')
@section('content')


<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ubah Data Transaksi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->


              <form method="POST" action="/transaksi/update/{{$transaksi->id}}">
                    @csrf
                    @method('put')
                  <div class="form-group">
                    <label for="">Id Transaksi</label>
                    <input type="text" value="{{$transaksi->id_transaksi}}" name="id_transaksi" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Id adamin</label>
                    <input type="text" value="{{$transaksi->id_admin}}" name="id_admin" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for=""> Tanggal Transaksi</label>
                    <input type="date" value="{{$transaksi->transaksi_tanggal}}" name="transaksi_tanggal" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for=""> Total harga</label>
                    <input type="text" value="{{$transaksi->total_harga}}" name="total_harga" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Transaksi Status</label>
                    <input type="text" value="{{$transaksi->transaksi_status}}" name="transaksi_status" class="form-control" id="" placeholder="">
                  </div>
                 
                  
                 
                <!-- /.card-body -->
             
                <div class="card-footer">
                 <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
                </div>
              </form>
            </div>
@endsection