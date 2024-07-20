<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Product;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductComment>
 */
class ProductCommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'userID' => User::all()->random()->id,
            'productID' => Product::all()->random()->id,
            'comment' => $this -> faker -> text,
            'created_at' => $this -> faker -> dateTime,
            'updated_at' => $this -> faker -> dateTime,
          
        ];
    }
}
