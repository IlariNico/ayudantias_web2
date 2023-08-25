<?php require_once 'fakeDb.php';
?>
<html>
    <head></head>
    <body>
        <ul id="botonera">
            <li><input type="button" value="0">Mostrar 0</input></li>
            <li><input type="button" value="3">Mostrar 3</a></li>
            <li><input type="button" value="5">Mostrar 5</input></li>
            <li><input type="button" value="<?php echo count($equipos)?>">Mostrar todos</a></li>
        </ul>
        <div id="container"></div>
    </body>
    <script src="ajaxLista.js"></script>
</html>