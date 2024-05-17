<?php

	require_once "conexion.php";

	class ModeloInformes{


	
		/*=============================================
		MOSTRAR INFORMES CICLO BÁSICO
		=============================================*/

		static public function mdlMostrarInformes($item, $valor, $tabla, $periodo, $verifica){
			

			if ($item != null && $verifica == false) {
				
				
				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE periodo = '$periodo' AND $item = :$item");

				$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

				$stmt -> execute();

				return $stmt -> fetch();

			}else if($item != null && $verifica == true){
				

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE periodo = '$periodo' AND $item = :$item AND estado = 1 ORDER BY nombre");

				$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

				$stmt -> execute();

				return $stmt -> fetchAll();


			}else{
				

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY nombre");

				$stmt -> execute();

				return $stmt -> fetchAll();

			}

			$stmt -> close();

			$stmt = null;
		}





		/*=============================================
		MOSTRAR INFORMES ORIENTACIÓN
		=============================================*/

		static public function mdlMostrarInformesOrientacion($item, $valor1, $valor2, $valor3, $tabla, $periodo, $verifica){
			

			if ($item != null && $verifica == false) {
				
				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE periodo = '$periodo' AND $item = :$item");

				$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

				$stmt -> execute();

				return $stmt -> fetch();

			}else if($item != null && $verifica == true){

				//$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_curso >= $valor1 OR id_curso <= $valor2 AND periodo = '$periodo' AND estado = 1");

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item IN ($valor1, $valor2, $valor3) AND estado = 1 AND periodo = '$periodo'");

				$stmt -> bindParam(":".$item, $valor1, PDO::PARAM_STR);
				$stmt -> bindParam(":".$item, $valor2, PDO::PARAM_STR);
				$stmt -> bindParam(":".$item, $valor3, PDO::PARAM_STR);


				$stmt -> execute();

				return $stmt -> fetchAll();


			}else{
				

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE periodo = '$periodo'");

				$stmt -> execute();

				return $stmt -> fetchAll();

			}

			$stmt -> close();

			$stmt = null;
		}


		/*=============================================
		COPIAR SABERES CIENTIFICA            
		=============================================*/

		static public function mdlCopiarSaberesCientifica($tabla, $curso, $datos, $periodo){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_cientifica = :saberes_cientifica WHERE periodo = '$periodo' AND id_curso = :id_curso");

			$stmt->bindParam(":saberes_cientifica", $datos["saberes_cientifica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso", $datos["id_curso"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}


		/*=============================================
		COPIAR SABERES SOCIALES            
		=============================================*/

		static public function mdlCopiarSaberesSociales($tabla, $curso, $datos, $periodo){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_sociales = :saberes_sociales WHERE periodo = '$periodo' AND id_curso = :id_curso");

			$stmt->bindParam(":saberes_sociales", $datos["saberes_sociales"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso", $datos["id_curso"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}

		/*=============================================
		COPIAR SABERES LENGUA            
		=============================================*/

		static public function mdlCopiarSaberesLengua($tabla, $curso, $datos, $periodo){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_lengua = :saberes_lengua WHERE periodo = '$periodo' AND  id_curso = :id_curso");

			$stmt->bindParam(":saberes_lengua", $datos["saberes_lengua"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso", $datos["id_curso"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}


		/*=============================================
		COPIAR SABERES MATEMATICA            
		=============================================*/

		static public function mdlCopiarSaberesMatematica($tabla, $curso, $datos, $periodo){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_matematica = :saberes_matematica WHERE periodo = '$periodo' AND id_curso = :id_curso");

			$stmt->bindParam(":saberes_matematica", $datos["saberes_matematica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso", $datos["id_curso"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}


		/*=============================================
		COPIAR SABERES INGLES            
		=============================================*/

		static public function mdlCopiarSaberesIngles($tabla, $curso, $datos, $periodo){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_ingles = :saberes_ingles WHERE periodo = '$periodo' AND id_curso = :id_curso");

			$stmt->bindParam(":saberes_ingles", $datos["saberes_ingles"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso", $datos["id_curso"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}


		/*=============================================
		COPIAR SABERES EDUCACIÓN FÍSICA            
		=============================================*/

		static public function mdlCopiarSaberesFisica($tabla, $curso, $datos, $periodo){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_fisica = :saberes_fisica WHERE periodo = '$periodo' AND id_curso = :id_curso");

			$stmt->bindParam(":saberes_fisica", $datos["saberes_fisica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso", $datos["id_curso"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}


		/*=============================================
		COPIAR SABERES EDUCACIÓN ARTÍSTICA            
		=============================================*/

		static public function mdlCopiarSaberesArtistica($tabla, $curso, $datos, $periodo){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_artistica = :saberes_artistica WHERE periodo = '$periodo' AND id_curso = :id_curso");

			$stmt->bindParam(":saberes_artistica", $datos["saberes_artistica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso", $datos["id_curso"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}

		/*=============================================
		COPIAR SABERES EVE           
		=============================================*/

		static public function mdlCopiarSaberesEve($tabla, $curso, $datos, $periodo){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_eve = :saberes_eve WHERE periodo = '$periodo' AND id_curso = :id_curso");

			$stmt->bindParam(":saberes_eve", $datos["saberes_eve"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso", $datos["id_curso"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}	



		/*=============================================
		COPIAR SABERES FOTOGRAFÍA           
		=============================================*/

		static public function mdlCopiarSaberesFotografia($tabla, $curso, $datos){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_fotografia = :saberes_fotografia WHERE id_curso IN (:id_curso1, :id_curso2, :id_curso3) AND periodo = :periodo AND estado = 1");

			//$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_desarrollo = :saberes_desarrollo WHERE id_curso >= :id_curso1 OR id_curso <= :id_curso2 OR id_curso <= :id_curso3");


			$stmt->bindParam(":saberes_fotografia", $datos["saberes_fotografia"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso3", $datos["id_curso3"], PDO::PARAM_INT);
			$stmt->bindParam(":periodo", $datos["periodo"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}



		/*=============================================
		COPIAR SABERES REALIZACIÓN           
		=============================================*/

		static public function mdlCopiarSaberesRealizacion($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_realizacion = :saberes_realizacion WHERE id_curso IN (:id_curso1, :id_curso2, :id_curso3) AND periodo = :periodo AND estado = 1");

			$stmt->bindParam(":saberes_realizacion", $datos["saberes_realizacion"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso3", $datos["id_curso3"], PDO::PARAM_INT);
			$stmt->bindParam(":periodo", $datos["periodo"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}


		/*=============================================
		COPIAR SABERES GUION           
		=============================================*/

		static public function mdlCopiarSaberesGuion($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_guion = :saberes_guion WHERE id_curso IN (:id_curso1, :id_curso2, :id_curso3) AND periodo = :periodo AND estado = 1");

			$stmt->bindParam(":saberes_guion", $datos["saberes_guion"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso3", $datos["id_curso3"], PDO::PARAM_INT);
			$stmt->bindParam(":periodo", $datos["periodo"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}


		/*=============================================
		COPIAR SABERES SONIDO           
		=============================================*/

		static public function mdlCopiarSaberesSonido($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_sonido = :saberes_sonido WHERE id_curso IN (:id_curso1, :id_curso2, :id_curso3) AND periodo = :periodo AND estado = 1");

			$stmt->bindParam(":saberes_sonido", $datos["saberes_sonido"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso3", $datos["id_curso3"], PDO::PARAM_INT);
			$stmt->bindParam(":periodo", $datos["periodo"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}

		/*=============================================
		COPIAR SABERES TALLER           
		=============================================*/

		static public function mdlCopiarSaberesTaller($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_taller = :saberes_taller WHERE id_curso IN (:id_curso1, :id_curso2, :id_curso3) AND periodo = :periodo AND estado = 1");

			$stmt->bindParam(":saberes_taller", $datos["saberes_taller"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso3", $datos["id_curso3"], PDO::PARAM_INT);
			$stmt->bindParam(":periodo", $datos["periodo"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}


		/*=============================================
		COPIAR SABERES SEMIÓTICA           
		=============================================*/

		static public function mdlCopiarSaberesSemiotica($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_semiotica = :saberes_semiotica WHERE id_curso IN (:id_curso1, :id_curso2, :id_curso3) AND periodo = :periodo AND estado = 1");

			$stmt->bindParam(":saberes_semiotica", $datos["saberes_semiotica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso3", $datos["id_curso3"], PDO::PARAM_INT);
			$stmt->bindParam(":periodo", $datos["periodo"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}





		/*=============================================
		EDITAR INFORME CIENTIFICA            
		=============================================*/

		static public function mdlEditarInformeCientifica($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_cientifica = :saberes_cientifica, aprecia_cientifica = :aprecia_cientifica, asistencia_cientifica = :asistencia_cientifica, observa_cientifica = :observa_cientifica, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_cientifica", $datos["saberes_cientifica"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_cientifica", $datos["aprecia_cientifica"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_cientifica", $datos["asistencia_cientifica"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_cientifica", $datos["observa_cientifica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}

		/*=============================================
		EDITAR SEGUIMIENTO CIENTIFICA            
		=============================================*/

		static public function mdlEditarSeguimientoCientifica($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET criterio_acreditacion_cientifica = :criterio_acreditacion_cientifica, 
												criterio_evaluacion_cientifica = :criterio_evaluacion_cientifica, 
												indicador_evaluacion_cientifica = :indicador_evaluacion_cientifica, 
												apreciacion_cualitativa_cientifica = :apreciacion_cualitativa_cientifica,
												asistencia_cientifica = :asistencia_cientifica, 
												observaciones_cientifica = :observaciones_cientifica,
												id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":criterio_acreditacion_cientifica", $datos["criterio_acreditacion_cientifica"], PDO::PARAM_STR);
			$stmt->bindParam(":criterio_evaluacion_cientifica", $datos["criterio_evaluacion_cientifica"], PDO::PARAM_STR);
			$stmt->bindParam(":indicador_evaluacion_cientifica", $datos["indicador_evaluacion_cientifica"], PDO::PARAM_STR);
			$stmt->bindParam(":apreciacion_cualitativa_cientifica", $datos["apreciacion_cualitativa_cientifica"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_cientifica", $datos["asistencia_cientifica"], PDO::PARAM_STR);
			$stmt->bindParam(":observaciones_cientifica", $datos["observaciones_cientifica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR SEGUIMIENTO SOCIALES            
		=============================================*/

		static public function mdlEditarSeguimientoSociales($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET criterio_acreditacion_sociales = :criterio_acreditacion_sociales, 
												criterio_evaluacion_sociales = :criterio_evaluacion_sociales, 
												indicador_evaluacion_sociales = :indicador_evaluacion_sociales, 
												apreciacion_cualitativa_sociales = :apreciacion_cualitativa_sociales,
												asistencia_sociales = :asistencia_sociales, 
												observaciones_sociales = :observaciones_sociales,
												id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":criterio_acreditacion_sociales", $datos["criterio_acreditacion_sociales"], PDO::PARAM_STR);
			$stmt->bindParam(":criterio_evaluacion_sociales", $datos["criterio_evaluacion_sociales"], PDO::PARAM_STR);
			$stmt->bindParam(":indicador_evaluacion_sociales", $datos["indicador_evaluacion_sociales"], PDO::PARAM_STR);
			$stmt->bindParam(":apreciacion_cualitativa_sociales", $datos["apreciacion_cualitativa_sociales"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_sociales", $datos["asistencia_sociales"], PDO::PARAM_STR);
			$stmt->bindParam(":observaciones_sociales", $datos["observaciones_sociales"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR SEGUIMIENTO LENGUA            
		=============================================*/

		static public function mdlEditarSeguimientoLengua($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET criterio_acreditacion_lengua = :criterio_acreditacion_lengua, 
												criterio_evaluacion_lengua = :criterio_evaluacion_lengua, 
												indicador_evaluacion_lengua = :indicador_evaluacion_lengua, 
												apreciacion_cualitativa_lengua = :apreciacion_cualitativa_lengua,
												asistencia_lengua = :asistencia_lengua, 
												observaciones_lengua = :observaciones_lengua,
												id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":criterio_acreditacion_lengua", $datos["criterio_acreditacion_lengua"], PDO::PARAM_STR);
			$stmt->bindParam(":criterio_evaluacion_lengua", $datos["criterio_evaluacion_lengua"], PDO::PARAM_STR);
			$stmt->bindParam(":indicador_evaluacion_lengua", $datos["indicador_evaluacion_lengua"], PDO::PARAM_STR);
			$stmt->bindParam(":apreciacion_cualitativa_lengua", $datos["apreciacion_cualitativa_lengua"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_lengua", $datos["asistencia_lengua"], PDO::PARAM_STR);
			$stmt->bindParam(":observaciones_lengua", $datos["observaciones_lengua"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR SEGUIMIENTO MATEMÁTICA            
		=============================================*/

		static public function mdlEditarSeguimientoMatematica($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET criterio_acreditacion_matematica = :criterio_acreditacion_matematica, 
												criterio_evaluacion_matematica = :criterio_evaluacion_matematica, 
												indicador_evaluacion_matematica = :indicador_evaluacion_matematica, 
												apreciacion_cualitativa_matematica = :apreciacion_cualitativa_matematica,
												asistencia_matematica = :asistencia_matematica, 
												observaciones_matematica = :observaciones_matematica,
												id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":criterio_acreditacion_matematica", $datos["criterio_acreditacion_matematica"], PDO::PARAM_STR);
			$stmt->bindParam(":criterio_evaluacion_matematica", $datos["criterio_evaluacion_matematica"], PDO::PARAM_STR);
			$stmt->bindParam(":indicador_evaluacion_matematica", $datos["indicador_evaluacion_matematica"], PDO::PARAM_STR);
			$stmt->bindParam(":apreciacion_cualitativa_matematica", $datos["apreciacion_cualitativa_matematica"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_matematica", $datos["asistencia_matematica"], PDO::PARAM_STR);
			$stmt->bindParam(":observaciones_matematica", $datos["observaciones_matematica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR SEGUIMIENTO INGLÉS            
		=============================================*/

		static public function mdlEditarSeguimientoIngles($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET criterio_acreditacion_ingles = :criterio_acreditacion_ingles, 
												criterio_evaluacion_ingles = :criterio_evaluacion_ingles, 
												indicador_evaluacion_ingles = :indicador_evaluacion_ingles, 
												apreciacion_cualitativa_ingles = :apreciacion_cualitativa_ingles,
												asistencia_ingles = :asistencia_ingles, 
												observaciones_ingles = :observaciones_ingles,
												id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":criterio_acreditacion_ingles", $datos["criterio_acreditacion_ingles"], PDO::PARAM_STR);
			$stmt->bindParam(":criterio_evaluacion_ingles", $datos["criterio_evaluacion_ingles"], PDO::PARAM_STR);
			$stmt->bindParam(":indicador_evaluacion_ingles", $datos["indicador_evaluacion_ingles"], PDO::PARAM_STR);
			$stmt->bindParam(":apreciacion_cualitativa_ingles", $datos["apreciacion_cualitativa_ingles"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_ingles", $datos["asistencia_ingles"], PDO::PARAM_STR);
			$stmt->bindParam(":observaciones_ingles", $datos["observaciones_ingles"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR SEGUIMIENTO EDUCACIÓN FÍSICA            
		=============================================*/

		static public function mdlEditarSeguimientoFisica($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET criterio_acreditacion_fisica = :criterio_acreditacion_fisica, 
												criterio_evaluacion_fisica = :criterio_evaluacion_fisica, 
												indicador_evaluacion_fisica = :indicador_evaluacion_fisica, 
												apreciacion_cualitativa_fisica = :apreciacion_cualitativa_fisica,
												asistencia_fisica = :asistencia_fisica, 
												observaciones_fisica = :observaciones_fisica,
												id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":criterio_acreditacion_fisica", $datos["criterio_acreditacion_fisica"], PDO::PARAM_STR);
			$stmt->bindParam(":criterio_evaluacion_fisica", $datos["criterio_evaluacion_fisica"], PDO::PARAM_STR);
			$stmt->bindParam(":indicador_evaluacion_fisica", $datos["indicador_evaluacion_fisica"], PDO::PARAM_STR);
			$stmt->bindParam(":apreciacion_cualitativa_fisica", $datos["apreciacion_cualitativa_fisica"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_fisica", $datos["asistencia_fisica"], PDO::PARAM_STR);
			$stmt->bindParam(":observaciones_fisica", $datos["observaciones_fisica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR SEGUIMIENTO EDUCACIÓN ARTÍSTICA            
		=============================================*/

		static public function mdlEditarSeguimientoArtistica($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET criterio_acreditacion_artistica = :criterio_acreditacion_artistica, 
												criterio_evaluacion_artistica = :criterio_evaluacion_artistica, 
												indicador_evaluacion_artistica = :indicador_evaluacion_artistica, 
												apreciacion_cualitativa_artistica = :apreciacion_cualitativa_artistica,
												asistencia_artistica = :asistencia_artistica, 
												observaciones_artistica = :observaciones_artistica,
												id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":criterio_acreditacion_artistica", $datos["criterio_acreditacion_artistica"], PDO::PARAM_STR);
			$stmt->bindParam(":criterio_evaluacion_artistica", $datos["criterio_evaluacion_artistica"], PDO::PARAM_STR);
			$stmt->bindParam(":indicador_evaluacion_artistica", $datos["indicador_evaluacion_artistica"], PDO::PARAM_STR);
			$stmt->bindParam(":apreciacion_cualitativa_artistica", $datos["apreciacion_cualitativa_artistica"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_artistica", $datos["asistencia_artistica"], PDO::PARAM_STR);
			$stmt->bindParam(":observaciones_artistica", $datos["observaciones_artistica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME SOCIALES            
		=============================================*/

		static public function mdlEditarInformeSociales($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_sociales = :saberes_sociales, aprecia_sociales = :aprecia_sociales, asistencia_sociales = :asistencia_sociales, observa_sociales = :observa_sociales, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_sociales", $datos["saberes_sociales"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_sociales", $datos["aprecia_sociales"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_sociales", $datos["asistencia_sociales"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_sociales", $datos["observa_sociales"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME LENGUA            
		=============================================*/

		static public function mdlEditarInformeLengua($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_lengua = :saberes_lengua, aprecia_lengua = :aprecia_lengua, asistencia_lengua = :asistencia_lengua, observa_lengua = :observa_lengua, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_lengua", $datos["saberes_lengua"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_lengua", $datos["aprecia_lengua"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_lengua", $datos["asistencia_lengua"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_lengua", $datos["observa_lengua"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME MATEMATICA            
		=============================================*/

		static public function mdlEditarInformeMatematica($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_matematica = :saberes_matematica, aprecia_matematica = :aprecia_matematica, asistencia_matematica = :asistencia_matematica, observa_matematica = :observa_matematica, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_matematica", $datos["saberes_matematica"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_matematica", $datos["aprecia_matematica"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_matematica", $datos["asistencia_matematica"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_matematica", $datos["observa_matematica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME INGLES            
		=============================================*/

		static public function mdlEditarInformeIngles($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_ingles = :saberes_ingles, aprecia_ingles = :aprecia_ingles, asistencia_ingles = :asistencia_ingles, observa_ingles = :observa_ingles, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_ingles", $datos["saberes_ingles"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_ingles", $datos["aprecia_ingles"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_ingles", $datos["asistencia_ingles"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_ingles", $datos["observa_ingles"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}

		/*=============================================
		EDITAR INFORME EDUCACIÓN FÍSICA            
		=============================================*/

		static public function mdlEditarInformeFisica($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_fisica = :saberes_fisica, aprecia_fisica = :aprecia_fisica, asistencia_fisica = :asistencia_fisica, observa_fisica = :observa_fisica, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_fisica", $datos["saberes_fisica"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_fisica", $datos["aprecia_fisica"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_fisica", $datos["asistencia_fisica"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_fisica", $datos["observa_fisica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME EDUCACIÓN ARTÍSTICA            
		=============================================*/

		static public function mdlEditarInformeArtistica($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_artistica = :saberes_artistica, aprecia_artistica = :aprecia_artistica, asistencia_artistica = :asistencia_artistica, observa_artistica = :observa_artistica, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_artistica", $datos["saberes_artistica"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_artistica", $datos["aprecia_artistica"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_artistica", $datos["asistencia_artistica"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_artistica", $datos["observa_artistica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME EVE           
		=============================================*/

		static public function mdlEditarInformeEve($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_eve = :saberes_eve, aprecia_eve = :aprecia_eve, asistencia_eve = :asistencia_eve, observa_eve = :observa_eve, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_eve", $datos["saberes_eve"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_eve", $datos["aprecia_eve"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_eve", $datos["asistencia_eve"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_eve", $datos["observa_eve"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}	


		/*=============================================
		EDITAR INFORME FOTOGRAFIA            
		=============================================*/

		static public function mdlEditarInformeFotografia($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_fotografia = :saberes_fotografia, aprecia_fotografia = :aprecia_fotografia, asistencia_fotografia = :asistencia_fotografia, observa_fotografia = :observa_fotografia, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_fotografia", $datos["saberes_fotografia"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_fotografia", $datos["aprecia_fotografia"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_fotografia", $datos["asistencia_fotografia"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_fotografia", $datos["observa_fotografia"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME REALIZACIÓN            
		=============================================*/

		static public function mdlEditarInformeRealizacion($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_realizacion = :saberes_realizacion, aprecia_realizacion = :aprecia_realizacion, asistencia_realizacion = :asistencia_realizacion, observa_realizacion = :observa_realizacion, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_realizacion", $datos["saberes_realizacion"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_realizacion", $datos["aprecia_realizacion"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_realizacion", $datos["asistencia_realizacion"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_realizacion", $datos["observa_realizacion"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME GUION            
		=============================================*/

		static public function mdlEditarInformeGuion($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_guion = :saberes_guion, aprecia_guion = :aprecia_guion, asistencia_guion = :asistencia_guion, observa_guion = :observa_guion, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_guion", $datos["saberes_guion"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_guion", $datos["aprecia_guion"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_guion", $datos["asistencia_guion"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_guion", $datos["observa_guion"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}

		/*=============================================
		EDITAR INFORME SONIDO            
		=============================================*/

		static public function mdlEditarInformeSonido($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_sonido = :saberes_sonido, aprecia_sonido = :aprecia_sonido, asistencia_sonido = :asistencia_sonido, observa_sonido = :observa_sonido, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_sonido", $datos["saberes_sonido"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_sonido", $datos["aprecia_sonido"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_sonido", $datos["asistencia_sonido"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_sonido", $datos["observa_sonido"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}

		/*=============================================
		EDITAR INFORME TALLER            
		=============================================*/

		static public function mdlEditarInformeTaller($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_taller = :saberes_taller, aprecia_taller = :aprecia_taller, asistencia_taller = :asistencia_taller, observa_taller = :observa_taller, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_taller", $datos["saberes_taller"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_taller", $datos["aprecia_taller"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_taller", $datos["asistencia_taller"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_taller", $datos["observa_taller"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}

		/*=============================================
		EDITAR INFORME SEMIÓTICA            
		=============================================*/

		static public function mdlEditarInformeSemiotica($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_semiotica = :saberes_semiotica, aprecia_semiotica = :aprecia_semiotica, asistencia_semiotica = :asistencia_semiotica, observa_semiotica = :observa_semiotica, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_semiotica", $datos["saberes_semiotica"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_semiotica", $datos["aprecia_semiotica"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_semiotica", $datos["asistencia_semiotica"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_semiotica", $datos["observa_semiotica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
	    ACTUALIZAR ALUMNO            
		=============================================*/

		static public function mdlActualizarAlumno($tabla, $item1, $valor1, $item2, $valor2){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

			$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
			$stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

			if ($stmt -> execute()) {
				
				return "ok";

			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}
				
	}