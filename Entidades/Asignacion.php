<?php
class Asignacion {
    private $idasignacion;
    private $idcliente;
    private $idproyecto;
    private $rol_en_proyecto;
    private $fecha_asignacion;
    private $nombreCliente;
    private $nombreProyecto;

    public function getIdasignacion() {
        return $this->idasignacion;
    }

    public function getIdcliente() {
        return $this->idcliente;
    }

    public function getIdproyecto() {
        return $this->idproyecto;
    }

    public function getRolEnProyecto() {
        return $this->rol_en_proyecto;
    }

    public function getFechaAsignacion() {
        return $this->fecha_asignacion;
    }

    public function getNombreCliente() {
        return $this->nombreCliente;
    }

    public function getNombreProyecto() {
        return $this->nombreProyecto;
    }

    public function setIdasignacion($idasignacion) {
        $this->idasignacion = $idasignacion;
    }

    public function setIdcliente($idcliente) {
        $this->idcliente = $idcliente;
    }

    public function setIdproyecto($idproyecto) {
        $this->idproyecto = $idproyecto;
    }

    public function setRolEnProyecto($rol_en_proyecto) {
        $this->rol_en_proyecto = $rol_en_proyecto;
    }

    public function setFechaAsignacion($fecha_asignacion) {
        $this->fecha_asignacion = $fecha_asignacion;
    }

    public function setNombreCliente($nombreCliente) {
        $this->nombreCliente = $nombreCliente;
    }

    public function setNombreProyecto($nombreProyecto) {
        $this->nombreProyecto = $nombreProyecto;
    }
}
?>
