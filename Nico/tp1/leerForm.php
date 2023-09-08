
<!DOCTYPE html>
<html>
<head>
    <title>Formulario PHP</title>
</head>
<body>

<h2>Formulario de Prueba</h2>


<div id="container">
<form id="formu" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text"   name="nombre" required><br><br>
    
    <label for="email">Email:</label>
    <input type="email"  name="email" required><br><br>
    
    <label for="edad">Edad:</label>
    <input type="number" name="edad" required><br><br>
    
    <input type="submit" value="Enviar">
</form>
</div>
<script src="ajax.js"></script>
</body>
</html>

