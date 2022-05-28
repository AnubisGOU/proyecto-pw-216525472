<?php
    class ControladorFormularios{
        static public function ctrRegistro(){
            if(isset($_POST['registroUsuario'])){
                $tabla="registros";
                $dato= array("Usuario"=>$_POST["registroUsuario"],
                 "Pass"=>$_POST["registroPass"], 
                 "Correo"=>$_POST["registroEmail"]);
                 $respuesta=modeloFormulario::mdlRegistro($tabla,$dato);
                 return $respuesta;
            }
        }
        static public function crtSeleccionarRegistros($item,$valor){
                $tabla="Ingreso";
                $respuesta = modeloFormulario::mdlSeleccionarRegistros($tabla,$item,$valor);
                return $respuesta;
        }
        public function crtIngreso($item,$valor){
            if (isset($_POST["ingresoEmail"])) {
                $tabla="Registro";
                $item = "Correo";
                $valor = $_POST["ingresoEmail"];
                $respuesta = modeloFormulario::mdlSeleccionarRegistros($tabla,$item,$valor);
            if ($respuesta["Correo"]==$_POST["ingresoEmail"] && $respuesta["Pass"]==$_POST["ingresoPassword"]){
                echo '
                    <script> 
                     window.location="index.php?action=reporte"; 
                    </script>
                ';
            }else{
                echo "El correo y/o la contraseña no son correctos <br>";
            }  
            }
        }
    }
?>