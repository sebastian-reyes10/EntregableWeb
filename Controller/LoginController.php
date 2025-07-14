<?php
require_once './Model/UsuarioModel.php';
require_once './Entidades/Usuario.php';
session_start();

class LoginController {
    public function login() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = $_POST['txtNom'];
        $clave = $_POST['txtClave'];

        $modelo = new UsuarioModel();
        $usuarios = $modelo->cargar();

        foreach ($usuarios as $u) {
            if ($u->getNombre() === $nombre && $u->getClave() === $clave) {
                $_SESSION['usuario'] = $u->getNombre();
                header('Location: View/menu.php');
                return;
            }
        }

        header('Location: view/viewLogin.php?error=1');
    } else {
        require_once './View/ViewLogin.php';
    }
}

    public function registrar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usuario = new Usuario();
            $usuario->setNombre($_POST['txtNom']);
            $usuario->setCorreo($_POST['txtCorreo']);
            $usuario->setClave($_POST['txtClave']);

            $modelo = new UsuarioModel();
            $modelo->guardar($usuario);

            header('Location: index.php?accion=login');
        } else {
            require_once './View/ViewRegistrar.php';
        }
    }

    public function cerrar() {
        session_destroy();
        header('Location: index.php?accion=login');
    }
}
?>
