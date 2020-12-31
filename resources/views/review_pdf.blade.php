<!DOCTYPE html>
<html>
<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>
<body>
    <style type="text/css">
        table tr td{padding:2px 4px; background-color:rgba(84, 84, 92, 0.253); color:rgb(0, 0, 0);},
        table tr th{padding:2px 4px; background-color:#007bff; color:rgb(0, 0, 0);}{
        font-size: 9pt;
}
    </style>
<center>
    <h5>Laporan Review Wisata</h4>
</center>
<table class='table table-bordered'>
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Gambar</th>
        </tr>
    </thead>
<tbody>
    @php $i=1 @endphp
    @foreach($review as $r)
    <tr>
        <td>{{ $i++ }}</td>
        <td>{{$r->title}}</td>
        <td>{{$r->comment}}</td>
        <td><img class="card-img-top" width="150px" src="{{ public_path('storage/'.$r->featured_image) }}" alt="Card image cap"></td>
    </tr>
    @endforeach
</tbody>
</table>
</body>
</html>