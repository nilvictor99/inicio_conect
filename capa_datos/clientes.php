<!DOCTYPE html>
<html>
<head>
	<title>REGISTRAR_CLIENTES</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../CSS/styli.css">
</head>
<body style="background-image: url('../img/m.jpg'); background-size: cover;">
    <div class="form-container">
        <form method="post">
            <h1>REGISTRAR_CLIENTES</h1>
            <label for="nombre">nombre:</label>
        <input type="text" name="nombre" required>
        <label for="apellido">apellido:</label>
        <input type="text" name="apellido" required>
        <label for="dni">dni:</label>
        <input type="text" name="dni" required>
        <label for="email">email:</label>
        <input type="email" name="correo" required>
        <input type="submit" name="register">
        </form>
        <img src="../img/r.jpg" alt="Imagen de encima del formulario" class="small-image">
    </div>
    <?php
    include("../capa_datos/registrar_clientes.php");
    ?>
</body>
</html>