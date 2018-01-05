<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../BLL/clientes/Cliente.php';
require_once '../BLL/login/Login.php';
$view = filter_input(INPUT_GET, 'view', FILTER_SANITIZE_ENCODED);


/*
 * Controla os Serviços RESTFull Webservice
 */
switch ($view) {
    case "all":
        break;
    case "single":
        $clsClienteBLL = new BLL\ClienteBLL();
        echo json_encode($clsClienteBLL->getClienteById(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_ENCODED)));
        break;
    case "login":
        $clsLoginBLL = new BLL\LoginBLL();
        $postData = file_get_contents("php://input");
        $request = json_decode($postData);
        echo json_encode($clsLoginBLL->getLogin($request->strUser, $request->strPass));
        break;
    default:
        break;
}