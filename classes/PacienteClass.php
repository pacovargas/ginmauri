<?php
require("DataBaseClass.php");

class Paciente{
	
	public $id;
	public $apellidos;
	public $nombre;
	public $num_historia;
	public $fecha;
	public $tipo_enferma;
	public $edad;
	public $estado_civil;
	public $ocupacion;
	public $direccion;
	public $ciudad;
	public $telefono;
	public $nif;
	public $rh;
	public $antecedentes_familiares;
	public $antecedentes_personales;
	public $historia;
	public $menarquia;
	public $tm;
	public $fur;
	public $cantidad;
	public $dolor;
	public $edad_sexual;
	public $dispareunia;
	public $coitorragias;
	public $anticonceptivos;
	public $ano1;
	public $embarazo1;
	public $peso1;
	public $parto1;
	public $sexo1;
	public $ano2;
	public $embarazo2;
	public $peso2;
	public $parto2;
	public $sexo2;
	public $ano3;
	public $embarazo3;
	public $peso3;
	public $parto3;
	public $sexo3;
	public $ano4;
	public $embarazo4;
	public $peso4;
	public $parto4;
	public $sexo4;
	public $ano5;
	public $embarazo5;
	public $peso5;
	public $parto5;
	public $sexo5;
	public $ano6;
	public $embarazo6;
	public $peso6;
	public $parto6;
	public $sexo6;

	public function __construct($id = false){
		if($id != false){
			$db = new DataBase();
			$query = "select * from pacientes where NUME = $id";
			if($result = $db->query($query)){
				// echo "<pre>";
				// print_r($result);
				// echo "</pre>";
				$this->id = $id;
				$this->apellidos = utf8_encode($result[0]["APELLIDOS"]);
				$this->nombre = utf8_encode($result[0]["NOMBRE"]);
				$this->num_historia = utf8_encode($result[0]["NUM_HISTORIA"]);
				$this->fecha = utf8_encode($result[0]["FECHA"]);
				$this->tipo_enferma = utf8_encode($result[0]["TIPO_ENFERMA"]);
				$this->edad = utf8_encode($result[0]["EDAD"]);
				$this->estado_civil = utf8_encode($result[0]["ESTADO_CIVIL"]);
				$this->ocupacion = utf8_encode($result[0]["OCUPACION"]);
				$this->direccion = utf8_encode($result[0]["DIRECCION"]);
				$this->ciudad = utf8_encode($result[0]["CIUDAD"]);
				$this->telefono = utf8_encode($result[0]["TELEFONO"]);
				$this->nif = utf8_encode($result[0]["NIF"]);
				$this->rh = utf8_encode($result[0]["GRUPO_RH"]);
				$this->antecedentes_familiares = utf8_encode($result[0]["ANTECEDENTES_FAMIL"]);
				$this->antecedentes_personales = utf8_encode($result[0]["ANTECEDENTES_PERSO"]);
				$this->historia = utf8_encode($result[0]["HIST_CLIN_ACTUAL"]);
				$this->menarquia = utf8_encode($result[0]["MENARQUIA"]);
				$this->tm = utf8_encode($result[0]["TM"]);
				$this->fur = utf8_encode($result[0]["FUR"]);
				$this->cantidad = utf8_encode($result[0]["CANTIDAD"]);
				$this->dolor = utf8_encode($result[0]["DOLOR"]);
				$this->edad_sexual = utf8_encode($result[0]["EDAD_PRIM_REL"]);
				$this->dispareunia = utf8_encode($result[0]["DISPANEURIA"]);
				$this->coitorragias = utf8_encode($result[0]["COITARRAGIAS"]);
				$this->anticonceptivos = utf8_encode($result[0]["METODOS_ANTICONCEP"]);
				$this->ano1 = utf8_encode($result[0]["ANO1"]);
				$this->embarazo1 = utf8_encode($result[0]["EMBARAZO1"]);
				$this->peso1 = utf8_encode($result[0]["PESO1"]);
				$this->parto1 = utf8_encode($result[0]["PARTO1"]);
				$this->peso1 = utf8_encode($result[0]["PESO1"]);
				$this->sexo1 = utf8_encode($result[0]["SEXO1"]);
				$this->ano2 = utf8_encode($result[0]["ANO2"]);
				$this->embarazo2 = utf8_encode($result[0]["EMBARAZO2"]);
				$this->peso2 = utf8_encode($result[0]["PESO2"]);
				$this->parto2 = utf8_encode($result[0]["PARTO2"]);
				$this->peso2 = utf8_encode($result[0]["PESO2"]);
				$this->sexo2 = utf8_encode($result[0]["SEXO2"]);
				$this->ano3 = utf8_encode($result[0]["ANO3"]);
				$this->embarazo3 = utf8_encode($result[0]["EMBARAZO3"]);
				$this->peso3 = utf8_encode($result[0]["PESO3"]);
				$this->parto3 = utf8_encode($result[0]["PARTO3"]);
				$this->peso3 = utf8_encode($result[0]["PESO3"]);
				$this->sexo3 = utf8_encode($result[0]["SEXO3"]);
				$this->ano4 = utf8_encode($result[0]["ANO4"]);
				$this->embarazo4 = utf8_encode($result[0]["EMBARAZO4"]);
				$this->peso4 = utf8_encode($result[0]["PESO4"]);
				$this->parto4 = utf8_encode($result[0]["PARTO4"]);
				$this->peso4 = utf8_encode($result[0]["PESO4"]);
				$this->sexo4 = utf8_encode($result[0]["SEXO4"]);
				$this->ano5 = utf8_encode($result[0]["ANO5"]);
				$this->embarazo5 = utf8_encode($result[0]["EMBARAZO5"]);
				$this->peso5 = utf8_encode($result[0]["PESO5"]);
				$this->parto5 = utf8_encode($result[0]["PARTO5"]);
				$this->peso5 = utf8_encode($result[0]["PESO5"]);
				$this->sexo5 = utf8_encode($result[0]["SEXO5"]);
				$this->ano6 = utf8_encode($result[0]["ANO6"]);
				$this->embarazo6 = utf8_encode($result[0]["EMBARAZO6"]);
				$this->peso6 = utf8_encode($result[0]["PESO6"]);
				$this->parto6 = utf8_encode($result[0]["PARTO6"]);
				$this->peso6 = utf8_encode($result[0]["PESO6"]);
				$this->sexo6 = utf8_encode($result[0]["SEXO6"]);
			}
		}
	}

	public static function getPrimero(){
		$db = new DataBase();
		$query = "select NUME from pacientes order by APELLIDOS limit 1";
		$result = $db->query($query);
		$paciente = new Paciente($result[0]["NUME"]);
		return $paciente;
	}

	public static function buscarPorApellido($apellidos){
		$db = new DataBase();
		$query = "select NUME from pacientes where APELLIDOS like '$apellidos%' order by APELLIDOS limit 1";
		$result = $db->query($query);
		$paciente = new Paciente($result[0]["NUME"]);
		return $paciente;	
	}

	public static function getIndices(){
		$db = new DataBase();
		$query = "select NUME from pacientes order by APELLIDOS";
		$result = $db->query($query);
		$indices = array();
		foreach ($result as $row){
			$indices[] = $row["NUME"];	
		}
		return $indices;
	}

	public function guardar(){
		$db = new DataBase();
		
		if($this->edad == "")
			$edad = 'NULL';
		else
			$edad = utf8_decode($this->edad);

		if($this->menarquia == "")
			$menarquia = 'NULL';
		else
			$menarquia = utf8_decode($this->menarquia);

		if($this->edad_sexual == "")
			$edad_sexual = 'NULL';
		else
			$edad_sexual = utf8_decode($this->edad_sexual);

		if($this->ano1 == "")
			$ano1 = 'NULL';
		else
			$ano1 = utf8_decode($this->ano1);
		if($this->ano2 == "")
			$ano2 = 'NULL';
		else
			$ano2 = utf8_decode($this->ano2);
		if($this->ano3 == "")
			$ano3 = 'NULL';
		else
			$ano3 = utf8_decode($this->ano3);
		if($this->ano4 == "")
			$ano4 = 'NULL';
		else
			$ano4 = utf8_decode($this->ano4);
		if($this->ano5 == "")
			$ano5 = 'NULL';
		else
			$ano5 = utf8_decode($this->ano5);
		if($this->ano6 == "")
			$ano6 = 'NULL';
		else
			$ano6 = utf8_decode($this->ano6);

		$query = "update pacientes set
		APELLIDOS = '".utf8_decode($this->apellidos)."',
		NOMBRE = '".utf8_decode($this->nombre)."',
		NUM_HISTORIA = '".utf8_decode($this->num_historia)."',
		FECHA = '".utf8_decode($this->fecha)."',
		TIPO_ENFERMA = '".utf8_decode($this->tipo_enferma)."',
		EDAD = ".$edad.",
		ESTADO_CIVIL = '".utf8_decode($this->estado_civil)."',
		OCUPACION = '".utf8_decode($this->ocupacion)."',
		DIRECCION = '".utf8_decode($this->direccion)."',
		CIUDAD = '".utf8_decode($this->ciudad)."',
		TELEFONO = '".utf8_decode($this->telefono)."',
		NIF = '".utf8_decode($this->nif)."',
		GRUPO_RH = '".utf8_decode($this->rh)."',
		ANTECEDENTES_FAMIL = '".utf8_decode($this->antecedentes_familiares)."',
		ANTECEDENTES_PERSO = '".utf8_decode($this->antecedentes_personales)."',
		HIST_CLIN_ACTUAL = '".utf8_decode($this->historia)."',
		MENARQUIA = ".$menarquia.",
		TM = '".utf8_decode($this->tm)."',
		FUR = '".utf8_decode($this->fur)."',
		EDAD_PRIM_REL = ".$edad_sexual.",
		CANTIDAD = '".utf8_decode($this->cantidad)."',
		DOLOR = '".utf8_decode($this->dolor)."',
		DISPANEURIA = '".utf8_decode($this->dispareunia)."',
		COITARRAGIAS = '".utf8_decode($this->coitorragias)."',
		METODOS_ANTICONCEP = '".utf8_decode($this->anticonceptivos)."',
		ANO1 = ".$ano1.",
		ANO2 = ".$ano2.",
		ANO3 = ".$ano3.",
		ANO4 = ".$ano4.",
		ANO5 = ".$ano5.",
		ANO6 = ".$ano6.",
		EMBARAZO1 = '".utf8_decode($this->embarazo1)."',
		EMBARAZO2 = '".utf8_decode($this->embarazo2)."',
		EMBARAZO3 = '".utf8_decode($this->embarazo3)."',
		EMBARAZO4 = '".utf8_decode($this->embarazo4)."',
		EMBARAZO5 = '".utf8_decode($this->embarazo5)."',
		EMBARAZO6 = '".utf8_decode($this->embarazo6)."',
		PARTO1 = '".utf8_decode($this->parto1)."',
		PARTO2 = '".utf8_decode($this->parto2)."',
		PARTO3 = '".utf8_decode($this->parto3)."',
		PARTO4 = '".utf8_decode($this->parto4)."',
		PARTO5 = '".utf8_decode($this->parto5)."',
		PARTO6 = '".utf8_decode($this->parto6)."',
		PESO1 = '".utf8_decode($this->peso1)."',
		PESO2 = '".utf8_decode($this->peso2)."',
		PESO3 = '".utf8_decode($this->peso3)."',
		PESO4 = '".utf8_decode($this->peso4)."',
		PESO5 = '".utf8_decode($this->peso5)."',
		PESO6 = '".utf8_decode($this->peso6)."',
		SEXO1 = '".utf8_decode($this->sexo1)."',
		SEXO2 = '".utf8_decode($this->sexo2)."',
		SEXO3 = '".utf8_decode($this->sexo3)."',
		SEXO4 = '".utf8_decode($this->sexo4)."',
		SEXO5 = '".utf8_decode($this->sexo5)."',
		SEXO6 = '".utf8_decode($this->sexo6)."'
		where NUME = '".$this->id."'";

		if($db->update($query)){
			return true;
		}
		else{
			return false;
		}
	}

	public static function getPacientes(){
		$db = new DataBase();
		$query = "select NUME, concat(if(APELLIDOS is null, '', APELLIDOS), ' - ', if(NOMBRE is null, '', NOMBRE)) as nombre_completo from pacientes order by APELLIDOS";
		$result = $db->query($query);
		foreach ($result as &$row){
			$row["nombre_completo"] = utf8_encode($row["nombre_completo"]);
		}
		return $result;
	}

	public static function eliminar($id){
		$db = new DataBase();
		$query = "delete from pacientes where NUME = $id";
		if($db->update($query)){
			return true;
		}
		else{
			return false;
		}
	}

	public static function nuevo(){
		$db = new DataBase();
		$query = "insert into pacientes () VALUES();";
		if($db->update($query)){
			return array(
				"success" => true,
				"id" => $db->getLastId(),
			);
		}
		else{
			return array(
				"success" => false,
			);
		}	
	}
}