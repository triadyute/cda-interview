<?php

use Illuminate\Database\Seeder;

class GoogleAnalyticsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\GoogleAnalytics::class, 1)->create();
    }
}
