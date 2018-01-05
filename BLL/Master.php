<?php

namespace BLL;
require "DAL\Master.php";
require "TO\Master.php";
class MasterBLL {
    function getMasterAll(){
        $clsMasterDAL=new \DAL\MasterDAL();               
        return $clsMasterDAL->getMasterAll();
    }
}

?>
