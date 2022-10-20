@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Aplikasi Kasir</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a class="btn btn-warning" href="/supplier/tambah">Tambah</a>
                <hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Supplier</th>
                    <th>Supplier Nama </th>
                    <th>Supplier  Alamat</th>
                    <th>Supplier Phone</th>
                    <th>Supplier  Status </th>
                    
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($supplier as $row)
                   <tr>
                    <td>{{$row->id_supplier}}</td>
                    <td>{{$row->supplier_nama}}</td>
                    <td>{{$row->supplier_alamat}}</td>
                    <td>{{$row->supplier_phone}}</td>
                    <td>{{$row->supplier_status}}</td>
                    
                    <td><a href="/supplier/edit/{{$row->id}}" class="btn btn-warning">Edit</a></td>
                       <td> <a href="/supplier/hapus/{{$row->id}}" class="btn btn-danger">Hapus</a>
                    </td>
                   </tr>
                   @endforeach
                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
@endsection