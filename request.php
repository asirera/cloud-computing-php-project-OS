<?php
/**
	Issues requests to the Decibel SOAP API and outputs the result.
	
	Usage example:
	request.php?search=AlbumInformation&id=25ec4f39-6411-4fa1-b280-23cd708d6f27
	
	@version 1.0
	@modified 19/10/2012
*/	

include 'admin.php';	
include 'util.php';

// Check the referer is the host website	
$referer = $_SERVER['HTTP_REFERER'];
$referer_parse = parse_url($referer);
if($referer_parse['host'] != $host)
	exit();

// Get the type of search
$search = trim($_GET['search']); 

// Get the Decibel ID
$id = trim($_GET['id']); 

// Create the SoapClient instance 
$client = new SoapClient($apiAddress, array('features' => SOAP_SINGLE_ELEMENT_ARRAYS));
					
// Construct the search URL 
if($search == "AlbumInformation") {
	
	// Set the retrieval depth
	$depth = array(	
		"Genres",
		"Names",
		"ExternalIdentifiers",	
		"Publications",
		"Performances",
		"Media",
		"ImageThumbnail",
		"Tracks"
    );	
	
	// Set the parameters of the function that we are going to request 
	$params = array(
		'appID'=>$applicationID,
		'appKey'=>$applicationKey,
		'albumID'=>$id,
		'languageDialectID'=>NULL,
		'depth'=>$depth
	);		
	
	// Issue the request to the Decibel Web Service
	$result = $client->AlbumRetrieve($params);
	
} else if($search == "ParticipantAssociates") {

	// Set the parameters of the function that we are going to request 
	$params = array(
		'appID'=>$applicationID,
		'appKey'=>$applicationKey,
		'participantID'=>$id
	);
	
	// Issue the request to the Decibel Web Service
	$result = $client->ParticipantAssociates($params);	
	
} else if($search == "ParticipantTrackAppearances") {

	// Construct the participant track appearances query
	$query->ParticipantID = $id;
	$query->PageSize = 50;	
	
	// Construct an array of query objects
	$queries = array($query);
	
	// Set the parameters of the function that we are going to request 
	$params = array(
		'appID'=>$applicationID,
		'appKey'=>$applicationKey,
		'queries'=>$queries
	);
 
	// Issue the request to the Decibel Web Service
	$result = $client->ParticipantTrackAppearanceQuery($params);		
	
} else if($search == "WorkTrackAppearances") {

	// Set the parameters of the function that we are going to request 
	$params = array(
		'appID'=>$applicationID,
		'appKey'=>$applicationKey,
		'workID'=>$id,
		'languageDialectID'=>NULL,
		'limit'=>50,
		'collectionID'=>NULL
	);
	
	// Issue the request to the Decibel Web Service
	$result = $client->WorkTrackAppearances($params);		
}

// Set flag if thumbnail exists
if($search == 'AlbumInformation' && strlen($result->AlbumRetrieveResult->Thumbnail) > 0)
	$result->AlbumRetrieveResult->Thumbnail = 'true';

// Output the result in JSON format
echo json_encode($result);

?>
