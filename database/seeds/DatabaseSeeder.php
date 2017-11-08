<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Users::class);
        $this->call(CommentsSeeder::class);
        $this->call(GalleriesSeeder::class);
        $this->call(ImageSeeder::class);
    }
}
