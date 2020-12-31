@extends('master')
  @section('content')
  <!-- <div class="container"> -->
  <br><br><br>
<div class="row">
  <div class="col-md-8">
    
    <h1 class="my-4">Kelola Data <br>
      <small>Halaman ini berfungsi untuk mengelola data User dalam tabel</small>
    </h1>

    <a href="manageusers/add" class="btn btn-primary">Tambah Data User</a>
    </br>
    </br>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Foto Profil</th>
                <th>Email</th>
                <th>Roles</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $u)
        <tr>
            <td>{{$u->name}}</td>
            <td><img width="150px" src="{{ asset('storage/'.$u->image) }}" alt="ImageCap"></td>
            <!-- <td>{{ $u->image }}</td> -->
            <td>{{$u->email}}</td>
            <td>{{$u->roles}}</td>
            <td><a href="manageusers/edit/{{ $u->id }}" class="badge badge-warning">Edit</a></td>
            <td><a href="manageusers/delete/{{ $u->id }}" class="badge badge-danger">Hapus</a></td>
            
        </tr>
        @endforeach
    </tbody>
    </table>
    <a href="/manageusers/cetak_pdf" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" target="_blank">CETAK PDF</a>
    

  </div>
  </div>
<!-- /.row -->

<!-- </div> -->
<!-- /.container -->
  @endsection