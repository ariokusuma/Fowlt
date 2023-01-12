<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\User;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function tampil()
    {
        return view('belanja.belanja-tambah');
    }

    public function store(Request $request)
    {   
         
        $imgName = $request->gambar->getClientOriginalName() . '-' . time() 
                    . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('image'), $imgName);
     
        Products::create([
            'name' => $request -> name,
            'harga' => $request ->harga,
            'farmer' => $request -> farmer,
            'lokasi' => $request -> lokasi,
            'deskripsi' => $request -> deskripsi,
            'gambar' => $imgName,
        ]);

        return redirect('jualternak');
    }
}