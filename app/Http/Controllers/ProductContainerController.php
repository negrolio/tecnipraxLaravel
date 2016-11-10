<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductContainerController extends Controller
{
    public function showProductMoviRehab(){

      $productos = Product::where('categoria', '=', 'Movilidad y Rehabilitación')->get();

      return view('containerPages/products/catalogContainer')
                ->with('products',$productos);
    }

    public function showProductOrtoProt(){

      $productos = Product::where('categoria', '=', 'Ortopedia y Prótesis')->get();

      return view('containerPages/products/catalogContainer')
                ->with('products',$productos);
    }

    public function showProductCiruImpla(){
      $productos = Product::where('categoria', '=', 'Cirugía e Implantes')->get();

      return view('containerPages/products/catalogContainer')
                ->with('products',$productos);
    }
}
