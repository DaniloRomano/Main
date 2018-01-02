<?php

namespace BLL;
use TO;
use DAL;
class MasterBLL {
    function getMasterAll(){
        $clsMasterDAL=new \DAL\MasterDAL();               
        return $clsMasterDAL->getMasterAll();
    }
}

?>
