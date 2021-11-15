<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Peserta;

class PesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Peserta::factory()->count(50)->create();
    }
}
