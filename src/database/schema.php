<?php

require __DIR__ . "/../../config/bootstrap.php";

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->dropIfExists('ratings');
Capsule::schema()->dropIfExists('recipes');

Capsule::schema()->create('recipes', function ($table) {
    $table->increments('id');
    $table->string('name');
    $table->integer('prep_time');
    $table->tinyInteger('difficulty')->unsigned();
    $table->boolean('vegetarian');
    $table->timestamps();
});

Capsule::schema()->create('ratings', function ($table) {
    $table->increments('id');
    $table->integer('recipe_id')->unsigned();
    $table->tinyInteger('rating')->unsigned();
    $table->foreign('recipe_id')->references('id')->on('recipes')->onDelete('cascade');
    $table->timestamps();
});

echo "Database schema created successfully.\n";