<?php

use Illuminate\Database\Seeder;

class ContactContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\ContactContent::class, 1)->create();
    }
}
