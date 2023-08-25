<!DOCTYPE html>
<html>
<head>
    <title>Matriz de Tabla de Multiplicar</title>
</head>
<body>
    <h1>Matriz de Tabla de Multiplicar</h1>
    <table border="1">
       
            <?php
            $rows = 10; // Número de filas
            $cols = 10; // Número de columnas

            for ($i = 1; $i <= $rows; $i++) {
                echo "<tr>";
                
                for ($j = 1; $j <= $cols; $j++) {
                    $result = $i * $j;
                    //echo "<td>$result</td>";
                    $color = ($i == 1 || $j == 1 || $i == $j) ? "background-color: yellow;" : "";
                    echo "<td style='$color'>$result</td>";
                }
                echo "</tr>";
            }
            ?>
       
    </table>

    <!--
            $color = ($i === 1 || $j === 1) ? "background-color: #ffcccb;" : "";
                                condición ? expresión_verdadera : expresión_falsa

    $color = "";

    if ($i === 1 || $j === 1) {
        $color = "background-color: #ffcccb;";
    }
    echo "<td style='$color'>$result</td>";
    -->

    <br>
    <form action="limiteTabla.php">
        <input type="number" name="limit" value="limit" <label for="">Ingrese limite de tabla de multiplicar</label>
        <input type="submit" name="submit" value="Enviar">
    </form>
    
   


</body>
</html>
