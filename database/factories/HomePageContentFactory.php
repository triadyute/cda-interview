<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\HomeContent;
use Faker\Generator as Faker;

$factory->define(HomeContent::class, function (Faker $faker) {
    return [
        'title' => 'Ultimate Guide to CDA Structured Interview: Tips & Proven Strategies to Help You Prepare & Ace Your CDA Interview',
        'body' => $faker->paragraph($nbSentences = 130, $variableNbSentences = true),
        'meta_title' => 'CDA Interview',
        'meta_description' => 'Ultimate Guide to CDA Structured Interview: Tips & Proven Strategies to Help You Prepare & Ace Your CDA Interview',
        'meta_noindex' => false
    ];
});
