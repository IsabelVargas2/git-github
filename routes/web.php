<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    
    echo "************ VARIABLES Y TIPOS DE VARIABLES ************** <br><br>";
    $name = "Isabel Vargas"; // variable de tipo string

    
    echo $name;
    $age = rand(18, 40); // variable de tipo integer
    $height = 1.50; // variable de tipo float o decimal

    $isLogin = true; // variable de tipo boolean

    echo"<br>";
    echo "Mi nombre es $name, tengo $age años y mido $height metros <br>";
});
