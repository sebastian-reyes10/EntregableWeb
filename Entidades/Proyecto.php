<?php
class Proyecto {
    private $idproyecto;
    private $nombre;
    private $descripcion;
    private $fecha_inicio;
    private $fecha_fin;
    private $estado;
    private $idcliente;

    public function getIdproyecto() {
        return $this->idproyecto;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getFechaInicio() {
        return $this->fecha_inicio;
    }

    public function getFechaFin() {
        return $this->fecha_fin;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getIdcliente() {
        return $this->idcliente;
    }

    public function setIdproyecto($idproyecto) {
        $this->idproyecto = $idproyecto;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setFechaInicio($fecha_inicio) {
        $this->fecha_inicio = $fecha_inicio;
    }

    public function setFechaFin($fecha_fin) {
        $this->fecha_fin = $fecha_fin;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function setIdcliente($idcliente) {
        $this->idcliente = $idcliente;
    }
}
?>
