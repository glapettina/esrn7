

  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Asistencia Docente
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Asistencia Docente</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">

        <div class="box-header with-border">
          
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarAsistencia">
            
            Agregar Asistencia
          </button>
          
        </div>
        <div class="box-body">
          
          <table class="table table-bordered table-striped dt-responsive tablas">
            
            <thead>
              
              <tr>
                
                <th style="width: 10px">#</th>
                <th>Docente</th>
                <th>Fecha</th>
                <th>Turno</th>
                <th>Acciones</th>

              </tr> 

            </thead>
            <tbody>
              
              <?php

                  $item = "id_usuario";
                  $valor = $_SESSION["id"];


                  $asitencia = ControladorAsistencia::ctrMostrarAsistencia($item, $valor);

                  foreach ($asitencia as $key => $value) {
                    
                    echo '<tr>
                
                          <td>'.($key+1).'</td>';

                          $item = "id";
                          $valor = $value["id_usuario"];

                          $usuario = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

                          echo '<td>'.$usuario["nombre"].'</td>'; 

                          $fecha_real = date("d-m-Y",strtotime($value["fecha"]));

                          echo '<td>'.$fecha_real.'</td>
                          <td>'.$value["turno"].'</td>       

                          <td>
                            
                            <div class="btn-group">
                                
                              <button class="btn btn-danger btnEliminarAsistencia" idAsistencia="'.$value["id_movilidad"].'"><i class="fa fa-times"></i></button>

                            </div>

                          </td>

                        </tr> ';
                  }


              ?>

            </tbody>

          </table>

        </div>
        
        
      </div>

    </section>
  </div>


  <!--=====================================
  MODAL AGREGAR ASISTENCIA
  ======================================-->


<div id="modalAgregarAsistencia" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

          <!--=====================================
          CABEZA DEL MODAL
          ======================================-->

          <div class="modal-header" style="background: #3c8dbc; color: white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Agregar Asistencia</h4>

          </div>

          <!--=====================================
          CUERPO DEL MODAL
          ======================================-->


          <div class="modal-body">

            <div class="box-body">

              <!-- ENTRADA PARA LA FECHA -->          
              
              <div class="form-group">
                
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  <input class="form-control input-lg" type="text" name="datepicker" id="datepicker" placeholder="Ingresar fecha">

                </div>

              </div>

              <!-- ENTRADA PARA SELECCIONAR EL TURNO -->

              <div class="form-group">
                
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-users"></i></span>
                  
                  <select class="form-control input-lg" name="nuevoTurno">
                    
                    <option value="">Seleccionar turno</option>
                    <option value="Mañana">Mañana</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Noche">Noche</option>


                  </select>

                </div>

              </div>




            </div>
            
          </div>

          <!--=====================================
          PIE DEL MODAL
          ======================================-->



          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

            <button type="submit" class="btn btn-primary">Guardar Asistencia</button>

          </div>

          <?php

              $crearasistencia = new ControladorAsistencia();
              $crearasistencia -> ctrCrearAsitencia();

          ?>

    </form>
    </div>

  </div>
</div>

  

  <?php

      $borrarasistencia = new ControladorAsistencia();
      $borrarasistencia -> ctrBorrarAsistencia();

  ?>
  

  