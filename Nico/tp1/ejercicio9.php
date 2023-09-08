<html>
    <?php $intereses=['gaming','deportes','ajedrez','lectura'];?>
    <head></head>
    <body>
        <form action="login.php">
            <label for="">Nombre</label>
            <input type="text" name="nombre" >
            <label for="">Apellido</label>
            <input type="text" name="apellido" >
            <label for="">Edad</label>
            <input type="number" name="edad" >
            <label for="">Genero</label>
            <input type="radio" name="genero">Hombre
            <input type="radio" name="genero">Mujer
            <input type="radio" name="genero">No binario
            <label for="">Pais</label>
            <select name="pais">
                <option value="usa">United States</option>
                <option value="canada">Canada</option>
                <option value="uk">United Kingdom</option>
            </select>
            <label for="">Intereses</label>
            <?php foreach($intereses as $interes) {?>
            <input type="checkbox" name="intereses[]" value="<?php echo $interes?>"><?php echo $interes; ?>
            <?php } ?>
            <input type="submit">
        </form>
    </body>
</html>