<?php

namespace Rovin\Recipes\Classes;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Recipe extends Eloquent
{
    protected $fillable = ['name', 'prep_time', 'difficulty', 'vegetarian'];

    public function ratings()
    {
        return $this->hasMany('Rovin\Recipes\Classes\Rating');
    }
}