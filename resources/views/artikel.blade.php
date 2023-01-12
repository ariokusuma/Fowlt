@extends('layout.layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @section('title')
        Fowlt | Artikel
        @endsection

    {{-- <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styleArtikel.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&family=Rubik:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&family=Rubik:wght@300&display=swap" rel="stylesheet">
</head>
<body>



    <div class="hero hero-inner top"  style="background-color: #1a374d">
        <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mx-auto text-center pt-5">
            <div class="intro-wrap">
                <h1 class="mb-0 text-white">Artikel</h1>
                <p class="text-white">Artikel Fowlt</p>
                <br>
            </div>
            </div>
        </div>
        </div>
    </div>


    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

          <div class="row gy-4 posts-list">

            <div class="col-xl-4 col-md-6">
              <article>

                <div class="post-img">
                  <img src="/image/auth/loginn.jpg" alt="" class="img-fluid">
                </div>

                <p class="post-category">Tips</p>

                <h2 class="title">
                  <a href="{{ url('artikel1') }}">Tata Cara Beternak Dengan Baik</a>
                </h2>

                <p class="post-category">Ayam petelur adalah ayam-ayam betina dewasa yang dipelihara secara khusus untuk diambil telurnya.  <strong><a class="post-category text-heavy" href="#">Read More</a></strong></p>

                <div class="d-flex align-items-center">
                  <img src="/image/auth/loginn.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                  <div class="post-meta">
                    <p class="post-author-list">Fowlt</p>
                    <p class="post-date">
                      <time datetime="2022-01-01">Jan 1, 2023</time>
                    </p>
                  </div>
                </div>

              </article>
            </div><!-- End post list item -->
        </section>




        <br>
@endsection


</body>
</html>
