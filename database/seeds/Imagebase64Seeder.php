<?php

use Illuminate\Database\Seeder;

class Imagebase64Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$imagedata = file_get_contents("public/images/013.png");
             // alternatively specify an URL, if PHP settings allow
		$base64 = base64_encode($imagedata);
      

       var_dump($base64);
    }
}
