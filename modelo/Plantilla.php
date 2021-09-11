<?php
include_once 'Conexion.php';

class Plantilla {
    var $objetos;
    public function __construct() {
        $db = new Conexion();
        $this->acceso = $db->pdo;
    }
    function traerDatos($idExamen) {
        $sql = "SELECT * FROM preguntas
        JOIN examen ON id_examen1=id_examen
        WHERE id_examen1 = $idExamen";
        $query = $this->acceso->prepare($sql);
        $query->execute();
        $this->objetos = $query->fetchall();
        return $this->objetos;
    }
}