<?php
include 'Conexion.php';

class Examen {
    var $objetos;
    public function __construct() {
        $db = new Conexion();
        $this->acceso = $db->pdo;
    }
    
    function Crear($nombre, $cantidad) {
        $sql = "INSERT INTO examen(nombre, cant_preg) VALUES (:nombre, :cant_preg)";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':nombre'=>$nombre, ':cant_preg'=>$cantidad));
        echo 'creado';
    }
    
    function CrearExamen() {
        $sql = "SELECT * FROM examen";
        $query = $this->acceso->prepare($sql);
        $query->execute();
        $this->objetos = $query->fetchall();
        return $this->objetos;
    }

    function GuardarExamen($pregunta1,$pregunta2,$pregunta3,$pregunta4,$pregunta5,$correcta1,$correcta2,$correcta3,$correcta4,$correcta5) {
        $sql = "INSERT INTO preguntas(pregunta_1, pregunta_2,pregunta_3,pregunta_4,pregunta_5) VALUES (:pregunta_1, :pregunta_2,:pregunta_3,:pregunta_4,:pregunta_5)";
        $sql2 = "INSERT INTO respuestas(respuesta_1, respuesta_2,respuesta_3,respuesta_4,respuesta_5) VALUES (:respuesta_1, :respuesta_2,:respuesta_3,:respuesta_4,:respuesta_5)";
        $query = $this->acceso->prepare($sql);
        $query = $this->acceso->prepare($sql2);
        $query->execute(array(':pregunta_1'=>$pregunta1,':pregunta_2'=>$pregunta2,':pregunta_3'=>$pregunta3,':pregunta_4'=>$pregunta4,':pregunta_5'=>$pregunta5));
        $query->execute(array(':respuesta_1'=>$correcta1,':respuesta_2'=>$correcta2,':respuesta_3'=>$correcta3,':respuesta_4'=>$correcta4,':respuesta_5'=>$correcta5));
        
        echo 'save';
    }
}

