<?php
include '../modelo/Examen.php';
include_once '../modelo/Plantilla.php';
$examen = new Examen();
$plantilla = new Plantilla();
//Generar plantilla de exámenes
if ($_POST['funcion'] == 'generarPlantilla') {
    
    $idExamen = $_POST['idExamen'];
	$plantilla->traerDatos($idExamen);
    $template = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/sweetalert2.min.css">
        <title>Document</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Examen</a>
        </div>
        </nav>';
	$json = array();
	foreach($plantilla->objetos as $objeto) {
        
        $id_pregunta = $objeto->id_pregunta;
        $pregunta = $objeto->pregunta;
        $res_1 = $objeto->res_1;
        $res_2 = $objeto->res_2;
        $res_3 = $objeto->res_3;
        $res_correcta = $objeto->res_correcta;
        $id_examen = $objeto->id_examen1;
        $nombre = $objeto->nombre;
        $cant_preg = $objeto->cant_preg;
		
        $template .= '
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <h3>'. $pregunta . '</h3>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h5>' . $res_1 .'</h5>
                    <input id="select" class="form-check-input" type="checkbox"> Correcta
                </div>
                <div class="col">
                    <h5>' . $res_2 .'</h5>
                    <input id="select" class="form-check-input" type="checkbox"> Correcta
                </div>
                <div class="col"> 
                    <h5>' . $res_3 .'</h5>
                    <input id="select" class="form-check-input" type="checkbox"> Correcta
                </div>
            </div>
        </div>';
    }
    $template .= '<script src="../js/jquery-3.6.0.min.js"></script>
            <script src="../js/examen.js"></script>
            <script src="../js/sweetalert2.all.min.js"></script>
            <script src="../js/sweetalert2.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        </body>
        </html>';
    generarExamen($template);
}

//Crear archivo de examen
function generarExamen($template) {
    $nombreEx = generarNombre();
    $examen = fopen("../examenes/$nombreEx", "w") or die("No se creó nada");
    fwrite($examen, $template);
    fclose($examen);
    $link = "http://localhost/test/examenes/" . $nombreEx;
    echo $link;
}
/*if ($_POST['funcion'] == "pedirLink") {
  echo $link = 2;
} */
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
