<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Permisos;
use Faker\Generator as Faker;

$factory->define(Permisos::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word,
        'slug' => $faker->word,
        'estado' => $faker->boolean
        //
    ];
});
