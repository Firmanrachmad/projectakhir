@extends('master')
  @section('content')
  <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Our Travel Blog!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#portfolio">Read More</a>
            </div>
<div class="container">
  <br><br><br>
<div class="row">
  <div class="col-md-8">
    
    <h1 class="my-4">Kelola Data <br>
      <small>Halaman ini berfungsi untuk mengelola data dalam tabel</small>
    </h1>

    <form action="/wisata/create" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control" required="required" name="title"></br>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <input type="text" class="form-control" required="required" name="content"></br>
        </div>
        <div class="form-group">
            <label for="image">Feature Image</label>
            <input type="file" class="form-control" required="required" name="image"></br>
        </div>
        <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
    </form>
    

  </div>
  @endsection