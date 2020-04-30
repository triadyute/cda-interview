<?php

use Illuminate\Database\Seeder;

class FacebookPixelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\FacebookPixel::class, 1)->create();
    }
}
