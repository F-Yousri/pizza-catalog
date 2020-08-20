<?php

namespace App\Services;

use App\Exceptions\InvalidDataException;
use App\Repositories\IngredientRepository;
use Exception;

class PizzaService
{
    /** @var IngredientRepository */
    protected $ingredientRepository;

    public function __construct(IngredientRepository $ingredientRepository)
    {
        $this->ingredientRepository = $ingredientRepository;
    }


    public function createOne(array $data)
    {
        try{

            return $this->ingredientRepository->createOne($data);

        } catch(Exception $ex){
            // handle exception
            throw new InvalidDataException();
        }
    }

}
