<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo de PHTML</title>
</head>
<body>
    
    <?php require("../functions.php") ?>
    <h1>Bienvenido a mi sitio web</h1>
    
   
    <p>Hola, mi nombre es <?php echo $nombre; ?>.</p>
    <p>Tengo <?php echo $edad; ?> años de edad.</p>
 
</body>
</html>
