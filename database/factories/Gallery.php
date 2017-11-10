<?php

use Faker\Generator as Faker;


/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Gallery::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence(10),
        'user_id' => function() {
        	return factory(App\User::class)->create()->id;
        }
    ];
});
