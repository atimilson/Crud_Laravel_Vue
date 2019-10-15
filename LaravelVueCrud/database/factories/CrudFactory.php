<?php

$factory->define(App\Crud::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->lexify('????????'),
        'color' =>$faker->boolean ? 'red' : 'green'
    ];
});