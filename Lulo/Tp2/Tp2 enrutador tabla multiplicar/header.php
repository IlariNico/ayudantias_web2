<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL ?>">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

    <header>

        <h1>Limites Tablas De Multiplicar</h1>
        
        <nav>
            <ul>
                <li><a href="pi">Pi</a></li>
                <li><a href="<?php echo BASE_URL; ?>tabla/5">ver limite de tabla en 5</a></li>
                <li><a href="<?php echo BASE_URL; ?>tabla/10">ver limite de tabla en 10</a></li>
                <li><a href="<?php echo BASE_URL; ?>tabla/20">ver limite de tabla en 20</a></li>
            </ul>
        </nav>
    
        <form action="limiteTabla.php" method="GET">
    
            <label for="">Ingrese Limite de tabla de multiplicar</label>
            <input type="number" name="limit" id="">
        
            <input type="submit" >
        
        
        </form>
    
    </header>


    

</body>
</html>



