<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">

 </head>

  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    {{-- Navbar --}}

    <nav class="navbar navbar-expand-lg" style="background-color: #1a374d">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">
            <img src="/image/Ecosystem.png" alt="Bootstrap" width="30" height="24">
          </a>

          <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
        {{-- Navbar --}}
            <div class="navbar-nav">
                <a class="nav-link text-white" href="{{ url('/') }}">Home</a>
              <a class="nav-link text-white" href="{{ url('aboutus') }}">About Us</a>
              {{-- <a class="nav-link active " aria-current="page" href="#">About Us</a> --}}
              <a class="nav-link text-white" href="#">Products</a>
              <a class="nav-link text-white" href="#">Contact Us</a>
            </div>

        </div>
        {{-- Login Button --}}
        <div class="justify-content-center" id="navbarNavAltMarkup">
            <a class="nav-link active justify-content-end text-white" href="{{ route('login') }}">Login</a>
        </div>

        </div>
      </nav>
      @yield('header')

</body>

</html>
