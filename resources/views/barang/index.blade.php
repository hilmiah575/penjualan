@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Aplikasi Kasir</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a class="btn btn-warning" href="/barang/tambah">Tambah</a>
                <hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Barang</th>
                    <th>Barang Code</th>
                    <th>Barang Nama</th>
                    <th>Id Jenis</th>
                    <th>Id Supplier</th>
                    <th>Harga Jual</th>
                    <th>Barang Status</th>
                    <th >Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($barang as $row)
                   <tr>
                    <td>{{$row->id_barang}}</td>
                    <td>{{$row->barang_kode}}</td>
                    <td>{{$row->barang_nama}}</td>
                    <td>{{$row->jenis_nama}}</td>
                    <td>{{$row->supplier_nama}}</td>
                    <td>{{$row->harga_jual}}</td>
                    <td>{{$row->barang_status}}</td>
                    <td><a href="/barang/edit/{{$row->id}}" class="btn btn-warning">Edit</a></td>
                       <td><a href="/barang/hapus/{{$row->id_barang}}" class="btn btn-danger">Hapus</a>
                    </td>
                   </tr>
                   @endforeach
                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
@endsection