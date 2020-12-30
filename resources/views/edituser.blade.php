@extends('master')
  @section('content')
      <div class="container">
  <br><br><br>
<div class="row">
  <div class="col-md-8">
    
    <h1 class="my-4">Kelola Data <br>
      <small>Halaman ini berfungsi untuk mengelola data dalam tabel</small>
    </h1>

    <form action="/manageusers/update/{{$users->id}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$users->id}}"></br>
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" required="required" name="name" value="{{$users->name}}"></br>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" required="required" name="email" value="{{$users->email}}"></br>
        </div>
        <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" required="required" name="password" value="{{$users->password}}"></br>
            </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" required="required" name="image" accept="image/*"></br>
            <img width="150px" src="{{asset('storage/'.$users->image)}}">
        </div>
        <div class="form-group">
                <label for="roles">Roles</label>
                <input type="text" class="form-control" required="required" name="roles" value="{{$users->roles}}"></br>
            </div>
        <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
    </form>

  </div>
  </div>
<!-- /.row -->

</div>
<!-- /.container -->
  @endsection