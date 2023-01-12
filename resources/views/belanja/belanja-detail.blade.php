@extends('layout.layout')

@section('content')


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @section('title')
        Fowlt | Belanja
        @endsection

    {{-- <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="/css/home.css"> --}}
    <link href="{{ asset('css/belanja.css')}}" rel="stylesheet">
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&display=swap" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&family=Rubik:wght@300&display=swap" rel="stylesheet">
</head>
<body>

  <!--================Single Product Area =================-->
  <div class="product_image_area">
    <div class="container">
    @foreach ($products as $data)
        <div class="row s_product_inner">
            <div class="col-lg-4">
                <div class="owl-carousel owl-theme s_Product_carousel">
                    <div class="single-prd-item">
                        <img class="img-fluid ProductImage" src="{{asset('image/produkayam.jpg')}}" alt="" height="40px" width="auto">
                    </div>
                </div>
            </div>
          
            <div class="col-lg-5 offset-lg-1">
                <div class="s_product_text">
                    <h3>{{$data->name}}</h3>
                    <h2>{{$data->harga}}</h2>
                    <ul class="list">
                        <li><a class="active"><span>Penjual</span> : {{$data->farmer}}</a></li>
                        <li><a ><span>Lokasi</span> : {{$data->lokasi}}</a></li>
                    </ul>
                    <p>{{$data->deskripsi}} </p>
                        <a class="button primary-btn" href="http://wa.me/62895609827665">Hubungi Penjual</a>
                    </div>
                    </div>
                    

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!--================End Single Product Area =================-->


</section>



@endsection

</body>
</html>
