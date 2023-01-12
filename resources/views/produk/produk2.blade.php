@extends('layout.layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @section('title')
        Fowlt | About Us
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
                <br/> <br/> <br/> <br/>
                <h1 class="mb-0 text-white fw-bold">Fowlt Market 2</h1>
                <p class="text-white">Tumbuh Bersama dan menciptakan sektor peternakan yang maju untuk Indonesia, dari Kita untuk Kita.</p>
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


  <div class="Teams-section pt-5" id="ourTeams">
    <div class="container">
      <div class="row justify-content-center mb-5 ">
        <div class="col-md-6 text-center">
          <h2 class="fw-bold section-title mb-3 text-center">Keuntungan membeli produk <br/> di Fowlt Market</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-3 mb-4">
          <div class="team">
            <img src="image/team/ivan2.jpeg" alt="Image" class="img-fluid mb-4 rounded-4">
            <div class="px-3">
              <h3 class="fw-bold mb-0">Ivan Maulana Razzaq</h3>
              <p>Co-Founder &amp; Project Manager</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="team">
            <img src="image/team/hanif.jpeg" alt="Image" class="img-fluid mb-4 rounded-4">
            <div class="px-3">
              <h3 class="fw-bold mb-0">Nasywan Hanif</h3>
              <p>Co-Founder &amp; System Analyst</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 mb-4">
          <div class="team">
            <img src="image/team/ario.jpeg" alt="Image" class="img-fluid mb-4 rounded-4">
            <div class="px-3">
              <h3 class="fw-bold mb-0">Ario Kusuma Purboyo</h3>
              <p>Co-Founder &amp; Front-End Programmer</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>


<!-- 
{{-- TESTIMONIALS --}}

  <div class="Testimonials-section testimonial-section mt-5 pt-5" id="testimonials">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 text-center">
          <h2 class="section-title text-center mb-5">Testimonials</h2>

          <div class="owl-single owl-carousel no-nav">
            <div class="testimonial mx-auto">
              <figure class="img-wrap">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid">
              </figure>
              <h3 class="name">Adam Aderson</h3>
              <blockquote>
                <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
              </blockquote>
            </div>

            <div class="testimonial mx-auto">
              <figure class="img-wrap">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid">
              </figure>
              <h3 class="name">Lukas Devlin</h3>
              <blockquote>
                <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
              </blockquote>
            </div>

            <div class="testimonial mx-auto">
              <figure class="img-wrap">
                <img src="images/person_4.jpg" alt="Image" class="img-fluid">
              </figure>
              <h3 class="name">Kayla Bryant</h3>
              <blockquote>
                <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
              </blockquote>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div> -->

{{-- EXPLORE NOW --}}
  <div class="py-5 cta-section" style="background-color: #1a374d">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-12">
          <h2 class="mb-2 text-white">Jelajahi produk yang menggunakan jasa Fowlt</h2> <br/>
          <p class="mb-0"><a href="{{ url('belanja') }}" class="btn btn-light text-black btn-md font-weight-bold rounded"> Belanja Sekarang </a></p>
        </div>
      </div>
    </div>
  </div>
  @endsection



</body>
</html>


