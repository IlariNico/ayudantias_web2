<html>
<head></head>
<body>
<div class="container">
<?php
$db = new PDO('mysql:host=localhost;'
.'dbname=dbayudantias;charset=utf8'
, 'root', '');

function getMateriaById($db,$id){
    $query="SELECT * FROM materia WHERE id=?";
    $sentence= $db->prepare($query);
    $sentence-> execute([$id]);
    return ($sentence->fetch(PDO::FETCH_OBJ));
}

function getMaterias($db){
    $query="SELECT * FROM materia";
    $sentence= $db->prepare($query);
    $sentence-> execute();
    return ($sentence->fetchAll(PDO::FETCH_OBJ));
}

function showhome(){
    GLOBAL $db;
    $materias=getMaterias($db);
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
            <th>Nombre de la Materia</th>
            <th>ID de Carrera</th>
            <th>Nombre del Profesor</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>";
    $carreras = getCarreras($db);

    echo "<form method='POST' action='crear'>
        <label>Nombre</label>
        <input type='text' name='Nombre' '></input>
        <label>Profesor</label>
        <input type='text' name='Profesor'></input>
        <label>Carrera</label>
        <select name='id_carrera'>";
        
    foreach ($carreras as $carrera) {
        echo "<option value='" . $carrera->id . "'>" . $carrera->nombre . "</option>";
    }

    echo "</select>
    <input type='submit' value='crear'></input>
    </form>";

foreach ($materias as $materia) {
    echo "<tr>
        <td>" . $materia->nombre . "</td>
        <td>" . $materia->id_carrera . "</td>
        <td>" . $materia->profesor . "</td>
        <td>
            
            <a href='".BASE_URL."eliminar/" . $materia->id . "'>Eliminar</a>
            <a href='".BASE_URL."modificar/" . $materia->id . "'>Modificar</a>
        </td>
    </tr>";
}

echo "</tbody>
</table>";
}

function getCarreras($db){
    $query="SELECT * FROM carrera";
    $sentence= $db->prepare($query);
    $sentence-> execute();
    return ($sentence->fetchAll(PDO::FETCH_OBJ));
}

function modify($id){
    GLOBAL $db;
    $materia = getMateriaById($db, $id);
    $carreras = getCarreras($db);

    echo "<form method='POST' action='".BASE_URL."modificar/".$materia->id."'>
        <label>Nombre</label>
        <input type='text' name='Nombre' value='" . $materia->nombre . "'></input>
        <label>Profesor</label>
        <input type='text' name='Profesor' value='" . $materia->profesor . "'></input>
        <label>Carrera</label>
        <select name='id_carrera'>";
        
    foreach ($carreras as $carrera) {
        echo "<option value='" . $carrera->id . "'>" . $carrera->nombre . "</option>";
    }

    echo "</select>
    <input type='submit' value='modificar'></input>
    </form>";
}

function replace($id){
    GLOBAL $db;
    $query="UPDATE `materia` SET `profesor`=?,
    `nombre`=?,`id_carrera`=? WHERE id=?";
    $sentence= $db->prepare($query);
    $sentence-> execute([$_POST['Profesor'],$_POST['Nombre'],$_POST['id_carrera'],$id]);
    header('Location: ' . BASE_URL  );
}

function delete($id){
    GLOBAL $db;
    $query="DELETE FROM `materia` WHERE id=?";
    $sentence= $db->prepare($query);
    $sentence-> execute([$id]);
    header('Location: ' . BASE_URL  );
}

function create(){
    GLOBAL $db;
    $query="INSERT INTO `materia`( `profesor`, `nombre`, `id_carrera`) VALUES (?,?,?)";
    $sentence= $db->prepare($query);
    $sentence-> execute([$_POST['Nombre'],$_POST['Profesor'],$_POST['id_carrera']]);
    header('Location: ' . BASE_URL  );
}


    GLOBAL $db;
    
?>
</div>
</body>
</html>