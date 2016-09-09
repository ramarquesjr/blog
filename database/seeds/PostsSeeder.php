<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($x=0;$x<=100;$x++){
	        DB::table('posts')->insert([
	            'title' => str_random(10),
	            'content' => str_random(40).'-> Número'.$x,
	            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
	        ]);
    	}
    }
}
