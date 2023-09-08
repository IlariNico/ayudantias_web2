<?php
$data=$_GET;

if(validar($data['nombre'])&&validar($data['apellido'])&&validar($data['edad'])
&&validar($data['genero'])&&validar($data['pais'])&&validar($data['intereses'])){
    var_dump($data);
    
}
else{
    echo "error";
}

function validar($data){
    return (!empty($data));
}