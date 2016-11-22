<?php
require_once 'inc/datenbank.inc.php'; // holt $db
require_once 'inc/funktionen.inc.php';
require_once 'src/Entities/Buch.php';

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'index';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$controllerName = ucfirst($controller) . 'Controller';
$controllerFile = 'src/Controllers/' . $controllerName . '.php';

if (file_exists($controllerFile)) {
    require_once $controllerFile;

    $requestController = new $controllerName($db);
    $requestController->run($action);
}