<?php
require_once './Config/DB.php';
require_once './Entidades/Asignacion.php';

class AsignacionModel {
    private $db;

    public function __construct() {
        $this->db = DB::conectar();
    }

    public function guardar(Asignacion $asig) {
        $sql = "insert into asignacion_proyecto (idcliente, idproyecto, rol_en_proyecto, fecha_asignacion) 
                values (:idcli, :idpro, :rol, :fecha)";
        $ps = $this->db->prepare($sql);
        $ps->bindParam(":idcli", $asig->getIdcliente());
        $ps->bindParam(":idpro", $asig->getIdproyecto());
        $ps->bindParam(":rol", $asig->getRolEnProyecto());
        $ps->bindParam(":fecha", $asig->getFechaAsignacion());
        $ps->execute();
    }

    public function cargar() {
        $sql = "SELECT 
                    a.idasignacion,
                    a.idcliente,
                    a.idproyecto,
                    a.rol_en_proyecto,
                    a.fecha_asignacion,
                    c.nombre AS cliente_nombre,
                    p.nombre AS proyecto_nombre
                FROM asignacion_proyecto a
                JOIN clientes c ON a.idcliente = c.idcliente
                JOIN proyectos p ON a.idproyecto = p.idproyecto";

        $ps = $this->db->prepare($sql);
        $ps->execute();
        $filas = $ps->fetchAll();
        $asignaciones = array();

        foreach ($filas as $f) {
            $a = new Asignacion();
            $a->setIdasignacion($f['idasignacion']);
            $a->setIdcliente($f['idcliente']);
            $a->setIdproyecto($f['idproyecto']);
            $a->setRolEnProyecto($f['rol_en_proyecto']);
            $a->setFechaAsignacion($f['fecha_asignacion']);
            $a->setNombreCliente($f['cliente_nombre']);
            $a->setNombreProyecto($f['proyecto_nombre']);
            array_push($asignaciones, $a);
        }

        return $asignaciones;
    }

    public function borrar($idasignacion) {
        $sql = "delete from asignacion_proyecto where idasignacion = :idasignacion";
        $ps = $this->db->prepare($sql);
        $ps->bindParam(':idasignacion', $idasignacion);
        $ps->execute();
    }
}
?>
