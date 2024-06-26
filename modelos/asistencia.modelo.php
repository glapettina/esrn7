<?php


	require_once "conexion.php";

	class ModeloAsistencia{


		/*=============================================
	    CREAR ASISTENCIA           
		=============================================*/


		static public function mdlIngresarAsistencia($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_usuario, fecha, turno) VALUES (:id_usuario, :fecha, :turno)");

			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);
			$stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
			$stmt->bindParam(":turno", $datos["turno"], PDO::PARAM_STR);

			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
	    MOSTRAR ASISTENCIA            
		=============================================*/

		static public function mdlMostrarAsistencia($tabla, $item, $valor){

			if ($item != null) {
				
				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

				$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

				$stmt -> execute();

				return $stmt -> fetchAll();

			}else{

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

				$stmt -> execute();

				return $stmt -> fetchAll();
			}

			$stmt -> close();
			$stmt = null;

		}




		/*=============================================
	    LISTAR ASISTENCIA X DOCENTE
		=============================================*/

		static public function mdlAsistenciaIndividual($tabla, $itemMovi, $valorMovi, $desde, $hasta){


			$date_inicial = $desde;
            $date = str_replace('/', '-', $date_inicial);
            $fecha_inicial = date("Y-m-d", strtotime($date));

          
            $date_final = $hasta;
            $date = str_replace('/', '-', $date_final);
            $fecha_final = date("Y-m-d", strtotime($date));
			
				
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE fecha >= '$fecha_inicial' AND fecha <= '$fecha_final' AND $itemMovi = :$itemMovi ORDER BY fecha");

			$stmt -> bindParam(":".$itemMovi, $valorMovi, PDO::PARAM_STR);
			
			
			

			$stmt -> execute();

			return $stmt -> fetchAll();


			$stmt -> close();
			$stmt = null;

		}


		/*=============================================
	    LISTAR RESUMEN ASISTENCIA
		=============================================*/

		static public function mdlResumenAsistencia($tabla, $itemMovi, $valorMovi, $desde, $hasta){


			$date_inicial = $desde;
            $date = str_replace('/', '-', $date_inicial);
            $fecha_inicial = date("Y-m-d", strtotime($date));

          
            $date_final = $hasta;
            $date = str_replace('/', '-', $date_final);
            $fecha_final = date("Y-m-d", strtotime($date));
			
				
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE fecha >= '$fecha_inicial' AND fecha <= '$fecha_final' AND $itemMovi = :$itemMovi ORDER BY fecha");

			$stmt -> bindParam(":".$itemMovi, $valorMovi, PDO::PARAM_STR);
			
			
			

			$stmt -> execute();

			return $stmt -> fetchAll();


			$stmt -> close();
			$stmt = null;

		}


		/*=============================================
	    CUENTA ASISTENCIA X DOCENTE
		=============================================*/

		static public function mdlCuentaAsistencia($tabla, $itemMovi, $valorMovi, $desde, $hasta){


			$date_inicial = $desde;
            $date = str_replace('/', '-', $date_inicial);
            $fecha_inicial = date("Y-m-d", strtotime($date));

          
            $date_final = $hasta;
            $date = str_replace('/', '-', $date_final);
            $fecha_final = date("Y-m-d", strtotime($date));
			
				
			$stmt = Conexion::conectar()->prepare("SELECT SUM(numero) total FROM $tabla WHERE fecha >= '$fecha_inicial' AND fecha <= '$fecha_final' AND $itemMovi = :$itemMovi ORDER BY fecha");

			$stmt -> bindParam(":".$itemMovi, $valorMovi, PDO::PARAM_STR);
			

			$stmt -> execute();

			return $stmt -> fetch();


			$stmt -> close();
			$stmt = null;

		}



		/*=============================================
		BORRAR ASISTENCIA            
		=============================================*/

		static public function mdlBorrarAsistencia($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_movilidad = :id_movilidad");

			$stmt -> bindParam(":id_movilidad", $datos, PDO::PARAM_INT);

			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}

	}