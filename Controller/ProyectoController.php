<?php
require_once './Model/ProyectoModel.php';
require_once './Model/ClienteModel.php';
require_once './Entidades/Proyecto.php';

class ProyectoController {
    public function cargar() {
        $model = new ProyectoModel();
        $proyectos = $model->cargar();
        require_once './View/ViewCargarProyectos.php';
    }

    public function guardar() {
        $modelCliente = new ClienteModel();
        $clientes = $modelCliente->cargar();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $model = new ProyectoModel();
            $proyecto = new Proyecto();

            $proyecto->setNombre($_POST['txtNom']);
            $proyecto->setDescripcion($_POST['txtDesc']);
            $proyecto->setFechaInicio($_POST['txtFini']);
            $proyecto->setFechaFin($_POST['txtFfin']);
            $proyecto->setEstado($_POST['txtEstado']);
            $proyecto->setIdcliente($_POST['cbxIdCliente']);

            $model->guardar($proyecto);
            header('Location: index.php?accion=cargarproyectos');
            exit;
        } else {
            require_once './View/ViewGuardarProyecto.php';
        }
    }

    public function borrar() {
        if (isset($_GET['idpro'])) {
            $model = new ProyectoModel();
            $model->borrar($_GET['idpro']);
            header('Location: index.php?accion=cargarproyectos');
            exit;
        }
    }
}
?>
