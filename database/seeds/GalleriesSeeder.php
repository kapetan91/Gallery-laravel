<?php

use Illuminate\Database\Seeder;
use App\Gallery;

class GalleriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(Gallery::class, 30)->create()->each(function($g){
       	$g->images()->save(factory('App\Image')->make());
       	$g->comments()->save(factory('App\Comment')->make());
       	$g->user()->save(factory('App\User')->make());
       });
    }
}
