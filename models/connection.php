<?php

/*===================================
  Clase para conectarse a la Base de Datos
=================================== */
class Connection {

/*===================================
  Funcion que conecta a la base de datos con todos los parametros enviados.
  ACA SE DEBEN CAMBIAR LOS DATOS DE SERVIDOR, DATABASE Y USER SEGUN CORRESPONDA
=================================== */
    static public function connect() {
        try{
            $link = new PDO("mysql:host=localhost;dbname=stkmarketplace","root","");
            $link->exec("set names utf8");   // Agregar utf8 a todo lo que venga de la base de datos asi permite caracteres especiales latinos
    
        } catch(PDOException $e) {
            die("Error: ".$e->getMessage());
        }
        return $link;

    }


}