<?php

use Faker\Generator as Faker;
$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'body' => $faker->paragraph,
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'product_id' => 1
        //function () {
        //    return factory(App\plant::class)->create()->id;
        //}
    ];
});