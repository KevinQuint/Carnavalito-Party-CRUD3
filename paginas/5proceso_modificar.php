<?php
include("conexion.php");

$code = $_REQUEST['code'];

$descrip = $_POST['descrip'];
$precio = $_POST['precio'];
$img = addslashes(file_get_contents($_FILES['img']['tmp_name']));

$query = "UPDATE producto SET descrip='$descrip', precio='$precio', img='$img' WHERE code = '$code'";
$resultado = $conexion->query($query);

if ($resultado) {
    header("Location: 1mostrar_productos.php");
} else {
    echo "<center><h1>No se modifico</h1></center>";

}
?>
