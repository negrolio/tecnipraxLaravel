<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Img_product;
use App\Feature;

class ProductAllTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $products = [
          [
            'name'        => 'Silla Motorizada bipestadora postural',
            'description' => 'Silla a motor con estructura de acero de alta resistencia y bajo peo. Con motor auxiliar para la bipedestación. Esta silla lleva apoya pies regulables en altura. Topes de rodillas acolchados y rebatibles. Asiento regulable en profundidad. Apoya brazos rebatibles, respaldo plegable y mesa con borde antiderrame extraíble. Se le puede anexar almohadones posturales con control de muslos y tronco. Consta de 2 motores de 24 Volt y 2 baterías de gel de 12 Volt de alto rendimiento extraíbles para su traslado. Ruedas poli aire. Autonomía aproximada de 12 Km.',
            'img_url'     => 'img/productos/1/11.jpg',
            'category'    => 'Movilidad y Rehabilitación',
            'imagesUrl'   => ['img/productos/1/13.jpg','img/productos/1/14.jpg'],
            'features'    => [
              'Comando de manejo.',
              'Respaldo plegable.',
              'Bipestadora con almohadones posturales.',
              'Motor de bipedestación.',
              'Apoya rodilla rebatibles']
          ],
          [
            'name'        => 'Silla Motorizada bipestadora postural',
            'description' => 'Silla a motor con estructura de acero de alta resistencia y bajo peo. Con motor auxiliar para la bipedestación. Esta silla lleva apoya pies regulables en altura. Topes de rodillas acolchados y rebatibles. Asiento regulable en profundidad. Apoya brazos rebatibles, respaldo plegable y mesa con borde antiderrame extraíble. Se le puede anexar almohadones posturales con control de muslos y tronco. Consta de 2 motores de 24 Volt y 2 baterías de gel de 12 Volt de alto rendimiento extraíbles para su traslado. Ruedas poli aire. Autonomía aproximada de 12 Km.',
            'img_url'     => 'img/productos/1/11.jpg',
            'category'    => 'Movilidad y Rehabilitación',
            'imagesUrl'   => ['img/productos/1/13.jpg','img/productos/1/14.jpg'],
            'features'    => [
              'Comando de manejo.',
              'Respaldo plegable.',
              'Bipestadora con almohadones posturales.',
              'Motor de bipedestación.',
              'Apoya rodilla rebatibles']
          ]
        ];

        foreach ($products as $product) {
          $productDB = DB::table('products')->insertGetId(
              ["name"        => $product['name'],
               'description' => $product['description'],
               'img_url'     => $Product['img_url'],
               'category'    => $product['category']]
          );

          foreach ($product['imagesUrl'] as $imgUrl) {
            Img_product::table('img_products')->insert(
                ['img_url'    => $imgUrl,
                 'product_id' => $productDB]
            );
          }

          foreach ($product['features'] as $feature) {
            Feature::table('features')->insert(
                ['content'    => $feature,
                 'product_id' => $productDB]
            );
          }
          //
          // $productDB = new Product;
          // $productDB->name        = $product['name'];
          // $productDB->description = $product['description'];
          // $productDB->img_url     = $Product['img_url'];
          // $productDB->category    = $product['category'];
          // $productDB->save();
          //
          // foreach ($product['imagesUrl'] as $imgUrl) {
          //   $imgProduct = new Img_product;
          //       $imgProduct->img_url    = $imgUrl;
          //       $imgProduct->product_id = $productDB->id;
          //   $imgProduct->save();
          // }
          //
          // foreach ($product['features'] as $feature) {
          //   $feature = new Feature;
          //       $feature->content    = $feature;
          //       $feature->product_id = $productDB->id;
          //   $feature->save();
          // }


        }
    }
}
