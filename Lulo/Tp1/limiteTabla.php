<?php

   
    if(isset($_GET["limit"])) { 
        $limite = $_GET["limit"];
        $valorCadena = $limite;
        var_dump($valorCadena);
        // Convertir a entero
        $valorCadena = intval($valorCadena);
        mostrarTabla($valorCadena);
        var_dump($valorCadena);
        
    } 

    function mostrarTabla ($limite){
       
        echo "el limite es $limite";
        echo "<table text-align:center; border=5>";
            echo "<td>";
            echo "<tr><td>";
        
            for ($tabla=1; $tabla<=$limite  ; $tabla++) {
            
                echo "<td>$tabla</td>";
            
            }
            echo "</tr>";
        
            echo "<tr>";
            for ($multiplicador=1; $multiplicador <=$limite ; $multiplicador++) {
                echo "<tr> <td> $multiplicador </td>"; 
                for ($multiplicando=1; $multiplicando <=$limite ; $multiplicando++) { 
                    echo "<td>" . $multiplicador*$multiplicando . "</td>";
                }
            echo "</tr>";
        
            }
            echo "</tr>";
        
        
            echo "</table>";
    }




?>
