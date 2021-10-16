<?php
include("conexion.php");
$descrip = $_POST['descrip'];
$precio = $_POST['precio'];
$img = addslashes(file_get_contents($_FILES['img']['tmp_name']));

$query = "INSERT INTO producto(descrip,precio,img) VALUES('$descrip','$precio','$img')";
$resultado = $conexion->query($query);

if ($resultado) {
    header("Location: 1mostrar_productos.php");
} else {
    echo "<center><h1>No se inserto</h1></center>";

}
?>