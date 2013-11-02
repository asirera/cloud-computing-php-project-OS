<?php
/**
	Issues a request to the Decibel SOAP API for album images. 

	Usage example:
	album-image.php?albumID=25ec4f39-6411-4fa1-b280-23cd708d6f27&type=Thumbnail
	
	@version 1.0
	@modified 23/10/2012
*/		
	
include 'admin.php';	
include 'util.php';
	
// Get the album ID
$albumID = trim($_GET['albumID']); 

// Get the image type
$type = trim($_GET['type']); 

// Set the default image type
if(empty($type))
	$type = "Image";		

// Create the SoapClient instance 
$client = new SoapClient($apiAddress, array('features' => SOAP_SINGLE_ELEMENT_ARRAYS));	
	
// Set the parameters of the function that we are going to request 
$params = array(
	'appID'=>$applicationID,
	'appKey'=>$applicationKey,
	'albumID'=>$albumID,
	'imageType'=>($type == 'Image' ? 'ID3_CoverFront' : 'Thumbnail')
);			

// Issue the request to the Decibel Web Service
$result = $client->AlbumImageFile($params);

// Encodes the data with MIME base64
echo 'data:image/jpeg;base64,' . base64_encode($result->AlbumImageFileResult);
?>
