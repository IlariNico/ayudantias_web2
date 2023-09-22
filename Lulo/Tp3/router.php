<?php

require_once 'home.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// Lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // Acción por defecto si no se envía
}

// Parsea la acción Ej: tabla/5 --> ['tabla', 5]
$params = explode('/', $action);

// Determina qué camino seguir según la acción
switch ($params[0]) {
    case 'home':
        showHome();
        break;

    case 'deudor':
        getDeudor($params[1]);
        break;   

    case 'crear':
        createDeudor();
        break;
        
    case 'editar':
            // Verifica si se está procesando el formulario de edición
            if (!empty($_POST['editar'])) {
                
                modifyDeudor($params[1]);
            } else {
                // Muestra el formulario de edición
                
                showEditForm($params[1]);
            }
            break;
    

    case 'eliminar':
        deleteDeudor($params[1]);
        break;    
      
}

?>