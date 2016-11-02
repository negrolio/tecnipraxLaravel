<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    public function showHome(){
      return view('/containerPages/home');
    }
    public function showNosotros(){
      return view('containerPages/nosotros');
    }
    public function showProductMoviRehab(){
      return view('containerPages/products/movilidadRehabilitacion');
    }
    public function showProductOrtoProt(){
      return view('containerPages/products/ortopediaProtesis');
    }
    public function showProductCiruImpla(){
      return view('containerPages/products/cirugiaImplantes');
    }
}
