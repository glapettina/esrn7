<?php

	class ControladorInformes{


		/*=============================================
		MOSTRAR INFORMES CICLO BÁSICO            
		=============================================*/		

		static public function ctrMostrarInformes($item, $valor, $tabla, $periodo, $verifica){
			

			$respuesta = ModeloInformes::mdlMostrarInformes($item, $valor, $tabla, $periodo, $verifica);

			//var_dump($respuesta);

			return $respuesta;		
		

		}





		/*=============================================
		MOSTRAR INFORMES ORIENTACIÓN             
		=============================================*/		

		static public function ctrMostrarInformesOrientacion($item, $valor1, $valor2, $valor3, $tabla, $periodo, $verifica){
			

			$respuesta = ModeloInformes::mdlMostrarInformesOrientacion($item, $valor1, $valor2, $valor3, $tabla, $periodo, $verifica);

			return $respuesta;

		

		}


		/*=============================================
		COPIAR SABERES CIENTIFICA           
		=============================================*/	

		static public function ctrCopiarSaberesCientifica($tabla, $curso, $ncurso, $periodo){

				if (isset($_POST["copiaSaberesCientifica"])) {
								

					$datos = array("saberes_cientifica" => $_POST["copiaSaberesCientifica"], "id_curso" => $ncurso);


					$respuesta = ModeloInformes::mdlCopiarSaberesCientifica($tabla, $curso, $datos, $periodo);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "Los saberes fueron copiados correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		COPIAR SABERES SOCIALES           
		=============================================*/	

		static public function ctrCopiarSaberesSociales($tabla, $curso, $ncurso, $periodo){

				if (isset($_POST["copiaSaberesSociales"])) {
								

					$datos = array("saberes_sociales" => $_POST["copiaSaberesSociales"], "id_curso" => $ncurso);


					$respuesta = ModeloInformes::mdlCopiarSaberesSociales($tabla, $curso, $datos, $periodo);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "Los saberes fueron copiados correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		COPIAR SABERES LENGUA           
		=============================================*/	

		static public function ctrCopiarSaberesLengua($tabla, $curso, $ncurso, $periodo){

				if (isset($_POST["copiaSaberesLengua"])) {
								

					$datos = array("saberes_lengua" => $_POST["copiaSaberesLengua"], "id_curso" => $ncurso);


					$respuesta = ModeloInformes::mdlCopiarSaberesLengua($tabla, $curso, $datos, $periodo);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "Los saberes fueron copiados correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		COPIAR SABERES MATEMATICA           
		=============================================*/	

		static public function ctrCopiarSaberesMatematica($tabla, $curso, $ncurso, $periodo){

				if (isset($_POST["copiaSaberesMatematica"])) {
								

					$datos = array("saberes_matematica" => $_POST["copiaSaberesMatematica"], "id_curso" => $ncurso);


					$respuesta = ModeloInformes::mdlCopiarSaberesMatematica($tabla, $curso, $datos, $periodo);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "Los saberes fueron copiados correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		COPIAR SABERES INGLES           
		=============================================*/	

		static public function ctrCopiarSaberesIngles($tabla, $curso, $ncurso, $periodo){

				if (isset($_POST["copiaSaberesIngles"])) {
								

					$datos = array("saberes_ingles" => $_POST["copiaSaberesIngles"], "id_curso" => $ncurso);


					$respuesta = ModeloInformes::mdlCopiarSaberesIngles($tabla, $curso, $datos, $periodo);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "Los saberes fueron copiados correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		COPIAR SABERES EDUCACIÓN FÍSICA           
		=============================================*/	

		static public function ctrCopiarSaberesFisica($tabla, $curso, $ncurso, $periodo){

				if (isset($_POST["copiaSaberesFisica"])) {
								

					$datos = array("saberes_fisica" => $_POST["copiaSaberesFisica"], "id_curso" => $ncurso);


					$respuesta = ModeloInformes::mdlCopiarSaberesFisica($tabla, $curso, $datos, $periodo);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "Los saberes fueron copiados correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		COPIAR SABERES EDUCACIÓN ARTÍSTICA           
		=============================================*/	

		static public function ctrCopiarSaberesArtistica($tabla, $curso, $ncurso, $periodo){

				if (isset($_POST["copiaSaberesArtistica"])) {
								

					$datos = array("saberes_artistica" => $_POST["copiaSaberesArtistica"], "id_curso" => $ncurso);


					$respuesta = ModeloInformes::mdlCopiarSaberesArtistica($tabla, $curso, $datos, $periodo);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "Los saberes fueron copiados correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		COPIAR SABERES FOTOGRAFÍA           
		=============================================*/	

		static public function ctrCopiarSaberesFotografia($tabla, $curso, $ncurso1, $ncurso2, $ncurso3, $periodo){

				if (isset($_POST["copiaSaberesFotografia"])) {
								

					$datos = array("saberes_fotografia" => $_POST["copiaSaberesFotografia"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2, "id_curso3" => $ncurso3, "periodo" => $periodo);


					$respuesta = ModeloInformes::mdlCopiarSaberesFotografia($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "Los saberes fueron copiados correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		COPIAR SABERES REALIZACIÓN           
		=============================================*/	

		static public function ctrCopiarSaberesRealizacion($tabla, $curso, $ncurso1, $ncurso2, $ncurso3, $periodo){

				if (isset($_POST["copiaSaberesRealizacion"])) {
								

					$datos = array("saberes_realizacion" => $_POST["copiaSaberesRealizacion"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2, "id_curso3" => $ncurso3, "periodo" => $periodo);



					$respuesta = ModeloInformes::mdlCopiarSaberesRealizacion($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "Los saberes fueron copiados correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		COPIAR SABERES GUION           
		=============================================*/	

		static public function ctrCopiarSaberesGuion($tabla, $curso, $ncurso1, $ncurso2, $ncurso3, $periodo){

				if (isset($_POST["copiaSaberesGuion"])) {
								

					$datos = array("saberes_guion" => $_POST["copiaSaberesGuion"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2, "id_curso3" => $ncurso3, "periodo" => $periodo);


					$respuesta = ModeloInformes::mdlCopiarSaberesGuion($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "Los saberes fueron copiados correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		COPIAR SABERES SONIDO           
		=============================================*/	

		static public function ctrCopiarSaberesSonido($tabla, $curso, $ncurso1, $ncurso2, $ncurso3, $periodo){

				if (isset($_POST["copiaSaberesSonido"])) {
								

					$datos = array("saberes_sonido" => $_POST["copiaSaberesSonido"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2, "id_curso3" => $ncurso3, "periodo" => $periodo);


					$respuesta = ModeloInformes::mdlCopiarSaberesSonido($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "Los saberes fueron copiados correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}

		/*=============================================
		COPIAR SABERES TALLER           
		=============================================*/	

		static public function ctrCopiarSaberesTaller($tabla, $curso, $ncurso1, $ncurso2, $ncurso3, $periodo){

				if (isset($_POST["copiaSaberesTaller"])) {
								

					$datos = array("saberes_taller" => $_POST["copiaSaberesTaller"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2, "id_curso3" => $ncurso3, "periodo" => $periodo);


					$respuesta = ModeloInformes::mdlCopiarSaberesTaller($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "Los saberes fueron copiados correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}

		/*=============================================
		COPIAR SABERES SEMIÓTICA           
		=============================================*/	

		static public function ctrCopiarSaberesSemiotica($tabla, $curso, $ncurso1, $ncurso2, $ncurso3, $periodo){

				if (isset($_POST["copiaSaberesSemiotica"])) {
								

					$datos = array("saberes_semiotica" => $_POST["copiaSaberesSemiotica"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2, "id_curso3" => $ncurso3, "periodo" => $periodo);


					$respuesta = ModeloInformes::mdlCopiarSaberesSemiotica($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "Los saberes fueron copiados correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		

		/*=============================================
		EDITAR INFORME CIENTIFICA
		=============================================*/

		static public function ctrEditarInformeCientifica($tabla,$curso){

			if (isset($_POST["saberesCientifica"])) {
								

					$datos = array("saberes_cientifica" => $_POST["saberesCientifica"], "aprecia_cientifica" => $_POST["apreciaCientifica"], "asistencia_cientifica" => $_POST["asistenciaCientifica"], "observa_cientifica" => $_POST["observaCientifica"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeCientifica($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR SEGUIMIENTO CIENTIFICA
		=============================================*/

		static public function ctrEditarSeguimientoCientifica($tabla,$curso){

			if (isset($_POST["acreditacionCientifica"])) {
								

					$datos = array("criterio_acreditacion_cientifica" => $_POST["acreditacionCientifica"], 
					"criterio_evaluacion_cientifica" => $_POST["evaluacionCientifica"], 
					"indicador_evaluacion_cientifica" => $_POST["indicadorCientifica"], 
					"apreciacion_cualitativa_cientifica" => $_POST["apreciaCientifica"], 
					"asistencia_cientifica" => $_POST["asistenciaCientifica"],
					"observaciones_cientifica" => $_POST["observaCientifica"],
					"id_usuario" => $_SESSION["id"], 
					"id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarSeguimientoCientifica($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR SEGUIMIENTO SOCIALES
		=============================================*/

		static public function ctrEditarSeguimientoSociales($tabla,$curso){

			if (isset($_POST["acreditacionSociales"])) {
								

					$datos = array("criterio_acreditacion_sociales" => $_POST["acreditacionSociales"], 
					"criterio_evaluacion_sociales" => $_POST["evaluacionSociales"], 
					"indicador_evaluacion_sociales" => $_POST["indicadorSociales"], 
					"apreciacion_cualitativa_sociales" => $_POST["apreciaSociales"], 
					"asistencia_sociales" => $_POST["asistenciaSociales"],
					"observaciones_sociales" => $_POST["observaSociales"],
					"id_usuario" => $_SESSION["id"], 
					"id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarSeguimientoSociales($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}

		/*=============================================
		EDITAR SEGUIMIENTO LENGUA
		=============================================*/

		static public function ctrEditarSeguimientoLengua($tabla,$curso){

			if (isset($_POST["acreditacionLengua"])) {
								

					$datos = array("criterio_acreditacion_lengua" => $_POST["acreditacionLengua"], 
					"criterio_evaluacion_lengua" => $_POST["evaluacionLengua"], 
					"indicador_evaluacion_lengua" => $_POST["indicadorLengua"], 
					"apreciacion_cualitativa_lengua" => $_POST["apreciaLengua"], 
					"asistencia_lengua" => $_POST["asistenciaLengua"],
					"observaciones_lengua" => $_POST["observaLengua"],
					"id_usuario" => $_SESSION["id"], 
					"id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarSeguimientoLengua($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR SEGUIMIENTO MATEMÁTICA
		=============================================*/

		static public function ctrEditarSeguimientoMatematica($tabla,$curso){

			if (isset($_POST["acreditacionMatematica"])) {
								

					$datos = array("criterio_acreditacion_matematica" => $_POST["acreditacionMatematica"], 
					"criterio_evaluacion_matematica" => $_POST["evaluacionMatematica"], 
					"indicador_evaluacion_matematica" => $_POST["indicadorMatematica"], 
					"apreciacion_cualitativa_matematica" => $_POST["apreciaMatematica"], 
					"asistencia_matematica" => $_POST["asistenciaMatematica"],
					"observaciones_matematica" => $_POST["observaMatematica"],
					"id_usuario" => $_SESSION["id"], 
					"id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarSeguimientoMatematica($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}

		/*=============================================
		EDITAR SEGUIMIENTO INGLÉS
		=============================================*/

		static public function ctrEditarSeguimientoIngles($tabla,$curso){

			if (isset($_POST["acreditacionIngles"])) {
								

					$datos = array("criterio_acreditacion_ingles" => $_POST["acreditacionIngles"], 
					"criterio_evaluacion_ingles" => $_POST["evaluacionIngles"], 
					"indicador_evaluacion_ingles" => $_POST["indicadorIngles"], 
					"apreciacion_cualitativa_ingles" => $_POST["apreciaIngles"], 
					"asistencia_ingles" => $_POST["asistenciaIngles"],
					"observaciones_ingles" => $_POST["observaIngles"],
					"id_usuario" => $_SESSION["id"], 
					"id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarSeguimientoIngles($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR SEGUIMIENTO EDUCACIÓN FÍSICA
		=============================================*/

		static public function ctrEditarSeguimientoFisica($tabla,$curso){

			if (isset($_POST["acreditacionFisica"])) {
								

					$datos = array("criterio_acreditacion_fisica" => $_POST["acreditacionFisica"], 
					"criterio_evaluacion_fisica" => $_POST["evaluacionFisica"], 
					"indicador_evaluacion_fisica" => $_POST["indicadorFisica"], 
					"apreciacion_cualitativa_fisica" => $_POST["apreciaFisica"], 
					"asistencia_fisica" => $_POST["asistenciaFisica"],
					"observaciones_fisica" => $_POST["observaFisica"],
					"id_usuario" => $_SESSION["id"], 
					"id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarSeguimientoFisica($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}

		/*=============================================
		EDITAR SEGUIMIENTO ARTÍSTICA
		=============================================*/

		static public function ctrEditarSeguimientoArtistica($tabla,$curso){

			if (isset($_POST["acreditacionArtistica"])) {
								

					$datos = array("criterio_acreditacion_artistica" => $_POST["acreditacionArtistica"], 
					"criterio_evaluacion_artistica" => $_POST["evaluacionArtistica"], 
					"indicador_evaluacion_artistica" => $_POST["indicadorArtistica"], 
					"apreciacion_cualitativa_artistica" => $_POST["apreciaArtistica"], 
					"asistencia_artistica" => $_POST["asistenciaArtistica"],
					"observaciones_artistica" => $_POST["observaArtistica"],
					"id_usuario" => $_SESSION["id"], 
					"id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarSeguimientoArtistica($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME SOCIALES
		=============================================*/

		static public function ctrEditarInformeSociales($tabla,$curso){

			if (isset($_POST["saberesSociales"])) {
								

					$datos = array("saberes_sociales" => $_POST["saberesSociales"], "aprecia_sociales" => $_POST["apreciaSociales"], "asistencia_sociales" => $_POST["asistenciaSociales"], "observa_sociales" => $_POST["observaSociales"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeSociales($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME LENGUA
		=============================================*/

		static public function ctrEditarInformeLengua($tabla,$curso){

			if (isset($_POST["saberesLengua"])) {
								

					$datos = array("saberes_lengua" => $_POST["saberesLengua"], "aprecia_lengua" => $_POST["apreciaLengua"], "asistencia_lengua" => $_POST["asistenciaLengua"], "observa_lengua" => $_POST["observaLengua"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeLengua($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME MATEMATICA
		=============================================*/

		static public function ctrEditarInformeMatematica($tabla,$curso){

			if (isset($_POST["saberesMatematica"])) {
								

					$datos = array("saberes_matematica" => $_POST["saberesMatematica"], "aprecia_matematica" => $_POST["apreciaMatematica"], "asistencia_matematica" => $_POST["asistenciaMatematica"], "observa_matematica" => $_POST["observaMatematica"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeMatematica($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME INGLES
		=============================================*/

		static public function ctrEditarInformeIngles($tabla,$curso){

			if (isset($_POST["saberesIngles"])) {
								

					$datos = array("saberes_ingles" => $_POST["saberesIngles"], "aprecia_ingles" => $_POST["apreciaIngles"], "asistencia_ingles" => $_POST["asistenciaIngles"], "observa_ingles" => $_POST["observaIngles"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeIngles($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME EDUCACIÓN FÍSICA
		=============================================*/

		static public function ctrEditarInformeFisica($tabla,$curso){

			if (isset($_POST["saberesFisica"])) {
								

					$datos = array("saberes_fisica" => $_POST["saberesFisica"], "aprecia_fisica" => $_POST["apreciaFisica"], "asistencia_fisica" => $_POST["asistenciaFisica"], "observa_fisica" => $_POST["observaFisica"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeFisica($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME EDUCACIÓN ARTÍSTICA
		=============================================*/

		static public function ctrEditarInformeArtistica($tabla,$curso){

			if (isset($_POST["saberesArtistica"])) {
								

					$datos = array("saberes_artistica" => $_POST["saberesArtistica"], "aprecia_artistica" => $_POST["apreciaArtistica"], "asistencia_artistica" => $_POST["asistenciaArtistica"], "observa_artistica" => $_POST["observaArtistica"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeArtistica($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME FOTOGRAFÍA
		=============================================*/

		static public function ctrEditarInformeFotografia($tabla,$curso){

			if (isset($_POST["saberesFotografia"])) {
								

					$datos = array("saberes_fotografia" => $_POST["saberesFotografia"], "aprecia_fotografia" => $_POST["apreciaFotografia"], "asistencia_fotografia" => $_POST["asistenciaFotografia"], "observa_fotografia" => $_POST["observaFotografia"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeFotografia($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME REALIZACIÓN
		=============================================*/

		static public function ctrEditarInformeRealizacion($tabla,$curso){

			if (isset($_POST["saberesRealizacion"])) {
								

					$datos = array("saberes_realizacion" => $_POST["saberesRealizacion"], "aprecia_realizacion" => $_POST["apreciaRealizacion"], "asistencia_realizacion" => $_POST["asistenciaRealizacion"], "observa_realizacion" => $_POST["observaRealizacion"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeRealizacion($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME GUION
		=============================================*/

		static public function ctrEditarInformeGuion($tabla,$curso){

			if (isset($_POST["saberesGuion"])) {
								

					$datos = array("saberes_guion" => $_POST["saberesGuion"], "aprecia_guion" => $_POST["apreciaGuion"], "asistencia_guion" => $_POST["asistenciaGuion"], "observa_guion" => $_POST["observaGuion"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeGuion($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME SONIDO
		=============================================*/

		static public function ctrEditarInformeSonido($tabla,$curso){

			if (isset($_POST["saberesSonido"])) {
								

					$datos = array("saberes_sonido" => $_POST["saberesSonido"], "aprecia_sonido" => $_POST["apreciaSonido"], "asistencia_sonido" => $_POST["asistenciaSonido"], "observa_sonido" => $_POST["observaSonido"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeSonido($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}

		/*=============================================
		EDITAR INFORME TALLER
		=============================================*/

		static public function ctrEditarInformeTaller($tabla,$curso){

			if (isset($_POST["saberesTaller"])) {
								

					$datos = array("saberes_taller" => $_POST["saberesTaller"], "aprecia_taller" => $_POST["apreciaTaller"], "asistencia_taller" => $_POST["asistenciaTaller"], "observa_taller" => $_POST["observaTaller"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeTaller($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}

		/*=============================================
		EDITAR INFORME SEMIÓTICA
		=============================================*/

		static public function ctrEditarInformeSemiotica($tabla,$curso){

			if (isset($_POST["saberesSemiotica"])) {
								

					$datos = array("saberes_semiotica" => $_POST["saberesSemiotica"], "aprecia_semiotica" => $_POST["apreciaSemiotica"], "asistencia_semiotica" => $_POST["asistenciaSemiotica"], "observa_semiotica" => $_POST["observaSemiotica"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeSemiotica($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}
		
	}

 