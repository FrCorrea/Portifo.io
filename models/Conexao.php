<?php

namespace models;

use PDO;
use PDOException;

class Conexao {
    private static $intancia;

    public static function get(){
        try{
            if(!isset(self::$intancia)){
                self::$intancia = new PDO('mysql:host=localhost;dbname=portifoio', 'root', '');
            }
            return self::$intancia;

        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}

?>