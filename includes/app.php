<?php 
require __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

require 'funciones.php';
require 'database.php';


date_default_timezone_set('America/Guayaquil');

// Conectarnos a la base de datos
use Model\ActiveRecord;
ActiveRecord::setDB($db);