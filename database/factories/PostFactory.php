<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
       'title'=>$faker->sentence(),
        'content'=>$faker->paragraph(rand(2,10),true),

    ];
});
