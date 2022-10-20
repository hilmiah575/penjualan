@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Aplikasi Kasir</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a class="btn btn-warning" href="/jenis/tambah">Tambah</a>
                <hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Jenis</th>
                    <th>Jenis Nama</th>
                    <th>Jenis Status</th>
                    
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($jenis as $row)
                   <tr>
                    <td>{{$row->id_jenis}}</td>
                    <td>{{$row->jenis_nama}}</td>
                    <td>{{$row->jenis_status}}</td>
                    <td><a href="/jenis/edit/{{$row->id}}" class="btn btn-warning">Edit</a>
                        <a href="/jenis/hapus/{{$row->id}}" class="btn btn-danger">Hapus</a>
                    </td>
                   </tr>
                   @endforeach
                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
@endsection