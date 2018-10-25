<?php

use Faker\Generator as Faker;

use App\Restaurant_category;

$factory->define(App\Restaurant::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'address' => $faker->address,
 	];        
});
