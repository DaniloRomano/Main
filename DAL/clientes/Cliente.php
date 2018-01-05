<?php

namespace DAL;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//require "../../TO/clientes/Cliente.php";
require_once "../Util/DBHelper.php";

use Util;

class ClienteDAL {

    public function getClienteById($intId) {
        try {
            $db = Util\DBHelper::getDBConnection();
            $sql = 'SELECT * FROM tb_Cliente WHERE intId=:ID';
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':ID', $intId, \PDO::PARAM_INT);
            $stmt->execute();
            $clsCliente = $stmt->fetchObject("TO\ClienteTO");
            return $clsCliente;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
