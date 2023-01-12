@extends('layout.layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @section('title')
        Fowlt | E-Fowlt Loan
        @endsection

    {{-- <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&family=Rubik:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&family=Rubik:wght@300&display=swap" rel="stylesheet">
</head>
<body>


    <div class="hero hero-inner"  style="background-color: #1a374d">
        <div class="container ">
        <div class="row align-items-center">
            <div class="col-lg-6 mx-auto text-center pt-5">
            <div class="intro-wrap">
                <br/>
                <h1 class="mb-0 text-white fw-bold">E-Fowlt Loan</h1>
                <p class="text-white pt-3">Dapatkan bantuan permodalan dari fowlt untuk para peternak dengan cepat dan mudah!
                    E-Fowlt Loan adalah pinjaman modal usaha bagi peternak yang sudah/baru memulai usaha di Indonesia. Peternak bisa mendapatkan pakan, sarana, teknologi ternak terkini dengan sistem pembayaran tempo yang bisa dibayar nanti ketika panen ternak.
                    </p>
                <br>
            </div>
            </div>
        </div>
        </div>
    </div>


  <div class="Title-section" id="aboutUSDetail">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 mx-auto text-center">
          <div class="owl-single dots-absolute owl-carousel pt-5">
            <img src="image/slider1.jpg" alt="slider1" class="rounded-4" width="Automatic" height="390">
          </div>
        </div>

      </div >
    </div>
  </div>

{{-- TEAMS --}}


  <div class="Teams-section pt-5" id="produkKami">
    <div class="container">
      <div class="row justify-content-center mb-5 ">
        <div class="col-md-6 text-center">
          <h2 class="fw-bold section-title mb-3 text-center">Keuntungan membeli produk <br/> di E-Fowlt Loan</h2>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-6 mb-4 keuntungan">
            <h3>Keuntungan</h3>
            <div>
                <ul>
                    <li>Pinjaman modal dalam bentuk dana usaha, pakan, sarana, ataupun teknologi ternak</li>
                    <li>Memberikan pendanaan hingga 1 miliar rupiah</li>
                    <li>Termin pembayaran tempo yang bisa dibayar secara fleksibel.</li>
                  </ul>
            </div>
        </div>
        <div class="col-lg-6 mb-4 syarat">
            <h3>Syarat</h3>
            <div>
                <ul>
                    <li>Calon peternak berusia 20 – 50 tahun</li>
                    <li>Memiliki pengalaman berternak atau sudah menjalankan peternakan > 2 tahun untuk peminjaman > 350 Juta</li>
                    <li>Tidak memiliki Riwayat hutang atau pinjaman buruk pada Lembaga keuangan perbankan yang terdaftar di OJK ataupun tidak</li>
                  </ul>
            </div>
        </div>
      </div>

    </div>
  </div>



{{-- EXPLORE NOW --}}
  <div class="py-5 cta-section" style="background-color: #1a374d">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-12">
          <p class="mb-0"><a href="http://wa.me/62895609827665" class="btn btn-outline-white text-white btn-md font-weight-bold rounded-pill"> Hubungi Kami </a></p>
        </div>
      </div>
    </div>
  </div>
  @endsection



</body>
</html>


