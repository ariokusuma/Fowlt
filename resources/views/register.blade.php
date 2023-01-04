
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fowlt Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <link rel="stylesheet" href="/resources/app.css">
    <style>
        body {
            background-color: #1a374d;
        }
    </style>
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
                <div class="text-center">

                    {{-- <h4 class="text-center" href="/">Fowlt.</h4> --}}
                    <a class="navbar-brand text-center fs-3" href="/">Fowlt</a>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="text-">

                    <h4 class="text-center">Register</h4>
                    <br>
                </div>

                <form action="" method="POST"></form>
                    @csrf
                    {{-- Email Address --}}
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="example@mail.com">
                    <br>
                    {{-- Password --}}
                    <label for="tanggal_beli" class="form-label">Password</label>
                    <input type="password" class="form-control" name ="password" id="password" placeholder="Use Strong Password">
                    <br>

                    {{-- Password --}}
                    <label for="tanggal_beli" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name ="password" id="password" placeholder="Use Strong Password">

                    {{-- Remember Me --}}
                    <br>
                    <div>
                        <input class="form-check-input" type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember me</label>

                    </div>

                    {{-- Submit --}}
                    <br>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-warning" role="button" value="submit" name="submit">Daftar</button>
                    </div>
                </form>

                <br>
                <p class="text-center">Sudah Punya Akun ?</p>

                <div class="text-center">
                    <a href="{{ url('login') }}"> Masuk</a>
                </div>

            </div>

            <!-- Kanan -->
            <div class="col">
                <br>
                <br>
                <br>
              <img src="/image/auth/login-img.jpg" class="rounded mx-auto d-block" alt="logo-ead" width="Automatic" height="720" >


            </div>
          </div>
        </div>
      </div>
    </div>

    </body>
</html>
