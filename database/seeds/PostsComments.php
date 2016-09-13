<?php

use Illuminate\Database\Seeder;

class PostsComments extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Comment::truncate();
        factory('App\Comment',10)->create();    }
}
