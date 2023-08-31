@extends('layout.master')
@section('content')


<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ubah Data Supplier</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->


              <form method="POST" action="/supplier/update/{{$supplier->id}}">
                    @csrf
                    @method('put')
                  <div class="form-group">
                    <label for="">Id supplier</label>
                    <input type="text" value="{{$supplier->id_supplier}}" name="id_supplier" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Nama Supplier</label>
                    <input type="text" value="{{$supplier->supplier_nama}}" name="supplier_nama" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Alamat Supplier</label>
                    <input type="text" value="{{$supplier->supplier_alamat}}" name="supplier_alamat" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Phone Supplier</label>
                    <input type="text" value="{{$supplier->supplier_phone}}" name="supplier_phone" class="form-control" id="" placeholder="">
                  </div>
                  
                 
                <!-- /.card-body -->
             
                <div class="card-footer">
                 <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
                </div>
              </form>
            </div>
@endsection