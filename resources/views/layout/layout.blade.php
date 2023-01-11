<html>
  <head>

      <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      {{-- <link rel="stylesheet" href="/css/home.css"> --}}
      <link href="{{ asset('css/home.css')}}" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&family=Rubik:wght@300&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&family=Rubik:wght@300&display=swap" rel="stylesheet">

</head>
  <body>
    <header>
        @include('layout.header')
    </header>

    <div id="main" class="row">
        @yield('content')
    </div>

    <footer>
        @include('layout.footer')
    </footer>

  	{{-- @stack('js') --}}
  </body>
</html>
