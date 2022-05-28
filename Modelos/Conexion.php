<?php
    class conexion{
        static public function conectar(){
            $enlace = new PDO("mysql:host=localhost;dbname=hunter_palace", "root", "");
            $enlace->exec("set names utf8");
            return $enlace;
        }
    }
?>