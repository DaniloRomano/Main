
<?php

namespace DAL;

use TO;

class MasterDAL{

    private function Connection(){
        $con=new PDO($DB_ConnectionString,$DB_User,$DB_Pass);
        
        return $con;
    }
    
    
    function getMasterAll(){
        $clsMasterTO=new \TO\MasterTO();
        $clsMasterTO->intId=1;
        $clsMasterTO->strNome="Teste";
        return $clsMasterTO;
    }

}

?>
