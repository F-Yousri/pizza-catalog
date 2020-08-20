<?php

namespace App\Repositories;

use App\Pizza;

class PizzaRepository
{
    public function getAll()
    {
        return Pizza::all();
    }

    public function createOne(array $data)
    {
        return Pizza::create($data);
    }

    public function syncIngredients(int $pizzaId,array $ingredients): Pizza
    {
        // $ingredients = [id => ['order' => order, 'quantity' => quantity]]
        $pizza = Pizza::findOrFail($pizzaId);
        $pizza->ingredients()->sync($ingredients);
        return $pizza;
    }

    public function getOne(int $id)
    {
        Pizza::whereId($id)->with('ingredients')->get();
    }
}
