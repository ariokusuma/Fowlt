
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | MODUL5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

        <div class="container text-start justify-content-center">
          <div class="row">
            @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
            <div class="col">
              <br>
              <br>
              <br>
              <br>
            <img src="/images/86.jpeg" class="rounded" alt="logo-ead" width="Automatic" height="420" >
            </div>
            <!-- Kanan -->
            <div class="col">
            <br>
            <br>
            <br>
            <br>
            <br>

            <div class="">
                <h2 class="text-start">Login</h2>

            </div>

            {{-- <form action={{ route('login.action') }}  method="POST"> --}}
            <form action=""  method="POST">
              @csrf
                <!-- Nama Mobil -->
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email"  placeholder="example@mail.com">
                </div>

                <!-- Paswprd -->
                <div class="mb-3">
                    <label for="tanggal_beli" class="form-label">Password</label>
                    <input type="password" class="form-control" name ="password" id="password" placeholder="Use Strong Password">
                </div>

                <!--Remember Me-->
                <div>
                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember me</label>
                </div>

                <!-- Submit -->
                <br>
                  <button type="submit" class="btn btn-primary" role="button" value="submit" name="submit">Masuk</button>
                </form>
                <div>
                  <br>
                  <p>Belum Punya Akun ?</p>
                  <a href=""> Daftar</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    </body>
</html>
