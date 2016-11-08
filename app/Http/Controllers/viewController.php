<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Product;

class viewController extends Controller
{
    public function showHome(){
      return view('/containerPages/home');
    }
    public function showNosotros(){
      return view('containerPages/nosotros');
    }
    // public function showProductMoviRehab(){
    //
    //   $productos = Product::all();
    //
    //   return view('containerPages/products/movilidadRehabilitacion')
    //             ->with('products',$productos);
    // }
}
