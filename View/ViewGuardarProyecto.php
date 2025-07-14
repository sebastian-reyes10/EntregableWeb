<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Proyecto</title>
    <link rel="stylesheet" href="../Estilos/main.css">

</head>
<body>
    <div>
        <?php 
            include 'menu.php';
        ?>
        <h1>Registrar Proyecto</h1>
        <hr>
        <form action="index.php?accion=guardarproyecto" method="post">
            <table>
                <tr>
                    <td>Nombre:</td>
                    <td><input type="text" name="txtNom" required></td>
                </tr>
                <tr>
                    <td>Descripción:</td>
                    <td><input type="text" name="txtDesc"></td>
                </tr>
                <tr>
                    <td>Fecha Inicio:</td>
                    <td><input type="date" name="txtFini"></td>
                </tr>
                <tr>
                    <td>Fecha Fin:</td>
                    <td><input type="date" name="txtFfin"></td>
                </tr>
                <tr>
                    <td>Estado:</td>
                    <td>
                        <select name="txtEstado" required>
                            <option value="seleccione estado">Selecciona estado</option>
                            <option value="inactivo">Activo</option>
                            <option value="activo">Inactivo</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Cliente:</td>
                    <td>
                        <select name="cbxIdCliente" required>
                            <option value="">Seleccione</option>
                            <?php 
                            foreach ($clientes as $c): 
                            ?>
                                <option value="<?= $c->getIdcliente() ?>"><?= $c->getNombre() ?></option>
                            <?php 
                            endforeach; 
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit">Guardar Proyecto</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
