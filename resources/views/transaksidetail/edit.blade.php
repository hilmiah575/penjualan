@extends('layout.layout')

@section('content')


<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Ubah Data taransaksi</h3>
</div>


<form method="POST" action="/transaksi/update/{{$transaksi->id}}">
    @csrf
    @method('put')
<div class="card-body">
<div class="form-group">
      <label for="">Id Transaksi</label>
      <input type="text" value="{{$transaksi->id_transaksi}}" name="id_transaksi" class="form-control" id="" placeholder="">
</div>


<div class="form-group">
      <label for="">Id Admin</label>
      <input type="text" value="{{$transaksi->id_admin}}" name="id_admin" class="form-control" id="" placeholder="">
</div>

<div class="form-group">
      <label for="">Transaksi Tanggal</label>
      <input type="text" value="{{$transaksi->transaksi_tanggal}}" name="transaksi_tanggal" class="form-control" id="" placeholder="">
</div>

<div class="form-group">
      <label for="">Transaksi Nonota</label>
      <input type="text" value="{{$transaksi->transaksi_nonota}}" name="transaksi_nonota" class="form-control" id="" placeholder="">
</div>

<div class="form-group">
      <label for=""> Transaksi Status</label>
      <input type="text" value="{{$transaksi->transaksi_status}}" name="transaksi_status" class="form-control" id="" placeholder="">
</div>






<div class="card-footer">
<input type="submit" class="btn btn-primary" value="Simpan">
</div>
</form>
</div>



@endsection