<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    
        $user = factory(App\Models\User::class,50)->create();
        $products = factory(App\Models\Product::class,50)->create();
        // $orders = factory(\App\Models\Order::class,50)->create();

        // $this->call(UsersTableSeeder::class);
    }
}
