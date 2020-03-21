<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'fullname' => $faker->name,
        'avatar' => $faker->imageUrl,
        'username' => $faker->userName,
        'gender' => array_rand(['nam','nữ','gay'],1),
        'phone_number' => $faker->phoneNumber,
        'created_at' => new DateTime,
        'updated_at' => new DateTime
    ];
});
