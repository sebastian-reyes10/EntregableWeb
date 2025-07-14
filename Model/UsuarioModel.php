<?php
require_once './Config/DB.php';
require_once './Entidades/Usuario.php';

class UsuarioModel {
    private $db;

    public function __construct() {
        $this->db = DB::conectar();
    }

    public function guardar(Usuario $usuario) {
        $sql = "insert into usuarios (nombre, correo, clave, rol) 
                values (:nom, :correo, :clave)";
        $ps = $this->db->prepare($sql);
        $ps->bindParam(":nom", $usuario->getNombre());
        $ps->bindParam(":correo", $usuario->getCorreo());
        $ps->bindParam(":clave", $usuario->getClave());
        $ps->execute();
    }

    public function cargar() {
        $sql = "select * from usuarios";
        $ps = $this->db->prepare($sql);
        $ps->execute();
        $filas = $ps->fetchAll();
        $usuarios = array();

        foreach ($filas as $f) {
            $usu = new Usuario();
            $usu->setIdusuario($f[0]);
            $usu->setNombre($f[1]);
            $usu->setCorreo($f[2]);
            $usu->setClave($f[3]);
            array_push($usuarios, $usu);
        }

        return $usuarios;
    }

    public function borrar($idusuario) {
        $sql = "delete from usuarios WHERE idusuario = :idusuario";
        $ps = $this->db->prepare($sql);
        $ps->bindParam(':idusuario', $idusuario);
        $ps->execute();
    }
}
?>
