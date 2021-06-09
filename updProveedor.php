<!DOCTYPE html>
<html lang="en" dir="ltr">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<link href="CSS/formulario.css" rel="stylesheet" type="text/css">
<head>
  <nav class="navbar">
    <div class="position-absolute top-0 end-0 ">
      <form class="d-flex"action="./Proveedores.php">
        <input class="button" type="image" src="./IMG/atras.png" height="40"></input>
      </form>
    </div>
  </nav>
    <meta charset="utf-8">
    <title>Actualizar Proveedor</title>
    <h1>Actualizar Proveedor</h1>
</head>
<body>
<form action="./cUpdProveedor.php" method="POST">
  <div class="visualizar">
    <table class="table table-borderless table-responsive">
    <thead class="table-dark">

    </thead>
    <tbody>
      <?php
      $id = $_POST["id"][0];
      $nombreProveedor = $_POST["nombreProveedor"][0];
      $telefono = $_POST["telefono"][0];
      $direccion = $_POST["direccion"][0];
      $correo = $_POST["correo"][0];
      $empresa = $_POST["empresa"][0];
      
      $proveedor[]= $id;
      $proveedor[]= $nombreProveedor;
      $proveedor[]= $telefono;
      $proveedor[]= $direccion;
      $proveedor[]= $correo;
      $proveedor[]= $empresa;
      ?>

      <input type="hidden" name="Proveedores" value="<?php echo $proveedor ?>">
      <tr>
        <th scope="row">ID Proveedor</th>
        <td colspan="2"><input readonly name="id" value="<?php echo $id ?>" placeholder="<?php echo $id ?>">  </td>
      </tr>
      <tr>
        <th scope="row">Nombre Completo</th>
        <td colspan="2"> <input name="nombreProveedor" value="<?php echo $nombreProveedor ?>" placeholder="<?php echo $nombreProveedor ?>">  </td>
      </tr>
      <tr>
        <th scope="row">Telefono</th>
        <td colspan="2"> <input type="tel" name="telefono" value="<?php echo $telefono ?>" placeholder="<?php echo $telefono ?>">  </td>
      </tr>
      <tr>
        <th scope="row">Dirección</th>
        <td colspan="2"><input name="direccion" value="<?php echo $direccion ?>" placeholder="<?php echo $direccion ?>">  </td>
      </tr>
      <tr>
        <th scope="row">Empresa</th>
        <td colspan="2"><input name="empresa" value="<?php echo $empresa ?>" placeholder="<?php echo $empresa ?>">  </td>
      </tr>
      <tr>
        <th scope="row">Correo Electrónico</th>
        <td colspan="2"><input type="email" name="correo" value="<?php echo $correo ?>" placeholder="<?php echo $correo ?>">  </td>
      </tr>
    </tbody>
  </table>
  </div>
  <div class="btnAbajo">
    <input class="btnAbajo" type="image" name="" value="" src="./IMG/ok.png"></input>
  </div>
  </form>
</body>
</html>
