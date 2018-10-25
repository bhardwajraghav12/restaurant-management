<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'food_category_id' => Food_category::inRandomOrder()->first()->id,
   		'food_id' =>Food::inRandomOrder()->first()->id, 
    ];
});
