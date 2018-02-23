<?php

use Faker\Generator as Faker;

$factory->define(App\Gallery::class, function (Faker $faker) {

        return [
            'title' => $faker->text(20),
            'description' => $faker->paragraph,
            'author_id' => $faker->numberBetween(1,10),
        ];
    
});
