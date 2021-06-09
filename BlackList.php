<!DOCTYPE html>
<html lang="en" dir="ltr">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<link href="CSS/visualizar.css" rel="stylesheet" type="text/css">
<link href="CSS/selectores.css" rel="stylesheet" type="text/css">
  <head>
    <meta charset="utf-8">
    <title>Black List</title>
    <?php
    include_once("CabeceraNav.html");
    include_once("modelo/conexion.php");
    $conexion=new conexion();
    $conexion->conectar();
    $con=$conexion->con;
    ?>
    <h1>Black List</h1>
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
<form action="BlackList.php" method="POST">  <!-- se cambia -->
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
          <input list="campos" name="orden" value="" placeholder="ID Cliente">  <!-- se cambia -->
          <datalist id="campos">
          <option value="ID Cliente">
          <option value="Nombre">
          <option value="Telefono">
          <option value="Direccion">
          <option value="Correo">
          </div>
          <div class="accordion-body">
          <input type="submit" value="Aplicar">
      </div>
    </div>
</form>
  </div>
</div>
    <!-- para listar los elementos -->
    <div class="visualizar">
      <table class="table table-hover table-responsive">
    <thead class="table-dark">
      <tr>
        <th scope="col">ID Cliente</th>
        <th scope="col">Nombre</th>
        <th scope="col">Tel&eacute;fono</th>
        <th scope="col">Direcci&oacute;n</th>
        <th scope="col">Correo</th>
        <th scope="col">Actualizar</th>
      </tr>
    </thead>
    <tbody>
    <?php
      // variable limite y orden que toman los valores de la tabla que contiene los filtros
      $limite="";
      $orden="";
      $blacklist="SELECT * FROM blacklist";
      if(!isset($_POST["limite"])||$_POST["limite"]==""){
        $limite="Todos";
      }
      else{
        $limite=$_POST["limite"];
      }
      if(!isset($_POST["orden"])||$_POST["orden"]==""){
        $orden="idBlacklist";
      }
      else{
        $orden=$_POST["orden"];
        switch ($orden){
          case "ID Cliente": $orden="clienteID";
          break;
          case "Nombre": $orden="nombreCompleto";
          break;
          case "Telefono": $orden="telefono";
          break;
          case "Direccion": $orden="direccion";
          break;
          case "Correo": $orden="correo";
          break;
      }
      }
      if($limite=="Todos"){
        $blacklist="SELECT * FROM blacklist ORDER BY ".$orden." ASC;";
      }
      else{
        $blacklist="SELECT * FROM blacklist ORDER BY ".$orden." ASC LIMIT ".$limite.";";
      }
      //
        //Leer registros
        $registros = mysqli_query($con, $blacklist);
        // Mostrar registros:
        while ($row = mysqli_fetch_array($registros)) {
        ?>
          <form action="updBlacklist.php" method="POST">
            <tr>
              <th scope="row"><?php echo $row["clienteID"] ?></th>
              <td scope="row"><?php echo $row["nombreCompleto"] ?></td>
              <td scope="row"><?php echo $row["telefono"] ?></td>
              <td scope="row"><?php echo $row["direccion"] ?></td>
              <td scope="row"><?php echo $row["correo"] ?></td>

              <input type="hidden" name="id[]" value="<?php echo $row["idBlacklist"]; ?>">
              <input type="hidden" name="clienteID[]" value="<?php echo $row["clienteID"]; ?>">
              <input type="hidden" name="nombreCompleto[]" value="<?php echo $row["nombreCompleto"]; ?>">
              <input type="hidden" name="telefono[]" value="<?php echo $row["telefono"]; ?>">
              <input type="hidden" name="direccion[]" value="<?php echo $row["direccion"]; ?>">
              <input type="hidden" name="correo[]" value="<?php echo $row["correo"]; ?>">

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
        <div class="col-12 lg6"align="Center">
          <form class="button" action="ingBlackList.php">
            <input type="image" name="" src="./IMG/anadir.png">
          </form>
        </div>
        <div class="row">
          <div class="col-12 lg6">
            <h3>Añadir Cliente</h3>
          </div>
        </div>
        </div>
    </div>



  </body>
</html>
