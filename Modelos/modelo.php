<?php
    class EnlacesPaginas{
        public static function enlacesPaginasModelo($enlaceModelo){
            if(
               $enlaceModelo=="Nosotros" ||
               $enlaceModelo=="Servicios" ||
               $enlaceModelo=="registros" ||
               $enlaceModelo=="reporte" ||
               $enlaceModelo=="ingreso" ||
               $enlaceModelo=="Contactos"){
                   
                $modulo="Vistas/Modulos/".$enlaceModelo.".php";
               }
               elseif($enlaceModelo=="index"){
                   $modulo="Vistas/Modulos/Inicio.php";
               }
               else{
                $modulo="Vistas/Modulos/Inicio.php";
               }

               return $modulo;
        }
    }
?>