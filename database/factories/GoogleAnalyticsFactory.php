<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\GoogleAnalytics;
use Faker\Generator as Faker;

$factory->define(GoogleAnalytics::class, function (Faker $faker) {
    return [
        'google_analytics_id' => 'your-google-analytics-id-goes-here'
    ];
});
