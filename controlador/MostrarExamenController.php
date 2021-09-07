<?php
include '../modelo/Examen.php';
$examen = new Examen();
//Genera un nombre aleatorio con los caracteres especificados
function generarNombre() {
$nombre = "examen-";
$caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
for ($i = 0; $i < 6; $i++) {
    $nombre.=$caracteres[rand(0,6)];
}
$nombre .= ".php";
return $nombre;
}
//Crear archivo de examen
function generarExamen() {
    $nombreEx = generarNombre();
    
    $examen = fopen("../examenes/$nombreEx", "w") or die("No se creo nada");
    $plantilla = "<h1>Examen a realizar</h1>";
    fwrite($examen, $plantilla);
    fclose($examen);
    $link = "http://localhost/test/examenes/" . $nombreEx;
    return $link;
}

if ($_POST['funcion'] == "pedirLink") {
    $enclace = generarExamen();
    echo $enclace;
}