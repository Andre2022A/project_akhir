@extends('layout.master')
@section('content')


<div class="card-primary">
              <div class="card-title">
                <h3>Tambah Data Kategori</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="/kategori/simpan">
                    @csrf
                  <div class="form-group">
                    <label for="">Kategori Nama</label>
                    <input type="text" name="kategori_nama" class="form-control" id="" placeholder="">
                  </div>
                  
                 
                <!-- /.card-body -->
                 <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
                </div>
              </form>
            </div>
@endsection