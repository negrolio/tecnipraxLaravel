<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function showProduct($id){

      $producto = Product::find($id);

      return view('containerPages/products/product')
                ->with('product',$producto);

    }
}
