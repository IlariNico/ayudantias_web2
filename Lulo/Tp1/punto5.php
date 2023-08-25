<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 5</title>
</head>
<body>

<!-- 

Todo esto se debe a un atributo llamado step. Step es como de cuánto en cuanto puede incrementar o reducirse el número del input.

Por defecto, step es 1; así que sólo permite saltar entre múltiplos de dicho valor.

Pero si ponemos step=”0.1″ podremos aumentar de 0.1 en 0.1, y así sucesivamente.

Para poder incrementar o reducir sin límites, podemos establecer step=”any” que se traduce como “cualquiera”.

-->
    <form action="imc.php" method="GET">
      <label for="">Peso</label>
      <input type="number" name="peso" step="any" placeholder="ingrese su peso">

      <label for="">Altura</label>
      <input type="number" name="altura" step="any" placeholder="ingrese su altura">

      <input type="submit">

    </form>
    
</body>
</html>