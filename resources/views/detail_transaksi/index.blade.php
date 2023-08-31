@extends('layout.master')

@section('content')

<div class="card-header">
                <h3 class="card-title">Tampil Data Transaksi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href="/detail_transaksi/cetak" class="btn btn-success">Cetak</a>
              <hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Detail Transaksi</th>
                    <th>Id Transaksi</th>
                    <th>Id Barang</th>
                    <th>Transaksi Jenis</th>
                    <th>Transaksi Harga</th>
                    <th>Transaksi Jumlah</th>
                    <th>Transaksi Detail Status</th>
                    
                  </tr>
                  </thead>
@foreach($detail_transaksi as $row)
                  <tbody>
                  <tr>
                    <td>{{$row->id_detail_transaksi}}</td>
                    <td>{{$row->id_transaksi}}</td>
                    <td>{{$row->id_barang}}</td>
                    <td>{{$row->transaksi_jenis}}</td>
                    <td>{{$row->transaksi_harga}}</td>
                    <td>{{$row->transaksi_jumlah}}</td>
                    <td>{{$row->transaksi_detail_status}}</td>
                   
                  </tr>
@endforeach
                  </tbody>
                  
                </table>
              </div>

@endsection