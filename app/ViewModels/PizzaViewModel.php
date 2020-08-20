<?php

namespace App\ViewModels;

use App\Http\Controllers\PizzaController;
use App\Pizza;
use App\User;
use Spatie\ViewModels\ViewModel;

class PizzaViewModel extends ViewModel
{
    public $indexUrl = null;

    public function __construct(Pizza $pizza = null)
    {
        $this->pizza = $pizza;
        
        $this->indexUrl = action([PizzaController::class, 'index']); 
    }
    
    public function pizza(): Pizza
    {
        return $this->pizza ?? new Pizza();
    }
}