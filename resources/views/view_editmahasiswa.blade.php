<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Edit Mahasiswa</h2>
    <form method="post" action="/mahasiswa/{{ $mahasiswa->nim }}/update">
    @csrf
    @method('put')
    <input type="text" name="nim" value="{{ $mahasiswa->nim }}" placeholder="Nim"><br><br>
    <input type="text" name="nama" value="{{ $mahasiswa->nama }}" placeholder="Nama"><br><br>
    <input type="text" name="alamat" value="{{ $mahasiswa->alamat }}" placeholder="Alamat"><br><br>
    <input type="text" name="kodejurusan" value="{{ $mahasiswa->kodejurusan }}" placeholder="Kode Jurusan"><br><br>
    <input type="submit" value="Update">
    </form>
    <body>
</html>