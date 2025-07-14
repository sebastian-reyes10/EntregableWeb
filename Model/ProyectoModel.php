<?php
require_once './Config/DB.php';
require_once './Entidades/Proyecto.php';

class ProyectoModel {
    private $db;

    public function __construct() {
        $this->db = DB::conectar();
    }

    public function guardar(Proyecto $proyecto) {
        $sql = "insert into proyectos (nombre, descripcion, fecha_inicio, fecha_fin, estado, idcliente) 
                values (:nom, :desc, :fini, :ffin, :est, :idcli)";
        $ps = $this->db->prepare($sql);
        $ps->bindParam(":nom", $proyecto->getNombre());
        $ps->bindParam(":desc", $proyecto->getDescripcion());
        $ps->bindParam(":fini", $proyecto->getFechaInicio());
        $ps->bindParam(":ffin", $proyecto->getFechaFin());
        $ps->bindParam(":est", $proyecto->getEstado());
        $ps->bindParam(":idcli", $proyecto->getIdcliente());
        $ps->execute();
    }

    public function cargar() {
        $sql = "select * from proyectos";
        $ps = $this->db->prepare($sql);
        $ps->execute();
        $filas = $ps->fetchAll();
        $proyectos = array();

        foreach ($filas as $f) {
            $pro = new Proyecto();
            $pro->setIdproyecto($f[0]);
            $pro->setNombre($f[1]);
            $pro->setDescripcion($f[2]);
            $pro->setFechaInicio($f[3]);
            $pro->setFechaFin($f[4]);
            $pro->setEstado($f[5]);
            $pro->setIdcliente($f[6]);
            array_push($proyectos, $pro);
        }

        return $proyectos;
    }

    public function borrar($idproyecto) {
        $sql = "delete from proyectos where idproyecto = :idproyecto";
        $ps = $this->db->prepare($sql);
        $ps->bindParam(':idproyecto', $idproyecto);
        $ps->execute();
    }

    public function buscarPorId($id) {
        $sql = "select * from proyectos where idproyecto = :id";
        $ps = $this->db->prepare($sql);
        $ps->bindParam(':id', $id);
        $ps->execute();
        $fila = $ps->fetch();

        if ($fila) {
            $p = new Proyecto();
            $p->setIdproyecto($fila[0]);
            $p->setNombre($fila[1]);
            $p->setDescripcion($fila[2]);
            $p->setFechaInicio($fila[3]);
            $p->setFechaFin($fila[4]);
            $p->setEstado($fila[5]);
            $p->setIdcliente($fila[6]);
            return $p;
        }

        return null;
    }
}
?>
