@extends('layout.layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @section('title')
        Fowlt | Profile
        @endsection

    {{-- <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="/css/home.css"> --}}
    <link href="{{ asset('css/profile.css')}}" rel="stylesheet">
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&display=swap" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&family=Rubik:wght@300&display=swap" rel="stylesheet">
</head>
<body>

<div class="hero hero-inner "  style="background-color: #1a374d">
    <div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6 mx-auto text-center pt-5">
        <div class="intro-wrap">
            <h1 class="mb-0 text-white">Profil</h1>
            <p class="text-white">Profil Akun Fowlt</p>
            <br>
        </div>
        </div>
    </div>
    </div>
</div>

<div class="container rounded mt-5 mb-5" style="background-color: rgba(0, 0, 0, 0.1)">
    <form action="{{ route('profile.action') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            
            <div class="d-flex flex-column align-items-center md-8">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Username</label>
                        <input type="text" class="form-control kolomNormal" placeholder="" value="{{ Auth::user()->uname }}" readonly></div>

                        <div class="col-md-12"><label class="labels">Email</label>
                        <input type="text" class="form-control kolomNormal" placeholder="" value="{{ Auth::user()->email }}" readonly></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Nama Lengkap</label>
                        <input type="text" class="form-control kolomNormal" placeholder="" value="{{ Auth::user()->name }}" readonly></div>
                        
                        <div class="col-md-12"><label class="labels">No. HP</label>
                        <input type="text" class="form-control kolomNormal" placeholder="" value="{{ Auth::user()->nohp }}" readonly></div>
                        
                        <div class="col-md-12"><label class="labels">Lokasi</label>
                        <input type="text" class="form-control kolomNormal" placeholder="Lokasi" value="{{ Auth::user()->lokasi }}" readonly></div>

                    <div class="mt-5 text-center">
                        <a class="btn btn-primary profile-button" type="button" href="{{ url('profile-edit') }}">Edit Profile</a></div>
                </div>
            </div>
            
        </div>
    </div>
    </div>
    </form>
</div>



@endsection


</body>
</html>
