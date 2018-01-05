<?php

namespace TO;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class LoginTO implements \JsonSerializable {

    private $intId;
    private $strUser;
    private $strPassword;
    private $strHashVerify;
    private $blnOut;

    public function getId() {return $this->intId;}
    public function setId($intId) {$this->intId = $intId;}
    public function getUser() {return $this->strUser;}
    public function setUser($strUser) {$this->strUser = $strUser;}
    public function getPassword() {return $this->strPassword;}
    public function setPassword($strPass) {$this->strPassword = $strPass;}
    public function getHashVerify() {return $this->strHashVerify;}
    public function setHashVerify($strHashVerify) {$this->strHashVerify = $strHashVerify;}
    public function getOut() {return $this->blnOut;}
    public function setOut($blnOut) {$this->blnOut = $blnOut;}

    public function jsonSerialize() {
        $vars= get_object_vars($this);
        
        return $vars;
    }

}

