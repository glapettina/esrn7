<?php

  session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ESRN Nº 7 | Lamarque</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="icon" href="vistas/img/plantilla/logo.png">

  <!--======================================
  PLUGINS DE CSS
  =======================================--> 

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- DataTables -->
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

  <!-- Date Picker -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap-daterangepicker/daterangepicker.css">


  <!--======================================
  PLUGINS DE JAVASCRIPT
  =======================================-->    

  <!-- jQuery 3 -->
  <script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="vistas/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="vistas/dist/js/adminlte.min.js"></script>
  <!-- SweetAlert 2 -->
  <script src="vistas/plugins/sweetalert2/sweetalert2.all.js"></script>
  <!-- DataTables -->
  <script src="vistas/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>
  <!-- daterangepicker -->
  <script src="vistas/bower_components/moment/min/moment.min.js"></script>
  <script src="vistas/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="vistas/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="vistas/bower_components/bootstrap-datepicker/js/locales/bootstrap-datepicker.es.js"></script>


</head>

<!--======================================
  CUERPO DOCUMENTO
=======================================--> 

<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">


<?php

  if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {
    
    
    echo '<div class="wrapper">';

    /*======================================
    HEADER
    =======================================*/

    include "modulos/header.php";

    /*======================================
    MENU
    =======================================*/

    include "modulos/menu.php";

    /*======================================
    CONTENIDO
    =======================================*/

    if(isset($_GET["ruta"])){

      if ($_GET["ruta"] == "inicio" ||
          $_GET["ruta"] == "usuarios" ||
          $_GET["ruta"] == "cursos" ||
          $_GET["ruta"] == "ciudades" ||
          $_GET["ruta"] == "movilidad" ||
          $_GET["ruta"] == "carga-manual" ||
          $_GET["ruta"] == "asistencia" ||
          $_GET["ruta"] == "movilidad-fecha" ||
          $_GET["ruta"] == "asistencia-fecha" ||
          $_GET["ruta"] == "resumen-movilidad" ||
          $_GET["ruta"] == "resumen-docente" ||
          $_GET["ruta"] == "netbooks" ||
          $_GET["ruta"] == "servicios" ||
          $_GET["ruta"] == "periodos" ||
          $_GET["ruta"] == "historial-servicios" ||
          $_GET["ruta"] == "primero" ||
          $_GET["ruta"] == "segundo" ||
          $_GET["ruta"] == "tercero" ||
          $_GET["ruta"] == "cuarto" ||
          $_GET["ruta"] == "quinto" ||          
          $_GET["ruta"] == "11tm-cientifica" ||
          $_GET["ruta"] == "11tt-cientifica" ||
          $_GET["ruta"] == "12tt-cientifica" ||
          $_GET["ruta"] == "21tm-cientifica" ||
          $_GET["ruta"] == "22tm-cientifica" ||
          $_GET["ruta"] == "21tt-cientifica" ||
          $_GET["ruta"] == "22tt-cientifica" ||
          $_GET["ruta"] == "31tm-cientifica" ||
          $_GET["ruta"] == "32tm-cientifica" ||
          $_GET["ruta"] == "31tt-cientifica" ||
          $_GET["ruta"] == "32tt-cientifica" ||
          $_GET["ruta"] == "41tm-cientifica" ||
          $_GET["ruta"] == "42tm-cientifica" ||
          $_GET["ruta"] == "41tt-cientifica" ||
          $_GET["ruta"] == "51tm-cientifica" ||
          $_GET["ruta"] == "52tm-cientifica" ||
          $_GET["ruta"] == "51tt-cientifica" ||
          $_GET["ruta"] == "11tm-sociales" ||
          $_GET["ruta"] == "11tt-sociales" ||
          $_GET["ruta"] == "12tt-sociales" ||
          $_GET["ruta"] == "21tm-sociales" ||
          $_GET["ruta"] == "22tm-sociales" ||
          $_GET["ruta"] == "21tt-sociales" ||
          $_GET["ruta"] == "22tt-sociales" ||
          $_GET["ruta"] == "31tm-sociales" ||
          $_GET["ruta"] == "32tm-sociales" ||
          $_GET["ruta"] == "31tt-sociales" ||
          $_GET["ruta"] == "32tt-sociales" ||
          $_GET["ruta"] == "41tm-sociales" ||
          $_GET["ruta"] == "42tm-sociales" ||
          $_GET["ruta"] == "41tt-sociales" ||
          $_GET["ruta"] == "51tm-sociales" ||
          $_GET["ruta"] == "52tm-sociales" ||
          $_GET["ruta"] == "51tt-sociales" ||
          $_GET["ruta"] == "11tm-literatura" ||
          $_GET["ruta"] == "11tt-literatura" ||
          $_GET["ruta"] == "12tt-literatura" ||
          $_GET["ruta"] == "21tm-literatura" ||
          $_GET["ruta"] == "22tm-literatura" ||
          $_GET["ruta"] == "21tt-literatura" ||
          $_GET["ruta"] == "22tt-literatura" ||
          $_GET["ruta"] == "31tm-literatura" ||
          $_GET["ruta"] == "32tm-literatura" ||
          $_GET["ruta"] == "31tt-literatura" ||
          $_GET["ruta"] == "32tt-literatura" ||
          $_GET["ruta"] == "41tm-literatura" ||
          $_GET["ruta"] == "42tm-literatura" ||
          $_GET["ruta"] == "41tt-literatura" ||
          $_GET["ruta"] == "51tm-literatura" ||
          $_GET["ruta"] == "52tm-literatura" ||
          $_GET["ruta"] == "51tt-literatura" ||
          $_GET["ruta"] == "11tm-matematica" ||
          $_GET["ruta"] == "11tt-matematica" ||
          $_GET["ruta"] == "12tt-matematica" ||
          $_GET["ruta"] == "21tm-matematica" ||
          $_GET["ruta"] == "22tm-matematica" ||
          $_GET["ruta"] == "21tt-matematica" ||
          $_GET["ruta"] == "22tt-matematica" ||
          $_GET["ruta"] == "31tm-matematica" ||
          $_GET["ruta"] == "32tm-matematica" ||
          $_GET["ruta"] == "31tt-matematica" ||
          $_GET["ruta"] == "32tt-matematica" ||
          $_GET["ruta"] == "41tm-matematica" ||
          $_GET["ruta"] == "42tm-matematica" ||
          $_GET["ruta"] == "41tt-matematica" ||
          $_GET["ruta"] == "51tm-matematica" ||
          $_GET["ruta"] == "52tm-matematica" ||
          $_GET["ruta"] == "51tt-matematica" ||
          $_GET["ruta"] == "11tm-ingles" ||
          $_GET["ruta"] == "11tt-ingles" ||
          $_GET["ruta"] == "12tt-ingles" ||
          $_GET["ruta"] == "21tm-ingles" ||
          $_GET["ruta"] == "22tm-ingles" ||
          $_GET["ruta"] == "21tt-ingles" ||
          $_GET["ruta"] == "22tt-ingles" ||
          $_GET["ruta"] == "31tm-ingles" ||
          $_GET["ruta"] == "32tm-ingles" ||
          $_GET["ruta"] == "31tt-ingles" ||
          $_GET["ruta"] == "32tt-ingles" ||
          $_GET["ruta"] == "41tm-ingles" ||
          $_GET["ruta"] == "42tm-ingles" ||
          $_GET["ruta"] == "41tt-ingles" ||
          $_GET["ruta"] == "51tm-ingles" ||
          $_GET["ruta"] == "52tm-ingles" ||
          $_GET["ruta"] == "51tt-ingles" ||
          $_GET["ruta"] == "11tm-edfisica" ||
          $_GET["ruta"] == "11tt-edfisica" ||
          $_GET["ruta"] == "12tt-edfisica" ||
          $_GET["ruta"] == "21tm-edfisica" ||
          $_GET["ruta"] == "22tm-edfisica" ||
          $_GET["ruta"] == "21tt-edfisica" ||
          $_GET["ruta"] == "22tt-edfisica" ||
          $_GET["ruta"] == "31tm-edfisica" ||
          $_GET["ruta"] == "32tm-edfisica" ||
          $_GET["ruta"] == "31tt-edfisica" ||
          $_GET["ruta"] == "32tt-edfisica" ||
          $_GET["ruta"] == "41tm-edfisica" ||
          $_GET["ruta"] == "42tm-edfisica" ||
          $_GET["ruta"] == "41tt-edfisica" ||
          $_GET["ruta"] == "51tm-edfisica" ||
          $_GET["ruta"] == "52tm-edfisica" ||
          $_GET["ruta"] == "51tt-edfisica" ||
          $_GET["ruta"] == "11tm-artistica" ||
          $_GET["ruta"] == "11tt-artistica" ||
          $_GET["ruta"] == "12tt-artistica" ||
          $_GET["ruta"] == "21tm-artistica" ||
          $_GET["ruta"] == "22tm-artistica" ||
          $_GET["ruta"] == "21tt-artistica" ||
          $_GET["ruta"] == "22tt-artistica" ||
          $_GET["ruta"] == "31tm-artistica" ||
          $_GET["ruta"] == "32tm-artistica" ||
          $_GET["ruta"] == "31tt-artistica" ||
          $_GET["ruta"] == "32tt-artistica" ||
          $_GET["ruta"] == "41tm-artistica" ||
          $_GET["ruta"] == "42tm-artistica" ||
          $_GET["ruta"] == "41tt-artistica" ||      
          $_GET["ruta"] == "11tm-eve" ||
          $_GET["ruta"] == "11tt-eve" ||
          $_GET["ruta"] == "12tt-eve" ||
          $_GET["ruta"] == "21tm-eve" ||
          $_GET["ruta"] == "22tm-eve" ||
          $_GET["ruta"] == "21tt-eve" ||
          $_GET["ruta"] == "22tt-eve" ||
          $_GET["ruta"] == "31tm-eve" ||
          $_GET["ruta"] == "32tm-eve" ||
          $_GET["ruta"] == "31tt-eve" ||
          $_GET["ruta"] == "32tt-eve" ||
          $_GET["ruta"] == "41tm-eve" ||
          $_GET["ruta"] == "42tm-eve" ||
          $_GET["ruta"] == "41tt-eve" ||
          $_GET["ruta"] == "51tm-eve" ||
          $_GET["ruta"] == "52tm-eve" ||
          $_GET["ruta"] == "51tt-eve" ||              
          $_GET["ruta"] == "3-antropologia-sociales" ||
          $_GET["ruta"] == "3-sistemas-informatica" ||
          $_GET["ruta"] == "4-antropologia-sociales" ||
          $_GET["ruta"] == "4-comunicacion-sociales" ||
          $_GET["ruta"] == "4-aplicaciones-informatica" ||
          $_GET["ruta"] == "4-conectividad-informatica" ||
          $_GET["ruta"] == "5-proyecto-sociales" ||
          $_GET["ruta"] == "5-problematica-sociales" ||
          $_GET["ruta"] == "5-conocimiento-sociales" ||
          $_GET["ruta"] == "5-software-informatica" ||
          $_GET["ruta"] == "5-seguridad-informatica" ||
          $_GET["ruta"] == "5-tecnologico-informatica" ||
          $_GET["ruta"] == "4-fotografia" ||
          $_GET["ruta"] == "4-realizacion" ||
          $_GET["ruta"] == "4-guion" ||
          $_GET["ruta"] == "4-sonido" ||
          $_GET["ruta"] == "5-fotografia" ||
          $_GET["ruta"] == "5-realizacion" ||
          $_GET["ruta"] == "5-guion" ||
          $_GET["ruta"] == "5-sonido" ||
          $_GET["ruta"] == "5-taller" ||
          $_GET["ruta"] == "5-semiotica" ||
          $_GET["ruta"] == "informe-area" ||
          $_GET["ruta"] == "informe-area-orientacion" ||
          $_GET["ruta"] == "generos" ||
          $_GET["ruta"] == "libros" ||
          $_GET["ruta"] == "articulos" ||
          $_GET["ruta"] == "licencias" ||
          $_GET["ruta"] == "licencias-docente" ||
          $_GET["ruta"] == "copia" ||
          $_GET["ruta"] == "seguimiento" ||
          $_GET["ruta"] == "2tm-seguimiento-cientifica" ||
          $_GET["ruta"] == "2tt-seguimiento-cientifica" ||
          $_GET["ruta"] == "2tm-seguimiento-sociales" ||
          $_GET["ruta"] == "2tt-seguimiento-sociales" ||
          $_GET["ruta"] == "2tm-seguimiento-lengua" ||
          $_GET["ruta"] == "2tt-seguimiento-lengua" ||
          $_GET["ruta"] == "2tm-seguimiento-matematica" ||
          $_GET["ruta"] == "2tt-seguimiento-matematica" ||
          $_GET["ruta"] == "2tm-seguimiento-ingles" ||
          $_GET["ruta"] == "2tt-seguimiento-ingles" ||
          $_GET["ruta"] == "2tm-seguimiento-fisica" ||
          $_GET["ruta"] == "2tt-seguimiento-fisica" ||
          $_GET["ruta"] == "2tm-seguimiento-artistica" ||
          $_GET["ruta"] == "2tt-seguimiento-artistica" ||
          $_GET["ruta"] == "salir") {
        
          include "modulos/".$_GET["ruta"].".php";

      }else{

        include "modulos/404.php";

      }

    }else{

      include "modulos/inicio.php";

    }

    /*======================================
    FOOTER
    =======================================*/

    include "modulos/footer.php";

    echo '</div>';

  }else{

    include "modulos/login.php";

  }  

?>



<script src="vistas/js/plantilla.js"></script>
<script src="vistas/js/usuarios.js"></script>
<script src="vistas/js/cursos.js"></script>
<script src="vistas/js/ciudades.js"></script>
<script src="vistas/js/alumnos.js"></script>
<script src="vistas/js/movilidades.js"></script>
<script src="vistas/js/asistencia.js"></script>
<script src="vistas/js/netbooks.js"></script>
<script src="vistas/js/servicios.js"></script>
<script src="vistas/js/informes.js"></script>
<script src="vistas/js/generos.js"></script>
<script src="vistas/js/libros.js"></script>
<script src="vistas/js/articulos.js"></script>
<script src="vistas/js/licencias.js"></script>
<script src="vistas/js/periodos.js"></script>



<!--CAMPO FECHA - DATEPICKER-->

<script>
      
      $('#datepicker').datepicker({       
      /*dateFormat: 'dd-mm-yy',
      autoclose: true*/
       format: "dd/mm/yyyy",
       startDate: '-0d',
       endDate: '+0d',
        /*clearBtn: true,*/
        language: "es",
        autoclose: true,
        todayHighlight: true
        /*keyboardNavigation: false,
        todayHighlight: true*/
    }).datepicker("setDate", new Date());

      $('#datepicker2').datepicker({
          /*dateFormat: 'dd-mm-yy',
          autoclose: true*/
           format: "dd/mm/yyyy",
            /*clearBtn: true,*/
            language: "es",
            autoclose: true,
            /*keyboardNavigation: false,
            todayHighlight: true*/
    })

        $('#datepicker3').datepicker({
      /*dateFormat: 'dd-mm-yy',
      autoclose: true*/
       format: "dd/mm/yyyy",
        /*clearBtn: true,*/
        language: "es",
        autoclose: true,
        /*keyboardNavigation: false,
        todayHighlight: true*/
    })



</script>    

</body>
</html>


