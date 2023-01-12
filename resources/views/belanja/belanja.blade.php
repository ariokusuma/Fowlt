@extends('layout.layout')

@section('content')


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @section('title')
        Fowlt | Belanja
        @endsection

    {{-- <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="/css/home.css"> --}}
    <link href="{{ asset('css/home.css')}}" rel="stylesheet">
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&display=swap" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&family=Rubik:wght@300&display=swap" rel="stylesheet">
</head>
<body>


    <div class="hero hero-inner "  style="background-color: #1a374d">
        <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mx-auto text-center pt-5">
            <div class="intro-wrap">
                <h1 class="mb-0 text-white">E-Fowlt Market</h1>
                <p class="text-white">Jual/beli ayam segar dan jumlah yang banyak lebih mudah dengan E-Folwt Market ! </p>
                <p class="mb-0"><a href="{{ url('jualternak') }}" class="btn btn-outline-light text-white btn-md font-weight-bold rounded-pill"> Jual Hasil Ternak Anda </a></p>
                <br>
            </div>
            </div>
        </div>
        </div>
    </div>
@guest


    <section id="bagian2" style="background-color: rgb(255, 255, 255)">


	<div class="service-section pt-5">
		<div class="container">
			<div class="row mb-5 justify-content-center">
				<div class="col-lg-6 text-center">
					<h2 class="section-title text-center mb-3">Jual/Beli Hasil ternak Anda</h2>
					<p>Solusi kami untuk sektor peternakan Indonesia</p>
				</div>
			</div>
     {{-- Grids --}}
     <div class="container text-start">
        <div class="row">
            {{-- Kiri --}}
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="/image/market/chicken.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Ayam Kampung</p>
                        <h4 class="card-title">Rp50.000</h4>
                        <p class="card-text">Bandung</p>
                        <a href="{{ url('detailproduk') }}" class="stretched-link"></a>
                    </div>
                  </div>
            </div>
            {{-- Tengah --}}
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="/image/market/chicken.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Ayam Kampung</p>
                        <h4 class="card-title">Rp50.000</h4>
                        <p class="card-text">Bandung</p>
                        <a href="{{ url('detailproduk') }}" class="stretched-link"></a>
                    </div>
                  </div>
            </div>
            {{-- Kanan --}}
          <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="/image/market/chicken.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Ayam Kampung</p>
                    <h4 class="card-title">Rp50.000</h4>
                    <p class="card-text">Bandung</p>
                    <a href="{{ url('detailproduk') }}" class="stretched-link"></a>
                </div>
              </div>
              <br>
              <br>
              <br>
          </div>
        </div>
      </div>

      <div class="card mb-3 mx-auto" style="max-width: 740px;">
        <div class="row g-8">
          <div class="col-md-4">
            <img src="/image/market/chicken.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
                <p>Ayam Kampung</p>
              <h5 class="card-title">Rp50.000</h5>
              <p class="card-text">Bandung</p>
              <p class="card-text"><small class="text-muted">Lembang Farmers</small></p>
              <a href="{{ url('detailproduk') }}" class="stretched-link"></a>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 mx-auto" style="max-width: 740px;">
        <div class="row g-8">
          <div class="col-md-4">
            <img src="/image/market/chicken.jpg" class="img-fluid rounded-center" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
                <p>Ayam Kampung</p>
              <h5 class="card-title">Rp50.000</h5>
              <p class="card-text">Bandung</p>
              <p class="card-text"><small class="text-muted">Oleh Ternak Asep</small></p>
              <a href="{{ url('detailproduk') }}" class="stretched-link"></a>
            </div>
          </div>
        </div>
      </div>

        </section>
    @endguest


</section>



@endsection

</body>
</html>
