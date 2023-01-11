<html>
  <head>
  	<title>advanced web tuts</title>
  </head>
  <body>
  	@include('header')

  		@yield('content')

  	@include('footer')

  	{{-- @stack('js') --}}
  </body>
</html>
