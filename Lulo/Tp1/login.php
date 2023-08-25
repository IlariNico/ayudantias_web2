

<?php

    if($_POST["genero"]== "masculino"){
        $genero = "masculino";
    }
    else if($_POST["genero"]== "femenino"){
        $genero = "femenino";
    }
    else if($_POST["genero"]== "indefinido"){
        $genero = "indefinido";
    }
    
    $nombre = $_POST ["nombre"];
    $apellido = $_POST ["apellido"];
    $edad = $_POST ["edad"];
    $nacionalidad = $_POST["nacionalidad"];
    $intereses = $_POST['intereses'];

   

    echo "<p> usuario: $nombre $apellido </p> ";
    echo "<p> edad: $edad </p> ";
    echo "<p> genero: $genero </p>";
    echo "<p> nacionalidad: $nacionalidad </p>";

/*------------------------------------------------------------------------*/ 

    //del punto de intereses
   if(isset($_POST['submit'])){//Validacion de envio de formulario
        if(!empty($_POST['intereses'])){
        // Ciclo para mostrar las casillas checked checkbox.
            foreach($_POST['intereses'] as $selected){
            echo $selected."</br>";// Imprime resultados
            }
         } 
        }
?>
        
           

    
    
    


