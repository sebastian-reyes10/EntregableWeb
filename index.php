<?php
require_once './Controller/LoginController.php';
require_once './Controller/ClienteController.php';
require_once './Controller/ProyectoController.php';
require_once './Controller/AsignacionController.php';

$accion = isset($_GET['accion']) ? $_GET['accion'] : 'login';

switch ($accion) {

    case 'login':
        $controller = new LoginController();
        $controller->login();
    break;

    case 'registrar':
        $controller = new LoginController();
        $controller->registrar();
    break;

    case 'cerrar':
        $controller = new LoginController();
        $controller->cerrar();
    break;

    case 'cargarclientes':
        $controller = new ClienteController();
        $controller->cargar();
    break;

    case 'guardarcliente':
        $controller = new ClienteController();
        $controller->guardar();
    break;

    case 'borrarcliente':
        $controller = new ClienteController();
        $controller->borrar();
    break;

    case 'cargarproyectos':
        $controller = new ProyectoController();
        $controller->cargar();
    break;

    case 'guardarproyecto':
        $controller = new ProyectoController();
        $controller->guardar();
    break;

    case 'borrarproyecto':
        $controller = new ProyectoController();
        $controller->borrar();
    break;

    case 'cargarasignaciones':
        $controller = new AsignacionController();
        $controller->cargar();
    break;

    case 'guardarasignacion':
        $controller = new AsignacionController();
        $controller->guardar();
    break;

    case 'borrarasignacion':
        $controller = new AsignacionController();
        $controller->borrar();
    break;
}
?>
