<?php

use Faker\Generator as Faker;

$factory->define(App\Products::class, function (Faker $faker) {
    return [
        'name' => $faker->Company,
        'body' => $faker->text,
        'category' => rand(0,3),
        'ammount' => rand(0,999),
        'price' => rand(0.01,999.99),
        'img' => $faker->imageUrl(400,300),
        //function () {
        //    return factory(App\plant::class)->create()->id;
        //}
    ];
});
