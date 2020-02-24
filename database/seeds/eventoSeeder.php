<?php

use Illuminate\Database\Seeder;
use App\Models\T_evento;

class eventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(T_evento::class,150)->create();
    }
}
