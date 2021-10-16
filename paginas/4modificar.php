<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/tabla2.css">
    <title>Modificar Productos</title>
</head>
<body bgcolor="white">
    <?php
    include("conexion.php");
    $code = $_REQUEST['code'];
    $query = "SELECT * FROM producto WHERE code = '$code'";
    $resultado = $conexion->query($query);
    $row = $resultado->fetch_assoc();
    ?>
    <h1 align="center">Modificar Productos</h1>
    <div class="main-container">
    <form action="5proceso_modificar.php?code=<?php echo $row['code']; ?>" method="POST" enctype="multipart/form-data">
    <table border="0" bgcolor="#01DF74" align="center">
    <tr>
        <td>Descripción del producto</td>
        <td><input type="text" name="descrip" value="<?php echo $row['descrip']; ?>" size="35" required></td>
    </tr>
    <tr>
        <td>Precio</td>
        <td><input type="text" name="precio" value="<?php echo $row['precio']; ?>" size="35" required></td>
    </tr>
    <tr>
        <td>Imagen actual</td>
        <td><img height="75px" width="125px" src="data:image/jpg;base64,<?php echo base64_encode($row['img']); ?>"/></td>
    </tr>
    <tr>
        <td>Ingrese imagen nueva</td>
        <td><input type="file" name="img" required></td>
    </tr>
    <tr align="center">
        <td colspan="2"><input type="submit" value="Confirmar"></td>
    </tr>
    </table>
    </form>
    <br><br>
    <tr>
        <td><a href="1mostrar_productos.php"><input type="submit" Value="<- Regresar"></a></td>
    </tr>
    </div>
</body>
</html>