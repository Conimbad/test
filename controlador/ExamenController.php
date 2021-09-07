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
			'nombre'=>$objeto->nombre,
			'cant' =>$objeto->cant_preg
		);
	}
	$jsonstring = json_encode($json);
	echo $jsonstring;

}
if ($_POST['funcion'] == "guardar1") {
	$pregunta1 = $_POST['pregunta1'];
	$res11 = $_POST['res11'];
	$res12 = $_POST['res12'];
	$res13 = $_POST['res13'];
	$correcta1 = $_POST['correcta1'];
	$id_ex = $_POST['id_ex'];

	$examen->GuardarExamen1($pregunta1,$res11,$res12,$res13,$correcta1,$id_ex);
}
if ($_POST['funcion'] == "guardar2") {
	//Pregunta 1
	$pregunta1 = $_POST['pregunta1'];
	$res11 = $_POST['res11'];
	$res12 = $_POST['res12'];
	$res13 = $_POST['res13'];
	$correcta1 = $_POST['correcta1'];
	//Pregunta 2
	$pregunta2 = $_POST['pregunta2'];
	$res21 = $_POST['res21'];
	$res22 = $_POST['res22'];
	$res23 = $_POST['res23'];
	$correcta2 = $_POST['correcta2'];
	$id_ex = $_POST['id_ex'];

	$examen->GuardarExamen2(
		$pregunta1,$res11,$res12,$res13,$correcta1,
		$pregunta2,$res21,$res22,$res23,$correcta2,$id_ex
	);
}
if ($_POST['funcion'] == "guardar3") {
	//Pregunta 1
	$pregunta1 = $_POST['pregunta1'];
	$res11 = $_POST['res11'];
	$res12 = $_POST['res12'];
	$res13 = $_POST['res13'];
	$correcta1 = $_POST['correcta1'];
	//Pregunta 2
	$pregunta2 = $_POST['pregunta2'];
	$res21 = $_POST['res21'];
	$res22 = $_POST['res22'];
	$res23 = $_POST['res23'];
	$correcta2 = $_POST['correcta2'];
	$id_ex = $_POST['id_ex'];
	//Pregunta 3
	$pregunta3 = $_POST['pregunta3'];
	$res31 = $_POST['res31'];
	$res32 = $_POST['res32'];
	$res33 = $_POST['res33'];
	$correcta3 = $_POST['correcta3'];
	$id_ex = $_POST['id_ex'];

	$examen->GuardarExamen3(
		$pregunta1,$res11,$res12,$res13,$correcta1,
		$pregunta2,$res21,$res22,$res23,$correcta2,
		$pregunta3,$res31,$res32,$res33,$correcta3,$id_ex
	);
}
if ($_POST['funcion'] == "guardar4") {
	//Pregunta 1
	$pregunta1 = $_POST['pregunta1'];
	$res11 = $_POST['res11'];
	$res12 = $_POST['res12'];
	$res13 = $_POST['res13'];
	$correcta1 = $_POST['correcta1'];
	//Pregunta 2
	$pregunta2 = $_POST['pregunta2'];
	$res21 = $_POST['res21'];
	$res22 = $_POST['res22'];
	$res23 = $_POST['res23'];
	$correcta2 = $_POST['correcta2'];
	$id_ex = $_POST['id_ex'];
	//Pregunta 3
	$pregunta3 = $_POST['pregunta3'];
	$res31 = $_POST['res31'];
	$res32 = $_POST['res32'];
	$res33 = $_POST['res33'];
	$correcta3 = $_POST['correcta3'];
	$id_ex = $_POST['id_ex'];
	//Pregunta 4
	$pregunta4 = $_POST['pregunta4'];
	$res41 = $_POST['res41'];
	$res42 = $_POST['res42'];
	$res43 = $_POST['res43'];
	$correcta4 = $_POST['correcta4'];
	$id_ex = $_POST['id_ex'];

	$examen->GuardarExamen4(
		$pregunta1,$res11,$res12,$res13,$correcta1,
		$pregunta2,$res21,$res22,$res23,$correcta2,
		$pregunta3,$res31,$res32,$res33,$correcta3,
		$pregunta4,$res41,$res42,$res43,$correcta4,$id_ex
	);
}
if ($_POST['funcion'] == "guardar5") {
	//Pregunta 1
	$pregunta1 = $_POST['pregunta1'];
	$res11 = $_POST['res11'];
	$res12 = $_POST['res12'];
	$res13 = $_POST['res13'];
	$correcta1 = $_POST['correcta1'];
	//Pregunta 2
	$pregunta2 = $_POST['pregunta2'];
	$res21 = $_POST['res21'];
	$res22 = $_POST['res22'];
	$res23 = $_POST['res23'];
	$correcta2 = $_POST['correcta2'];
	$id_ex = $_POST['id_ex'];
	//Pregunta 3
	$pregunta3 = $_POST['pregunta3'];
	$res31 = $_POST['res31'];
	$res32 = $_POST['res32'];
	$res33 = $_POST['res33'];
	$correcta3 = $_POST['correcta3'];
	$id_ex = $_POST['id_ex'];
	//Pregunta 4
	$pregunta4 = $_POST['pregunta4'];
	$res41 = $_POST['res41'];
	$res42 = $_POST['res42'];
	$res43 = $_POST['res43'];
	$correcta4 = $_POST['correcta4'];
	$id_ex = $_POST['id_ex'];
	//Pregunta 5
	$pregunta5 = $_POST['pregunta5'];
	$res51 = $_POST['res51'];
	$res52 = $_POST['res52'];
	$res53 = $_POST['res53'];
	$correcta5 = $_POST['correcta5'];
	$id_ex = $_POST['id_ex'];

	$examen->GuardarExamen5(
		$pregunta1,$res11,$res12,$res13,$correcta1,
		$pregunta2,$res21,$res22,$res23,$correcta2,
		$pregunta3,$res31,$res32,$res33,$correcta3,
		$pregunta4,$res41,$res42,$res43,$correcta4,
		$pregunta5,$res51,$res52,$res53,$correcta5,$id_ex
	);
}

