<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Img_product;

class ProductController extends Controller
{
    public function showProduct($id){

      $producto = Product::find($id);
      $imgs     = Product::find($id)->images;
      $features = Product::find($id)->features;

      return view('containerPages/products/product')
                ->with('product',$producto)
                ->with('images',$imgs)
                ->with('features',$features);


    }
}
