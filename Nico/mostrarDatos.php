<?php

$datos=$_POST;


if((isset($datos['nombre']))&&(isset($datos['email']))&&(isset($datos['edad']))){
    echo($datos['nombre']);
    echo($datos['edad']);
    echo($datos['email']);
}
    
?>