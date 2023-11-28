<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $data['title'] }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="p-5">
    <h1 class="text-success fw-bold">Dashboard Admin</h1>
    <p>Selamat datang! ayo lihat update terbaru</p>
    <h4 class="text-success mt-5 fw-bold">Data aduan</h4>
    <table class="table table-striped mt-3">
        <tr>
            <th>id</th>
            <th>user id</th>
            <th>nama</th>
            <th>judul aduan</th>
            <th>isi aduan</th>
            <th>lokasi kejadian</th>
        </tr>
        @foreach ($data['dataAduan'] as $datu)
            <tr>
                <td>{{ $datu->id }}</td>
                <td>{{ $datu->userId }}</td>
                <td>{{ $datu->user->nama }}</td>
                <td>{{ $datu->judulAduan }}</td>
                <td>{{ $datu->isiAduan }}</td>
                <td>{{ $datu->lokasiKejadian }}</td>
            </tr>
        @endforeach
    </table>
    <h4 class="text-success mt-5 fw-bold">Data pengguna</h4>
    <table class="table table-striped mt-3">
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>nik</th>
            <th>password</th>
        </tr>
        @foreach ($data['dataUser'] as $datu)
            <tr>
                <td>{{ $datu->id }}</td>
                <td>{{ $datu->nama }}</td>
                <td>{{ $datu->nik }}</td>
                <td>{{ $datu->password }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
