<?php

use Illuminate\Database\Seeder;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("carousel")->insert([
            ["imagen"   => "img/carousel/1.jpg"],
            ["imagen"   => "img/carousel/2.jpg"],
            ["imagen"   => "img/carousel/3.jpg"],
            ["imagen"   => "img/carousel/4.jpg"],
            ["imagen"   => "img/carousel/5.jpg"]]
        );
    }
}
