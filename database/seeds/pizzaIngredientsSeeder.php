<?php

use App\Ingredient;
use App\Pizza;
use Illuminate\Database\Seeder;

class pizzaIngredientsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Populate the pivot table
        $ingredients = Ingredient::all();
        factory(Pizza::class, 50)->create();
        Pizza::each(function ($pizza) use ($ingredients) {
            $usedIngredients = [];
            $ingredients->random(rand(1, 5))->each(function($ingredient) use (&$usedIngredients) {
                $usedIngredients[$ingredient->id] = ['order' => rand(1,5), 'quantity' => rand(0.1, 99.99)];
            });

            $pizza->ingredients()->attach(
                $usedIngredients
            );
        });
    }
}
