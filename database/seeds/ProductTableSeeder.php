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
        $producto->url_img = "https://firebasestorage.googleapis.com/v0/b/cartshop-8b910.appspot.com/o/013.png?alt=media&token=2514f999-228b-4763-967a-dcb00f3b743e";
        $producto->token = Str::random(32);
        $producto->save();

        $producto = new Product();
        $producto->name = "SHOKI EL CAZADOR L";
        $producto->price = 3750;
        $producto->url_img = "https://firebasestorage.googleapis.com/v0/b/cartshop-8b910.appspot.com/o/008.png?alt=media&token=38248044-c693-4336-8c84-19ec3bed4885";
        $producto->token = Str::random(32);
        $producto->save();

        $producto = new Product();
        $producto->name = "SIETE CONTRA TEBAS";
        $producto->price = 1125;
        $producto->url_img = "https://firebasestorage.googleapis.com/v0/b/cartshop-8b910.appspot.com/o/011.png?alt=media&token=0c26835a-9874-43dd-922c-902a71f25563";
        $producto->token = Str::random(32);
        $producto->save();

        $producto = new Product();
        $producto->name = "NESO";
        $producto->price = 2000;
        $producto->url_img = "https://firebasestorage.googleapis.com/v0/b/cartshop-8b910.appspot.com/o/055.png?alt=media&token=706bb361-71b1-457a-9066-ab84d0ecbce4";
        $producto->token = Str::random(32);
        $producto->save();

        $producto = new Product();
        $producto->name = "JUPITER";
        $producto->price = 1500;
        $producto->url_img = "https://firebasestorage.googleapis.com/v0/b/cartshop-8b910.appspot.com/o/010.png?alt=media&token=8aa10dd8-604c-4f79-993a-5dc09fc89ab3";
        $producto->token = Str::random(32);
        $producto->save();

        $producto = new Product();
        $producto->name = "RAKSASA SOMBRIO";
        $producto->price = 1500;
        $producto->url_img = "https://firebasestorage.googleapis.com/v0/b/cartshop-8b910.appspot.com/o/276.png?alt=media&token=96bcebea-d1fc-42f7-9ecf-4fb40b314c8c";
        $producto->token = Str::random(32);
        $producto->save();


        $producto = new Product();
        $producto->name = "KORA";
        $producto->price = 100;
        $producto->url_img = "https://firebasestorage.googleapis.com/v0/b/cartshop-8b910.appspot.com/o/103.png?alt=media&token=5340c34a-05e1-4c0c-afb4-3adef196b041";
        $producto->token = Str::random(32);
        $producto->save();

        $producto = new Product();
        $producto->name = "MBIELU";
        $producto->price = 900;
        $producto->url_img = "https://firebasestorage.googleapis.com/v0/b/cartshop-8b910.appspot.com/o/122.png?alt=media&token=8c379f47-3257-4a17-b389-1eda2a2940e3";
        $producto->token = Str::random(32);
        $producto->save();
    }
}
