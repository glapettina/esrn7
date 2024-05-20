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

		static public function mdlMostrarInformesOrientacion($item, $valor1, $valor2, $tabla, $periodo, $verifica){
			

			if ($item != null && $verifica == false) {
				
				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE periodo = '$periodo' AND $item = :$item");

				$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

				$stmt -> execute();

				return $stmt -> fetch();

			}else if($item != null && $verifica == true){

				//$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_curso >= $valor1 OR id_curso <= $valor2 AND periodo = '$periodo' AND estado = 1");

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item IN ($valor1, $valor2) AND estado = 1 AND periodo = '$periodo'");

				$stmt -> bindParam(":".$item, $valor1, PDO::PARAM_STR);
				$stmt -> bindParam(":".$item, $valor2, PDO::PARAM_STR);
				//$stmt -> bindParam(":".$item, $valor3, PDO::PARAM_STR);


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
		COPIAR SABERES ANTROPOLOGIA 3 (SOCIALES)           
		=============================================*/

		static public function mdlCopiarSaberesAntropologia3($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_antropologia3 = :saberes_antropologia3 WHERE periodo = '$periodo' AND id_curso >= :id_curso1 AND id_curso <= :id_curso2");

			$stmt->bindParam(":saberes_antropologia3", $datos["saberes_antropologia3"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}

		/*=============================================
		COPIAR SABERES SISTEMAS (INFORMÁTICA)           
		=============================================*/

		static public function mdlCopiarSaberesSistemas($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_sistemas = :saberes_sistemas WHERE periodo = '$periodo' AND id_curso >= :id_curso1 AND id_curso <= :id_curso2");

			$stmt->bindParam(":saberes_sistemas", $datos["saberes_sistemas"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}

		/*=============================================
		COPIAR SABERES ANTROPOLOGIA 4 (SOCIALES)           
		=============================================*/

		static public function mdlCopiarSaberesAntropologia4($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_antropologia4 = :saberes_antropologia4 WHERE periodo = '$periodo' AND id_curso >= :id_curso1 AND id_curso <= :id_curso2");

			$stmt->bindParam(":saberes_antropologia4", $datos["saberes_antropologia4"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}

		/*=============================================
		COPIAR SABERES COMUNICACION (SOCIALES)           
		=============================================*/

		static public function mdlCopiarSaberesComunicacion($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_comunicacion = :saberes_comunicacion WHERE periodo = '$periodo' AND id_curso >= :id_curso1 AND id_curso <= :id_curso2");

			$stmt->bindParam(":saberes_comunicacion", $datos["saberes_comunicacion"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}	

		/*=============================================
		COPIAR SABERES APLICACIONES (INFORMÁTICA)           
		=============================================*/

		static public function mdlCopiarSaberesAplicaciones($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_aplicaciones = :saberes_aplicaciones WHERE periodo = '$periodo' AND id_curso >= :id_curso1");

			$stmt->bindParam(":saberes_aplicaciones", $datos["saberes_aplicaciones"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			//$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}

		/*=============================================
		COPIAR SABERES CONECTIVIDAD (INFORMÁTICA)           
		=============================================*/

		static public function mdlCopiarSaberesConectividad($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_conectividad = :saberes_conectividad WHERE periodo = '$periodo' AND id_curso >= :id_curso1");

			$stmt->bindParam(":saberes_conectividad", $datos["saberes_conectividad"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			//$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}

		/*=============================================
		COPIAR SABERES PROYECTO (SOCIALES)           
		=============================================*/

		static public function mdlCopiarSaberesProyecto($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_proyecto = :saberes_proyecto WHERE periodo = '$periodo' AND id_curso >= :id_curso1 AND id_curso <= :id_curso2");

			$stmt->bindParam(":saberes_proyecto", $datos["saberes_proyecto"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}

		/*=============================================
		COPIAR SABERES PROBLEMATICA (SOCIALES)           
		=============================================*/

		static public function mdlCopiarSaberesProblematica($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_problematica = :saberes_problematica WHERE periodo = '$periodo' AND id_curso >= :id_curso1 AND id_curso <= :id_curso2");

			$stmt->bindParam(":saberes_problematica", $datos["saberes_problematica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}	

		/*=============================================
		COPIAR SABERES CONOCIMIENTO (SOCIALES)           
		=============================================*/

		static public function mdlCopiarSaberesConocimiento($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_conocimiento = :saberes_conocimiento WHERE periodo = '$periodo' AND id_curso >= :id_curso1 AND id_curso <= :id_curso2");

			$stmt->bindParam(":saberes_conocimiento", $datos["saberes_conocimiento"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}	

		/*=============================================
		COPIAR SABERES SOFTWARE (INFORMÁTICA)           
		=============================================*/

		static public function mdlCopiarSaberesSoftware($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_software = :saberes_software WHERE periodo = '$periodo' AND id_curso >= :id_curso1");

			$stmt->bindParam(":saberes_software", $datos["saberes_software"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			//$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}


		/*=============================================
		COPIAR SABERES SEGURIDAD (INFORMÁTICA)           
		=============================================*/

		static public function mdlCopiarSaberesSeguridad($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_seguridad = :saberes_seguridad WHERE periodo = '$periodo' AND id_curso >= :id_curso1");

			$stmt->bindParam(":saberes_seguridad", $datos["saberes_seguridad"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			//$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}

		/*=============================================
		COPIAR SABERES TECNOLÓGICO (INFORMÁTICA)           
		=============================================*/

		static public function mdlCopiarSaberesTecnologico($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_tecnologico = :saberes_tecnologico WHERE periodo = '$periodo' AND id_curso >= :id_curso1");

			$stmt->bindParam(":saberes_tecnologico", $datos["saberes_tecnologico"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			//$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);


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
		EDITAR INFORME ANTROPOLOGIA 3 (SOCIALES)            
		=============================================*/

		static public function mdlEditarInformeAntropologia3($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_antropologia3 = :saberes_antropologia3, aprecia_antropologia3 = :aprecia_antropologia3, asistencia_antropologia3 = :asistencia_antropologia3, observa_antropologia3 = :observa_antropologia3, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_antropologia3", $datos["saberes_antropologia3"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_antropologia3", $datos["aprecia_antropologia3"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_antropologia3", $datos["asistencia_antropologia3"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_antropologia3", $datos["observa_antropologia3"], PDO::PARAM_STR);
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
		EDITAR INFORME SISTEMAS (INFORMÁTICA)            
		=============================================*/

		static public function mdlEditarInformeSistemas($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_sistemas = :saberes_sistemas, aprecia_sistemas = :aprecia_sistemas, asistencia_sistemas = :asistencia_sistemas, observa_sistemas = :observa_sistemas, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_sistemas", $datos["saberes_sistemas"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_sistemas", $datos["aprecia_sistemas"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_sistemas", $datos["asistencia_sistemas"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_sistemas", $datos["observa_sistemas"], PDO::PARAM_STR);
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
		EDITAR INFORME ANTROPOLOGIA 4 (SOCIALES)            
		=============================================*/

		static public function mdlEditarInformeAntropologia4($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_antropologia4 = :saberes_antropologia4, aprecia_antropologia4 = :aprecia_antropologia4, asistencia_antropologia4 = :asistencia_antropologia4, observa_antropologia4 = :observa_antropologia4, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_antropologia4", $datos["saberes_antropologia4"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_antropologia4", $datos["aprecia_antropologia4"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_antropologia4", $datos["asistencia_antropologia4"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_antropologia4", $datos["observa_antropologia4"], PDO::PARAM_STR);
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
		EDITAR INFORME COMUNICACION (SOCIALES)            
		=============================================*/

		static public function mdlEditarInformeComunicacion($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_comunicacion = :saberes_comunicacion, aprecia_comunicacion = :aprecia_comunicacion, asistencia_comunicacion = :asistencia_comunicacion, observa_comunicacion = :observa_comunicacion, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_comunicacion", $datos["saberes_comunicacion"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_comunicacion", $datos["aprecia_comunicacion"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_comunicacion", $datos["asistencia_comunicacion"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_comunicacion", $datos["observa_comunicacion"], PDO::PARAM_STR);
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
		EDITAR INFORME APLICACIONES (INFORMÁTICA)            
		=============================================*/

		static public function mdlEditarInformeAplicaciones($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_aplicaciones = :saberes_aplicaciones, aprecia_aplicaciones = :aprecia_aplicaciones, asistencia_aplicaciones = :asistencia_aplicaciones, observa_aplicaciones = :observa_aplicaciones, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_aplicaciones", $datos["saberes_aplicaciones"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_aplicaciones", $datos["aprecia_aplicaciones"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_aplicaciones", $datos["asistencia_aplicaciones"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_aplicaciones", $datos["observa_aplicaciones"], PDO::PARAM_STR);
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
		EDITAR INFORME CONECTIVIDAD (INFORMÁTICA)            
		=============================================*/

		static public function mdlEditarInformeConectividad($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_conectividad = :saberes_conectividad, aprecia_conectividad = :aprecia_conectividad, asistencia_conectividad = :asistencia_conectividad, observa_conectividad = :observa_conectividad, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_conectividad", $datos["saberes_conectividad"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_conectividad", $datos["aprecia_conectividad"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_conectividad", $datos["asistencia_conectividad"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_conectividad", $datos["observa_conectividad"], PDO::PARAM_STR);
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
		EDITAR INFORME PROYECTO (SOCIALES)            
		=============================================*/

		static public function mdlEditarInformeProyecto($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_proyecto = :saberes_proyecto, aprecia_proyecto = :aprecia_proyecto, asistencia_proyecto = :asistencia_proyecto, observa_proyecto = :observa_proyecto, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_proyecto", $datos["saberes_proyecto"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_proyecto", $datos["aprecia_proyecto"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_proyecto", $datos["asistencia_proyecto"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_proyecto", $datos["observa_proyecto"], PDO::PARAM_STR);
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
		EDITAR INFORME PROBLEMATICA (SOCIALES)            
		=============================================*/

		static public function mdlEditarInformeProblematica($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_problematica = :saberes_problematica, aprecia_problematica = :aprecia_problematica, asistencia_problematica = :asistencia_problematica, observa_problematica = :observa_problematica, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_problematica", $datos["saberes_problematica"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_problematica", $datos["aprecia_problematica"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_problematica", $datos["asistencia_problematica"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_problematica", $datos["observa_problematica"], PDO::PARAM_STR);
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
		EDITAR INFORME COMUNICACION (SOCIALES)            
		=============================================*/

		static public function mdlEditarInformeConocimiento($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_conocimiento = :saberes_conocimiento, aprecia_conocimiento = :aprecia_conocimiento, asistencia_conocimiento = :asistencia_conocimiento, observa_conocimiento = :observa_conocimiento, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_conocimiento", $datos["saberes_conocimiento"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_conocimiento", $datos["aprecia_conocimiento"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_conocimiento", $datos["asistencia_conocimiento"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_conocimiento", $datos["observa_conocimiento"], PDO::PARAM_STR);
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
		EDITAR INFORME SOFTWARE (INFORMÁTICA)            
		=============================================*/

		static public function mdlEditarInformeSoftware($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_software = :saberes_software, aprecia_software = :aprecia_software, asistencia_software = :asistencia_software, observa_software = :observa_software, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_software", $datos["saberes_software"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_software", $datos["aprecia_software"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_software", $datos["asistencia_software"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_software", $datos["observa_software"], PDO::PARAM_STR);
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
		EDITAR INFORME SEGURIDAD (INFORMÁTICA)            
		=============================================*/

		static public function mdlEditarInformeSeguridad($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_seguridad = :saberes_seguridad, aprecia_seguridad = :aprecia_seguridad, asistencia_seguridad = :asistencia_seguridad, observa_seguridad = :observa_seguridad, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_seguridad", $datos["saberes_seguridad"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_seguridad", $datos["aprecia_seguridad"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_seguridad", $datos["asistencia_seguridad"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_seguridad", $datos["observa_seguridad"], PDO::PARAM_STR);
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
		EDITAR INFORME TECNOLÓGICO (INFORMÁTICA)            
		=============================================*/

		static public function mdlEditarInformeTecnologico($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_tecnologico = :saberes_tecnologico, aprecia_tecnologico = :aprecia_tecnologico, asistencia_tecnologico = :asistencia_tecnologico, observa_tecnologico = :observa_tecnologico, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_tecnologico", $datos["saberes_tecnologico"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_tecnologico", $datos["aprecia_tecnologico"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_tecnologico", $datos["asistencia_tecnologico"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_tecnologico", $datos["observa_tecnologico"], PDO::PARAM_STR);
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