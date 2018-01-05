<?php
namespace DAL;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../TO/login/Login.php';
require_once '../Util/DBHelper.php';
use TO;
use Util;
class LoginDAL{
        
    public function getLogin($strUser,$strPassword){        
        $db= \Util\DBHelper::getDBConnection();
        $sql='SELECT * FROM tb_login WHERE strUser like :user AND strPassword like :pass AND blnOut=0';
        $stmt=$db->prepare($sql);
        $stmt->bindParam(':user',$strUser,  \PDO::PARAM_STR);
        $stmt->bindParam(':pass', $strPassword, \PDO::PARAM_STR);
        $stmt->execute();
        $clsLoginTO=new TO\LoginTO();
        $clsLoginTO=$stmt->fetchObject('\TO\LoginTO');        
        return $clsLoginTO;
    }
}