<?php

use Illuminate\Database\Seeder;

class WisataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Wisata::class, 5)->create();
    }
}
