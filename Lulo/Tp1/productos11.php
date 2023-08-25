<?php
    
    $lista_productos = ["Cafe", "Yerba", "Leche", "Queso"];
    echo "<ul>";
    if(isset($_GET ["limit"])){
        $limit = $_GET ["limit"];
       
        
    }
    foreach ($lista_productos as $producto) {
      echo "<li>$producto</li>";
  }

    echo "</ul>"
    ?>

  