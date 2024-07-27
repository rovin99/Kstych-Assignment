<?php

require __DIR__ . "/../vendor/autoload.php";
use Illuminate\Database\Capsule\Manager as Capsule;


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$capsule = new Capsule;

// Access environment variables
$dbConnection = $_ENV['DB_CONNECTION'];
$dbHost = $_ENV['DB_HOST'];
$dbDatabase = $_ENV['DB_DATABASE'];
$dbUsername = $_ENV['DB_USERNAME'];
$dbPassword = $_ENV['DB_PASSWORD'];

$capsule->addConnection([
    "driver" => $dbConnection,
    "host" => $dbHost,
    "database" => $dbDatabase,
    "username" => $dbUsername,
    "password" => $dbPassword
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();