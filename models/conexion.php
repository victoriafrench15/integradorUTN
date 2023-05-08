<?php
class Conexion{
    static public function conectar(){
        $link = new PDO("mysql:host=localhost;port=80;dbname=utndb", 
                            "root",
                            "french1313"); 
        $link->exec("set names utf8");

        return $link;
    }
}