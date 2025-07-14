<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../estilos/main.css">
</head>
<body>
    <div class="contenedor">
        <h1>Iniciar Sesión</h1>
        <hr>

        <?php if (isset($_GET['error'])): ?>
            <p style="color:red;">Correo o clave incorrectos</p>
        <?php endif; ?>

        <form action="../index.php?accion=login" method="post">
            <table>
                <tr>
                    <td>Usuario:</td>
                    <td><input type="text" name="txtNom" required></td>
                </tr>
                <tr>
                    <td>Clave:</td>
                    <td><input type="password" name="txtClave" required></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit">Ingresar</button></td>
                </tr>
            </table>
        </form>

        <div class="registro-footer">
            ¿No tienes cuenta? <a href="../index.php?accion=registrar">Regístrate</a>
        </div>
    </div>
</body>
</html>
