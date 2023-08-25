
<?php

if(isset($_GET["inversion"])){

    $inversion = $_GET ["inversion"];
    $interes = 10;
    
    echo "<table border=5>";
    echo "<thead>
         <tr>
            <th>enero</th>
            <th>febrero</th>
            <th>marzo</th>
            <th>abril</th>
            <th>mayo</th>
            <th>junio</th>
            <th>julio</th>
            <th>agosto</th>
            <th>septiembre</th>
            <th>octubre</th>
            <th>noviembre</th>
            <th>diciembre</th>
        <tr> 
    </thead>";

    echo "<td>$inversion</td>";
    
    /*
    $meses = [
        "enero", "febrero", "marzo", "abril", "mayo", "junio",
        "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"
    ];*/ 
   
    for($i=1; $i<12; $i++){
        $interes_mensual = ($inversion * $interes)/100;
        $inversion += $interes_mensual; 
        echo "<td> $inversion </td>";
        
    }

    echo "</tr>";



    echo "</table>";
    
}

else{
    echo "entro al else";
}

?>