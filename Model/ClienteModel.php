<?php
require_once './Config/DB.php';
require_once './Entidades/Cliente.php';

class ClienteModel {
    private $db;

    public function __construct() {
        $this->db = DB::conectar();
    }

    public function guardar(Cliente $cliente) {
        $sql = "insert into clientes (nombre, dni, correo, telefono, direccion, fecha_registro) 
                values (:nom, :dni, :correo, :tel, :dir, :fechre)";
        $ps = $this->db->prepare($sql);
        $ps->bindParam(":nom", $cliente->getNombre());
        $ps->bindParam(":dni", $cliente->getDni());
        $ps->bindParam(":correo", $cliente->getCorreo());
        $ps->bindParam(":tel", $cliente->getTelefono());
        $ps->bindParam(":dir", $cliente->getDireccion());
        $ps->bindParam(":fechre", $cliente->getFechaRegistro()); // ← Corregido aquí
        $ps->execute();
    }

    public function cargar() {
        $sql = "select * from clientes";
        $ps = $this->db->prepare($sql);
        $ps->execute();
        $filas = $ps->fetchAll();
        $clientes = array();

        foreach ($filas as $f) {
            $cli = new Cliente();
            $cli->setIdcliente($f[0]);
            $cli->setNombre($f[1]);
            $cli->setDni($f[2]);
            $cli->setCorreo($f[3]);
            $cli->setTelefono($f[4]);
            $cli->setDireccion($f[5]);
            $cli->setFechaRegistro($f[6]);
            array_push($clientes, $cli);
        }

        return $clientes;
    }

    public function borrar($idcliente) {
        $sql = "delete from clientes where idcliente = :idcliente";
        $ps = $this->db->prepare($sql);
        $ps->bindParam(':idcliente', $idcliente);
        $ps->execute();
    }

    public function buscarPorId($id) {
    $sql = "select * from clientes WHERE idcliente = :id";
    $ps = $this->db->prepare($sql);
    $ps->bindParam(":id", $id);
    $ps->execute();
    $fila = $ps->fetch();
    if ($fila) {
        $c = new Cliente();
        $c->setIdcliente($fila[0]);
        $c->setNombre($fila[1]);
        $c->setDni($fila[2]);
        $c->setCorreo($fila[3]);
        $c->setTelefono($fila[4]);
        $c->setDireccion($fila[5]);
        $c->setFechaRegistro($fila[6]);
        return $c;
    }
    return null;

}

}
?>
