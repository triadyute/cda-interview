<?php

use Illuminate\Database\Seeder;

class HomePageContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\HomeContent::class, 1)->create();
    }
}
