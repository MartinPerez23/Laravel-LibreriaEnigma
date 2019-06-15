<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AutoresSeeder::class);
        $this->call(EditorialesSeeder::class);
        $this->call(LibrosSeeder::class);
        $this->call(CarouselSeeder::class);
        $this->call(UsuariosSeeder::class);
    }
}
