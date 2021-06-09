<!DOCTYPE html>
<html lang="en" dir="ltr">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<link href="CSS/formulario.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./JS/validarProveedor.js"></script>
<head>
  <nav class="navbar">
    <div class="position-absolute top-0 end-0 ">
      <form class="d-flex"action="./Proveedores.php">
        <input class="button" type="image" src="./IMG/atras.png" height="40"></input>
      </form>
    </div>
  </nav>
    <meta charset="utf-8">
    <title>Ingresar Proveedor</title>
    <h1>Ingresar Proveedor</h1>
</head>
<body>
  <form method="POST" action="./modelo/cIngProveedor.php" onsubmit="return validacionProveedor()">
  <div class="visualizar">
    <table class="table table-borderless table-responsive">
    <thead class="table-dark">

    </thead>
    <tbody>
      <tr>
        <th scope="row">Nombre Completo</th>
        <td colspan="2"> <input id="nombreProveedor" name="nombreProveedor" placeholder="Nombre del Proveedor">    </td>
      </tr>
      <tr>
        <th scope="row">Telefono</th>
        <td colspan="2"> <input id="telefono" type="tel" maxlength="10" name="telefono" placeholder="Telefono del Proveedor">    </td>
      </tr>
      <tr>
        <th scope="row">Dirección</th>
        <td colspan="2"><input id="direccion" name="direccion" placeholder="Dirección de la Empresa">    </td>
      </tr>
      <tr>
        <th scope="row">Correo Electrónico</th>
        <td colspan="2"><input id="correo" type="email" name="correo" placeholder="Correo de la empresa">    </td>
      </tr>
      <tr>
        <th scope="row">Empresa</th>
        <td colspan="2"><input id="empresa" name="empresa" placeholder="Nombre de la Empresa">    </td>
      </tr>
    </tbody>
  </table>
</div>
<div class="btnAbajo">
  <input class="btnAbajo" type="image" name="submit" src="./IMG/ok.png">
</div>
</form>
</body>
</html>
