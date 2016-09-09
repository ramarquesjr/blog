<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	\App\Tags::truncate();
     	factory('App\Tags',10)->create();
    }
}
