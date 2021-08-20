<?php
include '../modelo/Examen.php';

$examen = new Examen();

if ($_POST['funcion'] == 'crear') {
	$nombre = $_POST['nombre'];
	$cantidad = $_POST['cantidad'];
	$examen->Crear($nombre, $cantidad);     
}
if ($_POST['funcion'] == 'crearExamen') {
	$examen->CrearExamen();
	$json = array();
	foreach ($examen->objetos as $objeto) {
		$json[] = array(
			'id'=>$objeto->id_examen,
			'cant' =>$objeto->cant_preg
		);
	}
	$jsonstring = json_encode($json);
	echo $jsonstring;

}
if ($_POST['funcion'] == "guardarExamen") {
	$pregunta1 = $_POST['pregunta1'];
	$pregunta2 = $_POST['pregunta2'];
	$pregunta3 = $_POST['pregunta3'];
	$pregunta4 = $_POST['pregunta4'];
	$pregunta5 = $_POST['pregunta5'];

	//Respuestas
	$correcta1 = $_POST['correcta1'];
	$correcta2 = $_POST['correcta2'];
	$correcta3 = $_POST['correcta3'];
	$correcta4 = $_POST['correcta4'];
	$correcta5 = $_POST['correcta5'];
	$examen->GuardarExamen($pregunta1,$pregunta2,$pregunta3,$pregunta4,$pregunta5,$correcta1,$correcta2,$correcta3,$correcta4,$correcta5);
}
