<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Entity\Product;
use Faker\Generator as Faker;
use App\Entity\User;

$factory->define(Product::class, function (Faker $faker, array $options) {
    return [
        'name' => $faker->unique()->name,
        'price' => $faker->randomFloat(2, 0, 100000),
        'user_id' => array_key_exists('user_id', $options) 
            ? $options['user_id'] 
            : factory(User::class)->create()->id
    ];
});
