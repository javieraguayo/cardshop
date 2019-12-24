<?php

use Illuminate\Database\Seeder;
use App\Product;//importamos el modelo

class ProductTableSeeder extends Seeder
{
    /**
     * Crea productos
     *
     * @return void
     */
    public function run()
    {
        $producto = new Product();
        $producto->name = "ORCUS";
        $producto->price = 2500;
        $producto->save();

        $producto = new Product();
        $producto->name = "SHOKI EL CAZADOR L";
        $producto->price = 3750;
        $producto->save();

        $producto = new Product();
        $producto->name = "SIETE CONTRA TEBAS";
        $producto->price = 1125;
        $producto->save();

        $producto = new Product();
        $producto->name = "HERACLES";
        $producto->price = 3000;
        $producto->save();
    }
}
