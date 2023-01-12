<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="/css/footer.css">

 </head>

  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


    <div class="site-footer">
        <div class="inner first">
          <div class="container">
            <div class="row mx-auto">
              <div class="col-md-8 col-lg-4 mx-auto">
                <div class="widget">
                  <h3 class="heading">About Tour</h3>
                  <p>Tumbuh Bersama dan menciptakan sektor peternakan yang maju untuk Indonesia, dari kita untuk kita.</p>
                </div>
                <div class="widget">
                  <ul class="list-unstyled social">
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-lg-2 pl-lg-5">
                <div class="widget">
                  <h3 class="heading">Pages</h3>
                  <ul class="links list-unstyled">
                    <li><a href="{{ url('artikel') }}">Artikel</a></li>
                    <li><a href="{{ url('aboutus') }}">Tentang Kami </a></li>
                  </ul>
                </div>
              </div>

              <div class="col-md-6 col-lg-4">
                <div class="widget">
                  <h3 class="heading">Contact</h3>
                  <ul class="list-unstyled quick-info links">
                    <li class="email"><a href="#">fowlt@example.com</a></li>
                    <li class="phone"><a href="#">+62283745362712</a></li>
                    <li class="address"><a href="https://goo.gl/maps/TUgVAmSs1KN5eoD36">Jl. Tirtawangi Raya No.10, Cipagalo, Kec. Bojongsoang, Kabupaten Bandung, Jawa Barat 40287</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>



        <div class="inner dark">
          <div class="container">
            <div class="row text-center">
              <div class="col-md-8 mb-3 mb-md-0 mx-auto ">
                <p>&mdash; Designed with love by <a href="/" class="link-highlight">Kelompok 1</a> &mdash;
                </p>
              </div>

            </div>
          </div>
        </div>
      </div>
      {{-- @yield('footer-web') --}}

</body>

</html>
