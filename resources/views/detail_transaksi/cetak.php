@extends('layout.master')

@section('content')
<div class="container">
    <h3 class="text-center">Toko Cak Udin</h3>
    <table class="table table-dark table-hover">
<thead>
    <tr>
        <th scope="col">Id Detail Transaksi</th>
        <th scope="col">Id Transaksi</th>
        <th scope="col">Id Barang</th>
        <th scope="col">Transaksi Jenis</th>
        <th scope="col">Transaksi Harga</th>
        <th scope="col">Transaksi Jumlah</th>
        <th scope="col">Transaksi Detail Transaksi</th>
    </tr>
</thead>
<tbody>
    @foreach($cetak as $cetak)
    <tr>
        <td>{{$cetak->id_detail_transaksi}}</td>
        <td>{{$cetak->id_transaksi}}</td>
        <td>{{$cetak->id_barang}}</td>
        <td>{{$cetak->transaksi_jenis}}</td>
        <td>{{$cetak->transaksi_harga}}</td>
        <td>{{$cetak->transaksi_jumlah}}</td>
        <td>{{$cetak->transaksi_detail_status}}</td>
    </tr>
    @endforeach
    <script type="text/javascript">
        window.print();
        </script>
</tbody>
    </table>
    @endsection