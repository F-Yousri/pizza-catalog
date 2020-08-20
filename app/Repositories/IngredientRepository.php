<?php

namespace App\Repositories;

use App\Ingredient;

class IngredientRepository
{
    public function getAll()
    {
        return Ingredient::all();
    }

    public function createOne(array $data)
    {
        return Ingredient::create($data);
    }
}
