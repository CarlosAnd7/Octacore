<!DOCTYPE html>
<html lang="en" dir="ltr">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<link href="CSS/visualizar.css" rel="stylesheet" type="text/css">
<link href="CSS/selectores.css" rel="stylesheet" type="text/css">
  <head>
    <meta charset="utf-8">
    <title>Proveedores</title>
    <?php
    include_once("CabeceraNav.html");
    include_once("./modelo/conexion.php");
    $conexion=new conexion();
    $conexion->conectar();
    $con=$conexion->con;
    $proveedor="SELECT * FROM proveedor";
    ?>
    <h1>Proveedores</h1>
  </head>
  <body>
    <!-- para limitar y ordenar los elementos de la tabla -->

      <div class=".accordion-flush" id="accordion">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Opciones
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapsing" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <form action="./Proveedores.php" method="POST">  <!-- se cambia -->
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
                  <input list="campos" name="orden" value="" placeholder="ID Proveedor">  <!-- se cambia -->
                  <datalist id="campos">
                      <option value="ID Proveedor">
                      <option value="Nombre">
                      <option value="Telefono">
                      <option value="Direccion">
                      <option value="Correo">
                      <option value="Empresa">
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
        <th scope="col">ID Proveedor</th>
        <th scope="col">Nombre</th>
        <th scope="col">Tel&eacute;fono</th>
        <th scope="col">Direcci&oacute;n</th>
        <th scope="col">Correo</th>
        <th scope="col">Empresa</th>
        <th scope="col">Actualizar</th>
      </tr>
    </thead>
    <tbody>
    <?php
      // variable limite y orden que toman los valores de la tabla que contiene los filtros
      $limite="";
      $orden="";
      $proveedor="SELECT * FROM proveedor";
      if(!isset($_POST["limite"])||$_POST["limite"]==""){
        $limite="Todos";
      }
      else{
        $limite=$_POST["limite"];
      }
      if(!isset($_POST["orden"])||$_POST["orden"]==""){
        $orden="proveedorID";
      }
      else{
        $orden=$_POST["orden"];
        switch ($orden){
          case "ID Proveedor": $orden="proveedorID";
          break;
          case "Nombre": $orden="nombreProveedor";
          break;
          case "Telefono": $orden="telefono";
          break;
          case "Direccion": $orden="direccion";
          break;
          case "Correo": $orden="correo";
          break;
          case "Empresa": $orden="empresa";
          break;
        }
      }
      if($limite=="Todos"){
        $proveedor="SELECT * FROM proveedor ORDER BY ".$orden." ASC;";
      }
      else{
        $proveedor="SELECT * FROM proveedor ORDER BY ".$orden." ASC LIMIT ".$limite.";";
      }
      //
        //Leer registros
        $registros = mysqli_query($con, $proveedor);
        // Mostrar registros:
        //$i=1;
        while ($row = mysqli_fetch_array($registros)) {
          ?>
          <form action="./updProveedor.php" method="POST">
            <tr>
              <th scope="row"><?php echo $row["proveedorID"] ?></th>
              <td scope="row"><?php echo $row["nombreProveedor"] ?></td>
              <td scope="row"><?php echo $row["telefono"] ?></td>
              <td scope="row"><?php echo $row["direccion"] ?></td>
              <td scope="row"><?php echo $row["correo"] ?></td>
              <td scope="row"><?php echo $row["empresa"] ?></td>

              <input type="hidden" name="id[]" value="<?php echo $row["proveedorID"]; ?>">
              <input type="hidden" name="nombreProveedor[]" value="<?php echo $row["nombreProveedor"]; ?>">
              <input type="hidden" name="telefono[]" value="<?php echo $row["telefono"]; ?>">
              <input type="hidden" name="direccion[]" value="<?php echo $row["direccion"]; ?>">
              <input type="hidden" name="correo[]" value="<?php echo $row["correo"]; ?>">
              <input type="hidden" name="empresa[]" value="<?php echo $row["empresa"]; ?>">

            <th scope="row">
            <div class="button">
              <input type="image" name="" src="./IMG/actualizar.png" width="20%" height="20%">
            </div>
            </th>
            </tr>
            </form>
            <?php
            //$i++;
        }
    ?>

    </tbody>
  </table>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-12 lg6"align="Center">
          <form class="button" action="ingProveedor.php">
            <input type="image" name="" src="./IMG/anadir.png">
          </form>
          <div class="col-12 lg6">
            <h3>Registrar Proveedor</h3>
          </div>
        </div>
        <div class="col-12 lg6"align="Center">
          <form class="button" action="delProveedor.php">
            <input type="image" name="" src="./IMG/eliminar.png">
          </form>
          <div class="col-12 lg6">
            <h3>Eliminar Proveedor</h3>
          </div>
        </div>
      </div>
    </div>


  </body>

</html>
