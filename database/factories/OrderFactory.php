<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Order;
use Faker\Generator as Faker;
//use Illuminate\Support\Str;

$factory->define(App\Models\Order::class, function (Faker $faker) {
  
    
    return [
        'state_id' => $state_id,
        'user_id' => mt_rand(1, 20),
        'total' => 0,
        'invoice_id' => $invoice_id,
        'invoice_number' => $invoice_number,
        'created_at' => $faker->dateTimeBetween('-2 years'),
    ];
});
