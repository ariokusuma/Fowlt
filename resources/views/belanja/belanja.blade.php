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
                <h1 class="mb-0 text-white">About Us</h1>
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
<section id="bagian1" style="background-color:  #1a374d">
<div class="container text-center">
    <div class="row align-items-center pt-5">
        <!-- Kiri -->
        <div class="col sambutan">
                <h1 class="text-start">Tumbuh Berkembang bersama <br> Fowlt.</h1>
                <p class="text-start">Memajukan sektor peternakan ayam Indonesia dengan teknologi</p>

                <!-- Logo & Nama -->
                <div class="container text-center pt-1">
                    <div class="row"  id="semuaTombol">
                        {{-- kiri --}}
                        <div class="col">
                            <a type="button" class="btn btn-light" href="{{ url('belanja') }}" id = "detilTombol">Jual/Beli</a>
                        </div>
                        <div class="col">
                            <a type="button" class="btn btn-light" href="{{ url('aboutus') }}" id = "detilTombol">Tentang Fowlt</a>
                        </div>
                        {{-- kanan --}}
                        {{-- <div class="col">
                            <button type="button" class="btn btn-dark" id="detilTombol">Tentang Fowlt.</button>
                        </div> --}}
                    </div>
                </div>

                <br>
            </div>
            <!-- Kanan -->
            <div class="col-lg-5" id="gambarHeading">
                <div class="slides" >
                    <img src="image/auth/login.jpg" alt="Image" class="img-fluid active" id="iniGambar">
                    {{-- <img src="images/hero-slider-2.jpg" alt="Image" class="img-fluid">
                    <img src="images/hero-slider-3.jpg" alt="Image" class="img-fluid">
                    <img src="images/hero-slider-4.jpg" alt="Image" class="img-fluid">
                    <img src="images/hero-slider-5.jpg" alt="Image" class="img-fluid"> --}}
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
    </div>
</section>

    <section id="bagian2" style="background-color: rgb(255, 255, 255)">


	<div class="service-section pt-5">
		<div class="container">
			<div class="row mb-5 justify-content-center">
				<div class="col-lg-6 text-center">
					<h2 class="section-title text-center mb-3">Our Services</h2>
					<p>Solusi kami untuk sektor peternakan Indonesia</p>
				</div>
			</div>
     {{-- Grids --}}
     <div class="container text-center">
        <div class="row">
            {{-- Kiri --}}
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Solusi Jual/Beli</h5>
                      <p class="card-text">Sebuah solusi layanan bagi para peternak ayam untuk dapat menjual hasil ternaknya kepada konsumen secara langsung yang saat ini tersebar di 3 kota yaitu, Bandung, Bogor, dan Yogyakarta.</p>
                    </div>
                  </div>
            </div>
            {{-- Tengah --}}
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Solusi Teknologi ternak</h5>
                      <p class="card-text">Sebuah solusi layanan untuk mengimplementasikan teknologi tepat guna dalam sektor peternakan ayam yang dapat membantu keberhasilan dan maksimalnya hasil ternak.</p>
                    </div>
                  </div>
            </div>
            {{-- Kanan --}}
          <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Solusi untuk semua orang (Kabayan)</h5>
                  <p class="card-text">Sebuah solusi layanan bagi seluruh masyarakat Indonesia yang ingin memiliki usaha peternakan ayam namun belum memiliki modal usaha.</p>
                  <br>
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
