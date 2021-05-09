<!DOCTYPE html>
<html lang="en" dir="ltr">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<link href="CSS/formulario.css" rel="stylesheet" type="text/css">
<head>
  <nav class="navbar">
  <div class="position-absolute top-0 end-0 ">
    <form class="d-flex"action="./BlackList.php">
      <input class="button" type="image" src="./IMG/atras.png" height="40"></input>
    </form>
  </div>
</nav>
<meta charset="utf-8">
<title>Black List</title>
<h1>Ingresar a Black List</h1>
</head>
<body>
  <div class="visualizar">
    <table class="table table-borderless table-responsive">
    <thead class="table-dark">

    </thead>
    <tbody>
      <tr>
        <th scope="row">ID Cliente</th>
        <td colspan="2"><input list="clientes" name="myBrowser" /></label>
          <datalist id="clientes">
          <option value="Cliente1">
          <option value="Cliente2">
          <option value="Cliente3">
          <option value="Cliente4">
          <option value="Cliente5">
          <option value="Cliente6">
          </input></td>
      </tr>
      <tr>
        <th scope="row">Nombre Completo</th>
        <td colspan="2"> <input >    </input></td>
      </tr>
      <tr>
        <th scope="row">Telefono</th>
        <td colspan="2"> <input type="tel" >    </input></td>
      </tr>
      <tr>
        <th scope="row">Dirección</th>
        <td colspan="2"><input>    </input></td>
      </tr>
      <tr>
        <th scope="row">Correo Electrónico</th>
        <td colspan="2"><input type="email">    </input></td>
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
