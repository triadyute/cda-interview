<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ContactContent;
use Faker\Generator as Faker;

$factory->define(ContactContent::class, function (Faker $faker) {
    return [
        'title' => 'BeMo Academic Consulting Inc.',
        'phone' => '1-855-900-BeMo (2366)',
        'email' => 'info@bemoacademicconsulting.com'
    ];
});
