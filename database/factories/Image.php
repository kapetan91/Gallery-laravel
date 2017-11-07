<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(Model::class, function (Faker $faker) {
    return [
        'image_url' => $faker->imageUrl(400, 290),
        'gallery_id' => function(){
        	return factory(App\Gallery::class)-create()->id;
        }
    ];
});
