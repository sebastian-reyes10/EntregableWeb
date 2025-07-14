<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
    <link rel="stylesheet" href="../Estilos/main.css">
</head>
<body>
    <div class="contenedor">
        <h1>Registrar Usuario</h1>
        <hr>
        <form action="index.php?accion=registrar" method="post">
            <table>
                <tr>
                    <td>Nombre:</td>
                    <td><input type="text" name="txtNom" required></td>
                </tr>
                <tr>
                    <td>Correo:</td>
                    <td><input type="email" name="txtCorreo" required></td>
                </tr>
                <tr>
                    <td>Clave:</td>
                    <td><input type="password" name="txtClave" required></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit">Registrar</button></td>
                </tr>
            </table>
        </form>

        <div class="registro-footer">
            ¿Ya tienes una cuenta? <a href="../index.php?accion=login">Iniciar sesión</a>
        </div>
    </div>
</body>
</html>
