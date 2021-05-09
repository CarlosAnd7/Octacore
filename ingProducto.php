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
    <title>Ingresar Producto</title>
    <h1>Ingresar Producto</h1>
</head>
<body>
  <div class="visualizar">
    <table class="table table-borderless table-responsive">
    <thead class="table-dark">

    </thead>
    <tbody>
      <tr>
        <th scope="row">ID Proveedor</th>
        <td colspan="2"><input list="Proveedores" name="myBrowser" /></label>
          <datalist id="Proveedores">
          <option value="Proveedor1">
          <option value="Proveedor2">
          <option value="Proveedor3">
          <option value="Proveedor4">
          <option value="Proveedor5">
          <option value="Proveedor6">
          </input></td>
      </tr>
      <tr>
        <th scope="row">Numero Piezas</th>
        <td colspan="2"> <input>    </input></td>
      </tr>
      <tr>
        <th scope="row">Nombre de Pieza</th>
        <td colspan="2"><input>    </input></td>
      </tr>
      <tr>
        <th scope="row">Descripcion</th>
        <td colspan="2"><input>    </input></td>
      </tr>
      <tr>
        <th scope="row">Precio</th>
        <td colspan="2"><input>    </input></td>
      </tr>
      </tr>
    </tbody>
  </table>
  </div>
  <div class="btnAbajo">
    <input class="btnAbajo" type="image" name="" value="" src="./IMG/ok.png"></input>
  </div>
</body>
</html>
