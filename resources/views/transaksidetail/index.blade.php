@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Aplikasi Kasir</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a class="btn btn-warning" href="/transaksidetail/tambah">Tambah</a>
                <hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Transaksi Detail</th>
                    <th>Id Barang</th>
                    <th>Transaksi Jenis</th>
                    <th> Transaksi Harga</th>
                    <th>Transaksi Jumlah</th>
                    <th>Transaksi Detail Status</th>
                    
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($transaksidetail as $row)
                   <tr>
                    <td>{{$row->id_transaksi_detail}}</td>
                    <td>{{$row->barang_nama}}</td>
                    <td>{{$row->transaksi_jenis}}</td>
                    <td>{{$row->transaksi_harga}}</td>
                    <td>{{$row->transaksi_jumlah}}</td>
                    <td>{{$row->transaksi_detail_status}}</td>
                    
                     
                    <td><a href="/transaksidetail/edit/{{$row->id}}" class="btn btn-warning">Edit</a>
                        <a href="/transaksidetail/hapus/{{$row->id}}" class="btn btn-danger">Hapus</a>
                    </td>
                   </tr>
                   @endforeach
                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
@endsection