<?php
/**
	Issues a request to the Decibel SOAP API for autocomplete suggestions 
	based on the search term and dictionary. The results are encoded in JSON
	for use with the jQuery Autocomplete UI component.
	
	Usage example:
	autocomplete.php?term=volume&dictionary=Albums
	
	@version 1.0
	@modified 19/10/2012
*/	

include 'util.php';
include 'admin.php';

// Retrieve the autocomplete dictionary to search
$dictionary = trim(strip_tags($_GET['dictionary'])); 

// Retrieve the search term that jQuery autocomplete sends
$term = trim(strip_tags($_GET['term'])); 

// Create the SoapClient instance 
$client = new SoapClient($apiAddress, array('features' => SOAP_SINGLE_ELEMENT_ARRAYS));

// Set the parameters of the function that we are going to request 
$params = array(
	'text'=>$term,
	'dictionary'=>$dictionary,
	'limit'=>5,
	'languageDialectID'=>NULL
);

// Issue the request to the Decibel Web Service
$result = $client->AutoComplete($params);

// Build an array of suggestions in jQuery Autocomplete format
$suggestions = $result->AutoCompleteResult->$dictionary->Suggestion;
foreach ($suggestions as $suggestion) {
	$row['value'] = stripslashes($suggestion->SuggestionValue);
	$row['id'] = (int)$suggestion->ItemID;
	$row_set[] = $row; 
}

// Encode the array and output the result
echo json_encode($row_set); 
?>