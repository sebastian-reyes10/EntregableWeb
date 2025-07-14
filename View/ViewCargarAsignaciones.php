<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignaciones</title>
    <link rel="stylesheet" href="../Estilos/main.css">
</head>
<body>
    <div>
        <?php 
            include 'menu.php';
        ?>
        <h1>Lista de Asignaciones</h1>
        <a href="../index.php?accion=guardarasignacion">
            <button style="margin-bottom: 10px;">Nuevo</button>
        </a>
        <hr>
        <table border="1">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Cliente</td>
                    <td>Proyecto</td>
                    <td>Rol en Proyecto</td>
                    <td>Fecha Asignación</td>
                    <td>Borrar</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($asignaciones as $a): ?>
                <tr>
                    <td><?= $a->getIdasignacion() ?></td>
                    <td><?= $a->getNombreCliente() ?></td>
                    <td><?= $a->getNombreProyecto() ?></td>
                    <td><?= $a->getRolEnProyecto() ?></td>
                    <td><?= $a->getFechaAsignacion() ?></td>
                    <td>
                        <a href="../index.php?accion=borrarasignacion&idasig=<?= $a->getIdasignacion() ?>">Borrar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
