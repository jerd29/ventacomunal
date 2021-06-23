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
        $this->call(ConsejoComunalSeeder::class);
        $this->call(CambioSeeder::class);
        $this->call(JornadaSeeder::class);
        $this->call(ComboSeeder::class);


    }
}
