<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="../Estilos/main.css">
</head>
<body>
    <div>
        <?php 
            include 'menu.php';
        ?>
        <h1>Lista de Clientes</h1>
        <a href="../index.php?accion=guardarcliente">
            <button style="margin-bottom: 10px;">Nuevo</button>
        </a>
        <hr>
        <table border="1">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>DNI</td>
                    <td>Correo</td>
                    <td>Teléfono</td>
                    <td>Dirección</td>
                    <td>Fecha Registro</td>
                    <td>Borrar</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($clientes as $cli): 
                ?>
                <tr>
                    <td><?= $cli->getIdcliente() ?></td>
                    <td><?= $cli->getNombre() ?></td>
                    <td><?= $cli->getDni() ?></td>
                    <td><?= $cli->getCorreo() ?></td>
                    <td><?= $cli->getTelefono() ?></td>
                    <td><?= $cli->getDireccion() ?></td>
                    <td><?= $cli->getFechaRegistro() ?></td>
                    <td><a href="../index.php?accion=borrarcliente&idcli=<?= $cli->getIdcliente() ?>">Borrar</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
