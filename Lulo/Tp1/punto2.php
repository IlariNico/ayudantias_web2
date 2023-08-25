<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 2</title>
</head>
<body>
    <h1>Lista De Productos</h1>
    <a href="">ver solo uno</a>
    <a href="">ver dos</a>
    <a href="">Ver los primeros 5</a>
    <?php
    
    $lista_productos = ["Producto 1" => "Cafe", "Producto 2" => "Yerba", "Producto 3" => "Leche", "Producto 4" => "Queso" ];
    echo "<ul>";
    foreach($lista_productos as  $iterador){
      echo "<li> $iterador </li>";

    }

    echo "</ul>"
    ?>

</body>
</html>