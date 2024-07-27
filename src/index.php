<?php

require __DIR__ . "/../config/bootstrap.php";

use Rovin\Recipes\Classes\Recipe;

$recipe = Recipe::create([
    'name' => 'Veg Noodles',
    'prep_time' => 30,
    'difficulty' => 5,
    'vegetarian' => true
]);

echo "Recipe created with ID: " . $recipe->id;