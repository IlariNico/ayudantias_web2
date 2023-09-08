<html>
<head>
</head>
<body>
<div class="container">

<?php
$db = new PDO('mysql:host=localhost;'.'dbname=db_deudas;charset=utf8', 'root', '');

function getPagos($db){
    //1. abrir la conexion con PDO
   // $db = new PDO('mysql:host=localhost;' . 'dbname=db_deudas;charset=utf8', 'root', '' );

    //2. ejecutar consulta SQL() (2 Subpasos: prepare y execute)
    // prepare seria escribir la consulta y execute la ejecuta
    $query = $db->prepare('SELECT * FROM pagos');
    $query->execute();

    //3. obtener datos de la consulta
    $pays = $query->fetchAll(PDO::FETCH_OBJ); //devuelve un arreglo con todos los pagos (array de objetos).
    //fetch devuelve un registro solo

    return $pays;
}
//echo "<pre>";
//var_dump($pay);
//echo "</pre>";
/*
 echo "<br>";
    echo "<p> Deudor: $i->deudor </p>";
    echo "<p> Numero de cuota: $i->cuota </p>";
    echo "<p> Monto de cuota: $i->cuota_capital </p>";
    echo "<p> Fecha de pago: $i->fecha_pago </p>";
}
*/ 


function getDeudor($id){
    $db = new PDO('mysql:host=localhost;' . 'dbname=db_deudas;charset=utf8', 'root', '' );
     $query = $db->prepare('SELECT * FROM pagos WHERE id=?' );
     $query->execute([$id]);
     $pay = $query->fetch(PDO::FETCH_OBJ);
     return $pay;
}


function createDeudor(){
    GLOBAL $db;
    $query="INSERT INTO pagos(deudor, cuota, cuota_capital, fecha_pago) VALUES (?,?,?,?)";
    $sentence= $db->prepare($query);
    $sentence-> execute([$_POST['Deudor'],$_POST['cuota'],$_POST['cuota_capital'], $_POST['fecha_pago']]);
    header("Location: ". BASE_URL ."home");
}

function deleteDeudor($id){
    GLOBAL $db;
    
    $query="DELETE FROM pagos WHERE id=?";
    $sentence= $db->prepare($query);
    $sentence-> execute([$id]);
    header("Location: ". BASE_URL ."home");
}

function showhome(){
    global $db;
    $pays=getPagos($db);
    echo "<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }
</style>";

echo "<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>deudor</th>
            <th>cuota</th>
            <th>cuota_capital</th>
            <th>fecha_pago</th>
        </tr>
    </thead>
    <tbody>";

    echo "<form method='POST' action='crear'>
        <label>Deudor</label>
        <input type='text' name='Deudor' '></input>
        <label>cuota</label>
        <input type='text' name='cuota'></input>
        <label>cuota_capital</label>
        <input type='text' name='cuota_capital'></input>
        <label>fecha_pago</label>
        <input type='text' name='fecha_pago'></input>
        <input type='submit' value='crear'></input>
        </form>";
        

foreach($pays as $i){
    echo "<tr>
    <td>" . $i->id . "</td>
    <td>" . $i->deudor . "</td>
    <td>" . $i->cuota . "</td>
    <td>" . $i->cuota_capital . "</td>
    <td>" . $i->fecha_pago . "</td>
    <td>
    <a href='eliminar/" . $i->id . "'>Eliminar</a>
       
    </td>
</tr>";

    } 

   
}



?>
</div>
</body>
</html>





