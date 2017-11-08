<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Image::class, function (Faker $faker) {
    return [
    	'name' => $faker->name,
        'description' => $faker->sentence(10),
        'image_url' => $faker->imageUrl(400, 290),
        'gallery_id' => function(){
        	return factory(App\Gallery::class)->create()->id;
        }
    ];
});
