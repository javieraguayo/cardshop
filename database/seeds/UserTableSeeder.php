<?php

use Illuminate\Database\Seeder;
use App\User;//para que pueda usar el modelo de la nota
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "javier";
        $user->email = "javier.aguayo19@gmail.com";
        $user->password = bcrypt("111222333");
        $user->save();    
    }
}
