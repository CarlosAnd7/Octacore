<!DOCTYPE html>
<html lang="en" dir="ltr">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<link href="CSS/visualizar.css" rel="stylesheet" type="text/css">
<link href="CSS/selectores.css" rel="stylesheet" type="text/css">
  <head>
    <meta charset="utf-8">
    <title>Capital</title>
    <?php
    include_once("CabeceraNav.html");
    include_once("./modelo/conexion.php");
    $conexion=new conexion();
    $conexion->conectar();
    $con=$conexion->con;
    $capital="SELECT * FROM capital";
    ?>
    <h1>Capital</h1>
  </head>

  <body>
      <div class=".accordion-flush" id="accordion">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Opciones
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapsing" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
    <form action="./Capital.php" method="POST">  
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
                  <h5>Ordenar por <h5>
                  <input list="campos" name="orden" value="" placeholder="ID Capital">  <!-- se cambia -->
                  <datalist id="campos">
                    <option value="ID Capital">
                    <option value="ID Trabajo">
                    <option value="Monto">
                    <option value="Tipo de pago">
                    <option value="Fecha">
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
        <th scope="col">ID Capital</th>
        <th scope="col">ID Trabajo</th>
        <th scope="col">Monto</th>
        <th scope="col">Tipo de pago</th>
        <th scope="col">Fecha</th>
      </tr>
    </thead>
    <tbody>
    <?php
    // variable limite y orden que toman los valores de la tabla que contiene los filtros
    $limite="";
    $orden="";
    $capital="SELECT * FROM capital";
    if(!isset($_POST["limite"])||$_POST["limite"]==""){
      $limite="Todos";
    }
    else{
      $limite=$_POST["limite"];
    }
    if(!isset($_POST["orden"])||$_POST["orden"]==""){
      $orden="capitalID"; // se cambia
    }
    else{
      $orden=$_POST["orden"];
      switch ($orden){ // se cambia
        case "ID Capital": $orden="capitalID";
        break;
        case "ID Trabajo": $orden="historialTrabajoID";
        break;
        case "Monto": $orden="montoCobro";
        break;
        case "Tipo de pago": $orden="tipoPago";
        break;
        case "Fecha": $orden="fecha";
        break;
      }
    }
    if($limite=="Todos"){
      $capital="SELECT * FROM capital ORDER BY ".$orden." ASC;"; // se cambia
    }
    else{
      $capital="SELECT * FROM capital ORDER BY ".$orden." ASC LIMIT ".$limite.";"; // se cambia
    }
    //
        //Leer registros
        $registros = mysqli_query($con, $capital);
        // Mostrar registros:
        while ($row = mysqli_fetch_array($registros)) {
        ?>
        <tr>
          <th scope="row"> <?php echo $row["capitalID"] ?> </th>
          <td scope="row"> <?php echo $row["historialTrabajoID"] ?> </td>
          <td scope="row"> <?php echo $row["montoCobro"] ?> </td>
          <td scope="row"> <?php echo $row["tipoPago"] ?> </td>
          <td scope="row"> <?php echo $row["fecha"] ?> </td>
        </tr>
        <?php
        }
    ?>

    </tbody>
  </table>
    </div>
    <div class="botones">
      <div class="row">
        <div class="col-12 lg6"align="Center">
          <form class="button" action="ingCapital.php">
            <input type="image" name="" src="./IMG/anadir.png">
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-12 lg6">
          <h3>Registrar Pago</h3>
        </div>
      </div>
    </div>
  </body>
</html>
