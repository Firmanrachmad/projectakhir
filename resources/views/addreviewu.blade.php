@extends('master')
  @section('content')
<div class="container">
  <br><br><br>
<div class="row">
  <div class="col-md-8">
    
    <h1 class="my-4">Kelola Data <br>
      <small>Halaman ini berfungsi untuk mengelola data dalam tabel</small>
    </h1>

    <form id="contactForm" action="/wisataru/create" name="sentMessage" method="post" enctype="multipart/form-data" novalidate="novalidate">
      <div class="row align-items-stretch mb-5">
        <div class="col-md-6">
        @csrf
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control" required="required" name="title"></br>
        </div>
        <div class="form-group">
            <label for="title">Kategori</label>
            <input type="text" class="form-control" required="required" name="kategori"></br>
        </div>
        <div class="form-group">
            <label for="content">Comment</label>
            <input type="text" class="form-control" required="required" name="comment"></br>
        </div>
        <div class="form-group">
            <label for="image">Feature Image</label>
            <input type="file" class="form-control" required="required" name="image"></br>
        </div>
        <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
      </div>
      </div>  
    </form>
    

  </div>
  @endsection