<?php
require_once './Model/ProyectoModel.php';
require_once './Model/ClienteModel.php';

$proModel = new ProyectoModel();
$cliModel = new ClienteModel();
$proyectos = $proModel->cargar();

$cliente = null;
$idProyectoSeleccionado = isset($_GET['idproyecto']) ? $_GET['idproyecto'] : '';

if ($idProyectoSeleccionado) {
    $proyecto = $proModel->buscarPorId($idProyectoSeleccionado);
    if ($proyecto) {
        $cliente = $cliModel->buscarPorId($proyecto->getIdcliente());
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Asignar Proyecto a Cliente</title>
    <link rel="stylesheet" href="../Estilos/main.css">
</head>
<body>
    <div>
        <?php include 'menu.php'; ?>
        <h1>Asignar Proyecto a Cliente</h1>
        <hr>
        <form action="index.php?accion=guardarasignacion" method="post">
            <table>
                <tr>
                    <td>Proyecto:</td>
                    <td>
                        <select name="cbxIdProyecto" required onchange="location.href='?accion=guardarasignacion&idproyecto=' + this.value">
                            <option value="">Seleccione</option>
                            <?php foreach ($proyectos as $p): ?>
                                <option value="<?= $p->getIdproyecto() ?>"
                                    <?= $p->getIdproyecto() == $idProyectoSeleccionado ? 'selected' : '' ?>>
                                    <?= $p->getNombre() ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Cliente:</td>
                    <td>
                        <select name="cbxIdCliente" required>
                            <?php if ($cliente): ?>
                                <option value="<?= $cliente->getIdcliente() ?>" selected>
                                    <?= $cliente->getNombre() ?>
                                </option>
                            <?php else: ?>
                                <option value="">Seleccione un proyecto</option>
                            <?php endif; ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Rol en Proyecto:</td>
                    <td><input type="text" name="txtRol" required></td>
                </tr>

                <tr>
                    <td>Fecha Asignación:</td>
                    <td><input type="date" name="txtFecha" required></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <button type="submit">Guardar Asignación</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
