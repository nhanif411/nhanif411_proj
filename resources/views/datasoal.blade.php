<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Soal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1>CRUD Laravel 8 - Data Soal</h1>

    <div class="container">
        <a href="/tambahsoal" class="btn btn-primary">Tambah</a>
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Mata Kuliah</th>
                    <th scope="col">Dosen</th>
                    <th scope="col">Jumlah Soal</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Dibuat Pada</th>
                    <th scope="col">Diedit Pada</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($data as $row)
                <tr>
                    <th scope="row">{{$row->id}}</th>
                    <td>{{$row->nama_mk}}</td>
                    <td>{{$row->dosen}}</td>
                    <td>{{$row->jumlah_soal}}</td>
                    <td>{{$row->keterangan}}</td>
                    <td>{{$row->created_at}}</td>
                    <td>{{$row->updated_at}}</td>
                    <td>
                        <button type="button" class="btn btn-success">Edit</button>
                        <button type="button" class="btn btn-danger">Hapus</button>
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
