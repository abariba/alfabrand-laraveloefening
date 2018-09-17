<?php

use Faker\Generator as Faker;
$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'body' => $faker->paragraph,
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'products_id' => rand(1,100)
        //function () {
        //    return factory(App\Products::class)->create()->id;
        //}
    ];
});