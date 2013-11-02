<?php


//require 'lib/nusoap.php';
//$client=new nusoap_client("http://localhost/AssPhpCloudProject/service.php?wsdl");
//$Book_name="abc";   // here you put the $POST in real world
//$response=$client->call('price',array("name"=>"$Book_name"));
//if(empty ($response))
//echo "book not available";
//else echo $response;

	
require 'lib/nusoap.php';
$client=new nusoap_client("http://www.ecubicle.net/iptocountry.asmx?wsdl");
$IP="80.111.57.244";   // here you put the $POST in real world
$response=$client->call('price',array("name"=>"$IP"));
if(empty ($response))
echo "book not available";
else echo $response;
?>
