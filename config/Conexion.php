<?php
require_once "globales.php"; //LLama al archivo de las globales

class Conexion
{
    function __construct()
    {
       
    }
    public static function conectar(){
        //conexion mysql
        try {
            $cn = new PDO("mysql:host=".DB_HOST_MYSQL.";dbname=".DB_NAME_MYSQL.";charset=utf8",DB_USER_MYSQL,DB_PASSWORD_MYSQL);
            $cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $cn; //Devuelve la conexion
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }

}

