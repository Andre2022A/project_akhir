@extends('layout.master')
@section('content')


<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ubah Data Kategori</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->


              <form method="POST" action="/kategori/update/{{$kategori->id}}">
                    @csrf
                    @method('put')
                  <div class="form-group">
                    <label for="">Id Kategori</label>
                    <input type="text" value="{{$kategori->id_kategori}}" name="id_kategori" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Kategori Nama</label>
                    <input type="text" value="{{$kategori->kategori_nama}}" name="kategori_nama" class="form-control" id="" placeholder="">
                  </div>
                
                           
                <!-- /.card-body -->
             
                <div class="card-footer">
                 <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
                </div>
              </form>
            </div>
@endsection