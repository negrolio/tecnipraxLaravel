<?php

use Illuminate\Database\Seeder;
use App\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $productCount = 18;
        $productName = 'Producto';
        $productDescription = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.';
        $productImgUrl = 'img/productos/producto.jpg';
        $categoriaMov = 'Movilidad y Rehabilitación';
        $categoriaOrt = 'Ortopedia y Prótesis';
        $categoriaCir = 'Cirugía e Implantes';

        for ($i=1; $i < $productCount; $i++) {
          $newProduct = new Product;
          $newProduct->name = $productName.$i;
          $newProduct->description = $productDescription;
          $newProduct->img_url = $productImgUrl;
          if ($i <= 6) {
            $newProduct->category = $categoriaMov;
          }
          if ($i > 6 && $i <= 12) {
            $newProduct->category = $categoriaOrt;
          }
          if ($i > 12) {
            $newProduct->category = $categoriaCir;
          }
          $newProduct->save();

        }
    }
}
