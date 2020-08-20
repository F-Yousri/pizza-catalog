<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $appends = ['url'];
    
    protected $fillable = ['name', 'selling_price'];

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'pizza_ingredients')
            ->withPivot(['quantity', 'order']);
    }

    public function getUrlAttribute()
    {
        return route('pizzas.show', ['pizza' => $this->id]);
    }
}
