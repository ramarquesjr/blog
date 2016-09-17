<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Posts::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'content' => $faker->text($maxNbChars = 2000)
    ];
});

$factory->define(App\Tags::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word
    ];
});

$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    return [
        'comment' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'name' => $faker->word,
        'email'=> $faker->email,
        'post_id'=>1
    ];
});