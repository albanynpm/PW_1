<?php

//PERSONA 1
$nombre1 = $_POST['nombre1'];
$apellido1 = $_POST['apellido1'];
$edad1 = $_POST['edad1'];
$sexo1 = $_POST['sexo1'];
$estado1 = $_POST['estado1'];
$sueldo1 = $_POST['sueldo1'];

//PERSONA 2
$nombre2 = $_POST['nombre2'];
$apellido2 = $_POST['apellido2'];
$edad2 = $_POST['edad2'];
$sexo2 = $_POST['sexo2'];
$estado2 = $_POST['estado2'];
$sueldo2 = $_POST['sueldo2'];

//PERSONA 3
$nombre3 = $_POST['nombre3'];
$apellido3 = $_POST['apellido3'];
$edad3 = $_POST['edad3'];
$sexo3 = $_POST['sexo3'];
$estado3 = $_POST['estado3'];
$sueldo3 = $_POST['sueldo3'];

//PERSONA 4
$nombre4 = $_POST['nombre4'];
$apellido4 = $_POST['apellido4'];
$edad4 = $_POST['edad4'];
$sexo4 = $_POST['sexo4'];
$estado4 = $_POST['estado4'];
$sueldo4 = $_POST['sueldo4'];

//PERSONA 5
$nombre5 = $_POST['nombre5'];
$apellido5 = $_POST['apellido5'];
$edad5 = $_POST['edad5'];
$sexo5 = $_POST['sexo5'];
$estado5 = $_POST['estado5'];
$sueldo5 = $_POST['sueldo5'];


//total de empledos del sexo femenino

$fem = 0;

if($sexo1 == 'femenino'){
    $fem++;
}
if($sexo2 == 'femenino'){
    $fem++;
}
if($sexo3 == 'femenino'){
    $fem++;
}
if($sexo4 == 'femenino'){
    $fem++;
}
if($sexo5 == 'femenino'){
    $fem++;
}
 echo "<h2> El total de empleadas femeninas es: $fem </h2>";


 //total de hombres casados que ganan mas de 2500Bs

 $hombCasados = 0;

 if($sexo1 == 'masculino' && $sueldo1 === "mas2500" && $estado1 === 'casado'){
    $hombCasados++;
 }
 if($sexo2 == 'masculino' && $sueldo2 === "mas2500" && $estado2 === 'casado'){
    $hombCasados++;
 }
 if($sexo3 == 'masculino' && $sueldo3 === "mas2500" && $estado3 === 'casado'){
    $hombCasados++;
 }
 if($sexo4 == 'masculino' && $sueldo4 === "mas2500" && $estado4 === 'casado'){
    $hombCasados++;
 }
 if($sexo5 == 'masculino' && $sueldo5 === "mas2500" && $estado5 === 'casado'){
    $hombCasados++;
 }

 echo "<h2> El total de hombres casados que ganan mas de 2500Bs es: $hombCasados </h2>";


  //total de mujeres viudas que ganan mas de 1000Bs

  $femViudas = 0;

if($sexo1 == 'femenino' && $sueldo1 === "mas1000" && $estado1 === 'viudo'){
    $femViudas++;
 }
 if($sexo2 == 'femenino' && $sueldo2 === "mas1000" && $estado2 === 'viudo'){
    $femViudas++;
 }
 if($sexo3 == 'femenino' && $sueldo3 === "mas1000" && $estado3 === 'viudo'){
    $femViudas++;
 }
 if($sexo4 == 'femenino' && $sueldo4 === "mas1000" && $estado4 === 'viudo'){
    $femViudas++;
 }
 if($sexo5 == 'femenino' && $sueldo5 === "mas1000" && $estado5 === 'viudo'){
    $femViudas++;
 }

 echo "<h2> El total de mujeres viudas que ganan mas de 1000Bs es: $femViudas </h2>";

 //Edad promedio de los hombres

 $promEdadHomb = 0;

 $promEdadHomb = ($edad1+$edad2+$edad3+$edad4+$edad5)/5;

 echo "<h2> La edad promedio de los hombres es: $promEdadHomb </h2>";

?>