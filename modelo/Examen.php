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
        $sql = "SELECT * FROM examen
        WHERE id_examen=(SELECT MAX(id_examen) FROM examen)";
        $query = $this->acceso->prepare($sql);
        $query->execute();
        $this->objetos = $query->fetchall();
        return $this->objetos;
    }

    function GuardarExamen1($pregunta1,$res11,$res12,$res13,$correcta1,$id_ex) {
        $sql = "INSERT INTO preguntas(pregunta, res_1,res_2,res_3, res_correcta, id_examen1) 
        VALUES (:pregunta1, :res11, :res12, :res13, :correcta1, :id_examen1)";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':pregunta1'=>$pregunta1,':res11'=>$res11,':res12'=>$res12,':res13'=>$res13,':correcta1'=>$correcta1,':id_examen1'=>$id_ex));        
        echo 'guardado';
    }

    function GuardarExamen2 (
        $pregunta1,$res11,$res12,$res13,$correcta1,
        $pregunta2,$res21,$res22,$res23,$correcta2,$id_ex
    ) {
        $sql = "INSERT INTO preguntas(pregunta, res_1,res_2,res_3, res_correcta, id_examen1) 
        VALUES (:pregunta1, :res11, :res12, :res13, :correcta1, :id_examen1)";

        $sql2 = "INSERT INTO preguntas(pregunta, res_1,res_2,res_3, res_correcta, id_examen1) 
        VALUES (:pregunta2, :res21, :res22, :res23, :correcta2, :id_examen1)";
       
       $query = $this->acceso->prepare($sql);
        $query2 = $this->acceso->prepare($sql2);
        $query->execute(array(':pregunta1'=>$pregunta1,':res11'=>$res11,':res12'=>$res12,':res13'=>$res13,':correcta1'=>$correcta1,':id_examen1'=>$id_ex));  
        $query2->execute(array(':pregunta2'=>$pregunta2,':res21'=>$res21,':res22'=>$res22,':res23'=>$res23,':correcta2'=>$correcta2,':id_examen1'=>$id_ex));
        echo 'guardado';
    }

    function GuardarExamen3(
		$pregunta1,$res11,$res12,$res13,$correcta1,
		$pregunta2,$res21,$res22,$res23,$correcta2,
		$pregunta3,$res31,$res32,$res33,$correcta3,$id_ex
	) {
        $sql = "INSERT INTO preguntas(pregunta, res_1,res_2,res_3, res_correcta, id_examen1) 
        VALUES (:pregunta1, :res11, :res12, :res13, :correcta1, :id_examen1)";

        $sql2 = "INSERT INTO preguntas(pregunta, res_1,res_2,res_3, res_correcta, id_examen1) 
        VALUES (:pregunta2, :res21, :res22, :res23, :correcta2, :id_examen1)";

        $sql3 = "INSERT INTO preguntas(pregunta, res_1,res_2,res_3, res_correcta, id_examen1) 
        VALUES (:pregunta3, :res31, :res32, :res33, :correcta3, :id_examen1)";
       
        $query = $this->acceso->prepare($sql);
        $query2 = $this->acceso->prepare($sql2);
        $query3 = $this->acceso->prepare($sql3);

        $query->execute(array(':pregunta1'=>$pregunta1,':res11'=>$res11,':res12'=>$res12,':res13'=>$res13,':correcta1'=>$correcta1,':id_examen1'=>$id_ex));  
        $query2->execute(array(':pregunta2'=>$pregunta2,':res21'=>$res21,':res22'=>$res22,':res23'=>$res23,':correcta2'=>$correcta2,':id_examen1'=>$id_ex));
        $query3->execute(array(':pregunta3'=>$pregunta3,':res31'=>$res31,':res32'=>$res32,':res33'=>$res33,':correcta3'=>$correcta3,':id_examen1'=>$id_ex));

        echo 'guardado';
    }
    function GuardarExamen4(
		$pregunta1,$res11,$res12,$res13,$correcta1,
		$pregunta2,$res21,$res22,$res23,$correcta2,
		$pregunta3,$res31,$res32,$res33,$correcta3,
		$pregunta4,$res41,$res42,$res43,$correcta4,$id_ex
	) {
        $sql = "INSERT INTO preguntas(pregunta, res_1,res_2,res_3, res_correcta, id_examen1) 
        VALUES (:pregunta1, :res11, :res12, :res13, :correcta1, :id_examen1)";

        $sql2 = "INSERT INTO preguntas(pregunta, res_1,res_2,res_3, res_correcta, id_examen1) 
        VALUES (:pregunta2, :res21, :res22, :res23, :correcta2, :id_examen1)";

        $sql3 = "INSERT INTO preguntas(pregunta, res_1,res_2,res_3, res_correcta, id_examen1) 
        VALUES (:pregunta3, :res31, :res32, :res33, :correcta3, :id_examen1)";

        $sql4 = "INSERT INTO preguntas(pregunta, res_1,res_2,res_3, res_correcta, id_examen1) 
        VALUES (:pregunta4, :res41, :res42, :res43, :correcta4, :id_examen1)";
       
        $query = $this->acceso->prepare($sql);
        $query2 = $this->acceso->prepare($sql2);
        $query3 = $this->acceso->prepare($sql3);
        $query4 = $this->acceso->prepare($sql4);

        $query->execute(array(':pregunta1'=>$pregunta1,':res11'=>$res11,':res12'=>$res12,':res13'=>$res13,':correcta1'=>$correcta1,':id_examen1'=>$id_ex));  
        $query2->execute(array(':pregunta2'=>$pregunta2,':res21'=>$res21,':res22'=>$res22,':res23'=>$res23,':correcta2'=>$correcta2,':id_examen1'=>$id_ex));
        $query3->execute(array(':pregunta3'=>$pregunta3,':res31'=>$res31,':res32'=>$res32,':res33'=>$res33,':correcta3'=>$correcta3,':id_examen1'=>$id_ex));
        $query4->execute(array(':pregunta4'=>$pregunta4,':res41'=>$res41,':res42'=>$res42,':res43'=>$res43,':correcta4'=>$correcta4,':id_examen1'=>$id_ex));
        echo 'guardado';
    }
    function GuardarExamen5(
		$pregunta1,$res11,$res12,$res13,$correcta1,
		$pregunta2,$res21,$res22,$res23,$correcta2,
		$pregunta3,$res31,$res32,$res33,$correcta3,
		$pregunta4,$res41,$res42,$res43,$correcta4,
		$pregunta5,$res51,$res52,$res53,$correcta5,$id_ex
	) {
        $sql = "INSERT INTO preguntas(pregunta, res_1,res_2,res_3, res_correcta, id_examen1) 
        VALUES (:pregunta1, :res11, :res12, :res13, :correcta1, :id_examen1)";

        $sql2 = "INSERT INTO preguntas(pregunta, res_1,res_2,res_3, res_correcta, id_examen1) 
        VALUES (:pregunta2, :res21, :res22, :res23, :correcta2, :id_examen1)";

        $sql3 = "INSERT INTO preguntas(pregunta, res_1,res_2,res_3, res_correcta, id_examen1) 
        VALUES (:pregunta3, :res31, :res32, :res33, :correcta3, :id_examen1)";

        $sql4 = "INSERT INTO preguntas(pregunta, res_1,res_2,res_3, res_correcta, id_examen1) 
        VALUES (:pregunta4, :res41, :res42, :res43, :correcta4, :id_examen1)";

        $sql5 = "INSERT INTO preguntas(pregunta, res_1,res_2,res_3, res_correcta, id_examen1) 
        VALUES (:pregunta5, :res51, :res52, :res53, :correcta5, :id_examen1)";
       
        $query = $this->acceso->prepare($sql);
        $query2 = $this->acceso->prepare($sql2);
        $query3 = $this->acceso->prepare($sql3);
        $query4 = $this->acceso->prepare($sql4);
        $query5 = $this->acceso->prepare($sql5);

        $query->execute(array(':pregunta1'=>$pregunta1,':res11'=>$res11,':res12'=>$res12,':res13'=>$res13,':correcta1'=>$correcta1,':id_examen1'=>$id_ex));  
        $query2->execute(array(':pregunta2'=>$pregunta2,':res21'=>$res21,':res22'=>$res22,':res23'=>$res23,':correcta2'=>$correcta2,':id_examen1'=>$id_ex));
        $query3->execute(array(':pregunta3'=>$pregunta3,':res31'=>$res31,':res32'=>$res32,':res33'=>$res33,':correcta3'=>$correcta3,':id_examen1'=>$id_ex));
        $query4->execute(array(':pregunta4'=>$pregunta4,':res41'=>$res41,':res42'=>$res42,':res43'=>$res43,':correcta4'=>$correcta4,':id_examen1'=>$id_ex));
        $query5->execute(array(':pregunta5'=>$pregunta5,':res51'=>$res51,':res52'=>$res52,':res53'=>$res53,':correcta5'=>$correcta5,':id_examen1'=>$id_ex));

        echo 'guardado';
    }
}

