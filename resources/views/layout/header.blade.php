<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

 </head>

  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    {{-- Navbar --}}
@auth
    <!-- <nav class="navbar navbar-expand-lg" style="background-color:  #1a374d">
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
                <a class="nav-link text-white" href="{{ url('produkfowlt') }}">Products</a>
                <li class="has-children">
                    <a href="#">Produk</a>
                    <ul class="dropdown">
                        <li><a href="elements.html">Elements</a></li>
                        <li><a href="#">Menu One</a></li>
                        <li class="has-children">
                            <a href="#">Menu Two</a>
                            <ul class="dropdown">
                                <li><a href="#">Sub Menu One</a></li>
                                <li><a href="#">Sub Menu Two</a></li>
                                <li><a href="#">Sub Menu Three</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Menu Three</a></li>
                    </ul>
                </li>
                <a class="nav-link text-white" href="#">Contact Us</a>
                <a class="nav-link text-white" href="#">Marketplace</a>

            </div>
        </div> -->

        <nav class="navbar navbar-expand-lg" id="navbar" style="background-color: #1a374d">
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
              <a class="nav-link text-white" href="{{ url('aboutus') }}">TentangKami</a>

{{-- ============================================ --}}
                <li class="dropdown"><a href="#"><span>Produk</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                    <li><a href="{{ url('produk1') }}">Solusi Jual/Beli</a></li>
                    <li><a href="{{ url('produk2') }}">Solusi Teknologi ternak</a></li>
                    <li><a href="{{ url('produk3') }}">Solusi untuk semua orang</a></li>
                    </ul>
                </li>
{{-- ============================================ --}}
              {{-- <a class="nav-link text-white" href="#">HubungiKami</a> --}}
              <a class="nav-link text-white" href="#">Belanja</a>
              <a class="nav-link text-white" href="{{ url('artikel') }}">Artikel</a>
            </div>

        </div>

        {{-- Login Button --}}
        <!-- <div class="justify-content-center" id="navbarNavAltMarkup">
            <a class=" btn btn-light" href="{{ route('logout') }}">Log Out</a>
        </div> -->
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profile
          </button>
          <ul class="dropdown-menu me-5">
            <li><a class="dropdown-item " href="{{ url('profile') }}">Profile</a></li>
            <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
          </ul>
        </div>
        </div>
      </nav>
      @endauth

      @guest
      <nav class="navbar navbar-expand-lg" id="navbar" style="background-color: #1a374d">
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
              <a class="nav-link text-white" href="{{ url('aboutus') }}">TentangKami</a>

{{-- ============================================ --}}
                <li class="dropdown"><a href="#"><span>Produk</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                    <li><a href="{{ url('produk1') }}">Solusi Jual/Beli</a></li>
                    <li><a href="{{ url('produk2') }}">Solusi Teknologi ternak</a></li>
                    <li><a href="{{ url('produk3') }}">Solusi untuk semua orang</a></li>
                    </ul>
                </li>
{{-- ============================================ --}}
              {{-- <a class="nav-link text-white" href="#">HubungiKami</a> --}}
              <a class="nav-link text-white" href="{{ url('belanja') }}">Belanja</a>
              <a class="nav-link text-white" href="{{ url('artikel') }}">Artikel</a>
            </div>

        </div>
        {{-- Login Button --}}
        <div class="justify-content-center" id="navbarNavAltMarkup">
            <a class="nav-link active justify-content-end text-white" href="{{ route('login') }}">Login</a>
        </div>

        </div>
      </nav>
      @endguest
      @yield('header')

</body>

</html>
