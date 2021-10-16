
<?php 
$conectar = new mysqli ("localhost", "root", "", "web");

if (!$conectar) {
    die("No hay conexión: " . mysqli_connect_error());
}

$nombre = $_POST["usuario"];
$contra = $_POST["contra"];
$correo = $_POST["correo"];

if (isset($_POST["botoning"])) {
    $query = mysqli_query($conectar, "SELECT * FROM usuarios WHERE usu = '$nombre' AND contra = '$contra'");
    $nr = mysqli_num_rows($query);

    if ($nr==1) {
        echo "<script> alert('Bienvenid@ $nombre'); window.location='../index.html'</script>";
    } else {
        echo "<script> alert('El usuario no existe o los datos son incorrectos'); window.location='login.html'</script>";
    }
}

if (isset($_POST["botonreg"])) {
    $sqlgrabar = "INSERT INTO usuarios(usu, contra, email) VALUES ('$nombre','$contra','$correo')";

  if (mysqli_query($conectar,$sqlgrabar)) {
    echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='login.html' </script>";
  }else {
    echo "Error: ".$sql."<br>" . mysqli_error($conectar);
  }
}
?>