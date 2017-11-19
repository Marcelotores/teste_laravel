<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    //Lista dos valores que serão gerados
    public function run()
    {
         //$this->call(UserTableSeeder::class);
    	factory(App\User::class, 7)->create();  //7 usuários diferentes serão gerados
    	factory(App\Product::class, 15)->create(); //15 produtos diferentes serão gerados
    }
}
