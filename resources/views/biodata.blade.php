<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>{{$title}}</title>
    <style>
      body {
        background-color: #5a3939;
      }
      
      .kartu {
        width: 800px;
        margin: 0 auto;
        margin-top: 70px;
            box-shadow: 0 0.25rem 0.75rem rgba(0,0,0,.03);
    transition: all .3s;
           background-color: #591869;
    border: solid 8px #ea92ff;
    border-top-right-radius: 80px;
    border-bottom-left-radius: 80px;
      } 
      .kartu:hover {
        background-color: #1f8a45;
        border: solid 8px #4fd47e;
        border-top-left-radius: 80px;
    border-bottom-right-radius: 80px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
      }
      .foto {
            padding: 20px;
    margin-left: 30px;
    margin-top: 10px;
      }
      tbody {
    font-size: 20px;
    font-weight: 300;
    color:white;
}
.biodata {
    margin-top: 30px;
}
    </style>
  </head>
  <body>
    @extends('layouts.main')
        @section('content')
        <!-- Isi Biodata Paling Keren di HTML disini -->
<div class="container">
  <div class="card kartu">
    <div class="row">
      <div class="col-md-4">
      <div class="foto">
        <img src="{{ asset('/')}}happyhappy.gif" class="img-thumbnail" alt="" width="150" height="auto">
      </div>
      </div>
      <div class="col-md-8 kertas-biodata">
        <div class="biodata">
        <table width="100%" border="0">
    <tbody><tr>
        <td valign="top">
        <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
          <tbody>
            <tr>
              <td width="25%" valign="top" class="textt">Nama</td>
                <td width="2%">:</td>
                <td style="color: #e9a7f9; font-weight:bold">Javier Arkanauf Syarif</td>
            </tr>
          <tr>
              <td class="textt">Jenis Kelamin</td>
                <td>:</td>
                <td>Laki-Laki</td>
            </tr>
          <tr>
              <td class="textt">Tempat Lahir</td>
                <td>:</td>
                <td>Jakarta</td>
            </tr>
          <tr>
              <td class="textt">Tanggal Lahir</td>
                <td>:</td>
                <td>11/10/2006</td>
            </tr>
          <tr>
              <td class="textt">Sekolah</td>
                <td>:</td>
                <td>SMK Teratai Putih Global 2 Bekasi</td>
            </tr>
          <tr>
              <td valign="top" class="textt">Jurusan</td>
                <td valign="top">:</td>
                <td>RPL</td>
            </tr>
            <tr>
              <td valign="top" class="textt">gmail</td>
                <td valign="top">:</td>
                <td>javierslebew@gmail.com</td>
            </tr>
        </tbody></table>
        </td>
    </tr>
    </tbody></table>
  </div>
      </div>
    </div>
  </div>
</div>
    <script src="js/bootstrap.min.js"></script>
    @endsection
  </body>
</html>