<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @section('title')
  Fowlt | Jual Ternak
  @endsection
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body id="body">

  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row">
            {{-- gambar --}}
          <div class="col">
            <div class="card-body">

              <div class="brand-wrapper">
                <a href="/">
                    <img src="/image/fowlt-logo.png" alt="logo" class="logo">
                </a>
              </div>

              <p class="login-card-description">Masukan Detail Ternak Anda</p>
              {{-- form --}}

              <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">

                @csrf
                <div class="container text-start">
                  <div class="row align-items-start">
                    <div class="col">
                      {{-- kodingan disini --}}
                      {{-- Nama Lengkap --}}
                      <div class="form-group">
                        <label for="email" class="form-label">Nama Barang</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Ayam Broiler">
                      </div>
                      {{-- Nomor hp--}}
                      <div class="form-group">
                          <label for="nohp" class="form-label">Harga</label>
                          <input type="text" name="harga" id="harga" class="form-control" placeholder="Rpxx.xxx">
                      </div>
                      {{-- username --}}
                      <div class="form-group">
                        <label for="uname" class="form-label">Nama Anda</label>
                        <input type="text" name="farmer" id="famer" class="form-control" placeholder="Farmers Bojongsoang">
                    </div>
                    </div>
                    <div class="col">
                      {{-- kodingan disini --}}
                      {{-- Lokasi--}}
                      <label for="lokasi">Lokasi Jualan :<select class="form-select" aria-label="Default select example" id="lokasi" name="lokasi">
                          <option selected>Pilih Lokasi</option>
                          <option value="Bandung">Bandung</option>
                          <option value="Yogyakarta">Yogyakarta</option>
                          <option value="Bogor">Bogor</option>
                        </select></label>

                      {{-- email --}}
                        <div class="form-group">
                          <label for="gambar" class="form-label">Gambar</label>
                          <input type="file" name="gambar" id="gambar" class="form-control" value="">
                        </div>
                    </div>
                  </div>
                </div>
                {{-- Password --}}
                <div class="form-group" id='areateks'>
                  <label for="password" class="form-label">Deskripsi</label>
                  <textarea type="textarea" name="deskripsi" id="deskripsi" class="form-control" rows="0"></textarea>
                </div>

                <input name="register" id="register" class="btn btn-block login-btn mb-4" type="submit" value="Daftar">
              </form>

                {{-- Forgot pass --}}

                {{--  --}}
                {{-- <p class="login-card-footer-text">Don't have an account? <a href="{{ url('register') }}" class="text-reset">Register here</a></p> --}}
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
