<!DOCTYPE html>
<html lang="en" dir="ltr">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<link href="CSS/formulario.css" rel="stylesheet" type="text/css">
<head>
  <nav class="navbar">
    <div class="position-absolute top-0 end-0 ">
      <form class="d-flex"action="./Inventario.php">
        <input class="button" type="image" src="./IMG/atras.png" height="40"></input>
      </form>
    </div>
  </nav>
    <meta charset="utf-8">
    <title>Actualizar Producto</title>
    <h1>Actualizar Producto</h1>
</head>
<body>
<form action="./cUpdProducto.php" method="POST">
  <div class="visualizar">
    <table class="table table-borderless table-responsive">
    <thead class="table-dark">

    </thead>
    <tbody>
      <?php
      $id = $_POST["id"][0];
      $numPiezas = $_POST["numPiezas"][0];
      $nombre = $_POST["nombre"][0];
      $descripcion = $_POST["descripcion"][0];
      $precio = $_POST["precio"][0];
      $proveedorID = $_POST["proveedorID"][0];
      
      $producto[]= $id;
      $producto[]= $numPiezas;
      $producto[]= $nombre;
      $producto[]= $descripcion;
      $producto[]= $precio;
      $producto[]= $proveedorID;
      ?>

      <input type="hidden" name="Productos" value="<?php echo $producto ?>">
      <tr>
        <th scope="row">ID Producto</th>
        <td colspan="2"><input readonly name="id" value="<?php echo $id ?>" placeholder="<?php echo $id ?>"> </td>
      </tr>
      <tr>
        <th scope="row">N&uacute;mero Piezas</th>
        <td colspan="2"><input name="numPiezas" value="<?php echo $numPiezas ?>" placeholder="<?php echo $numPiezas ?>"> </td>
      </tr>
      <tr>
        <th scope="row">Nombre de Pieza</th>
        <td colspan="2"><input name="nombre" value="<?php echo $nombre ?>" placeholder="<?php echo $nombre ?>"></td>
      </tr>
      <tr>
        <th scope="row">Descripcion</th>
        <td colspan="2"><input name="descripcion" value="<?php echo $descripcion ?>" placeholder="<?php echo $descripcion ?>"></td>
      </tr>
      <tr>
        <th scope="row">Precio</th>
        <td colspan="2"><input name="precio" value="<?php echo $precio ?>" placeholder="<?php echo $precio ?>"></td>
      </tr>
      <tr>
      <!-- por ahora, no se puede modificar el ID proveedor -->
        <th scope="row">ID Proveedor</th>
        <td colspan="2"><input  readonly name="proveedorID" value="<?php echo $proveedorID ?>" placeholder="<?php echo $proveedorID ?>"></td>
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
