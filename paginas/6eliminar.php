<?php
include("conexion.php");

$code = $_REQUEST['code'];

$query = "DELETE FROM producto WHERE code = '$code'";
$resultado = $conexion->query($query);

if ($resultado) {
    header("Location:1mostrar_productos.php");
} else {
    echo "<center><h1>No se elimino</h1></center>";

}
?>