<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
       'body' => $faker->sentence(60),
       'gallery_id' => function() {
       		return factory(App\Gallery::class)->create()->id;
       },
       'user_id' => function() {
       	return factory(App\User::class)->create()->id;
       }
    ];
});
