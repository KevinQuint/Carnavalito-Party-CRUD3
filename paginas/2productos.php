<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/tabla2.css">
    <title>Alta de Productos</title>
</head>
<body bgcolor="white">
    <h1 align="center" style="padding-top: 10px; padding-bottom:0%; font-size:40px;">Alta de Productos</h1>
    <div class="main-container">
    <form action="3resultado_productos.php" method="POST" enctype="multipart/form-data">
    <table border="0" bgcolor="#01DF74" align="center">
    <tr>
        <td>Ingrese descripción del producto</td>
        <td><input type="text" name="descrip" size="35" required></td>
    </tr>
    <tr>
        <td>Ingrese precio</td>
        <td><input type="text" name="precio" size="35" required></td>
    </tr>
    <tr>
        <td>Ingrese Imagen</td>
        <td><input type="file" name="img" size="35" required></td>
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