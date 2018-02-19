<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        //
        'title'=> $faker->sentence(),
        'content'=> $faker->paragraphs(rand(2,10),true),
           ];
});
