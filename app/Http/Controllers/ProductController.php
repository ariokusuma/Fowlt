<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\User;
use DB;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products=Products::orderBy('id','desc')->get();
        return view('belanja.belanja', compact('products'));
    }

    public function create()
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

    public function ambil(){
        $ambil = DB::select('select * from products');
        return view ('belanja.belanja')->with('ambil',$ambil);
    }

    public function detail(){
        $products = Products::all();
        return view('belanja.belanja-detail', compact('products'));
    }
    
}
