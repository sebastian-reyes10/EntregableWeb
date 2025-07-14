<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="../Estilos/main.css">
</head>
<body>
    <div>
        <?php 
            include 'menu.php';
        ?>
        <h1>Lista de Proyectos</h1>
        <a href="../index.php?accion=guardarproyecto">
            <button style="margin-bottom: 10px;">Nuevo</button>
        </a>
        <hr>
        <table border="1">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Descripción</td>
                    <td>Fecha Inicio</td>
                    <td>Fecha Fin</td>
                    <td>Estado</td>
                    <td>ID Cliente</td>
                    <td>Borrar</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($proyectos as $pro): 
                ?>
                <tr>
                    <td><?= $pro->getIdproyecto() ?></td>
                    <td><?= $pro->getNombre() ?></td>
                    <td><?= $pro->getDescripcion() ?></td>
                    <td><?= $pro->getFechaInicio() ?></td>
                    <td><?= $pro->getFechaFin() ?></td>
                    <td><?= $pro->getEstado() ?></td>
                    <td><?= $pro->getIdcliente() ?></td>
                    <td><a href="../index.php?accion=borrarproyecto&idpro=<?= $pro->getIdproyecto() ?>">Borrar</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
