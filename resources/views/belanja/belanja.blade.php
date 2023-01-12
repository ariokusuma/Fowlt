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
                <p class="text-white">Tumbuh Bersama dan menciptakan sektor peternakan yang maju untuk Indonesia, dari Kita untuk Kita.</p>
                <br>
            </div>
            </div>
        </div>
        </div>
    </div>


@auth
<section id="aboutUS" style="background-color:  #1a374d">
    <div class="container text-center">
        <div class="row align-items-center">
            <!-- Kiri -->
            <div class="col">
                <div class="teksawalan">
                    <h1 class="text-start">Membangun dan Mengembangkan peternakan berbasis IoT<br></h1>
                    <div class="container text-center">
                        <div class="row">
                            <div class="col">
                                {{-- <img src="/image/chiken-landing.png" alt="logo-ead" width="Automatic" height="29"> --}}
                                {{-- <img src="public/image/chiken-landing.png" alt="logo-ead" width="Automatic" height="21"> --}}
                            </div>
                            <div class="col">
                                <p>Ario_1202204123</p>
                            </div>`
                        </div>
                    </div>
                    <br>
                </div>
            </div>
            <!-- Kanan -->

            <div class="col">
                <img src="/image/chiken-landing.png" class="rounded" alt="logo-ead" width="Automatic" height="390">
            </div>
        </div>
    </div>
</section>
@endauth

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
                <div class="card" href="/" style="width: 18rem;">
                    <img src="/image/market/chicken.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Ayam Kampung</p>
                        <h4 class="card-title">Rp50.000</h4>
                        <p class="card-text">Bandung</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
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
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              <br>
              <br>
              <br>
          </div>
        </div>
      </div>


        </section>
    @endguest


</section>



@endsection

</body>
</html>
