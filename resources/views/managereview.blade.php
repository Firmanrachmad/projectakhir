@extends('master')
@section('content')
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Our Travel Blog!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#portfolio">Read More</a>
            </div>
        </header>
<br><br><br>
    <div class="row">
        <div class="col-md-8">
            <h1 class="my-4">Kelola Data <br>
                <small>Halaman ini berfungsi untuk mengelola data dalam tabel</small>
            </h1>
            <a href="wisatar/add" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger">Tambah Data</a>
            </br>
            </br>
            <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Komentar</th>
                    <th>Image</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($review as $r)
                <tr>
                    <td>{{$r->id}}</td>
                    <td>{{$r->title}}</td>
                    <td>{{$r->kategori}}</td>
                    <td>{{$r->comment}}</td>
                    <td><img width="150px" src="{{ asset('storage/'.$r->featured_image) }}" alt="ImageCap"></td>
                    <td>{{$r->created_at}}</td>
                    <td><a href="wisatar/edit/{{ $r->id }}" class="badge badge-warning">Edit</a></td>
                    <td><a href="wisatar/delete/{{ $r->id }}" class="badge badge-danger">Hapus</a></td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
 @endsection