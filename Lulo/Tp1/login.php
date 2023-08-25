

<?php

  /*  if(($_POST["genero"]== "masculino")||($_POST["genero"]== "femenino")||($_POST["genero"]== "indefinido")){
        $genero = "masculino";
        $genero = "femenino";
        $genero = "indefinido";
    } */

    $genero = $_POST["genero"];
    var_dump($genero);

    switch($genero){
        case "masculino":
            echo "masculino";
            break;
        case "femenino":
            echo "femenino";
            break;
        case "indefindo":
            echo "indefinido";
            break;
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
        
           

    
    
    


