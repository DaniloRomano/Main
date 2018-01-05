<?php

namespace BLL;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../DAL/login/Login.php';
require_once '../TO/login/Login.php';

use DAL;
use TO;

class LoginBLL {

    public function getLogin($strUser, $strPassword) {
        $clsLoginDAL = new DAL\LoginDAL();        
        return $clsLoginDAL->getLogin($strUser, $strPassword);
    }

}
