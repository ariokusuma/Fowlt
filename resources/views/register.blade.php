<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Template</title>
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
                <img src="/image/auth/telyu.png" alt="logo" class="logo">
              </div>

              <p class="login-card-description">Daftar Akun Baru</p>
              {{-- form --}}

              <form action="{{ route('register.action') }}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="email" class="sr-only">Nama Lengkap</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nama Lengkap Anda">
                  </div>

                {{-- email --}}
                  <div class="form-group">
                    <label for="email" class="sr-only">Emaol</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                  </div>
                  {{-- Password --}}
                  <div class="form-group">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                  </div>
                  {{-- Confirm Pass --}}
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Confirm Password</label>
                    <input type="password" name="konfSandi" id="konfSandi" class="form-control" placeholder="***********">
                  </div>
                  <input name="register" id="register" class="btn btn-block login-btn mb-4" type="submit" value="Daftar">
                </form>

                {{-- Forgot pass --}}

                {{--  --}}
                <p class="login-card-footer-text">Sudah Punya Akun? <strong><a href="#!" class="text-reset text-heavy">Masuk Sekarang</a></strong></p>
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
