
<php
require 'lib/nuscap.php;
$server=new nuscap_server();
$server->configureWSDL("demo"."urn:demo");
$server->register(
"price", 
array("name"=>'xsd:string'),  
array("return"=>'xsd:inter') 

);
?>



$HTTP_RAW_POST_DATA=isset($HTTP_RAW_POST_DATA)?$HTTP_RAw_POST_DATA:'';
$server->service($$HTTP_RAW_POST_DATA)


