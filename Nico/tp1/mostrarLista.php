

<?php
    require_once 'fakeDb.php';
    if(isset($_GET['cant'])){
        if(($_GET['cant']==0)||(!empty($_GET['cant']))){
            $cant=$_GET['cant'];
            
        }
    }
    else
        $cant=count($equipos);
    ?>
    <ul id="listaEquipos">
        <?php for($i=0;$i<$cant;$i++ ) { ?>
        <li> <?php echo $equipos[$i] ?></li>
        <?php } ?>
    </ul>
        