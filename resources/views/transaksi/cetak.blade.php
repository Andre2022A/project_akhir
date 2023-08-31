@extends('layout.master')

@section('content')
<div class="container">
    <h3 class="text-center">Toko Cak Udin</h3>
    <table class="table table-dark table-hover">
<thead>
    <tr>
        <th scope="col">Id Transaksi</th>
        <th scope="col">Id Admin</th>
        <th scope="col">Transaksi Tanggal</th>
        <th scope="col">No Nota</th>
        <th scope="col">Transaksi Status</th>
    </tr>
</thead>
<tbody>
    @foreach($cetak as $cetak)
    <tr>
        <td>{{$cetak->id_transaksi}}</td>
        <td>{{$cetak->id_admin}}</td>
        <td>{{$cetak->transaksi_tanggal}}</td>
        <td>{{$cetak->transaksi_nonota}}</td>
        <td>{{$cetak->transaksi_status}}</td>
    </tr>
    @endforeach
    <script type="text/javascript">
        window.print();
        </script>
</tbody>
    </table>
    @endsection