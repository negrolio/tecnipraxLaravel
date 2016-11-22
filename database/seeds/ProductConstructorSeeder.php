<?php

use Illuminate\Database\Seeder;

class ProductConstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        class ProductSeeder {
          public $name;
          public $description;
          public $img_url;
          public $category;
          public $images;
          public $features;

          public function __construct($name,$description,$img_url,$category){
            $this->name = $name;
            $this->description = $description;
            $this->img_url = $img_url;
            $this->category = $category;
          }
        }



        $newProduct = new ProductSeeder(
          'Silla Motorizada bipestadora postural',
          'Silla a motor con estructura de acero de alta resistencia y bajo peo. Con motor auxiliar para la bipedestación. Esta silla lleva apoya pies regulables en altura. Topes de rodillas acolchados y rebatibles. Asiento regulable en profundidad. Apoya brazos rebatibles, respaldo plegable y mesa con borde antiderrame extraíble. Se le puede anexar almohadones posturales con control de muslos y tronco. Consta de 2 motores de 24 Volt y 2 baterías de gel de 12 Volt de alto rendimiento extraíbles para su traslado. Ruedas poli aire. Autonomía aproximada de 12 Km.',
          'img/productos/1/11.jpg',
          'Movilidad y Rehabilitación'
        );
    }
}
