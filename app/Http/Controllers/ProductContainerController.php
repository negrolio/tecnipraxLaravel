<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductContainerController extends Controller
{
    public function showProductMoviRehab(){

      $productos = Product::where('category', '=', 'Movilidad y Rehabilitación')->get();

      return view('containerPages/products/catalogContainer')
                ->with('products',$productos);
    }

    public function showProductOrtoProt(){

      $productos = Product::where('category', '=', 'Ortopedia y Prótesis')->get();

      return view('containerPages/products/catalogContainer')
                ->with('products',$productos);
    }

    public function showProductCiruImpla(){
      $productos = Product::where('category', '=', 'Cirugía e Implantes')->get();

      return view('containerPages/products/catalogContainer')
                ->with('products',$productos);
    }
}
