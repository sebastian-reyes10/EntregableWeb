<?php 
class DB {
    public static function conectar() {
        $url = "pgsql:host=localhost;port=5433;dbname=gestion_proyectos";
        $user = "postgres";
        $password = "admin123";
        $cn = new PDO($url, $user, $password);
        return $cn;
    }
}
?>
