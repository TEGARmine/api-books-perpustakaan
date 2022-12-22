<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

    {{-- <table>
        <thead>
            <tr>
                <th>Kode Buku</th>
                <th>Judul Buku</th>
                <th>Jumlah Halaman</th>
                <th>Tahun Terbit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $b)
            <tr>
                <td>{{$b['kode_buku']}}</td>
                <td>{{$b['judul_buku']}}</td>
                <td>{{$b['jumlah_halaman']}}</td>
                <td>{{$b['tahun_terbit']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table> --}}

    <div class="d-flex justify-content-center">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
</div>

    <div class="container mt-5">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Kode Buku</th>
                <th>Judul Buku</th>
                <th>Jumlah Halaman</th>
                <th>Tahun Terbit</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $b)
            <tr>
                <td>{{$b['kode_buku']}}</td>
                <td>{{$b['judul_buku']}}</td>
                <td>{{$b['jumlah_halaman']}}</td>
                <td>{{$b['tahun_terbit']}}</td>
                <td class="d-flex gap-4 justify-content-center">
                    <a href="#"><button class="btn btn-sm btn-primary">Details</button></a>
                    <a href="{{route('update', $b['id'])}}"><button class="btn btn-sm btn-warning">Update</button></a>
                    <a href="#"><button class="btn btn-sm btn-danger">Delete</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
        <a href="{{route('add')}}"><button class="btn btn-sm btn-warning mb-3">Tambah Buku</button></a>
    </table>
</div>


</body>