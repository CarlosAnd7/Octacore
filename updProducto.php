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
  <div class="visualizar">
    <table class="table table-borderless table-responsive">
    <thead class="table-dark">

    </thead>
    <tbody>
      <tr>
        <th scope="row">ID Producto</th>
        <td colspan="2"><input list="Producto" name="myBrowser" /></label>
          <datalist id="Producto">
          <option value="Producto1">
          <option value="Producto2">
          <option value="Producto3">
          <option value="Producto4">
          <option value="Producto5">
          <option value="Producto6">
          </input></td>
      </tr>
      <tr>
        <th scope="row">Numero Piezas</th>
        <td colspan="2"> <input >    </input></td>
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
