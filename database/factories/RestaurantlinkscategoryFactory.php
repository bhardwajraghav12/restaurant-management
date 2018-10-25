<?php

use Faker\Generator as Faker;

$factory->define(App\Restaurant_link_category::class, function (Faker $faker) {
    return [
   		'restaurant_category_id' => Restaurant_category::inRandomOrder()->first()->id,
   		'restaurant_id' => Restaurant::inRandomOrder()->first()->id, 
    ];
	});
