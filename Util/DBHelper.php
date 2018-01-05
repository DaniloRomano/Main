<?php
namespace Util;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require "../AppConfig.php";
class DBHelper{
    public function __construct() {
        
    }
    
     public static function getDBConnection() {
        $con = new \PDO(DB_ConnectionString, DB_User, DB_Pass);

        return $con;
    }
}
