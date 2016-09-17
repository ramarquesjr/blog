<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
            factory('App\User')->create(
            [
                'name' => 'Ronaldo',
                'email' => 'ralvesmj@gmail.com',
                'password' => bcrypt(123456),
                'remember_token' => str_random(10),
            ]);
        $this->call(PostsSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(PostsComments::class);
    }
}
