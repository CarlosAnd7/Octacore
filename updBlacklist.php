<!DOCTYPE html>
<html lang="en" dir="ltr">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<link href="CSS/formulario.css" rel="stylesheet" type="text/css">
<head>
  <nav class="navbar">
    <div class="position-absolute top-0 end-0 ">
      <form class="d-flex"action="./Blacklist.php">
        <input class="button" type="image" src="./IMG/atras.png" height="40">
      </form>
    </div>
  </nav>
    <meta charset="utf-8">
    <title>Actualizar Blacklist</title>
    <h1>Actualizar Blacklist</h1>
</head>
<body>
  <form action="cUpdBlacklist.php" method="POST">
    <div class="visualizar">
      <table class="table table-borderless table-responsive">
      <thead class="table-dark">

      </thead>
      <tbody>
        <?php
        $id = $_POST["id"][0];
        $clienteID = $_POST["clienteID"][0];
        $nombreCompleto = $_POST["nombreCompleto"][0];
        $telefono = $_POST["telefono"][0];
        $direccion = $_POST["direccion"][0];
        $correo = $_POST["correo"][0];
        
        $cliente[]= $clienteID;
        $cliente[]= $nombreCompleto;
        $cliente[]= $telefono;
        $cliente[]= $direccion;
        $cliente[]= $correo;
        ?>
        
        <input type="hidden" name="Clientes" value="<?php echo $cliente ?>">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <tr>
          <th scope="row">ID Cliente</th>
          <td colspan="2"><input readonly name="clienteID" value="<?php echo $clienteID==null? "No aplica":$clienteID; ?>">  </td>
        </tr>

        <tr>
          <th scope="row">Nombre Completo</th>
          <td colspan="2"> <input name="nombreCompleto" value="<?php echo $nombreCompleto ?>" placeholder="<?php echo $nombreCompleto ?>">    </td>
        </tr>
        <tr>
          <th scope="row">Telefono</th>
          <td colspan="2"> <input type="tel" name="telefono" value="<?php echo $telefono ?>" placeholder="<?php echo $telefono ?>">    </td>
        </tr>
        <tr>
          <th scope="row">Dirección</th>
          <td colspan="2"><input name="direccion" value="<?php echo $direccion ?>" placeholder="<?php echo $direccion ?>">    </td>
        </tr>
        <tr>
          <th scope="row">Correo Electrónico</th>
          <td colspan="2"><input type="email" name="correo" value="<?php echo $correo ?>" placeholder="<?php echo $correo ?>">    </td>
        </tr>
      </tbody>
    </table>
    </div>
    <div class="btnAbajo">
      <input class="btnAbajo" type="image" name="" value="" src="./IMG/ok.png">
    </div>
  </form>
</body>
</html>
