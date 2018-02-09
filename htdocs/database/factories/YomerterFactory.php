<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\Yomerter::class, function (Faker $faker) {
    return [
        'physicalCondition' => 80,
        'mentalCondition'   => 30,
        'comment'           => '一言コメントをかけます！',
    ];
});
