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

    echo"<br>";
    echo "************ ESTRUCTURAS DE CONTROL ************** <br><br>";
    echo"<br>";

    $messege = "Hola soy $name";

    if ($age >=18) {
        $messege .= ", Eres mayor de edad <br>";
    } else if ($age > 50){
        $messege .= "Eres Adulto mayor <br>";
    }
    else {
        $messege .= ", Eres menor de edad <br>";
    }

    $messege .= " ".($isLogin? "Ya estas logueado":"No estas logueado")."<br>";

    echo $messege;
    echo"<br>";
    echo "********************* FUNCIONES ******************* <br><br>";

    echo printUser(age : $age, name : $name);

    printUserWithCallBack(name : $name, age: $age, callable: function(){
        echo "Esta es una función callback, saludos!!! <br>";
    });
});


function printUser(string $name, int $age){
    return "El nombre del usuario es $name y su edad es $age años <br>";
}

function printUserWithCallBack(string $name, int $age, callable $callable){
    echo "soy $name y tengo $age años <br>";
    $callable()
}