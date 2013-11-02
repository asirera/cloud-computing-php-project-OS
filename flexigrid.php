<?php
/**
	Issues a request to the Decibel SOAP API for albums, participants, tracks and works.
	The results are encoded in JSON format for use with the jQuery Flexigrid UI component.
	
	Usage example:
	flexigrid-request.php?url=http://decibel-sample.cloudapp.net/v1/Albums/?artist=miles%20davis&search=artist
	
	@version 1.0
	@modified 22/10/2012
*/	
	
include 'admin.php';	
include 'util.php';
	
// Set the content type to JSON
header("Content-type: application/json");

// Get the results per page
$rp = $_GET['rp']; 

// Get the current page
$page = $_GET['page']; 

// Get the search type
$search = $_GET['search']; 

// Start a session
session_start();

// Create the SoapClient instance 
$client = new SoapClient($apiAddress, array('features' => SOAP_SINGLE_ELEMENT_ARRAYS));

if($page == 1)
{
	// Construct the query object
	$query->PageSize = $rp;
	
	if($search == "albums")
	{
		// Album Title
		if(isset($_GET['albumTitle']))
			$query->Name = $_GET['albumTitle']; 
							
		// Artist name
		if(isset($_GET['artist']))
		{
			$participantQuery = array('Name'=>$_GET['artist']); 
			$query->FeaturedArtists = array($participantQuery);
		}

		// Barcode
		if(isset($_GET['barcode']))
			$query->BarCode = $_GET['barcode']; 		
		
		// Genre
		if(isset($_GET['genre']))
			$query->Genre = array('Name'=>$_GET['genre']); 	

		// Publisher
		if(isset($_GET['label']))
			$query->Publisher = array('Name'=>$_GET['label']); 	

		// Region
		if(isset($_GET['region']))
			$query->GeoEntities = array('Name'=>$_GET['region']); 		

		// Retrieval depth
		$query->RetrievalDepth = "Publications";	
			
		// Construct an array of query objects
		$queries = array($query);

		// Set the parameters of the function that we are going to request 
		$params = array(
			'appID'=>$applicationID,
			'appKey'=>$applicationKey,
			'queries'=>$queries
		);		

		// Issue the request to the Decibel Web Service
		$result = $client->AlbumQuery($params);
		
		// Return the collection of album objects
		$result = $result->AlbumQueryResult->AlbumQueryResult[0];

		// Get the collection of album objects	
		$albums = $result->ResultSet->Album;	
	}
	else if($search == "participants")
	{
		// Name
		if(isset($_GET['name']))
			$query->Name = $_GET['name']; 		
	
		// Date born
		if(isset($_GET['dateBorn']))
			$query->DateBorn = array('Name'=>$_GET['dateBorn']); 	
	
		// Date died
		if(isset($_GET['dateDied']))
			$query->DateBorn = array('Name'=>$_GET['dateDied']); 	
	
		// Activity
		if(isset($_GET['activity']))
			$query->Activity = array('Name'=>$_GET['activity']); 	

		// Retrieval depth
		$query->RetrievalDepth = "Names";	
			
		// Construct an array of query objects
		$queries = array($query);

		// Set the parameters of the function that we are going to request 
		$params = array(
			'appID'=>$applicationID,
			'appKey'=>$applicationKey,
			'queries'=>$queries
		);		
		
		// Issue the request to the Decibel Web Service
		$result = $client->ParticipantQuery($params);

		// Return the collection of participant objects
		$result = $result->ParticipantQueryResult->ParticipantQueryResult[0];
		
		// Get the collection of participant objects	
		$participants = $result->ResultSet->Participant;	
	}
	elseif($search == 'tracks') 
	{
		// Track title
		if(isset($_GET['trackTitle']))
			$query->Name = $_GET['trackTitle']; 		
	
		// Artist
		if(isset($_GET['artist']))
			$query->Performers = array(array('Name'=>$_GET['artist'])); 	
	
		// Album title
		if(isset($_GET['albumTitle']))
			$query->Album = array('Name'=>$_GET['albumTitle']); 	

		// Retrieval depth
		$query->RetrievalDepth = "Names";	
			
		// Construct an array of query objects
		$queries = array($query);

		// Set the parameters of the function that we are going to request 
		$params = array(
			'appID'=>$applicationID,
			'appKey'=>$applicationKey,
			'queries'=>$queries
		);		
		
		// Issue the request to the Decibel Web Service
		$result = $client->TrackQuery($params);

		// Return the collection of tracks objects
		$result = $result->TrackQueryResult->TrackQueryResult[0];

		// Get the collection of track objects	
		$tracks = $result->ResultSet->Track;	
	}
	elseif($search == 'works') 
	{
		// Name
		if(isset($_GET['name']))
			$query->Name = $_GET['name']; 		
	
		// Catalogue
		if(isset($_GET['catalogue']))
			$query->Catalogue = $_GET['catalogue']; 	
	
		// Composers
		if(isset($_GET['composers']))
			$query->Composers = array(array('Name'=>$_GET['composers'])); 

		// Retrieval depth
		$query->RetrievalDepth = "Names";	
			
		// Construct an array of query objects
		$queries = array($query);

		// Set the parameters of the function that we are going to request 
		$params = array(
			'appID'=>$applicationID,
			'appKey'=>$applicationKey,
			'queries'=>$queries
		);		
		
		// Issue the request to the Decibel Web Service
		$result = $client->WorkQuery($params);

		// Return the collection of work objects
		$result = $result->WorkQueryResult->WorkQueryResult[0];
		
		// Get the collection of work objects	
		$works = $result->ResultSet->Work;		
	}

	// Set the result count
	$resultCount = $result->ResultCount;   
		
	// Store the QueryResultID
	$_SESSION['queryResultID'] = stripslashes($result->QueryResultID);
}
else
{
	// Set the parameters of the function that we are going to request 
	$params = array(
		'appID'=>$applicationID,
		'appKey'=>$applicationKey,
		'queryResultID'=>$_SESSION['queryResultID'],
		'pageNum'=>$page-1
	);		
		
	if($search == 'albums')
	{
		// Issue the request to the Decibel Web Service
		$result = $client->AlbumPage($params);	

		// Return the collection of album objects
		$result = $result->AlbumPageResult;

		// Get the collection of album objects	
		$albums = $result->ResultSet->Album;	
	}
	else if($search == 'participants')
	{
		// Issue the request to the Decibel Web Service
		$result = $client->ParticipantPage($params);	

		// Return the collection of album objects
		$result = $result->ParticipantPageResult;

		// Get the collection of album objects	
		$participants = $result->ResultSet->Participant;	
	}	
	else if($search == 'tracks')
	{
		// Issue the request to the Decibel Web Service
		$result = $client->TrackPage($params);	

		// Return the collection of album objects
		$result = $result->TrackPageResult;

		// Get the collection of album objects	
		$tracks = $result->ResultSet->Track;	
	}	
	else if($search == 'works')
	{
		// Issue the request to the Decibel Web Service
		$result = $client->WorkPage($params);	

		// Return the collection of album objects
		$result = $result->WorkPageResult;

		// Get the collection of album objects	
		$works = $result->ResultSet->Work;	
	}		
	
	// Set the result count
	$resultCount = $result->ResultCount;   	
}

// Close and write session
session_write_close();

// Construct the Flexigrid JSON data array
$jsonData = array('page'=>$page,'total'=>stripslashes($resultCount),'rows'=>array());	

if($resultCount == 0) {
	echo json_encode($jsonData);
	exit();
}

$count = 1;
if($search == "albums")
{	
	// Construct the data rows
	foreach ($albums as $album) {
		$publications = $album->Publications->Publication;
			$entry = array('id'=>(int)$count,
				'cell'=>array(
						'id'=>stripslashes($album->ID),
						'index'=>(int)$count,
						'name'=>stripslashes($album->Name),
						'artists'=>stripslashes($album->Artists),
						'label'=>stripslashes($publications[0]->Publisher->Name),
						'length'=>stripslashes(formatTime($album->TotalSeconds)),
						'trackCount'=>stripslashes($album->TrackCount)
				),
		);
		$jsonData['rows'][] = $entry; 
		$count++;
	}
}
else if($search == "participants")
{
	foreach ($participants as $participant) {
			$entry = array('id'=>(int)$count,
				'cell'=>array(
						'id'=>stripslashes($participant->ID),
						'index'=>(int)$count,
						'name'=>stripslashes($participant->Name),
						'gender'=>stripslashes($participant->Gender),
						'dateBorn'=>stripslashes($participant->DateBorn->Name),
						'dateDied'=>stripslashes($participant->DateDied->Name)
				),
		);
		$jsonData['rows'][] = $entry; 
		$count++;
	}		
}	
else if($search == "tracks")
{
	foreach ($tracks as $track) {
			$entry = array('id'=>(int)$count,
				'cell'=>array(
						'trackID'=>stripslashes($track->ID),
						'albumID'=>stripslashes($track->AlbumID),
						'index'=>(int)$count,
						'name'=>stripslashes($track->Name),
						'artists'=>stripslashes($track->Artists),
						'number'=>stripslashes($track->SequenceNo),
						'length'=>stripslashes(formatTime($track->TotalSeconds))
				),
		);
		$jsonData['rows'][] = $entry; 
		$count++;
	}		
}	
else if($search == "works")
{
	foreach ($works as $work) {
			$entry = array('id'=>(int)$count,
				'cell'=>array(
						'id'=>stripslashes($work->ID),
						'index'=>(int)$count,
						'name'=>stripslashes($work->Name),
						'composers'=>stripslashes($work->Composers)
				),
		);
		$jsonData['rows'][] = $entry; 
		$count++;
	}		
}		

// Encode the array and output the result
echo json_encode($jsonData);	
?>