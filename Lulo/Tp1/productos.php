<?php
    
    $lista_productos = ["Cafe", "Yerba", "Leche", "Queso"];
    echo "<ul>";
    if(isset($_GET ["limit"])){
        $limit = $_GET ["limit"];
       // var_dump($limit);
        
    }

    else{
       $limit = -1;
       echo "<h1> variable sin valor </h1>" ;   
    }

    for($i=0; $i<$limit; $i++){
        echo "<li> $lista_productos[$i]  </li>";
  
      }
    

    echo "</ul>"
    ?>

   <!-- pow(altura,2) -->