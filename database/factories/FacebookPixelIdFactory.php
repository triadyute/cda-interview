<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\FacebookPixel;
use Faker\Generator as Faker;

$factory->define(FacebookPixel::class, function (Faker $faker) {
    return [
        'facebook_pixel_id' => 'your-pixel-id-goes-here'
    ];
});
