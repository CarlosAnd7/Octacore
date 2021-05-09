<!DOCTYPE html>
<html lang="en" dir="ltr">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<link href="CSS/formulario.css" rel="stylesheet" type="text/css">

<head>
  <nav class="navbar">
    <div class="position-absolute top-0 end-0 ">
      <form class="d-flex"action="./Capital.php">
        <input class="button" type="image" src="./IMG/atras.png" height="40"></input>
      </form>
    </div>
  </nav>
    <meta charset="utf-8">
    <title>Ingresar Capital</title>
    <h1>Ingresar Capital</h1>
</head>


  <body>
    <div class="visualizar">
      <table class="table table-borderless table-responsive">
      <thead class="table-dark">

      </thead>
      <tbody>
        <tr>
          <th scope="row">ID Trabajo</th>
          <td colspan="2"><input list="Dispositivos" name="myBrowser" /></label>
            <datalist id="Dispositivos">
            <option value="Dispositivo1">
            <option value="Dispositivo2">
            <option value="Dispositivo3">
            <option value="Dispositivo4">
            <option value="Dispositivo5">
            <option value="Dispositivo6">
            </input></td>
        </tr>
        <tr>
          <th scope="row">Monto</th>
          <td colspan="2"> <input placeholder="$MXN">    </input></td>
        </tr>
        <tr>
          <th scope="row">Tipo de Pago</th>
          <td colspan="2"><input placeholder="Efectivo o Tarjeta">    </input></td>
        </tr>
        <tr>
          <th scope="row">Fecha</th>
          <td colspan="2"><input type="date">    </input></td>
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
