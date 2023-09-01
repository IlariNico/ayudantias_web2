<?php

require_once "sections.php";
require_once "pi.php";
require_once "limiteTabla.php";


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
        
    case 'tabla':
        $limit = $params[1];
        showTabla($limit);
        break;

    case 'pi':
        $limit = $params[0];
        showPi();    
        break;

    default:
        echo('404 Page not found');
        break;
}

?>
