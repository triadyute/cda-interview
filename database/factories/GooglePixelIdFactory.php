<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\GooglePixelId;
use Faker\Generator as Faker;

$factory->define(GooglePixelId::class, function (Faker $faker) {
    return [
        'google_pixel_id' => 'your-pixel-id-goes-here'
    ];
});
