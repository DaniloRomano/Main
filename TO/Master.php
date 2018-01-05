<?php

namespace TO;

class MasterTO {

    private $intId;
    private $strNome;

    function getId() {
        return $this->intId;
    }

    function setId($value) {
        $this->intId = $value;
    }

    function getNome() {
        return $this->strNome;
    }

    function setNome($nome) {
        $this->strNome = $nome;
    }

}

?>
