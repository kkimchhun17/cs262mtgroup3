<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Food;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Food::create([
            'name' => 'Margherita Pizza',
            'description' => 'Classic pizza with tomato sauce and mozzarella.',
            'category' => 'Main Course',
            'image_url' => 'https://example.com/pizza.jpg',
        ]);

        Food::create([
            'name' => 'Caesar Salad',
            'description' => 'Fresh romaine lettuce with Caesar dressing.',
            'category' => 'Appetizer',
            'image_url' => 'https://example.com/salad.jpg',
        ]);

        Food::create([
            'name' => 'Chocolate Cake',
            'description' => 'Rich chocolate cake with creamy frosting.',
            'category' => 'Dessert',
            'image_url' => 'https://example.com/cake.jpg',
        ]);
    }
}
