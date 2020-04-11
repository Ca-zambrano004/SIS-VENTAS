<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\ProductoImagen;
use Faker\Generator as Faker;

$factory->define(ProductoImagen::class, function (Faker $faker) {
    return [
        'image'=> $faker->imageUrl(250,250),
        'producto_id'=> $faker->numberBetween(1,100)
    ];
});
