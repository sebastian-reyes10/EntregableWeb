<?php
require_once './Model/ClienteModel.php';

class ClienteController {
    public function cargar() {
        $model = new ClienteModel();
        $clientes = $model->cargar();
        require_once './View/ViewCargarClientes.php';
    }

    public function guardar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $model = new ClienteModel();
            $cliente = new Cliente();

            $cliente->setNombre($_POST['txtNom']);
            $cliente->setDni($_POST['txtDni']);
            $cliente->setCorreo($_POST['txtCorreo']);
            $cliente->setTelefono($_POST['txtTel']);
            $cliente->setDireccion($_POST['txtDir']);
            $cliente->setFechaRegistro($_POST['txtFecha']);

            $model->guardar($cliente);
            header('Location: index.php?accion=cargarclientes');
        } else {
            require_once './View/ViewGuardarCliente.php';
        }
    }

    public function borrar() {
        if (isset($_GET['idcli'])) {
            $model = new ClienteModel();
            $model->borrar($_GET['idcli']);
            header('Location: index.php?accion=cargarclientes');
        }
    }
}
?>
