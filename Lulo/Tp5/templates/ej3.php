<!DOCTYPE html>
<html>
<head>
    <title>Lista de Frutas</title>
</head>
<body>
    <?php require_once("../arregloFrutas.php") ?>
    <h1>Lista de Frutas</h1>
    <ul>
    <?php foreach($fruits as $fruit): ?>
        <?php
            $formatearFruta = strtoupper ($fruit); // Inicialmente, el texto se mantiene igual
            if ($fruit == 'bananas') {
                $formatearFruta = '<span style="color: yellow;">' . ucfirst($fruit) . '</span>';
            }
        ?>
        <li><?php echo $formatearFruta; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
