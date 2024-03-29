@extends('layout.layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @section('title')
        Fowlt | E-Fowlt Tech
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
                <h1 class="mb-0 text-white fw-bold">E-Fowlt Tech</h1>
                <p class="text-white pt-3">Implementasi tekologi peternakan berbasis IoT untuk kemudahan dan peningkatan kualitas ternak dengan E-Fowlt Tech! Fowlt menjual dan menyediakan teknologi ternak berbasis IoT yang dapat membantu berbagai kegiatan peternakan yang dapat dipesan dan disesuaikan dengan setiap peternakan. Fowlt membuka konsultasi bagi para peternak yang ingin menggunakan E-Fowlt Tech</p>
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
          <h2 class="fw-bold section-title mb-3 text-center">Produk Teknologi <br/>di E-Fowlt Tech</h2>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-3 mb-4">
          <div class="team">
            <img src="image/product/smartfeeder.png" alt="Image" class="img-fluid mb-4 rounded-4">
            <div class="px-3">
              <h3 class="fw-bold mb-0">Smart Feeder</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="team">
            <img src="image/product/smartcamera.png" alt="Image" class="img-fluid mb-4 rounded-4">
            <div class="px-3">
              <h3 class="fw-bold mb-0"> Smart Camera Sensor </h3>
            </div>
          </div>
        </div>

        <div class="col-lg-3 mb-4">
          <div class="team">
            <img src="image/product/Thermohygrometer.jpg" alt="Image" class="img-fluid mb-4 rounded-4">
            <div class="px-3">
              <h3 class="fw-bold mb-0">Thermohygrometer</h3>
            </div>
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
          <p class="mb-0"><a href="{{ url('belanja') }}" class="btn btn-outline-white text-white btn-md font-weight-bold rounded-pill"> Hubungi Kami </a></p>
        </div>
      </div>
    </div>
  </div>
  @endsection



</body>
</html>


