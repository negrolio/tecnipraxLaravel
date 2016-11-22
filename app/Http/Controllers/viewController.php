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
    public function showContacto(){
      return view('containerPages.contacto');
    }
}
