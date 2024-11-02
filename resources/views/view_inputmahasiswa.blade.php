<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Input Mahasiswa</h2>
    <form method="post" action="{{url('mahasiswa/create')}}">
    @csrf
    <input type="text" name="nim" placeholder="Nim"><br><br>
    <input type="text" name="nama" placeholder="Nama"><br><br>
    <input type="text" name="alamat" placeholder="Alamat"><br><br>
    <input type="text" name="kodejurusan" placeholder="Kode Jurusan"><br><br>
    <input type="submit" value="proses">
    </form>
    <body>
</html>