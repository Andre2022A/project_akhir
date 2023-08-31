@extends('layout.master')

@section('content')

<div class="card-header">
                <h3 class="card-title">Tampil Data Kategori</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href="/kategori/tambah" class="btn btn-primary">Tambah</a>
              <hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Kategori</th>
                    <th>Kategori Nama</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
@foreach($kategori as $row)
                  <tbody>
                  <tr>
                    <td>{{$row->id_kategori}}</td>
                    <td>{{$row->kategori_nama}}</td>   
                    <td><a href="kategori/ubah/{{$row->id}}" class="btn btn-warning">Edit</a>
                        <a href="kategori/hapus/{{$row->id}}" class="btn btn-danger">Delete</a></td>
                  </tr>
@endforeach                  
                  </tbody>
                  
                </table>
              </div>

@endsection