<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Photo;
use Faker\Generator as Faker;

$factory->define(Photo::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElement(['cda-interview-guide.jpg', 'contact-us.png'])
    ];
});
