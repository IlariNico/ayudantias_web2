<?php
require_once "pi.php";
require "limiteTabla.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');

if($_GET ['action'] == !' '){
    $action = 'home';
}

else{

    $action = $_GET ['action'];

    //viene el action lo parto por barra
    
    $partesURL = explode('/', $action );
    if($partesURL[0]== 'home'){
        include "templates/header.php";
    }

    else if($partesURL[0] === 'tabla'){
        if($partesURL[1]==='5'){
            mostrarTabla($partesURL[1]);
        }
        elseif($partesURL[1]==='10'){
            mostrarTabla($partesURL[1]);
        }
        elseif($partesURL[1]==='20'){
            mostrarTabla($partesURL[1]);
        } 
    }
    
    elseif($partesURL[0] === 'pi'){
        mostrarPi();
        
    }
    

}

