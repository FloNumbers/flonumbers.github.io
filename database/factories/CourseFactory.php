<?php

use Faker\Generator as Faker;

$factory->define(App\Course::class, function (Faker $faker) {
    return [
        'subjectName' => $faker->name(),
        'teacher' => $faker->name(),
        'grade' => $faker->numberBetween($min=1, $max=10)
    ];
});
