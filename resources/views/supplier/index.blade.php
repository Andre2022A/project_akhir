@extends('layout.master')

@section('content')

<div class="card-header">
                <h3 class="card-title">Tampil Data Supplier</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href="/supplier/tambah" class="btn btn-primary">Tambah</a>
              <hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id supplier</th>
                    <th>Nama Supplier</th>
                    <th>Alamat Supplier</th>
                    <th>Phone Supplier</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
@foreach($supplier as $row)
                  <tbody>
                  <tr>
                    <td>{{$row->id_supplier}}</td>
                    <td>{{$row->supplier_nama}}</td>
                    <td>{{$row->supplier_alamat}}</td>
                    <td>{{$row->supplier_phone}}</td>
                    <td><a href="supplier/ubah/{{$row->id}}" class="btn btn-warning">Edit</a>
                        <a href="supplier/hapus/{{$row->id}}" class="btn btn-danger">Delete</a></td>
                  </tr>
@endforeach                  
                  </tbody>
                  
                </table>
              </div>

@endsection