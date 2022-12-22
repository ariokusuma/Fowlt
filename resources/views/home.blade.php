@extends('header')
@section('header')

{{-- <link href="" {{ asset('css/style.css') }}rel="stylesheet"> --}}

<section id="aboutUS" style="background-color: rgb(255, 213, 153)">
    @auth

    <div class="container text-center">
        <div class="row align-items-center">
            <!-- Kiri -->
            <div class="col">
                <h1 class="text-start">Membangun dan Mengembangkan peternakan berbasis IoT<br></h1>
                <!-- <p>Solusi penyewaan mobil Anda</p> -->
                {{-- <p class="text-start">Membangun dan Mengembangkan peternakan berbasis IoT</p> --}}
                <!-- Logo & Nama -->
                <br>
                <br>
                <br>
                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <img src="/image/chiken-landing.png" alt="logo-ead" width="Automatic" height="29">
                        </div>
                        <div class="col">
                            <p>Ario_1202204123</p>
                        </div>`
                    </div>
                </div>
                <br>
            </div>
            <!-- Kanan -->
            <div class="col">
                <img src="/image/chiken-landing.png" class="rounded" alt="logo-ead" width="Automatic" height="390">
            </div>
        </div>
    </div>
    @endauth

    @guest
    <div class="container text-center">
        <div class="row align-items-center">
            <!-- Kiri -->
            <div class="col">
                <h1 class="text-start">Selamat Datang Di <br> Show Room Ario</h1>
                <p class="text-start">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam tempore ea amet nobis, deleniti soluta laborum quo a et aperiam nulla!</p>

                <!-- Logo & Nama -->
                <br>
                <br>
                <br>
                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <img src="/images/logo-ead.png" alt="logo-ead" width="Automatic" height="29">

                        </div>
                        <div class="col">
                            <p>Ario_1202204123</p>
                        </div>
                    </div>
                </div>

                <br>
            </div>
            <!-- Kanan -->
            <div class="col">
                <img src="/images/car3.jpg" class="rounded" alt="logo-ead" width="Automatic" height="390">
            </div>
        </div>
    </div>
    @endguest


</section>


@endsection

</body>
</html>
{{-- <h1>konten</h1> --}}

{{-- <div class-"login screen">
    <div class="overlan-aroun">
    <div class=" fowlt">Fowlt</div>
    <h1 class="title"›Login</h1>
        <div class="email mada-medium-black-20px">Email</div>
        <div class-"rectangle-2"></div>
        <div class="password mada-medium-black-20px">Password</div>
    <div class="rectangle-2"></div> <div class="overlap-group1">
    <div class= "login-1"›LOGIN</div> </div>
    </div> --}}
