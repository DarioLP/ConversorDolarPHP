  <!-- Desarrollo de Software 7 | Laboratorio #1 | Estudiante: Darío López -->

<html>

<head>
<link href= "Style.css" rel="stylesheet" type = "text/css">
</head>


<title>
Conversor de Dolar
</title>
<h1>CONVERSOR DE DOLAR</h1>


  <body>

  <form name="formulario" method="post" action="index.php">

  <label>DOLAR:</label>
    <input type="text" id="dolar" name="dolar" value=0 /> 

  <input type="submit" value="Convertir"/>
      
  </form>


<?php

  $dolar = $_POST['dolar'];
  
  $eur = $dolar*0.84;
  $col = $dolar*624.32;
  $pesoMX = $dolar*19.95;

  echo "
  <center>
  <table>
  <thead>
    <tr>
      <th>Moneda</th>
      <th>Valor</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Dólar</td>
      <td>" .$dolar."</td>
    </tr>
    <tr>
      <td>Euro</td>
      <td>" .$eur. "</td>
    </tr>
    <tr>
      <td>Colón Costarricense</td>
      <td>" .$col. "</td>
    </tr>
    <tr>
      <td>Peso Mexicano</td>
      <td>" .$pesoMX. " </td>
    </tr>
  </tbody>

</table>
</center>";

?>

</body>

</html>