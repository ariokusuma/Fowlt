<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @section('title')
  Fowlt | Login
  @endsection
  {{-- <title>Login</title> --}}
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/login.css">
</head>

<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
            {{-- gambar --}}
          <div class="col-md-5">
            <img src="/image/auth/loginn.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
                
              <div class="brand-wrapper">
                <a href="/">
                    <img src="/image/auth/telyu.png" alt="logo" class="logo">
                </a>
              </div>

              <p class="login-card-description">Masuk ke akun Anda</p>
              {{-- form --}}

              <form action="{{ route('login.action') }}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                  </div>
                  <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Login">
                </form>

                {{-- Forgot pass --}}

                {{--  --}}
                {{-- <p class="login-card-footer-text">Don't have an account? <a href="{{ url('register') }}" class="text-reset">Register here</a></p> --}}
                <p class="login-card-footer-text">Belum Punya Akun? <strong><a href="{{ url('register') }}" class="text-reset text-heavy">Daftar Sekarang</a></strong></p>
                <nav class="login-card-footer-nav">
                  <a>©Fowlt Indonesia</a>
                </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
