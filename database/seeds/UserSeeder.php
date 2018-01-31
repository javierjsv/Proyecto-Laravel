<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facede\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombre' => 'javier Solis',
            'email' => 'javierjsv@hotmail.com',
            'passord' => bcrypt('laravel'),

        ]);



    }
}
