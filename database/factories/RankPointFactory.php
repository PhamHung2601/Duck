<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RankPoints;
use Faker\Generator as Faker;

$factory->define(RankPoints::class, function (Faker $faker) {
    return [
        'type' => array_rand([1,2],1),
        'level' => $faker->numberBetween($min = 10, $max = 2000),
        'point' => $faker->numberBetween($min = 10, $max = 20000),
        'type_id' => $faker->month,
        'created_by_id' => 1,
        'created_by_name' => 'admin',
        'student_id' => $faker->unique()->numberBetween($min = 1, $max = 50)
    ];
});
