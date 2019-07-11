<?php

use Illuminate\Database\Seeder;
use App\Entity\Product;
use App\Entity\User;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::query()->insert([
            [
                'name' => 'Product1',
                'price' => 10.5,
                'user_id' => User::where('email', 'user@example.com')->first()->id
            ],
            [
                'name' => 'Product2',
                'price' => 25.1,
                'user_id' => User::where('email', 'admin@example.com')->first()->id
            ]
        ]);
    }
}
