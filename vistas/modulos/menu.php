<aside class="main-sidebar">

	<section class="sidebar">

		<ul class="sidebar-menu">

			<li class="active">
				<a href="inicio">

					<i class="fa fa-home"></i>
					<span>Inicio</span>

				</a>
			</li>

 			<?php

			if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Secretario" || $_SESSION["perfil"] == "Directivo") {

					echo '<li class="treeview">
			          <a href="#">
			            <i class="fa fa-graduation-cap"></i>
			            <span>Alumnos</span>
			            <span class="pull-right-container">
			              <i class="fa fa-angle-left pull-right"></i>
			            </span>
			          </a>
			          <ul class="treeview-menu">
			            <li><a href="primero"><i class="fa fa-circle-o"></i> Primer Año</a></li>
			            <li><a href="segundo"><i class="fa fa-circle-o"></i> Segundo Año</a></li>
			            <li><a href="tercero"><i class="fa fa-circle-o"></i> Tercer Año</a></li>
			            <li><a href="cuarto"><i class="fa fa-circle-o"></i> Cuarto Año</a></li>
			            <li><a href="quinto"><i class="fa fa-circle-o"></i> Quinto Año</a></li>
			          </ul>
		    	    </li>';


    			}

    		?> 

    		<li class="treeview">
            
                <a href="#">
                    <i class="fa fa-calendar" aria-hidden="true"></i> <span>Informes Cualitativos</span>
                    <!-- <span class="pull-right-container badge bg-blue"> -->
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                  
                </a>
               
                <?php
                 
                  if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Secretario" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "Preceptor") {
  

             echo'<li class="treeview">
                <a href="#">
                  <i class="fa fa-file-pdf-o" aria-hidden="true"></i> <span>Emisión de Informes</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>

                  <ul class="treeview-menu">
                      <li><a href="primero"><i class="fa fa-circle-o"></i> 1er. Año</a></li>
                      <li><a href="segundo"><i class="fa fa-circle-o"></i> 2º Año</a></li>
                      <li><a href="tercero"><i class="fa fa-circle-o"></i> 3er. Año</a></li>
                      <li><a href="cuarto"><i class="fa fa-circle-o"></i> 4º Año</a></li>             
                      <li><a href="quinto"><i class="fa fa-circle-o"></i> 5º Año</a></li>             
                  </ul>           
            </li>';

            }

        ?> 

         <?php

        if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "Docente Científica") {
           

 			echo'<li class="treeview">
                <a href="#">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Científica y Tecnológica</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>

               <ul class="treeview-menu">                
                  <li><a href="11tm-cientifica"><i class="fa fa-circle-o"></i> 1º 1ra. TM</a></li>
                  <li><a href="11tt-cientifica"><i class="fa fa-circle-o"></i> 1º 1ra. TT</a></li>
                  <li><a href="12tt-cientifica"><i class="fa fa-circle-o"></i> 1º 2da. TT</a></li>
                  <li><a href="21tm-cientifica"><i class="fa fa-circle-o"></i> 2º 1ra. TM</a></li>
                  <li><a href="22tm-cientifica"><i class="fa fa-circle-o"></i> 2º 2da. TM</a></li>
                  <li><a href="21tt-cientifica"><i class="fa fa-circle-o"></i> 2º 1ra. TT</a></li>
                  <li><a href="22tt-cientifica"><i class="fa fa-circle-o"></i> 2º 2da. TT</a></li>
                  <li><a href="31tm-cientifica"><i class="fa fa-circle-o"></i> 3º 1ra. TM</a></li>
                  <li><a href="32tm-cientifica"><i class="fa fa-circle-o"></i> 3º 2da. TM</a></li>
                  <li><a href="31tt-cientifica"><i class="fa fa-circle-o"></i> 3º 1ra. TT</a></li>
                  <li><a href="32tt-cientifica"><i class="fa fa-circle-o"></i> 3º 2da. TT</a></li>
                  <li><a href="41tm-cientifica"><i class="fa fa-circle-o"></i> 4º 1ra. TM</a></li>             
                  <li><a href="42tm-cientifica"><i class="fa fa-circle-o"></i> 4º 2da. TM</a></li>             
                  <li><a href="41tt-cientifica"><i class="fa fa-circle-o"></i> 4º 1ra. TT</a></li>             
                  <li><a href="51tm-cientifica"><i class="fa fa-circle-o"></i> 5º 1ra. TM</a></li>             
                  <li><a href="52tm-cientifica"><i class="fa fa-circle-o"></i> 5º 2da. TM</a></li>             
                  <li><a href="51tt-cientifica"><i class="fa fa-circle-o"></i> 5º 1ra. TT</a></li>             
              </ul>

           
            </li>';

             }

        ?> 

         <?php

        if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "Docente Sociales") {

            echo '<li class="treeview">
                <a href="#">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Sociales y Humanidades</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>

               <ul class="treeview-menu">
                      <li><a href="11tm-sociales"><i class="fa fa-circle-o"></i> 1º 1ra. TM</a></li>
                      <li><a href="11tt-sociales"><i class="fa fa-circle-o"></i> 1º 1ra. TT</a></li>
                      <li><a href="12tt-sociales"><i class="fa fa-circle-o"></i> 1º 2da. TT</a></li>
                      <li><a href="21tm-sociales"><i class="fa fa-circle-o"></i> 2º 1ra. TM</a></li>
                      <li><a href="22tm-sociales"><i class="fa fa-circle-o"></i> 2º 2da. TM</a></li>
                      <li><a href="21tt-sociales"><i class="fa fa-circle-o"></i> 2º 1ra. TT</a></li>
                      <li><a href="22tt-sociales"><i class="fa fa-circle-o"></i> 2º 2da. TT</a></li>
                      <li><a href="31tm-sociales"><i class="fa fa-circle-o"></i> 3º 1ra. TM</a></li>
                      <li><a href="32tm-sociales"><i class="fa fa-circle-o"></i> 3º 2da. TM</a></li>
                      <li><a href="31tt-sociales"><i class="fa fa-circle-o"></i> 3º 1ra. TT</a></li>
                      <li><a href="32tt-sociales"><i class="fa fa-circle-o"></i> 3º 2da. TT</a></li>
                      <li><a href="41tm-sociales"><i class="fa fa-circle-o"></i> 4º 1ra. TM</a></li>             
                      <li><a href="42tm-sociales"><i class="fa fa-circle-o"></i> 4º 2da. TM</a></li>             
                      <li><a href="41tt-sociales"><i class="fa fa-circle-o"></i> 4º 1ra. TT</a></li>             
                      <li><a href="51tm-sociales"><i class="fa fa-circle-o"></i> 5º 1ra. TM</a></li>             
                      <li><a href="52tm-sociales"><i class="fa fa-circle-o"></i> 5º 2da. TM</a></li>             
                      <li><a href="51tt-sociales"><i class="fa fa-circle-o"></i> 5º 1ra. TT</a></li>             
           </ul>

           
            </li>';

            }

        ?> 

         <?php


        if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "Docente Lengua y Literatura") {



            echo'<li class="treeview">
                <a href="#">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Lengua y Literatura</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>

               <ul class="treeview-menu">
               <li><a href="11tm-literatura"><i class="fa fa-circle-o"></i> 1º 1ra. TM</a></li>
               <li><a href="11tt-literatura"><i class="fa fa-circle-o"></i> 1º 1ra. TT</a></li>
               <li><a href="12tt-literatura"><i class="fa fa-circle-o"></i> 1º 2da. TT</a></li>
               <li><a href="21tm-literatura"><i class="fa fa-circle-o"></i> 2º 1ra. TM</a></li>
               <li><a href="22tm-literatura"><i class="fa fa-circle-o"></i> 2º 2da. TM</a></li>
               <li><a href="21tt-literatura"><i class="fa fa-circle-o"></i> 2º 1ra. TT</a></li>
               <li><a href="22tt-literatura"><i class="fa fa-circle-o"></i> 2º 2da. TT</a></li>
               <li><a href="31tm-literatura"><i class="fa fa-circle-o"></i> 3º 1ra. TM</a></li>
               <li><a href="32tm-literatura"><i class="fa fa-circle-o"></i> 3º 2da. TM</a></li>
               <li><a href="31tt-literatura"><i class="fa fa-circle-o"></i> 3º 1ra. TT</a></li>
               <li><a href="32tt-literatura"><i class="fa fa-circle-o"></i> 3º 2da. TT</a></li>
               <li><a href="41tm-literatura"><i class="fa fa-circle-o"></i> 4º 1ra. TM</a></li>             
               <li><a href="42tm-literatura"><i class="fa fa-circle-o"></i> 4º 2da. TM</a></li>             
               <li><a href="41tt-literatura"><i class="fa fa-circle-o"></i> 4º 1ra. TT</a></li>             
               <li><a href="51tm-literatura"><i class="fa fa-circle-o"></i> 5º 1ra. TM</a></li>             
               <li><a href="52tm-literatura"><i class="fa fa-circle-o"></i> 5º 2da. TM</a></li>             
               <li><a href="51tt-literatura"><i class="fa fa-circle-o"></i> 5º 1ra. TT</a></li>       
             
              </ul>

           
            </li>';

            }

        ?> 

         <?php

        if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "Docente Matemática") {


            echo'<li class="treeview">
                <a href="#">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Matemática</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>

               <ul class="treeview-menu">
                    <li><a href="11tm-matematica"><i class="fa fa-circle-o"></i> 1º 1ra. TM</a></li>
                    <li><a href="11tt-matematica"><i class="fa fa-circle-o"></i> 1º 1ra. TT</a></li>
                    <li><a href="12tt-matematica"><i class="fa fa-circle-o"></i> 1º 2da. TT</a></li>
                    <li><a href="21tm-matematica"><i class="fa fa-circle-o"></i> 2º 1ra. TM</a></li>
                    <li><a href="22tm-matematica"><i class="fa fa-circle-o"></i> 2º 2da. TM</a></li>
                    <li><a href="21tt-matematica"><i class="fa fa-circle-o"></i> 2º 1ra. TT</a></li>
                    <li><a href="22tt-matematica"><i class="fa fa-circle-o"></i> 2º 2da. TT</a></li>
                    <li><a href="31tm-matematica"><i class="fa fa-circle-o"></i> 3º 1ra. TM</a></li>
                    <li><a href="32tm-matematica"><i class="fa fa-circle-o"></i> 3º 2da. TM</a></li>
                    <li><a href="31tt-matematica"><i class="fa fa-circle-o"></i> 3º 1ra. TT</a></li>
                    <li><a href="32tt-matematica"><i class="fa fa-circle-o"></i> 3º 2da. TT</a></li>
                    <li><a href="41tm-matematica"><i class="fa fa-circle-o"></i> 4º 1ra. TM</a></li>             
                    <li><a href="42tm-matematica"><i class="fa fa-circle-o"></i> 4º 2da. TM</a></li>             
                    <li><a href="41tt-matematica"><i class="fa fa-circle-o"></i> 4º 1ra. TT</a></li>             
                    <li><a href="51tm-matematica"><i class="fa fa-circle-o"></i> 5º 1ra. TM</a></li>             
                    <li><a href="52tm-matematica"><i class="fa fa-circle-o"></i> 5º 2da. TM</a></li>             
                    <li><a href="51tt-matematica"><i class="fa fa-circle-o"></i> 5º 1ra. TT</a></li>             
             
              </ul>

           
            </li>';

            }

        ?> 

         <?php

        if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "Docente Segundas Lenguas") {

            echo'<li class="treeview">
                <a href="#">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Segundas Lenguas</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>

               <ul class="treeview-menu">
               <li><a href="11tm-ingles"><i class="fa fa-circle-o"></i> 1º 1ra. TM</a></li>
               <li><a href="11tt-ingles"><i class="fa fa-circle-o"></i> 1º 1ra. TT</a></li>
               <li><a href="12tt-ingles"><i class="fa fa-circle-o"></i> 1º 2da. TT</a></li>
               <li><a href="21tm-ingles"><i class="fa fa-circle-o"></i> 2º 1ra. TM</a></li>
               <li><a href="22tm-ingles"><i class="fa fa-circle-o"></i> 2º 2da. TM</a></li>
               <li><a href="21tt-ingles"><i class="fa fa-circle-o"></i> 2º 1ra. TT</a></li>
               <li><a href="22tt-ingles"><i class="fa fa-circle-o"></i> 2º 2da. TT</a></li>
               <li><a href="31tm-ingles"><i class="fa fa-circle-o"></i> 3º 1ra. TM</a></li>
               <li><a href="32tm-ingles"><i class="fa fa-circle-o"></i> 3º 2da. TM</a></li>
               <li><a href="31tt-ingles"><i class="fa fa-circle-o"></i> 3º 1ra. TT</a></li>
               <li><a href="32tt-ingles"><i class="fa fa-circle-o"></i> 3º 2da. TT</a></li>
               <li><a href="41tm-ingles"><i class="fa fa-circle-o"></i> 4º 1ra. TM</a></li>             
               <li><a href="42tm-ingles"><i class="fa fa-circle-o"></i> 4º 2da. TM</a></li>             
               <li><a href="41tt-ingles"><i class="fa fa-circle-o"></i> 4º 1ra. TT</a></li>             
               <li><a href="51tm-ingles"><i class="fa fa-circle-o"></i> 5º 1ra. TM</a></li>             
               <li><a href="52tm-ingles"><i class="fa fa-circle-o"></i> 5º 2da. TM</a></li>             
               <li><a href="51tt-ingles"><i class="fa fa-circle-o"></i> 5º 1ra. TT</a></li>             
             
              </ul>

           
            </li>';

            }

        ?> 

         <?php

        if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "Docente Educación Física") {


            echo'<li class="treeview">
                <a href="#">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Educación Física</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>

               <ul class="treeview-menu">
                      <li><a href="11tm-edfisica"><i class="fa fa-circle-o"></i> 1º 1ra. TM</a></li>
                      <li><a href="11tt-edfisica"><i class="fa fa-circle-o"></i> 1º 1ra. TT</a></li>
                      <li><a href="12tt-edfisica"><i class="fa fa-circle-o"></i> 1º 2da. TT</a></li>
                      <li><a href="21tm-edfisica"><i class="fa fa-circle-o"></i> 2º 1ra. TM</a></li>
                      <li><a href="22tm-edfisica"><i class="fa fa-circle-o"></i> 2º 2da. TM</a></li>
                      <li><a href="21tt-edfisica"><i class="fa fa-circle-o"></i> 2º 1ra. TT</a></li>
                      <li><a href="22tt-edfisica"><i class="fa fa-circle-o"></i> 2º 2da. TT</a></li>
                      <li><a href="31tm-edfisica"><i class="fa fa-circle-o"></i> 3º 1ra. TM</a></li>
                      <li><a href="32tm-edfisica"><i class="fa fa-circle-o"></i> 3º 2da. TM</a></li>
                      <li><a href="31tt-edfisica"><i class="fa fa-circle-o"></i> 3º 1ra. TT</a></li>
                      <li><a href="32tt-edfisica"><i class="fa fa-circle-o"></i> 3º 2da. TT</a></li>
                      <li><a href="41tm-edfisica"><i class="fa fa-circle-o"></i> 4º 1ra. TM</a></li>             
                      <li><a href="42tm-edfisica"><i class="fa fa-circle-o"></i> 4º 2da. TM</a></li>             
                      <li><a href="41tt-edfisica"><i class="fa fa-circle-o"></i> 4º 1ra. TT</a></li>             
                      <li><a href="51tm-edfisica"><i class="fa fa-circle-o"></i> 5º 1ra. TM</a></li>             
                      <li><a href="52tm-edfisica"><i class="fa fa-circle-o"></i> 5º 2da. TM</a></li>             
                      <li><a href="51tt-edfisica"><i class="fa fa-circle-o"></i> 5º 1ra. TT</a></li>             
             
              </ul>

           
            </li>';

            }

        ?> 

         <?php


        if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "Docente Educación Artística") {


            echo'<li class="treeview">
                <a href="#">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Lenguajes Artísticos</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>

               <ul class="treeview-menu">
                      <li><a href="11tm-artistica"><i class="fa fa-circle-o"></i> 1º 1ra. TM</a></li>
                      <li><a href="11tt-artistica"><i class="fa fa-circle-o"></i> 1º 1ra. TT</a></li>
                      <li><a href="12tt-artistica"><i class="fa fa-circle-o"></i> 1º 2da. TT</a></li>
                      <li><a href="21tm-artistica"><i class="fa fa-circle-o"></i> 2º 1ra. TM</a></li>
                      <li><a href="22tm-artistica"><i class="fa fa-circle-o"></i> 2º 2da. TM</a></li>
                      <li><a href="21tt-artistica"><i class="fa fa-circle-o"></i> 2º 1ra. TT</a></li>
                      <li><a href="22tt-artistica"><i class="fa fa-circle-o"></i> 2º 2da. TT</a></li>
                      <li><a href="31tm-artistica"><i class="fa fa-circle-o"></i> 3º 1ra. TM</a></li>
                      <li><a href="32tm-artistica"><i class="fa fa-circle-o"></i> 3º 2da. TM</a></li>
                      <li><a href="31tt-artistica"><i class="fa fa-circle-o"></i> 3º 1ra. TT</a></li>
                      <li><a href="32tt-artistica"><i class="fa fa-circle-o"></i> 3º 2da. TT</a></li>
                      <li><a href="41tm-artistica"><i class="fa fa-circle-o"></i> 4º 1ra. TM</a></li>             
                      <li><a href="42tm-artistica"><i class="fa fa-circle-o"></i> 4º 2da. TM</a></li>             
                      <li><a href="41tt-artistica"><i class="fa fa-circle-o"></i> 4º 1ra. TT</a></li>             
             
              </ul>

           
            </li>';

               }

            ?> 

<?php

            if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "Docente Modalidad Sociales") {


                  echo'<li class="treeview">
                      <a href="#">
                          <i class="fa fa-graduation-cap"></i>  C.O. Ciencias Sociales
                          <i class="fa fa-angle-left pull-right"></i>
                      </a>                            

                        <ul class="treeview-menu">
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-circle-o"></i>
                                    3er. Año
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>

                                <ul class="treeview-menu">
                                    <li class="treeview">
                                      <li>
                                            <a href="3-antropologia-sociales">
                                            <i class="fa fa-check-circle-o"></i>
                                                Antropología Cultural                          
                                            </a>
                                      </li>  
                                  </li>
                              </li>
                          </ul>
                          </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-circle-o"></i>
                                    4º Año
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                            
                            <ul class="treeview-menu">
                                <li class="treeview">
                                    <li>
                                          <a href="4-antropologia-sociales">
                                          <i class="fa fa-check-circle-o"></i>
                                              Antropología Cultural                          
                                          </a>
                                    </li>
                                    <li>
                                          <a href="4-comunicacion-sociales">
                                          <i class="fa fa-check-circle-o"></i>
                                              Comunicación y Sociedad                          
                                          </a>
                                    </li>
                                </li>
                            </ul>
                            </li>
                            </li>
                            <li class="treeview">
                                  <a href="#">
                                      <i class="fa fa-circle-o"></i>
                                      5º Año
                                      <i class="fa fa-angle-left pull-right"></i>
                                  </a>
                            
                            <ul class="treeview-menu">
                                <li class="treeview">
                                      <li>
                                          <a href="5-proyecto-sociales">
                                          <i class="fa fa-check-circle-o"></i>
                                              Proyecto de Investigación                          
                                          </a>
                                      </li>
                                      <li>
                                          <a href="5-problematica-sociales">
                                          <i class="fa fa-check-circle-o"></i>
                                              Problemáticas Sociales                          
                                          </a>
                                      </li>  
                                     <li>
                                          <a href="5-conocimiento-sociales">
                                          <i class="fa fa-check-circle-o"></i>
                                              Conocimiento Social                          
                                          </a>
                                     </li>
                                                                         
                              </li>
                            </ul>
                            </li>

                      </ul>   
             </li>';

             }

            ?> 

            <?php

            if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "Docente Modalidad Informática") {


                  echo'<li class="treeview">
                      <a href="#">
                          <i class="fa fa-graduation-cap"></i>  C.O. Informática
                          <i class="fa fa-angle-left pull-right"></i>
                      </a>                            

                        <ul class="treeview-menu">
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-circle-o"></i>
                                    3er. Año
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>

                                <ul class="treeview-menu">
                                    <li class="treeview">
                                      <li>
                                            <a href="3-sistemas-informatica">
                                            <i class="fa fa-check-circle-o"></i>
                                                Tec. Sist. Informáicos                          
                                            </a>
                                      </li>  
                                  </li>
                              </li>
                          </ul>
                          </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-circle-o"></i>
                                    4º Año
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                            
                            <ul class="treeview-menu">
                                <li class="treeview">
                                    <li>
                                          <a href="4-aplicaciones-informatica">
                                          <i class="fa fa-check-circle-o"></i>
                                              Ap. Informáticas                          
                                          </a>
                                    </li>
                                    <li>
                                          <a href="4-conectividad-informatica">
                                          <i class="fa fa-check-circle-o"></i>
                                              Tec. de la Conectividad                          
                                          </a>
                                    </li>
                                </li>
                            </ul>
                            </li>
                            </li>
                            <li class="treeview">
                                  <a href="#">
                                      <i class="fa fa-circle-o"></i>
                                      5º Año
                                      <i class="fa fa-angle-left pull-right"></i>
                                  </a>
                            
                            <ul class="treeview-menu">
                                <li class="treeview">
                                      <li>
                                          <a href="5-software-informatica">
                                          <i class="fa fa-check-circle-o"></i>
                                              Tec. Software Libre                          
                                          </a>
                                      </li>
                                     <li>
                                          <a href="5-legislacion-informatica">
                                          <i class="fa fa-check-circle-o"></i>
                                              Seg. y Leg. Informática                          
                                          </a>
                                     </li>
                                     <li>
                                          <a href="5-proyecto-informatica">
                                          <i class="fa fa-check-circle-o"></i>
                                              Poy. Tec. Informática                         
                                          </a>
                                      </li> 
                              </li>
                            </ul>
                            </li>

                      </ul>   
             </li>';

             }

            ?> 

            
                
        <?php


        if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "REVE") {


            echo'<li class="treeview">
                <a href="#">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Espacio EVE</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>

               <ul class="treeview-menu">
                        <li><a href="11tm-eve"><i class="fa fa-circle-o"></i> 1º 1ra. TM</a></li>
                        <li><a href="11tt-eve"><i class="fa fa-circle-o"></i> 1º 1ra. TT</a></li>
                        <li><a href="12tt-eve"><i class="fa fa-circle-o"></i> 1º 2da. TT</a></li>
                        <li><a href="21tm-eve"><i class="fa fa-circle-o"></i> 2º 1ra. TM</a></li>
                        <li><a href="22tm-eve"><i class="fa fa-circle-o"></i> 2º 2da. TM</a></li>
                        <li><a href="21tt-eve"><i class="fa fa-circle-o"></i> 2º 1ra. TT</a></li>
                        <li><a href="22tt-eve"><i class="fa fa-circle-o"></i> 2º 2da. TT</a></li>
                        <li><a href="31tm-eve"><i class="fa fa-circle-o"></i> 3º 1ra. TM</a></li>
                        <li><a href="32tm-eve"><i class="fa fa-circle-o"></i> 3º 2da. TM</a></li>
                        <li><a href="31tt-eve"><i class="fa fa-circle-o"></i> 3º 1ra. TT</a></li>
                        <li><a href="32tt-eve"><i class="fa fa-circle-o"></i> 3º 2da. TT</a></li>
                        <li><a href="41tm-eve"><i class="fa fa-circle-o"></i> 4º 1ra. TM</a></li>             
                        <li><a href="42tm-eve"><i class="fa fa-circle-o"></i> 4º 2da. TM</a></li>             
                        <li><a href="41tt-eve"><i class="fa fa-circle-o"></i> 4º 1ra. TT</a></li>             
                        <li><a href="51tm-eve"><i class="fa fa-circle-o"></i> 5º 1ra. TM</a></li>             
                        <li><a href="52tm-eve"><i class="fa fa-circle-o"></i> 5º 2da. TM</a></li>             
                        <li><a href="51tt-eve"><i class="fa fa-circle-o"></i> 5º 1ra. TT</a></li>
               </ul>

           
            </li>';

               }

            ?>                



</ul>
</li>
</li>



</li>


     		<?php

	    		if ($_SESSION["perfil"] == "Administrador") {

		    	    echo '<li>
						<a href="cursos">

							<i class="fa fa-university"></i>
							<span>Cursos</span>

						</a>
					</li>';

			}

			?> 

			<?php

				if ($_SESSION["perfil"] == "Administrador") {

				echo '<li>
					<a href="usuarios">

						<i class="fa fa-users"></i>
						<span>Usuarios</span>

					</a>
				</li>';

		}

		?>

		<?php

			if ($_SESSION["perfil"] == "Administrador") {

				echo '<li>
					<a href="ciudades">

						<i class="fa fa-building"></i>
						<span>Ciudades</span>

					</a>
				</li>';

			}

		?>

<!--     <?php

    if ($_SESSION["perfil"] == "Administrador") {

      echo '<li>
        <a href="periodos">

          <i class="fa fa-calendar-check-o"></i>
          <span>Períodos</span>

        </a>
      </li>';

    }

    ?> -->

		<?php

			if ($_SESSION["movilidad"] == "1") {

				echo '<li class="treeview">
		          <a href="#">
		            <i class="fa fa-car"></i>
		            <span>Movilidad</span>
		            <span class="pull-right-container">
		              <i class="fa fa-angle-left pull-right"></i>
		            </span>
		          </a>
		          <ul class="treeview-menu">
		            <li><a href="movilidad"><i class="fa fa-circle-o"></i> Registro Movilidad</a></li>
		            <li><a href="movilidad-fecha"><i class="fa fa-circle-o"></i> Resumen x Fecha</a></li>
		          </ul>
	    	    </li>';

	    	}

    	?>

<?php

if ($_SESSION["movilidad"] != "1") {

  echo '<li class="treeview">
        <a href="#">
          <i class="fa fa-user-circle-o"></i>
          <span>Asistencia</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="asistencia"><i class="fa fa-circle-o"></i> Registro Asistencia</a></li>
          <li><a href="asistencia-fecha"><i class="fa fa-circle-o"></i> Resumen x Fecha</a></li>
        </ul>
      </li>';

  }

?>

<?php

    if ($_SESSION["perfil"] == "Administrador") {

      echo '<li>
        <a href="#">

          <i class=""></i>
          <span></span>

        </a>
      </li>';

    }

    ?>

<?php

    if ($_SESSION["perfil"] == "Administrador") {

      echo '<li>
        <a href="#">

          <i class=""></i>
          <span></span>

        </a>
      </li>';

    }

    ?>

<?php

if ($_SESSION["perfil"] == "Administrador") {

  echo '<li>
    <a href="#">

      <i class=""></i>
      <span></span>

    </a>
  </li>';

}

?>

    	<?php

    		if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Secretario" || $_SESSION["perfil"] == "Directivo") {

	    	    echo '<li class="treeview">
		          <a href="#">
		            <i class="fa fa-car"></i>
		            <span>Resumen Movilidad</span>
		            <span class="pull-right-container">
		              <i class="fa fa-angle-left pull-right"></i>
		            </span>
		          </a>
		          <ul class="treeview-menu">
		            <li><a href="resumen-movilidad"><i class="fa fa-circle-o"></i> Informe Movilidad</a></li>
		            <li><a href="resumen-docente"><i class="fa fa-circle-o"></i> Resumen x Docente</a></li>
		          </ul>
	    	    </li>';

	    	}

    	?>

<!--     	<?php

    		if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo") {

	    	    echo '<li class="treeview">
		          <a href="#">
		            <i class="fa fa-laptop"></i>
		            <span>Conectar Igualdad</span>
		            <span class="pull-right-container">
		              <i class="fa fa-angle-left pull-right"></i>
		            </span>
		          </a>
		          <ul class="treeview-menu">
		            <li><a href="netbooks"><i class="fa fa-circle-o"></i> Netbooks</a></li>
		            <li><a href="servicios"><i class="fa fa-circle-o"></i> Servicio Técnico</a></li>
		            <li><a href="historial-servicios"><i class="fa fa-circle-o"></i> Historial</a></li>
		          </ul>
	    	    </li>';

	    	}

    	?> -->


<!--         <?php

            if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo") {

                echo '<li class="treeview">
                  <a href="#">
                    <i class="fa fa-book"></i>
                    <span>Biblioteca</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="generos"><i class="fa fa-circle-o"></i> Géneros</a></li>
                    <li><a href="libros"><i class="fa fa-circle-o"></i> Libros</a></li>
                  </ul>
                </li>';

            }

        ?> -->

<!--         <?php

            if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo") {

                echo '<li class="treeview">
                  <a href="#">
                    <i class="fa fa-life-ring"></i>
                    <span>Licencias</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="articulos"><i class="fa fa-circle-o"></i> Artículos</a></li>
                    <li><a href="licencias"><i class="fa fa-circle-o"></i> Carga Licencias</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Consulta x Docente</a></li>
                  </ul>
                </li>';

            }

        ?> -->

<!--         <?php

            if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo"
                || $_SESSION["perfil"] == "Secretario" || $_SESSION["perfil"] == "Docente Científica"
                || $_SESSION["perfil"] == "Docente Sociales" || $_SESSION["perfil"] == "Docente Segundas Lenguas" || $_SESSION["perfil"] == "Docente Matemática" || $_SESSION["perfil"] == "Docente Educación Física" || $_SESSION["perfil"] == "Docente Educación Artística" || $_SESSION["perfil"] == "Docente Lengua y Literatura" || $_SESSION["perfil"] == "Docente Modalidad" || $_SESSION["perfil"] == "Preceptor" || $_SESSION["perfil"] == "REVE") {

                echo '<li class="treeview">
                  <a href="#">
                    <i class="fa fa-life-ring"></i>
                    <span>Licencias</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="licencias-docente"><i class="fa fa-circle-o"></i> Consulta</a></li>
                  </ul>
                </li>';

            }

        ?> -->


<!--         <?php

            if ($_SESSION["perfil"] == "Administrador") {

                echo '<li class="treeview">
                  <a href="#">
                    <i class="fa fa-database"></i>
                    <span>Backup</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="copia"><i class="fa fa-circle-o"></i> Copia de Seguridad</a></li>
                  </ul>
                </li>';

            }

        ?> -->

      <?php

        if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "Secretario") {

          echo '<li>
            <a href="carga-manual">

              <i class="fa fa-user-circle"></i>
              <span>Carga Manual</span>

            </a>
          </li>';

        }

        ?>         


		</ul>

	</section>

</aside>