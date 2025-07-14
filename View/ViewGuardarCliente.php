<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Cliente</title>
    <link rel="stylesheet" href="../Estilos/main.css">
</head>
<body>
    <div>
        <?php 
            include 'menu.php';
        ?>
        <h1>Registrar Cliente</h1>
        <hr>
        <form action="index.php?accion=guardarcliente" method="post">
            <table>
                <tr>
                    <td>Nombre:</td>
                    <td><input type="text" name="txtNom" required></td>
                </tr>
                <tr>
                    <td>DNI:</td>
                    <td><input type="text" name="txtDni" maxlength="8" required></td>
                </tr>
                <tr>
                    <td>Correo:</td>
                    <td><input type="email" name="txtCorreo"></td>
                </tr>
                <tr>
                    <td>Teléfono:</td>
                    <td><input type="text" name="txtTel"></td>
                </tr>
                <tr>
                    <td>Dirección:</td>
                    <td><input type="text" name="txtDir"></td>
                </tr>
                <tr>
                    <td>Fecha Registro:</td>
                    <td><input type="date" name="txtFecha" required></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit">Guardar Cliente</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
