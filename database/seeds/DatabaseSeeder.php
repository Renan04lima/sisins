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
        $this->call(CursosSeeder::class);
        $this->call(InscricoesSeeder::class);
        $this->call(QuestoesSeeder::class);
        $this->call(RespostasSeeder::class);
    }
}
