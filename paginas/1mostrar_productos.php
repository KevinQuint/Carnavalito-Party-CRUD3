<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/tabla.css">
    <title>Tabla Productos</title>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">



<!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
  body{
    background: white;
  }
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }

</style>


<!-- Custom styles for this template -->
<link href="carousel.css" rel="stylesheet">
</head>
<body bgcolor="white">
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
   <p><a class="btn btn-outline-info" href="../index.html"  style="margin-left: 30px">Inicio</a></p>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
             <p><a class="btn btn-outline-info" href="../paginas/1mostrar_productos.php"  style="margin-left: 30px">Producto</a></p>
          </li>
          <li class="nav-item">
             <p><a class="btn btn-outline-info" href="../contacto.html"  style="margin-left: 30px">Contacto</a></p>
          </li>
          <li class="nav-item">
            <p><a class="btn btn-outline-info" href="../paginas/login.html"  style="margin-left: 30px">Login</a></p>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

    <h1 align="center">Tabla de Productos</h1>
    <div class="main-container">
    <table border="0" bgcolor="#01DF74">
    <thead>
        <tr>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
    <?php
    include("conexion.php");

    $query = "SELECT * FROM producto";
    $resultado = $conexion->query($query);
    while($row = $resultado->fetch_assoc()){
    ?>
    <tr class="hover">
        <td><?php echo $row['descrip']; ?></td>
        <td>$<?php echo $row['precio']; ?></td>
        <td><img height="100px" width="150px" src="data:image/jpg;base64,<?php echo base64_encode($row['img']); ?>"/></td>
        <th><a href="4modificar.php?code=<?php echo $row['code']; ?>">Modificar</a></th>
        <th><a href="6eliminar.php?code=<?php echo $row['code']; ?>">Eliminar</a></th>
    </tr>
    <?php
    }
    ?>
    </tbody>
    </table>
    <br><br>
    <tr align="center">
            <th colspan="6"><a href="2productos.php"><input type="submit" value="Agregar un nuevo producto ->"></a></th>
        </tr>
    </div>
</body>
</html>