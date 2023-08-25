<?php

if(!isset($_GET ["num1"]) && !isset($_GET["num2"]) && isset($_GET["operaciones"])){
    echo "Faltan Parametros";
    return;
}

$num1 = $_GET ["num1"];
$num2 = $_GET ["num2"];
$operacion = $_GET ["operaciones"];

if(!is_numeric($num1) || !is_numeric($num2) ||  empty($operaciones))
{
    echo "Vuelva a ingresar el valor , valor vacio";
    return;
}

switch($operacion){
    case 'suma':{
        $resultado = $num1 + $num2;
        break;
    }

       
    case 'resta':{
        $resultado = $num1 - $num2;
        break;

    }

    case 'division':{
        $resultado = $num1 / $num2;
        break;

    }
    
    case 'multiplicacion':{
        $resultado = $num1 * $num2;
        break;

    }

    default: {
        echo ("Syntax Error");
        break;
    }
   
}

echo "el resultado de la $operacion entre $num1 y $num2 es = $resultado ";





