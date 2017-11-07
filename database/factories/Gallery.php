<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence(150),
        'user_id' => function() {
        	return factory(App\User::class)->create()->id;
        }
    ];
});
