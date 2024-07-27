<?php

namespace Rovin\Recipes\Classes;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Rating extends Eloquent
{
    protected $fillable = ['recipe_id', 'rating'];

    public function recipe()
    {
        return $this->belongsTo('Rovin\Recipes\Classes\Recipe');
    }
}