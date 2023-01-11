@extends('header')

@section('header')


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
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="/css/home.css"> --}}
    <link href="{{ asset('css/home.css')}}" rel="stylesheet">
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&display=swap" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&family=Rubik:wght@300&display=swap" rel="stylesheet">
</head>
<body>

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
                <h1 class="text-start">Selamat Datang Di <br> Fowlt.</h1>
                <p class="text-start">Membangun dan Mengembangkan peternakan berbasis IoT</p>

                <!-- Logo & Nama -->
                <div class="container text-center pt-1">
                    <div class="row"  id="semuaTombol">
                        {{-- kiri --}}
                        <div class="col">
                            <a type="button" class="btn btn-light" href="{{ url('aboutus') }}" id = "detilTombol">Produk Kami</a>
                        </div>
                        <div class="col">
                            <a type="button" class="btn btn-light" href="{{ url('aboutus') }}" id = "detilTombol">Tentang Kami</a>
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
            {{-- <div class="col">
                <img src="/image/chiken-landing.png" class="rounded" alt="logo-ead" width="Automatic" height="390">
            </div> --}}
        </div>
        <br>
        <br>
        <br>
        <br>
    </div>
</section>

    <section id="bagian2" style="background-color: rgb(255, 255, 255)">
        {{-- <div class="container text-center">
            <div class="row align-items-center">
                <!-- Kiri -->
                <div class="col">
                    <br>
                    <br>
                    <br>
                    <h2>Mengembangkan Peternakan Unggas dengan IoT</h2>
                    <h5>All in One System</h5>

                        <!-- Logo & Nama -->
                        <br>
                        <br>
                        <div class="container text-center">
                            <div class="row">
                                {{-- kanan --}}
                                {{-- <div class="col">
                                    <button type="button" class="btn btn-dark">Pelajari Selengkapnya</button>
                                </div>
                            </div>
                        </div>

                        <br>
                    </div>
                    <!-- Kanan -->
                    <div class="col">
                        <br>
                        <br>
                        <img src="/image/Ecosystem.png" class="rounded" alt="logo-ead" width="Automatic" height="390">
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
            </div> --}}

    </section>

    {{-- Section3 --}}
    <section id="ourProducts" style="background-color: rgb(255, 213, 153)">
        <div class="container text-center">
            <div class="row align-items-center">
                <br>
                <br>
                <br>
                <h2>Our Products</h2>

                {{-- Grids --}}
                <div class="container text-center">
                    <div class="row">
                        {{-- Kiri --}}
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Product 1</h5>
                                  <p class="card-text">Products 1 Description</p>
                                </div>
                              </div>
                        </div>
                        {{-- Tengah --}}
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Products 2</h5>
                                  <p class="card-text">Products 2 Description</p>
                                </div>
                              </div>
                        </div>
                        {{-- Kanan --}}
                      <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Products 3</h5>
                              <p class="card-text">Products 3 Description</p>
                              <br>
                            </div>

                          </div>
                          <br>
                          <br>
                          <br>
                      </div>
                    </div>
                  </div>

                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </section>



	<div class="untree_co-section">
		<div class="container">
			<div class="row mb-5 justify-content-center">
				<div class="col-lg-6 text-center">
					<h2 class="section-title text-center mb-3">Our Services</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
				</div>
			</div>
			<div class="row align-items-stretch">
				<div class="col-lg-4 order-lg-1">
					<div class="h-100"><div class="frame h-100"><div class="feature-img-bg h-100" style="background-image: url('images/hero-slider-1.jpg');"></div></div></div>
				</div>

				<div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-1" >

					<div class="feature-1 d-md-flex">
						<div class="align-self-center">
							<span class="flaticon-house display-4 text-primary"></span>
							<h3>Beautiful Condo</h3>
							<p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>
						</div>
					</div>

					<div class="feature-1 ">
						<div class="align-self-center">
							<span class="flaticon-restaurant display-4 text-primary"></span>
							<h3>Restaurants & Cafe</h3>
							<p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>
						</div>
					</div>

				</div>

				<div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-3" >

					<div class="feature-1 d-md-flex">
						<div class="align-self-center">
							<span class="flaticon-mail display-4 text-primary"></span>
							<h3>Easy to Connect</h3>
							<p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>
						</div>
					</div>

					<div class="feature-1 d-md-flex">
						<div class="align-self-center">
							<span class="flaticon-phone-call display-4 text-primary"></span>
							<h3>24/7 Support</h3>
							<p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>


        <section id="ourProducts" style="background-color: rgb(255, 213, 153)">



        </section>
    @endguest


</section>



@endsection

</body>
</html>



{{-- <h1>konten</h1> --}}

{{-- <div class-"login screen">
    <div class="overlan-aroun">
    <div class=" fowlt">Fowlt</div>
    <h1 class="title"›Login</h1>
        <div class="email mada-medium-black-20px">Email</div>
        <div class-"rectangle-2"></div>
        <div class="password mada-medium-black-20px">Password</div>
    <div class="rectangle-2"></div> <div class="overlap-group1">
    <div class= "login-1"›LOGIN</div> </div>
    </div> --}}
