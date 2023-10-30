<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../CSS/stylo.css">
</head>
<body style="background-image: url('../img/m.jpg'); background-size: cover;">
    <div class="form-container">
        <form method="post">
            <h1>REGISTRATE</h1>
            <input type="email" name="email" placeholder="USUARIO">
            <input type="password" name="name" placeholder="CONTRASEÑA">
            <input type="submit" name="register">
        </form>
        <img src="../img/r.jpg" alt="Imagen de encima del formulario" class="small-image">
    </div>
    <?php
    include("../PROCESO/registrar.php");
    ?>
</body>
</html>
