<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "usuario";
$port ="3306";

$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname, $port);
if (!$conn) {
    die("No hay conexión: " . mysqli_connect_error());
}

$username = $_POST["username"];
$password = $_POST["password"];

if (!empty($username) && !empty($password)) {
    // Corrección en la consulta SQL
    $query = mysqli_query($conn, "SELECT * FROM datos where email = '".$username."' and nombre = '".$password."'");
    $nr = mysqli_num_rows($query);

    if ($nr == 1) {
        // Redireccionar a la página de bienvenida
        header("Location: ../capa_vista/menu.html");
        exit();
    } else {
        echo "No ingresó";
    }
} else {
    echo "Usuario y/o contraseña vacíos";
}
?>