@extends('header')

@section('header')

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
    <link href="{{ asset('css/home.css')}}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&family=Rubik:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&family=Rubik:wght@300&display=swap" rel="stylesheet">
</head>
<body>



    <div class="hero hero-inner "  style="background-color: #1a374d">
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


    <div class="container text-center">
        <div class="row">
          <div class="col">
            Column
          </div>
          <div class="col">
            Column
          </div>
          <div class="col">
            Column
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

                <p class="post-category">Teknologi</p>

                <h2 class="title">
                  <a href="blog-details.html">Artikel 1</a>
                </h2>

                <p class="post-category">Lorem ipsum dolor sit amet consectetur xixi <strong><a class="post-category text-heavy" href="#">Read More</a></strong></p>

                <div class="d-flex align-items-center">
                  <img src="/image/auth/loginn.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                  <div class="post-meta">
                    <p class="post-author-list">Maria Doe</p>
                    <p class="post-date">
                      <time datetime="2022-01-01">Jan 1, 2022</time>
                    </p>
                  </div>
                </div>

              </article>
            </div><!-- End post list item -->

            <div class="col-xl-4 col-md-6">
              <article>

                <div class="post-img">
                  <img src="/image/auth/loginn.jpg" alt="" class="img-fluid">
                </div>

                <p class="post-category">Sports</p>

                <h2 class="title">
                  <a href="blog-details.html">Artikel 2</a>
                </h2>

                <div class="d-flex align-items-center">
                  <img src="assets/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                  <div class="post-meta">
                    <p class="post-author-list">Allisa Mayer</p>
                    <p class="post-date">
                      <time datetime="2022-01-01">Jun 5, 2022</time>
                    </p>
                  </div>
                </div>

              </article>
            </div><!-- End post list item -->

            <div class="col-xl-4 col-md-6">
              <article>

                <div class="post-img">
                  <img src="/image/auth/loginn.jpg" alt="" class="img-fluid">
                </div>

                <p class="post-category">Entertainment</p>

                <h2 class="title">
                  <a href="blog-details.html">Artikel 3</a>
                </h2>

                <div class="d-flex align-items-center">
                  <img src="assets/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                  <div class="post-meta">
                    <p class="post-author-list">Mark Dower</p>
                    <p class="post-date">
                      <time datetime="2022-01-01">Jun 22, 2022</time>
                    </p>
                  </div>
                </div>

              </article>
            </div><!-- End post list item -->

            <div class="col-xl-4 col-md-6">
              <article>

                <div class="post-img">
                  <img src="/image/auth/loginn.jpg" alt="" class="img-fluid">
                </div>

                <p class="post-category">Sports</p>

                <h2 class="title">
                  <a href="blog-details.html">Artikel 4</a>
                </h2>

                <div class="d-flex align-items-center">
                  <img src="assets/img/blog/blog-author-4.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                  <div class="post-meta">
                    <p class="post-author-list">Lisa Neymar</p>
                    <p class="post-date">
                      <time datetime="2022-01-01">Jun 30, 2022</time>
                    </p>
                  </div>
                </div>

              </article>
            </div><!-- End post list item -->
            <div class="col-xl-4 col-md-6">
              <article>

                <div class="post-img">
                  <img src="/image/auth/loginn.jpg" alt="" class="img-fluid">
                </div>

                <p class="post-category">Sports</p>

                <h2 class="title">
                  <a href="blog-details.html">Artikel 5</a>
                </h2>

                <div class="d-flex align-items-center">
                  <img src="assets/img/blog/blog-author-4.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                  <div class="post-meta">
                    <p class="post-author-list">Lisa Neymar</p>
                    <p class="post-date">
                      <time datetime="2022-01-01">Jun 30, 2022</time>
                    </p>
                  </div>
                </div>

              </article>
            </div><!-- End post list item -->
            <div class="col-xl-4 col-md-6">
              <article>

                <div class="post-img">
                  <img src="/image/auth/loginn.jpg" alt="" class="img-fluid">
                </div>

                <p class="post-category">Sports</p>

                <h2 class="title">
                  <a href="blog-details.html">Artikel 6</a>
                </h2>

                <div class="d-flex align-items-center">
                  <img src="assets/img/blog/blog-author-4.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                  <div class="post-meta">
                    <p class="post-author-list">Lisa Neymar</p>
                    <p class="post-date">
                      <time datetime="2022-01-01">Jun 30, 2022</time>
                    </p>
                  </div>
                </div>

              </article>
            </div><!-- End post list item -->


{{-- Footer --}}
  <div class="site-footer">
    <div class="inner first">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="widget">
              <h3 class="heading">About Tour</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
            <div class="widget">
              <ul class="list-unstyled social">
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                <li><a href="#"><span class="icon-dribbble"></span></a></li>
                <li><a href="#"><span class="icon-pinterest"></span></a></li>
                <li><a href="#"><span class="icon-apple"></span></a></li>
                <li><a href="#"><span class="icon-google"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-2 pl-lg-5">
            <div class="widget">
              <h3 class="heading">Pages</h3>
              <ul class="links list-unstyled">
                <li><a href="#">Blog</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-2">
            <div class="widget">
              <h3 class="heading">Resources</h3>
              <ul class="links list-unstyled">
                <li><a href="#">Blog</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="widget">
              <h3 class="heading">Contact</h3>
              <ul class="list-unstyled quick-info links">
                <li class="email"><a href="#">mail@example.com</a></li>
                <li class="phone"><a href="#">+1 222 212 3819</a></li>
                <li class="address"><a href="#">43 Raymouth Rd. Baltemoer, London 3910</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>




  <div class="inner dark">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-8 mb-3 mb-md-0 mx-auto">
          <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="" class="link-highlight">Kelompok 10</a>
          </p>
        </div>

      </div>
    </div>
  </div>
</div>



{{--
<section style="background-color: rgb(245, 245, 245);">
    <br>
    <br>
    <center><h1>About Us</h1></center>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row align-item-start">
            <div class="col">
                <h4>Fowlt merupakan websiter bla bla bla</h4>
              </div>
        </div>
    </div>
    <br>


</section>

<section style="background-color: rgb(245, 245, 245); text-center">
    <h4>Design with love in Indonesia</h4>
    <h4>by Group 10</h4>
 --}}
    {{-- <a type="button" class="btn btn-dark text-center" href="{{ url('theteams') }}">Meet out Team</a> --}}

@endsection


</body>
</html>
