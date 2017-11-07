<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(Model::class, function (Faker $faker) {
    return [
       'body' => $faker->sentence(60),
       'galery_id' => function() {
       		return factory(All\Gallery::class)->create()->id;
       },
       'user_id' => function() {
       	return factory(App\User::class)->create()->id;
       }
    ];
});
