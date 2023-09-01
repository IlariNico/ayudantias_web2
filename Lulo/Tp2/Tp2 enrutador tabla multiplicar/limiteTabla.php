<?php

   
    if(isset($_GET["limit"])) { 
        $limite = $_GET["limit"];
        $valorCadena = $limite;
        // Convertir a entero
        $valorCadena = intval($valorCadena);
        showTabla($valorCadena);
        
    } 


    

    function showTabla($limite) {
        echo "El límite es $limite";
        echo "<table style='text-align:center; border: 1px solid black;'>";
    
        for ($multiplicador = 1; $multiplicador <= $limite; $multiplicador++) {
            echo "<tr><td>$multiplicador</td>";
            for ($multiplicando = 1; $multiplicando <= $limite; $multiplicando++) {
                $resultado = $multiplicador * $multiplicando;
                $color = ($multiplicador == 1 || $multiplicando == 1 || $multiplicador == $multiplicando) ? "background-color: yellow;" : "";
                echo "<td style='$color'>$resultado</td>";
            }
            echo "</tr>"; // Esta línea cierra la etiqueta <tr> después de imprimir cada fila
        }
    
        echo "</table>";
    }
    




?>
