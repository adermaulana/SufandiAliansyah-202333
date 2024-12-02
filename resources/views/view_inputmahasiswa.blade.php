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

    @if ($errors->any())
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    @endif

    <form method="post" action="{{url('mahasiswa/create')}}">
    @csrf
    <input type="text" name="nim" placeholder="Nim" value="{{ old('nim') }}">
    @error('nim')
    {{ $message }}
    @enderror
    <br><br>
    <input type="text" name="nama" placeholder="Nama" value="{{ old('nama') }}">
    @error('nama')
    {{ $message }}
    @enderror
    <br><br>
    <input type="text" name="alamat" placeholder="Alamat"><br><br>
    <input type="text" name="kodejurusan" placeholder="Kode Jurusan"><br><br>
    <input type="submit" value="proses">
    </form>
    <body>
</html>