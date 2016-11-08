<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductContainerController extends Controller
{
    public function showProductMoviRehab(){

      $title = 'Movilidad y Rehabilitación';
      $productos = Product::all();

      return view('containerPages/products/catalogContainer')
                ->with('products',$productos)
                ->with('title',$title);
    }

    public function showProductOrtoProt(){

      $title = 'Ortopedia y Prótesis';
      $productos = Product::all();

      return view('containerPages/products/catalogContainer')
                ->with('products',$productos)
                ->with('title',$title);
    }

    public function showProductCiruImpla(){
      $title = 'Cirugía e Implantes';
      $productos = Product::all();

      return view('containerPages/products/catalogContainer')
                ->with('products',$productos)
                ->with('title',$title);
    }
}
