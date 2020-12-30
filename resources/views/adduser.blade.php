@extends('master')
  @section('content')
  <div class="container">
  <br><br><br>
<div class="row">
  <div class="col-md-8">
    
    <h1 class="my-4">Kelola Data <br>
      <small>Halaman ini berfungsi untuk mengelola User dalam tabel</small>
    </h1>

    <form action="/manageusers/create" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control"  required="required" name="name"></br>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" required="required" name="image"></br>
        </div>  
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" required="required" name="email"></br>
        </div>
        <div class="form-group">
            <label for="roles">Roles</label>
            <input type="text" class="form-control" required="required" name="roles">
            </br>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" required="required" name="password"></br>
        </div>
        
        <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
    </form>
    

  </div>

  </div>
<!-- /.row -->

</div>
<!-- /.container -->
  @endsection