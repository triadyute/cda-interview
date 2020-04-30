<?php

use Illuminate\Database\Seeder;

class GooglePixelIdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\GooglePixelId::class, 1)->create();
    }
}
