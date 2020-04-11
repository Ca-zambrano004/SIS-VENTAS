<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Producto;

$factory->define(Producto::class, function (Faker $faker) {
    return [
    		'nombre'           => substr($faker->sentence(3), 0, -1),
			'descripcion' 	   => $faker->sentence(10),
			'long_descripcion' => $faker->text,
			'precio' 		   => $faker-> randomFloat(5, 10, 1000),

			'category_id'=> $faker->numberBetween(1, 5)
		];
});
