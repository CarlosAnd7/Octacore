<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <link href="CSS/visualizar.css" rel="stylesheet" type="text/css">
  <link href="CSS/selectores.css" rel="stylesheet" type="text/css">
  <meta charset="utf-8">
  <title>Inventario</title>
</head>

<body>
  <?php
  include_once("CabeceraNav.html");
  include_once("modelo/conexion.php");
  $conexion = new conexion();
  $conexion->conectar();
  $con = $conexion->con;
  $producto = "SELECT * FROM producto";
  ?>
  <h1>Inventario</h1>
  <!-- para limitar y ordenar los elementos de la tabla -->
  <div class=".accordion-flush" id="accordion">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Opciones
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapsing" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <form action="Inventario.php" method="POST">
          <div class="accordion-body">
            <h5>Limitar Búsqueda</h5>
            <input list="numeros" name="limite" value="" placeholder="Todos">
            <datalist id="numeros">
              <option value="10">
              <option value="20">
              <option value="30">
              <option value="Todos">
          </div>
          <div class="accordion-body">
            <h5>Ordenar por <h5>
                <input list="campos" name="orden" value="" placeholder="ID Producto"> 
                <datalist id="campos">
                  <option value="ID Producto">
                  <option value="No. de piezas">
                  <option value="Nombre">
                  <option value="Descripcion">
                  <option value="Precio">
                  <option value="ID Proveedor">
          </div>
          <div class="accordion-body">
            <input type="submit" value="Aplicar">
          </div>
        </form>
      </div>
    </div>
    <!-- para listar los elementos -->
    <div class="visualizar">
      <table class="table table-hover table-responsive">
        <thead class="table-dark">
          <tr>
            <th scope="col">ID Producto</th>
            <th scope="col">No. de piezas</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Precio</th>
            <th scope="col">ID Proveedor</th>
            <th scope="col">Actualizar</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // variable limite y orden que toman los valores de la tabla que contiene los filtros
          $limite = "";
          $orden = "";
          if (!isset($_POST["limite"]) || $_POST["limite"] == "") {
            $limite = "Todos";
          } else {
            $limite = $_POST["limite"];
          }
          if (!isset($_POST["orden"]) || $_POST["orden"] == "") {
            $orden = "productoID";
          } else {
            $orden = $_POST["orden"];
            switch ($orden) {
              case "ID Producto":
                $orden = "productoID";
                break;
              case "No. de piezas":
                $orden = "numPiezas";
                break;
              case "Nombre":
                $orden = "nombre";
                break;
              case "Descripcion":
                $orden = "descripcion";
                break;
              case "Precio":
                $orden = "precio";
                break;
              case "ID Proveedor":
                $orden = "proveedorID";
                break;
            }
          }
          if ($limite == "Todos") {
            $producto = "SELECT * FROM producto ORDER BY " . $orden . " ASC;";
          } else {
            $producto = "SELECT * FROM producto ORDER BY " . $orden . " ASC LIMIT " . $limite . ";";
          }
          //Leer registros
          $registros = mysqli_query($con, $producto);
          // Mostrar registros:
          while ($row = mysqli_fetch_array($registros)) {
          ?>
            <form action="./updProducto.php" method="POST">
              <tr>
                <th scope="row"><?php echo $row["productoID"] ?></th>
                <th scope="row"><?php echo $row["numPiezas"] ?></th>
                <th scope="row"><?php echo $row["nombre"] ?></th>
                <th scope="row"><?php echo $row["descripcion"] ?></th>
                <th scope="row"><?php echo $row["precio"] ?></th>
                <th scope="row"><?php echo $row["proveedorID"] ?></th>

                <input type="hidden" name="id[]" value="<?php echo $row["productoID"]; ?>">
                <input type="hidden" name="numPiezas[]" value="<?php echo $row["numPiezas"]; ?>">
                <input type="hidden" name="nombre[]" value="<?php echo $row["nombre"]; ?>">
                <input type="hidden" name="descripcion[]" value="<?php echo $row["descripcion"]; ?>">
                <input type="hidden" name="precio[]" value="<?php echo $row["precio"]; ?>">
                <input type="hidden" name="proveedorID[]" value="<?php echo $row["proveedorID"]; ?>">

                <th scope="row">
                  <div class="button">
                    <input type="image" name="" src="./IMG/actualizar.png" width="20%" height="20%">
                  </div>
                </th>
              </tr>
            </form>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-12 lg6" align="Center">
          <form class="button" action="./ingProducto.php">
            <input type="image" name="" src="./IMG/anadir.png">
          </form>
          <div class="col-12 lg6">
            <h3>Ingresar Producto</h3>
          </div>
        </div>
        <div class="col-12 lg6" align="Center">
          <form class="button" action="delProducto.php">
            <input type="image" name="" src="./IMG/eliminar.png">
          </form>
          <div class="col-12 lg6">
            <h3>Eliminar Producto</h3>
          </div>
        </div>
      </div>
    </div>
</body>

</html>