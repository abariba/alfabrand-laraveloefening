<?php

use Faker\Generator as Faker;

$factory->define(App\Products::class, function (Faker $faker) {
    return [
        'name' => $faker->Company,
        'body' => $faker->paragraph,
        'category' => rand(0,3),
        'ammount' => rand(0,999),
        'price' => rand(0.01,999.99)
        //function () {
        //    return factory(App\plant::class)->create()->id;
        //}
    ];
});
