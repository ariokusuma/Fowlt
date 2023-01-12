<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @section('title')
  Fowlt | Register
  @endsection
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
</head>
<body id="body">
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
                    <img src="/image/fowlt-logo.png" alt="logo" class="logo">
                </a>
              </div>

              <p class="login-card-description">Daftar Akun Baru</p>
              {{-- form --}}

              <form action="{{ route('register.action') }}" method="POST">

                  @csrf
                  <div class="container text-start">
                    <div class="row align-items-start">
                      <div class="col">
                        {{-- kodingan disini --}}
                        {{-- Nama Lengkap --}}
                        <div class="form-group">
                          <label for="email" class="form-label">Nama Lengkap</label>
                          <input type="text" name="name" id="name" class="form-control" placeholder="Nama Lengkap Anda">
                        </div>
                        {{-- Nomor hp--}}
                        <div class="form-group">
                            <label for="nohp" class="form-label">Nomor HP</label>
                            <input type="text" name="nohp" id="nohp" class="form-control" placeholder="Nomor HP Anda">
                        </div>
                        {{-- username --}}
                        <div class="form-group">
                          <label for="uname" class="form-label">Username</label>
                          <input type="text" name="uname" id="uname" class="form-control" placeholder="Username Anda">
                      </div>
                      </div>
                      <div class="col">
                        {{-- kodingan disini --}}
                        {{-- Lokasi--}}
                        <label for="lokasi">Lokasi :<select id="lokasik"  class="form-select" aria-label="Default select example" id="lokasi" name="lokasi">
                            <option selected>Pilih Lokasi</option>
                            <option value="Bandung">Bandung</option>
                            <option value="Yogyakarta">Yogyakarta</option>
                            <option value="Bogor">Bogor</option>
                          </select></label>

                        {{-- email --}}
                          <div class="form-group" id="emailk">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                          </div>
                      </div>
                    </div>
                  </div>
                  {{-- Password --}}
                  <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                  </div>
                  {{-- Confirm Pass --}}
                  <div class="form-group mb-4">
                    <label for="password" class="form-label">Confirm Password</label>
                    <input type="password" name="konfSandi" id="konfSandi" class="form-control" placeholder="***********">
                  </div>
                  <input name="register" id="register" class="btn btn-block login-btn mb-4" type="submit" value="Daftar">
                </form>

                {{-- Forgot pass --}}

                {{--  --}}
                <p class="login-card-footer-text">Sudah Punya Akun? <strong><a href="{{ url('login') }}" class="text-reset text-heavy">Masuk Sekarang</a></strong></p>
                <nav class="login-card-footer-nav" id="footer">
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
