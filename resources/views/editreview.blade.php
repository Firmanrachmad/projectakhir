@extends('master')
  @section('content')
  <!-- Page Content -->
  <div class="container">
  <br><br><br>
<div class="row">

  <!-- Blog Entries Column -->
  
  <div class="col-md-8">
    
    <h1 class="my-4">Kelola Data <br>
      <small>Halaman ini berfungsi untuk mengelola data dalam tabel</small>
    </h1>

    <form action="/wisatar/update/{{$review->id}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$review->id}}"></br>
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control" required="required" name="title" value="{{$review->title}}"></br>
        </div>
        <div class="form-group">
            <label for="title">Kategori</label>
            <input type="text" class="form-control" required="required" name="title" value="{{$review->kategori}}"></br>
        </div>
        <div class="form-group">
            <label for="content">Comment</label>
            <input type="text" class="form-control" required="required" name="comment" value="{{$review->comment}}"></br>
        </div>
        <div class="form-group">
            <label for="image">Feature Image</label>
            <input type="file" class="form-control" required="required" name="image" accept="image/*"></br>
            <img width="150px" src="{{asset('storage/'.$review->featured_image)}}">
        </div>
        <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
    </form>

  </div>

  @endsection