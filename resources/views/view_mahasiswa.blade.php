<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>

    @foreach ($hasil as $data)
        <p>Nim : {{ $data->nim }} </p>
        <p>Nama : {{ $data->nama }} </p>
        <p>Alamat : {{ $data->alamat }} </p>
    @endforeach

</body>
</html>