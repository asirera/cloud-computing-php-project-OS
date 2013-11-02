<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require 'function.php';
require 'lib/nusoap.php';
$server=new nusoap_server();
$server->configureWSDL("serviceName","urn:demo");
$server->register(
        "price", //name of function
        array("name"=>'xsd:string'),  // inputs
        array("return"=>'xsd:inter' )   //outputs
        );

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA:'';
$server->service($HTTP_RAW_POST_DATA);
?>



