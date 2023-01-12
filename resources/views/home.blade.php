@extends('layout.layout')

@section('content')


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @section('title')
        Fowlt | Home
        @endsection

    {{-- <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet"> --}}
    {{-- <link rel="shortcut icon" href="favicon.png"> --}}
    {{-- <link rel="icon" href="{{ url('/image/favicon.png') }}"> --}}
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="/css/home.css"> --}}
    <link href="{{ asset('css/home.css')}}" rel="stylesheet">
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&display=swap" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&family=Rubik:wght@300&display=swap" rel="stylesheet">
</head>
<body>

@auth
<section id="bagian1" style="background-color:  #1a374d">
    <div class="container text-center">
        <div class="row align-items-center pt-5">
            <!-- Kiri -->
            <div class="col sambutan">
                    <h1 class="text-start">Tumbuh Berkembang bersama <br> Fowlt.</h1>
                    <p class="text-start" id="desc-prod">Memajukan sektor peternakan ayam Indonesia dengan teknologi</p>

                    <!-- Logo & Nama -->
                    <div class="container text-center pt-1">
                        <div class="row"  id="semuaTombol">
                            {{-- kiri --}}
                            <div class="col">
                                <p class="mb-0"><a href="{{ url('belanja') }}" class="btn btn-outline-white text-white btn-md font-weight-bold rounded-pill"> Jual/Beli </a></p>
                            </div>
                            <div class="col">
                                <p class="mb-0"><a href="{{ url('aboutus') }}" class="btn btn-outline-white text-white btn-md font-weight-bold rounded-pill"> Tentang Fowlt </a></p>
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
                        <img src="image/landing.jpg" alt="Image" class="img-fluid active" id="iniGambar">

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
                        <h2 class="section-title text-center mb-3">Produk Kami</h2>
                        <p id='desc-prod'>Solusi kami untuk sektor peternakan Indonesia</p>
                    </div>
                </div>
         {{-- Grids --}}
         <div class="container text-center">
            <div class="row">
                {{-- Kiri --}}
                <div class="col">
                    <div class="card mx-auto" style="width: 18rem;">
                        <img src="/image/product/product1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Solusi Jual/Beli</h5>
                          <p class="card-text">Sebuah solusi layanan bagi para peternak ayam untuk dapat menjual hasil ternaknya kepada konsumen secara langsung yang saat ini tersebar di 3 kota yaitu, Bandung, Bogor, dan Yogyakarta.</p>
                          <a href="{{ url('produk1') }}" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                {{-- Tengah --}}
                <div class="col">
                    <div class="card mx-auto" style="width: 18rem;">
                        <img src="/image/product/product2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Solusi Teknologi ternak</h5>
                            <p class="card-text">Sebuah solusi layanan untuk mengimplementasikan teknologi tepat guna dalam sektor peternakan ayam yang dapat membantu keberhasilan dan maksimalnya hasil ternak.</p>
                            <a href="{{ url('produk2') }}" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                {{-- Kanan --}}
                <div class="col">
                    <div class="card mx-auto" style="width: 18rem;">
                        <img src="/image/product/product3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Solusi untuk semua orang (Kabayan)</h5>
                            <p class="card-text">Sebuah solusi layanan bagi seluruh masyarakat Indonesia yang ingin memiliki usaha peternakan ayam namun belum memiliki modal usaha.</p>
                            <a href="{{ url('produk3') }}" class="stretched-link"></a>
                        </div>

                    </div>
                    <br>
                    <br>
                    <br>
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
                    <p class="text-start" id="desc-prod">Memajukan sektor peternakan ayam Indonesia dengan teknologi</p>

                    <!-- Logo & Nama -->
                    <div class="container text-center pt-1">
                        <div class="row"  id="semuaTombol">
                            {{-- kiri --}}
                            <div class="col">
                                <p class="mb-0"><a href="{{ url('belanja') }}" class="btn btn-outline-white text-white btn-md font-weight-bold rounded-pill"> Tentang Fowlt </a></p>
                            </div>
                            <div class="col">
                                <p class="mb-0"><a href="{{ url('aboutus') }}" class="btn btn-outline-white text-white btn-md font-weight-bold rounded-pill"> Tentang Fowlt </a></p>
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
                        <img src="image/landing.jpg" alt="Image" class="img-fluid active" id="iniGambar">

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
                        <h2 class="section-title text-center mb-3">Produk Kami</h2>
                        <p id='desc-prod'>Solusi kami untuk sektor peternakan Indonesia</p>
                    </div>
                </div>
                {{-- Grids --}}
                <div class="container text-center">
                    <div class="row">
                        {{-- Kiri --}}
                        <div class="col">
                            <div class="card mx-auto" style="width: 18rem;">
                                <img src="/image/product/product1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Solusi Jual/Beli</h5>
                                    <p class="card-text">Sebuah solusi layanan bagi para peternak ayam untuk dapat menjual hasil ternaknya kepada konsumen secara langsung yang saat ini tersebar di 3 kota yaitu, Bandung, Bogor, dan Yogyakarta.</p>
                                    <a href="{{ url('produk1') }}" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                        {{-- Tengah --}}
                        <div class="col">
                            <div class="card mx-auto" style="width: 18rem;">
                                <img src="/image/product/product2.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Solusi Teknologi ternak</h5>
                                    <p class="card-text">Sebuah solusi layanan untuk mengimplementasikan teknologi tepat guna dalam sektor peternakan ayam yang dapat membantu keberhasilan dan maksimalnya hasil ternak.</p>
                                    <a href="{{ url('produk2') }}" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                        {{-- Kanan --}}
                        <div class="col">
                            <div class="card mx-auto" style="width: 18rem;">
                                <img src="/image/product/product3.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Solusi untuk semua orang (Kabayan)</h5>
                                    <p class="card-text">Sebuah solusi layanan bagi seluruh masyarakat Indonesia yang ingin memiliki usaha peternakan ayam namun belum memiliki modal usaha.</p>
                                    <a href="{{ url('produk2') }}" class="stretched-link"></a>
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
