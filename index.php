  <!-- Desarrollo de Software 7 | Laboratorio #1 | Estudiante: Darío López -->

<html>

<title>
Conversor de Dolar
</title>
<h1>CONVERSOR DE DOLAR</h1>


  <body>

  <form>

  <label>DOLAR:</label><br>
    <input type="text" id="dolar" name="dolar" value=0 /> 
    <label> Convertir a </label>

    <select name="select" id="select">
      <option value=0>Seleccione...</option>
      <option value=1>Euro</option>
      <option value=2>Colón Costarricense</option>
      <option value=3>Peso Mexicano</option>
    </select>

  <input type="submit" value="Convertir"/>
      
  </form>


<?php

$opciones = $_GET["select"];
$dolar = $_GET["dolar"];

if($opciones == 0):
  echo "Seleccione una conversión...";

elseif($opciones == 1):
  
  $eur = $dolar*0.84;
  echo $dolar. " Dolar(es) es un total de: " .$eur. " (Euros).";

elseif($opciones == 2):
 
  $col = $dolar*624.32;
  echo $dolar. " Dolar(es) es un total de: " .$col. " (Colón Costarricense).";

elseif($opciones == 3):
  
  $pesoMX = $dolar*19.95;
  echo $dolar. " Dolar(es) es un total de: " .$pesoMX. " (Pesos Mexicanos).";

endif

?>


  </body>

</html>