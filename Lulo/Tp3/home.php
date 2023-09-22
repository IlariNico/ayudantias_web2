<html>
<head>
</head>
<body>
<div class="container">

<?php
function getPagos(){
    //1. abrir la conexion con PDO
   $db = new PDO('mysql:host=localhost;' . 'dbname=db_deudas;charset=utf8', 'root', '' );

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
    $db = new PDO('mysql:host=localhost;'.'dbname=db_deudas;charset=utf8', 'root', '');
    $query="INSERT INTO pagos(deudor, cuota, cuota_capital, fecha_pago) VALUES (?,?,?,?)";
    $sentence= $db->prepare($query);
    $sentence-> execute([$_POST['Deudor'],$_POST['cuota'],$_POST['cuota_capital'], $_POST['fecha_pago']]);
    header("Location: ". BASE_URL ."home");
}

function deleteDeudor($id){
    $db = new PDO('mysql:host=localhost;'.'dbname=db_deudas;charset=utf8', 'root', '');
    $query="DELETE FROM pagos WHERE id=?";
    $sentence= $db->prepare($query);
    $sentence-> execute([$id]);
    header("Location: ". BASE_URL ."home");
}



function showhome(){

    $pays=getPagos();
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
                <a href='editar/" . $i->id . "'>Modificar</a>
                </td>
            </tr>";
 
     } 

   
}

function modifyDeudor($id) {
    // Obtener el deudor por ID
    $deudor = getDeudor($id);

    // Comprobar si el deudor existe
    if (!$deudor) {
        // Puedes mostrar un mensaje de error o redirigir a una página de error
        echo "El deudor no existe.";
        return;
    }

    // Verificar si se envió un formulario POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Obtener los datos del formulario
        $nuevoDeudor = $_POST['Deudor'];
        $nuevaCuota = $_POST['Cuota'];
        $nuevaCuotaCapital = $_POST['Cuota_capital'];
        $nuevaFechaPago = $_POST['Fecha_pago'];

        // Realizar validaciones si es necesario

        // Llamar a la función para editar el deudor en la base de datos
        editDeudor($id, $nuevoDeudor, $nuevaCuota, $nuevaCuotaCapital, $nuevaFechaPago);

    }
}

function showEditForm($id){
   
    $deudor = getDeudor($id);

    var_dump($deudor);
    echo"copate y mostrame el form php";
    
    echo "<form method='POST' action='editar/".$deudor->id."'>

            <label>Deudor</label>
            <input type='text' name='Deudor' value='" . $deudor->deudor . "'></input>

            <label>Cuota</label>
            <input type='text' name='Cuota' value='" . $deudor->cuota . "'></input>

            <label>Cuota_capital</label>
            <input type='text' name='Cuota_capital' value='" . $deudor->cuota_capital . "'></input>

            <label>Fecha de pago</label>
            <input type='text' name='Fecha_pago' value='" . $deudor->fecha_pago . "'></input>

        
            <input type='submit' name='editar' value='Editar'></input>  
          </form>";
       
}

function editDeudor($id,$deudor, $cuota, $cuota_capital, $fecha_pago){
    $db = new PDO('mysql:host=localhost;'.'dbname=db_deudas;charset=utf8', 'root', '');
    $query="UPDATE `pagos` SET `deudor`=?,`cuota`=?,`cuota_capital`=?, `fecha_pago`=?, WHERE id=?";
    $sentence= $db->prepare($query);
    $sentence-> execute([$_POST['deudor'],$_POST['cuota'],$_POST['cuota_capital'],$_POST['fecha_pago'],$id]);
    header('Location: ' . BASE_URL  );
}



?>
</div>
</body>
</html>





