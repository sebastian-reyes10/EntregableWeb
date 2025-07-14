<?php
require_once './Model/AsignacionModel.php';
require_once './Model/ClienteModel.php';
require_once './Model/ProyectoModel.php';
require_once './Entidades/Asignacion.php';

class AsignacionController {
    public function cargar() {
        $model = new AsignacionModel();
        $asignaciones = $model->cargar();
        require_once './View/ViewCargarAsignaciones.php';
    }

    public function guardar() {
        $modelCliente = new ClienteModel();
        $modelProyecto = new ProyectoModel();
        $clientes = $modelCliente->cargar();
        $proyectos = $modelProyecto->cargar();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $model = new AsignacionModel();
            $asig = new Asignacion();

            $asig->setIdcliente($_POST['cbxIdCliente']); 
            $asig->setIdproyecto($_POST['cbxIdProyecto']);
            $asig->setRolEnProyecto($_POST['txtRol']);
            $asig->setFechaAsignacion($_POST['txtFecha']);

            $model->guardar($asig);
            header('Location: index.php?accion=cargarasignaciones');
            exit;
        } else {
            require_once './View/ViewGuardarAsignacion.php';
        }
    }

    public function borrar() {
        if (isset($_GET['idasig'])) {
            $model = new AsignacionModel();
            $model->borrar($_GET['idasig']);
            header('Location: index.php?accion=cargarasignaciones');
            exit;
        }
    }
}
?>
