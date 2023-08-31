@extends('layout.master')
@section('content')


<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Supplier</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="/supplier/simpan">
                    @csrf
                
                  <div class="form-group">
                    <label for="">Nama Supplier</label>
                    <input type="text" name="supplier_nama" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Alamat Supplier</label>
                    <input type="text" name="supplier_alamat" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Phone Suplier</label>
                    <input type="text" name="supplier_phone" class="form-control" id="" placeholder="">
                  </div>
                  
                 
                <!-- /.card-body -->
             
                <div class="card-footer">
                 <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
                </div>
              </form>
            </div>
@endsection