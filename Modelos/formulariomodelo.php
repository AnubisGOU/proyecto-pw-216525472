<?php
    require_once "Conexion.php";
    class modeloFormulario{
        static public function mdlRegistro($tabla,$dato){
            $sql="INSERT INTO $tabla (Usuario, Pass, Correo) VALUES (:nombre, :psd, :email)";
            $stmt=conexion::conectar()->prepare($sql);

            $stmt ->bindParam(':nombre', $dato['Usuario'],PDO::PARAM_STR);
            $stmt ->bindParam(':psd', $dato['Pass'],PDO::PARAM_STR);
            $stmt ->bindParam(':email', $dato['Correo'],PDO::PARAM_STR);
            if($stmt->execute()){
                return "OK";
            }
            else {
                print_r(conexion::conectar()->errorInfo());
            };
        }
        static public function mdlSeleccionarRegistros($tabla,$item,$valor){
            if($item==null && $valor==null){
                $sql="SELECT * FROM $tabla";
                $stmt=conexion::conectar()->prepare($sql);
                $stmt->execute();
                return $stmt->fetchALL();
            }else{
                $sql="SELECT * FROM $tabla WHERE $item = :$item";
                $stmt=conexion::conectar()->prepare($sql);
                $stmt ->bindParam(':'.$item,$valor, PDO::PARAM_STR);
                $stmt->execute();
                return $stmt->fetch();
            }
        }
    }
?>