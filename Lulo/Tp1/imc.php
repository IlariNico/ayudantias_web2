


<?php

    if(isset($_GET ["peso"])){

        $peso = $_GET ["peso"];
        $altura = $_GET ["altura"];

        $imc = $peso/pow($altura,2);

        if($imc < 18.5){
        echo "su masa corporal nos arroja que es de PESO BAJO ";
        }

        else if ($imc  >=18.5 && $imc <= 24.99){
            echo "su masa corporal nos arroja que es NORMAL";
        }

        else if($imc >= 25){
            echo "su masa corporal nos arroja que tiene SOBREPESO";
        }

        else if($imc >= 30){
            echo "su masa corporal nos arroja que tiene OBESIDAD";
        }

    }


?>