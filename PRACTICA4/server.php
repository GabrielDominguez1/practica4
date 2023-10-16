<?php
    require_once "lib/nusoap.php";
    function getFruits($datos){
        if($datos == "fruits"){
            return join(",", array(
                "Manzana",
                " Pera",
                " Piña",
                " Sandia"));
        }else{
            return "No hay frutas";
        }
    }
    $server = new soap_server();
    $server->register("getFruits");
    if(!isset($HTTP_RAW_POST_DATA)) $HTTP_RAW_POST_DATA = file_get_contents('php://input');
        $server -> service($HTTP_RAW_POST_DATA);
?>