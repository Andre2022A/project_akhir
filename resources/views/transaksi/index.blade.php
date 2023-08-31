@extends('layout.master')

@section('content')

<div class="card-header">
                <h3 class="card-title">Tampil Data Transaksi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href="/transaksi/tambah" class="btn btn-primary">Tambah</a>
              <a href="/transaksi/cetak" class="btn btn-success">Cetak</a>
              <hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Transaksi</th>
                    <th>Id admin</th>
                    <th>Tanggal Transaksi</th>
                    <th>Total Harga</th>
                    <th>Transaksi Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
@foreach($transaksi as $row)
                  <tbody>
                  <tr>
                    <td>{{$row->id_transaksi}}</td>
                    <td>{{$row->admin_nama}}</td>
                    <td>{{$row->transaksi_tanggal}}</td>
                    <td>{{$row->total_harga}}</td>
                    <td>{{$row->transaksi_status}}</td>
                    <td><a href="detail_transaksi/detail/{{$row->id_transaksi}}" class="btn btn-success">Detail</a>
                        <a href="transaksi/ubah/{{$row->id}}" class="btn btn-warning">Edit</a>
                        <a href="transaksi/hapus/{{$row->id}}" class="btn btn-danger">Delete</a></td>
                  </tr>
@endforeach
                  </tbody>
                  
                </table>
              </div>

@endsection