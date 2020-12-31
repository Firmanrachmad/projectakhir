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
            <a href="wisata/add" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger">Tambah Data</a>
            </br>
            </br>
            <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Image</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($wisata as $w)
                <tr>
                    <td>{{$w->id}}</td>
                    <td>{{$w->title}}</td>
                    <td><img width="150px" src="{{ asset('storage/'.$w->featured_image) }}" alt="ImageCap"></td>
                    <td>{{$w->created_at}}</td>
                    <td><a href="wisata/edit/{{ $w->id }}" class="badge badge-warning">Edit</a></td>
                    <td><a href="wisata/delete/{{ $w->id }}" class="badge badge-danger">Hapus</a></td>
                </tr>
                @endforeach
            </tbody>
            </table>
            <a href="/wisata/cetak_pdf" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" target="_blank">CETAK PDF</a>
        </div>
    </div>
 @endsection