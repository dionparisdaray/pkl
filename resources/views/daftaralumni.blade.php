<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Link Bootstrap 5 -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap-5.1.3-dist/css/bootstrap.css') }}">

  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

  <!-- Link Css -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <!-- Link GoogleFonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,700;1,500;1,700&display=swap"
    rel="stylesheet">



    <script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
</head>
<body>
<table border="1" class="table table-bordered border-dark table-info" style="max-width:80%; margin:0px auto">
        <tr>
            <!-- UNTUK NAMA KOLOM PADA TABEL -->
            <th>nim</th>
            <th>nama</th>
            <th>prodi</th>
            <th>tahun masuk</th>
            <th>tahun lulus</th>

        </tr>
        @foreach($data as $b)
        <tr>
            <!-- Harus Disesuaikan dengan nama tabel pada DB -->
            <td>{{ $b->nim }}</td>
            <td>{{ $b->nama }}</td>
            <td>{{ $b->prodi }}</td>
            <td>{{ $b->tahunmasuk }}</td>
            <td>{{ $b->tahunlulus }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>