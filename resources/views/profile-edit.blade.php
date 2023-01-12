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
            {{-- <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
            </div> --}}
            <div class="d-flex flex-column align-items-center md-8">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Username</label>
                        <input type="text" class="form-control" name = "uname" placeholder="" value="{{ Auth::user()->uname }}"></div>

                        <div class="col-md-12"><label class="labels">Email</label>
                        <input type="text" class="form-control" name = "email" placeholder="" value="{{ Auth::user()->email }}"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Nama Lengkap</label>
                        <input type="text" class="form-control" name = "name" placeholder="" value="{{ Auth::user()->name }}"></div>
                        
                        <div class="col-md-12"><label class="labels">No. HP</label>
                        <input type="text" class="form-control" name = "nohp" placeholder="" value="{{ Auth::user()->nohp }}"></div>
                        
                        <div class="col-md-12"><label class="labels">Lokasi</label>
                        <select class="form-select" aria-label="Default select example" id="lokasi" name="lokasi">
                            <option selected>{{ Auth::user()->lokasi }}</option>
                            <option value="Bandung">Bandung</option>
                            <option value="Yogyakarta">Yogyakarta</option>
                            <option value="Bogor">Bogor</option>
                          </select>

                    <div class="mt-5 text-center">
                        <input name="profile" id="profile" class="btn btn-primary profile-button" type="submit" value="Save Profile">
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                    <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                    <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
                </div>
            </div> --}}
        </div>
    </div>
    </div>
    </form>
</div>



@endsection


</body>
</html>
