<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $appends = ['url'];

    public function getUrlAttribute()
    {
        return route('pizzas.show', ['pizza' => $this->id]);
    }
}
