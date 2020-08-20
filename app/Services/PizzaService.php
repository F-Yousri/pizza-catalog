<?php

namespace App\Services;

use App\Repositories\PizzaRepository;
use Exception;

class PizzaService
{
    /** @var PizzaRepository */
    protected $pizzaRepository;

    public function __construct(PizzaRepository $pizzaRepository)
    {
        $this->pizzaRepository = $pizzaRepository;
    }

    public function getAll()
    {
        return $this->pizzaRepository->getAll();
    }

    public function createOne(array $data)
    {
        try{

            return $this->pizzaRepository->createOne($data);

        } catch(Exception $ex){
            // handle exception
        }
    }

    public function syncIngredients(Array $ingredients)
    {
        try{

            return $this->pizzaRepository->syncIngredients($ingredients);

        } catch(Exception $ex){
            // handle exception
        }
    }
}
