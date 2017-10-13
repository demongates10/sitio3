<?php
class Database{
    private function __construct() {
        ;
    }
    public static function getConnection(){
        return new PDO("mysql:host=localhost;dbname=soler;", "rodrigo", "123456");
    }
}
/*
  *   $db = Database::getConnection();
  *   var_dump($db);
  * 
  */
