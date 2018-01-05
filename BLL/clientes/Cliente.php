<?php

namespace BLL;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once "../DAL/clientes/Cliente.php";
require_once "../TO/clientes/Cliente.php";

use DAL;

class ClienteBLL {

    function getClienteById($intId) {        
        $clsClienteDAL = new DAL\ClienteDAL();
        return $clsClienteDAL->getClienteById($intId);
    }

}
